
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Manage Contacts - general purpose.</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">


        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url() ?>sbadmin2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?= base_url() ?>sbadmin2/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?= base_url() ?>sbadmin2/dist/css/sb-admin-2.css" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link href="<?= base_url() ?>sbadmin2/vendor/morrisjs/morris.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="<?= base_url() ?>sbadmin2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <!-- DataTables CSS -->
        <link href="<?= base_url() ?>sbadmin2/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
        <!-- DataTables Responsive CSS -->
        <link href="<?= base_url() ?>sbadmin2/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    </head>
    <body>

        <?php
        echo '<div class="container">';
        if (isset($admin_id) && $admin_id > 0) {
            echo '<nav class="navbar navbar-default"  align="right">
            <div class="container-fluid">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="' . base_url("index.php/p_list") . '">List</a></li>
                    <li><a href="' . base_url("index.php/p_list/add_person_form") . '">Add Person</a></li>
                    <li><a href="' . base_url("index.php/admin/logout") . '">Logout</a></li> 
                </ul>
            </div>
        </nav>';
        }