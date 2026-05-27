<?php
    require_once 'connector.php';

    function getPrograms(){
        global $conn;

        $sql = "SELECT * FROM program";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();

        $programs = [];

        while($row = $result->fetch_assoc()){
            $programs[] = $row;
        }
        return $programs;
    }

    function getYear(){
        global $conn;

        $sql = "SELECT * FROM year_level";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();

        $year = [];

        while($row = $result->fetch_assoc()){
            $year[] = $row;
        }
        return $year;
    }

    function getSection(){
        global $conn;

        $sql = "SELECT * FROM section";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();

        $section = [];

        while($row = $result->fetch_assoc()){
            $section[] = $row;
        }
        return $section;

    }

    function getVisitHistory(){
        global $conn;

        $sql = "SELECT * FROM visits AS v
                INNER JOIN prescription AS p ON p.visit_id = v.visit_id
                INNER JOIN students AS s ON s.student_id = v.student_id
                INNER JOIN admin AS a ON a.staff_id = v.staff_id
                ORDER BY v.created_at DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();

        $section = [];

        while($row = $result->fetch_assoc()){
            $section[] = $row;
        }
        return $section;

    }

?>