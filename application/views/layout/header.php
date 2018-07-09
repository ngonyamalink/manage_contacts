
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Manage Contacts - general purpose.</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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