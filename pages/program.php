<?php
    require_once '../model/program.php';
    require_once '../model/connector.php';
    if($_SERVER["REQUEST_METHOD"] == 'POST'){

        if(isset($_POST['addProgram'])){
            $add = addProgram($conn, $_POST);
            if($add){
                echo "
                    <script>
                        alert('Program Added Successfully.')
                        window.location.href = '../views/medicalrecord.php?page=addProgram'
                    </script>
                ";
            }else{
                echo "
                    <script>
                        alert('Error Adding. Please try again.')
                        window.location.href = '../views/medicalrecord.php?page=addProgram'
                    </script>
                ";
            }
        }

    }
?>