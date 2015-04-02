<?php

    if(isset($_POST['input']) && isset($_POST['size'])){

        $input = $_POST['input'];
        $count = 0;
        $size = $_POST['size'];

        require_once __DIR__ . '/SinglelinkedList.php';
        require_once __DIR__ . '/CaculateMnS.php';

        $single = new SinglelinkedList();
        $caculate = new CaculateMnS();

        while( $count < $size) {
            $single->add($input[$count]);
        }

        $mean = $caculate->caculateMean($single, $size);
        $standard = $caculate->caculateStandard($single, $size, $mean);

        require_once __DIR__ . '/DBConnect.php';

        //new PDO connection
        $dbcon = new DBConnect();

        $sql = "INSERT INTO Mean_standard(mean,standard) VALUES (?, ?)";

        $resultInsert = $dbcon->query($sql, array($mean, $standard));


        $sql = "INSERT INTO Real_number(content) VALUES (?)";



    } else {
        echo 'Data not posted';
    }




?>
