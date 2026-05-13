<?php
    require_once 'connector.php';

    function getUser($conn, $username, $password){
        $sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();

        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

?>