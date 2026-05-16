<?php
    require_once 'connector.php';

    function addProgram($conn, $post){
        $name = $post['prog_name'];
        $code = $post['code'];
        $sql = "INSERT INTO program (program_code, program_name) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $code, $name);
        $res =$stmt->execute();
        return $res;
    }

?>