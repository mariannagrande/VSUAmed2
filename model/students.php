<?php
    require_once 'connector.php';
    function addStdnt($conn, $post){
        $stdnt_num = $post['num'];
        $sex = $post['sex'];
        $lname = $post['lname'];
        $fname = $post['fname'];
        $mname = $post['mname'];
        $bday = $post['bday'];
        $email = $post['email'];
        $contact = $post['cont'];

        $sqlCheck = "SELECT * FROM students WHERE student_number = ?";
        $stmtCheck = $conn->prepare($sqlCheck);
        $stmtCheck->bind_param("s", $stdnt_num);
        $stmtCheck->execute();

        $result = $stmtCheck->get_result();

        if ($result->num_rows > 0) {
            echo "
                <script>
                    alert('Student number already exists.')
                    window.location.href = '../views/manage_students.php?page=AddStudent'
                </script>
            ";
        } else {

            $sql = "INSERT INTO students
            (student_number, first_name, last_name, middle_name, birth_date, sex, contact_number, stud_email)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($sql);

            $stmt->bind_param(
                "ssssssss",
                $stdnt_num,
                $fname,
                $lname,
                $mname,
                $bday,
                $sex,
                $contact,
                $email
            );

            $stmt->execute();

            echo "
                <script>
                    alert('Student added successfully.')
                    window.location.href = '../views/manage_students.php?page=AddStudent'
                </script>
            ";
        }
    }
?>