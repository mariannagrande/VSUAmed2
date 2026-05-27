<?php
    require_once '../model/students.php';
    require_once '../model/connector.php';
    session_start();

    if ($_SERVER["REQUEST_METHOD"] === 'POST') {

        if(isset($_POST['addRecord'])){
            $stud = getStudentByNumber($_POST);
            if($stud){
                $v_id = addVisitInfo($stud, $_POST);
                $add = addPrescriptInfo($v_id, $_POST);
                if($add){
                    echo "
                        <script>
                            alert('Record Added Successfully')
                            window.location.href = '../views/addRecord.php'
                        </script>
                    ";
                }
            }else{
                echo "
                    <script>
                        alert('No Student with number " . $_POST['stud_number'] . "')
                        window.location.href = '../views/addRecord.php'
                    </script>
                ";
            }
        }

    }

?>