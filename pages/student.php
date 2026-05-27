<?php
    require_once '../model/students.php';
    require_once '../model/connector.php';
    session_start();

    if ($_SERVER["REQUEST_METHOD"] === 'POST') {

        if(isset($_POST['addStudent'])){
            $addstud = addStdnt($conn, $_POST);
            $Estud   = enrollStud($addstud, $_POST);
            if($Estud){
                echo "
                    <script>
                        alert('Student added successfully.')
                        window.location.href = '../views/manage_students.php?page=AddStudent'
                    </script>
                ";
            }
        }

        if(isset($_POST['searchStud'])){
            $prompt = $_POST['search'];
            $search = search($conn, $_POST);
            if(!empty($search)){
                $_SESSION['search_res'] = $search;
            }else{
                $_SESSION['search_error'] = "error";
            }
            header("Location: ../views/manage_students.php?pages=SearchStudent&&search=" . $prompt);
            exit();
        }

    }

?>