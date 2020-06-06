<?php

include_once('db.config.php');

class Data
{
    function getAllData() {
        $sql = "SELECT * FROM tb_trichdan";
    }

    function getRow($keyword) {
        global $conn;
        $row = 0;
        $sql = "SELECT * FROM tb_trichdan WHERE keyword LIKE CONCAT('%',CONVERT('$keyword', BINARY),'%')";
        //echo $sql;
        $result = mysqli_query($conn, $sql);
        if ($result)
            $row = mysqli_fetch_array($result);
        return $row;
    }
}
