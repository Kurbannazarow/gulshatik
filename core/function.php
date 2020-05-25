<?php
    require_once './core/config.php';
    function connect(){
        $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
        mysqli_set_charset($conn, "utf8");

        if(!$conn) {
            die("Connection failed: ". mysqli_connect_error());
        }

        return $conn;
    }

    function select ($conn) {
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        $arr = array();

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $arr[]=$row;
            }
        }

        return $arr;
    }

    function generateHash($length = 5) {
        $symbol = 'qwertyuioplaksjdhfgzxvcbnm1234567890QWERTYUIOKJFHGDCASZXBMNKHPL';
        $code = "";

        for ($i=0; $i < $length; $i++) { 
            $code .= $symbol[rand(0, strlen($symbol)-1)];
        }

        return $code;
    }