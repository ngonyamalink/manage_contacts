
<div class="container">
    <?php
    
    //form to update a person record
    
    echo form_open(base_url("index.php/p_list/update_person"));
    echo '<div class="form-group">';
    echo form_label("First Name");
    echo '</div>';
    echo '<div class="form-group">';
    echo form_input(array("name" => "firstname", "type" => "text", "value" => $person['firstname'], 'class' => 'form-control'));
    echo '</div>';
    echo '<div class="form-group">';
    echo form_label("Surname");
    echo '</div>';
    echo '<div class="form-group">';
    echo form_input(array("name" => "surname", "type" => "text", "value" => $person['surname'], 'class' => 'form-control'));
    echo '</div>';
    echo '<div class="form-group">';
    echo form_label("Mobile");
    echo '</div>';
    echo '<div class="form-group">';
    echo form_input(array("name" => "mobile", "type" => "text", "value" => $person['mobile'], 'class' => 'form-control'));
    echo '</div>';

    echo '<div class="form-group">';
    echo form_label("Date Of Birth");
    echo '</div>';
    echo '<div class="form-group">';
    echo form_input(array("name" => "dateofbirth", "type" => "text", "value" => $person['dateofbirth'], 'class' => 'form-control'));
    echo '</div>';
    echo '<div class="form-group">';
    echo form_label("Email");
    echo '</div>';
    echo '<div class="form-group">';
    echo form_input(array("name" => "email", "type" => "text", "value" => $person['email'], 'class' => 'form-control'));
    echo '</div>';
    echo '<div class="form-group">';
    echo form_input(array("name" => "person_id", "type" => "hidden", "value" => $person_id));
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
    echo form_dropdown("language_id", $a_language, $person['language_id'], 'class="form-control"');
    echo '</div>';
    echo '<div class="form-group">';
    echo form_submit("submit", "Update Person", 'class="btn btn-lg btn-primary btn-block"');
    echo '</div>';
    echo form_close();
    ?>


</div>