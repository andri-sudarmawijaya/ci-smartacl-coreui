<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class History extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('History_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('history/history_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->History_model->json();
    }

    public function read($id) 
    {
        $row = $this->History_model->get_by_id($id);
        if ($row) {
            $data = array(
		'history_id' => $row->history_id,
		'history_tabel' => $row->history_tabel,
		'history_tabel_id' => $row->history_tabel_id,
		'history_detail' => $row->history_detail,
		'history_user_name' => $row->history_user_name,
		'history_time' => $row->history_time,
	    );
            $this->load->view('history/history_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('history'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('history/create_action'),
	        'history_id' => set_value('history_id'),
	        'history_tabel' => set_value('history_tabel'),
	        'history_tabel_id' => set_value('history_tabel_id'),
	        'history_detail' => set_value('history_detail'),
	        'history_user_name' => set_value('history_user_name'),
	        'history_time' => set_value('history_time'),
	);
        $this->load->view('history/history_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		    'history_tabel' => $this->input->post('history_tabel',TRUE),
		    'history_tabel_id' => $this->input->post('history_tabel_id',TRUE),
		    'history_detail' => $this->input->post('history_detail',TRUE),
		    'history_user_name' => $this->input->post('history_user_name',TRUE),
		    'history_time' => $this->input->post('history_time',TRUE),
	    );

            $this->History_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('history'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->History_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('history/update_action'),
		        'history_id' => set_value('history_id', $row->history_id),
		        'history_tabel' => set_value('history_tabel', $row->history_tabel),
		        'history_tabel_id' => set_value('history_tabel_id', $row->history_tabel_id),
		        'history_detail' => set_value('history_detail', $row->history_detail),
		        'history_user_name' => set_value('history_user_name', $row->history_user_name),
		        'history_time' => set_value('history_time', $row->history_time),
	    );
            $this->load->view('history/history_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('history'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('history_id', TRUE));
        } else {
            $data = array(
		'history_tabel' => $this->input->post('history_tabel',TRUE),
		'history_tabel_id' => $this->input->post('history_tabel_id',TRUE),
		'history_detail' => $this->input->post('history_detail',TRUE),
		'history_user_name' => $this->input->post('history_user_name',TRUE),
		'history_time' => $this->input->post('history_time',TRUE),
	    );

            $this->History_model->update($this->input->post('history_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('history'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->History_model->get_by_id($id);

        if ($row) {
            $this->History_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('history'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('history'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('history_tabel', 'history tabel', 'trim|required');
	$this->form_validation->set_rules('history_tabel_id', 'history tabel id', 'trim|required');
	$this->form_validation->set_rules('history_detail', 'history detail', 'trim|required');
	$this->form_validation->set_rules('history_user_name', 'history user name', 'trim|required');
	$this->form_validation->set_rules('history_time', 'history time', 'trim|required');

	$this->form_validation->set_rules('history_id', 'history_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "history.xls";
        $judul = "history";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "History Tabel");
	xlsWriteLabel($tablehead, $kolomhead++, "History Tabel Id");
	xlsWriteLabel($tablehead, $kolomhead++, "History Detail");
	xlsWriteLabel($tablehead, $kolomhead++, "History User Name");
	xlsWriteLabel($tablehead, $kolomhead++, "History Time");

	foreach ($this->History_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->history_tabel);
	    xlsWriteNumber($tablebody, $kolombody++, $data->history_tabel_id);
	    xlsWriteLabel($tablebody, $kolombody++, $data->history_detail);
	    xlsWriteLabel($tablebody, $kolombody++, $data->history_user_name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->history_time);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=history.doc");

        $data = array(
            'history_data' => $this->History_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('history/history_doc',$data);
    }

}

/* End of file History.php */
/* Location: ./application/controllers/History.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-08-11 04:16:13 */
/* http://harviacode.com */
