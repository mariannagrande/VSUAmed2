<?php
    require_once '../model/students.php';
    require_once '../model/connector.php';

    if ($_SERVER["REQUEST_METHOD"] === 'POST') {

        if(isset($_POST['addStudent'])){
            $add = addStdnt($conn, $_POST);
        
        }

    }

?>