<?php
    require_once '../model/connector.php';
    require_once '../model/students.php';

    function getStudentsByYearProgram($pr, $yr){
        $main = getStudentsByYear($pr, $yr);
        return $main;
    }

    function getStudent($id){
        $record = getStudentById($id);
        return $record;
    }

    function getStudentVisits($id){
        $record = getRecentVisits($id);
        return $record;
    }

?>