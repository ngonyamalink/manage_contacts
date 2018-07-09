<?php
//displaying the records of attribute person

if (isset($person_list) && sizeof($person_list) > 0) {
    echo "<table class='table' width=100%> ";
    echo "<tr> <th>Firstname</th><th>Surname</th><th>Mobile</th><th>Date Of Birth</th><th>Email</th><th>Language</th></tr>";
    foreach ($person_list as $p_l) {
        echo "<tr>";
        echo "<td>" . $p_l['firstname'] . "</td>";
        echo "<td>" . $p_l['surname'] . "</td>";
        echo "<td>" . $p_l['mobile'] . "</td>";
        echo "<td>" . $p_l['dateofbirth'] . "</td>";
        echo "<td>" . $p_l['email'] . "</td>";
        echo "<td>" . $p_l['language_name'] . "</td>";
        echo "<td><a href=" . base_url("index.php/p_list/update_person_form/$p_l[person_id]") . ">Edit</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p align=center>No records yet</a>";
}

 
