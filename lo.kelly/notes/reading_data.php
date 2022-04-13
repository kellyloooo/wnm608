<?php

include "../lib/php/function.php";


$notes_object = file_get_json("notes.json");
$users_array = file_get_json("../data/users.json");

// print_p($notes);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include "../parts/meta.php";?>
    <title>Reading Data</title>
</head>
<body>

<?php include "../parts/nav.php";?>

    <div class="container" id="productitem">
        <div class="card soft">
            <h2>Notes</h2>

            <?php
            
            for($i=0;$i<count($notes_object->notes);$i++){
                echo "<li>{$notes_object->notes[$i]}</li>";
            }
            
            ?>

         
        </div>

        <div class="card soft">
            <h2>Users</h2>

            <?php
            
            for($i=0;$i<count($users_array);$i++){
                echo "<li>
                <strong>{$users_array[$i]->name}</strong>
                <span>{$users_array[$i]->type}</span>
                </li>";
            }
            
            ?>

         
        </div>
    </div>
</body>
</html>