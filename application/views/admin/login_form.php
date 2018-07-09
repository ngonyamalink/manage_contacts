<h3 align="center">Admin Login</h3>
<br/><br/>
<div class="container">
    <?php
    //admin login form

    echo form_open(base_url("index.php/admin/auth_admin"));

    echo '<div class="form-group">';
    echo form_input(array("name" => "username", "type" => "text", 'class' => 'form-control'));
    echo '</div>';
    echo '<div class="form-group">';
    echo form_input(array("name" => "password", "type" => "password", 'class' => 'form-control'));
    echo '</div>';
    echo form_submit("submit", "Login", 'class="btn btn-lg btn-primary btn-block"');
    echo form_close();
    ?>
</div>