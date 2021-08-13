<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.12
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">

<head>
    <?php $this->load->view('_layouts/head'); ?>

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <?php $this->load->view('_layouts/header'); ?>

    <div class="app-body" id="pjax-container">
        <?php $this->load->view('_layouts/sidebar'); ?>
        <main class="main">
            <?php $this->load->view('_layouts/breadcrumb'); ?>
            <div class="container-fluid">
                <div class="animated fadeIn">

                <?php $this->load->view('_layouts/alerts'); ?>
                    <div class="card">
                        <form action="<?php echo $form_action; ?>" method="post">
                            <div class="card-header">
                                <div class="d-flex justify-content-between bd-highlight">
                                    <div class="p-2 bd-highlight">
                                        <h4 class="card-title mb-0"><?php echo $title; ?></h4>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <h5><?php echo isset($item) ? 'Edit' : 'Create'; ?> Admins</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" value="<?php echo $item->username ?? set_value('username'); ?>" placeholder="Username" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" value="<?php echo $item->email ?? set_value('email'); ?>" placeholder="Email" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" value="<?php echo $item->name ?? set_value('name'); ?>" placeholder="Name" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="<?php echo isset($item) ? 'Leave blank to do not change' : 'Password'; ?>" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="">-- SELECT --</option>
                                        <option value="active" <?php if (isset($item) && $item->status === 'active') {
                                                                    echo 'selected';
                                                                } ?>>Active</option>
                                        <option value="inactive" <?php if (isset($item) && $item->status === 'inactive') {
                                                                        echo 'selected';
                                                                    } ?>>Inactive</option>
                                        <option value="banned" <?php if (isset($item) && $item->status === 'banned') {
                                                                    echo 'selected';
                                                                } ?>>Banned</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between bd-highlight">
                                    <div class="p-2 bd-highlight">
                                        <button type="submit" class="btn btn-primary"><?php echo isset($item) ? 'Update' : 'Create'; ?></button>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <a href="<?php echo site_url('admin/users') ?>" class="btn btn-default">Batal</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </main>

        <?php $this->load->view('_layouts/aside'); ?>
    </div>
    <?php $this->load->view('_layouts/footer'); ?>
    <?php $this->load->view('_layouts/script'); ?>

    <script type="text/javascript">
        $(function() {
            $(document).ajaxComplete(function() {
                Pace.restart()
            });
            if ($.support.pjax) {
                $(document).pjax('a[data-pjax]', '#pjax-container')
            }
        });
    </script>
</body>

</html>