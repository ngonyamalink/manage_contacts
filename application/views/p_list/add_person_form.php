
<div class="container">
    <?php
    //form to add a person record
    
    echo form_open(base_url("index.php/p_list/add_person"));
    echo '<div class="form-group">';
    echo form_label("First Name");
    echo '</div>';
    echo '<div class="form-group">';
    echo form_input(array("name" => "firstname", "type" => "text", 'class' => 'form-control'));
    echo '</div>';
    echo '<div class="form-group">';
    echo form_label("Surname");
    echo '</div>';
    echo '<div class="form-group">';
    echo form_input(array("name" => "surname", "type" => "text", 'class' => 'form-control'));
    echo '</div>';
    echo '<div class="form-group">';
    echo form_label("Mobile");
    echo '</div>';
    echo '<div class="form-group">';
    echo form_input(array("name" => "mobile", "type" => "text", 'class' => 'form-control'));
    echo '</div>';
    echo '<div class="form-group">';
    echo form_label("Date Of Birth");
    echo '</div>';
    echo '<div class="form-group">';
    echo form_input(array("name" => "dateofbirth", "type" => "text", 'class' => 'form-control', 'placeholder' => '2000-02-09',));
    echo '</div>';

    echo '<div class="form-group">';
    echo form_label("Email<br/>");
    echo '</div>';
    echo '<div class="form-group">';
    echo form_input(array("name" => "email", "type" => "text", 'class' => 'form-control'));
    echo '</div>';

    echo '<div class="form-group">';
    echo form_label("Language");

    echo '</div>';
    $languages = get_languages();
    $a_language = array();
    foreach ($languages as $l) {
        $a_language[$l['language_id']] = $l['language_name'];
    }

    echo '<div class="form-group">';

    echo form_dropdown('language_id', $a_language, 1, 'class="form-control"');

    echo '</div>';
    echo '<div class="form-group">';

    echo '</div>';
    echo '<div class="form-group">';
    echo form_submit("submit", "Add Person", 'class="btn btn-lg btn-primary btn-block"');

    echo '</div>';
    echo form_close();
    ?>

</div>