<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customers extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('smarty_acl');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Customers_model');
        $this->load->model('History_model');

	    $this->load->library('datatables');
        $this->logged_in();
        $this->smarty_acl->authorized();
    }

    protected function logged_in()
    {
        if (!$this->smarty_acl->logged_in()) {
            return redirect('admin/login');
        }
    }

    public function index()
    {
        $data['title'] = 'Daftar Customer';
        $this->load->view('admin/customers/customers_list', $data);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Customers_model->json();
    }

    public function read($id) 
    {
        $row = $this->Customers_model->get_by_id($id);
        if ($row) {
            $data = array(
		        'customerNumber' => $row->customerNumber,
		        'customerName' => $row->customerName,
		        'contactLastName' => $row->contactLastName,
		        'contactFirstName' => $row->contactFirstName,
		        'phone' => $row->phone,
		        'addressLine1' => $row->addressLine1,
		        'addressLine2' => $row->addressLine2,
		        'city' => $row->city,
		        'status' => $row->status,
		        'state' => $row->state,
		        'postalCode' => $row->postalCode,
		        'country' => $row->country,
		        'salesRepEmployeeNumber' => $row->salesRepEmployeeNumber,
		        'creditLimit' => $row->creditLimit,
	        );
            $data['title'] = $row->customerName;
            $this->load->view('admin/customers/customers_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('customers'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('customers/create_action'),
	        'customerNumber' => set_value('customerNumber'),
	        'customerName' => set_value('customerName'),
	        'contactLastName' => set_value('contactLastName'),
	        'contactFirstName' => set_value('contactFirstName'),
	        'phone' => set_value('phone'),
	        'addressLine1' => set_value('addressLine1'),
	        'addressLine2' => set_value('addressLine2'),
	        'city' => set_value('city'),
		    'status' => set_value('state', $row->status),
	        'state' => set_value('state'),
	        'postalCode' => set_value('postalCode'),
	        'country' => set_value('country'),
	        'salesRepEmployeeNumber' => set_value('salesRepEmployeeNumber'),
	        'creditLimit' => set_value('creditLimit'),
	    );
        $this->load->view('admin/customers/customers_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		        'customerName' => $this->input->post('customerName',TRUE),
		        'contactLastName' => $this->input->post('contactLastName',TRUE),
		        'contactFirstName' => $this->input->post('contactFirstName',TRUE),
		        'phone' => $this->input->post('phone',TRUE),
		        'addressLine1' => $this->input->post('addressLine1',TRUE),
		        'addressLine2' => $this->input->post('addressLine2',TRUE),
		        'city' => $this->input->post('city',TRUE),
		        'status' => set_value('state', $row->status),
		        'state' => $this->input->post('state',TRUE),
		        'postalCode' => $this->input->post('postalCode',TRUE),
		        'country' => $this->input->post('country',TRUE),
		        'salesRepEmployeeNumber' => $this->input->post('salesRepEmployeeNumber',TRUE),
		        'creditLimit' => $this->input->post('creditLimit',TRUE),
	        );

            $this->Customers_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('customers'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Customers_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('customers/update_action'),
		        'customerNumber' => set_value('customerNumber', $row->customerNumber),
		        'customerName' => set_value('customerName', $row->customerName),
		        'contactLastName' => set_value('contactLastName', $row->contactLastName),
		        'contactFirstName' => set_value('contactFirstName', $row->contactFirstName),
		        'phone' => set_value('phone', $row->phone),
		        'addressLine1' => set_value('addressLine1', $row->addressLine1),
		        'addressLine2' => set_value('addressLine2', $row->addressLine2),
		        'city' => set_value('city', $row->city),
		        'status' => set_value('status', $row->status),
		        'state' => set_value('state', $row->state),
		        'postalCode' => set_value('postalCode', $row->postalCode),
		        'country' => set_value('country', $row->country),
		        'salesRepEmployeeNumber' => set_value('salesRepEmployeeNumber', $row->salesRepEmployeeNumber),
		        'creditLimit' => set_value('creditLimit', $row->creditLimit),
	        );
            $data['title'] = 'Update '. $row->customerName . ' Data';
            $this->load->view('admin/customers/customers_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('customers'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('customerNumber', TRUE));
        } else {
            $data = array(
                'customerName' => $this->input->post('customerName',TRUE),
                'contactLastName' => $this->input->post('contactLastName',TRUE),
                'contactFirstName' => $this->input->post('contactFirstName',TRUE),
                'phone' => $this->input->post('phone',TRUE),
                'addressLine1' => $this->input->post('addressLine1',TRUE),
                'addressLine2' => $this->input->post('addressLine2',TRUE),
                'city' => $this->input->post('city',TRUE),
                'status' => $this->input->post('status',TRUE),
                'state' => $this->input->post('state',TRUE),
                'postalCode' => $this->input->post('postalCode',TRUE),
                'country' => $this->input->post('country',TRUE),
                'salesRepEmployeeNumber' => $this->input->post('salesRepEmployeeNumber',TRUE),
                'creditLimit' => $this->input->post('creditLimit',TRUE),
            );

            $this->Customers_model->update($this->input->post('customerNumber', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('customers'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Customers_model->get_by_id($id);

        if ($row) {
            $this->Customers_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('customers'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('customers'));
        }
    }

    public function updateStatus() 
    {
        $jumlah_data = $this->input->post('jumUpdateStatus');
        $status = $this->input->post('status');
        $isiData = $this->input->post('isi');
        
        $result = 0;
        $namaCustomer = '';
        foreach($isiData as $row){
            $update = $this->Customers_model->update_status($row['customerNumber'], $status);
            if($update){
                $result++;
                $namaCustomer .=   "\r\n" . str_pad($result,2,"0",STR_PAD_LEFT) .". ". $row['customerName'].",";
            }
        }
        $isi = "[" . date('l, jS \of F Y - H:i:s') . "]  \r\n" .$this->smarty_acl->get_admin()['name'] . " mengubah status " . $result ." customer : \r\n " . $namaCustomer . "\r\n \r\n menjadi " . $status;
        insert_history('customer',$isi);
        
        $data['message'] = $isi;
        telegram_message($data);
        
        echo $result;
        
    }


    public function _rules() 
    {
        $this->form_validation->set_rules('customerName', 'customername', 'trim|required');
        $this->form_validation->set_rules('contactLastName', 'contactlastname', 'trim|required');
        $this->form_validation->set_rules('contactFirstName', 'contactfirstname', 'trim|required');
        $this->form_validation->set_rules('phone', 'phone', 'trim|required');
        $this->form_validation->set_rules('addressLine1', 'addressline1', 'trim|required');
        $this->form_validation->set_rules('addressLine2', 'addressline2', 'trim|required');
        $this->form_validation->set_rules('city', 'city', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_rules('state', 'state', 'trim|required');
        $this->form_validation->set_rules('postalCode', 'postalcode', 'trim|required');
        $this->form_validation->set_rules('country', 'country', 'trim|required');
        $this->form_validation->set_rules('salesRepEmployeeNumber', 'salesrepemployeenumber', 'trim|required');
        $this->form_validation->set_rules('creditLimit', 'creditlimit', 'trim|required|numeric');

        $this->form_validation->set_rules('customerNumber', 'customerNumber', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "customers.xls";
        $judul = "customers";
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
	xlsWriteLabel($tablehead, $kolomhead++, "CustomerName");
	xlsWriteLabel($tablehead, $kolomhead++, "ContactLastName");
	xlsWriteLabel($tablehead, $kolomhead++, "ContactFirstName");
	xlsWriteLabel($tablehead, $kolomhead++, "Phone");
	xlsWriteLabel($tablehead, $kolomhead++, "AddressLine1");
	xlsWriteLabel($tablehead, $kolomhead++, "AddressLine2");
	xlsWriteLabel($tablehead, $kolomhead++, "City");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");
	xlsWriteLabel($tablehead, $kolomhead++, "State");
	xlsWriteLabel($tablehead, $kolomhead++, "PostalCode");
	xlsWriteLabel($tablehead, $kolomhead++, "Country");
	xlsWriteLabel($tablehead, $kolomhead++, "SalesRepEmployeeNumber");
	xlsWriteLabel($tablehead, $kolomhead++, "CreditLimit");

	foreach ($this->Customers_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->customerName);
	    xlsWriteLabel($tablebody, $kolombody++, $data->contactLastName);
	    xlsWriteLabel($tablebody, $kolombody++, $data->contactFirstName);
	    xlsWriteLabel($tablebody, $kolombody++, $data->phone);
	    xlsWriteLabel($tablebody, $kolombody++, $data->addressLine1);
	    xlsWriteLabel($tablebody, $kolombody++, $data->addressLine2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->city);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);
	    xlsWriteLabel($tablebody, $kolombody++, $data->state);
	    xlsWriteLabel($tablebody, $kolombody++, $data->postalCode);
	    xlsWriteLabel($tablebody, $kolombody++, $data->country);
	    xlsWriteNumber($tablebody, $kolombody++, $data->salesRepEmployeeNumber);
	    xlsWriteNumber($tablebody, $kolombody++, $data->creditLimit);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=customers.doc");

        $data = array(
            'customers_data' => $this->Customers_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('customers/customers_doc',$data);
    }

}

/* End of file Customers.php */
/* Location: ./application/controllers/Customers.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-08-10 09:18:46 */
/* http://harviacode.com */
