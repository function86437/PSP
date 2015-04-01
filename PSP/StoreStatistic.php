<?php

    if(isset($_POST['input']) && isset($_POST['size'])){

        $input = $_POST['input'];
        $count = 0;
        $size = $_POST['size'];

        require_once __DIR__ . '/SinglelinkedList.php';

        $single = new SinglelinkedList();
        $caculate = new CaculateMnS();

        while( $count < $size) {
            $single->addbyIndex($input[$count]);
        }

        $mean = $caculate->caculateMean($single, $size);
        $standard = $caculate->caculateStandard($single, $size, $mean);

        require_once __DIR__ . '/DBConnect.php';

        //new PDO connection
        $dbcon = new DBConncet();

        $sql = "INSERT INTO Mean_standard(mean,standard) VALUES (?, ?)";

        $resultInsert = $dbcon->query($sql, array($mean, $standard));


        $sql = "INSERT INTO Real_number(content) VALUES (?)";



    } else {
        echo 'Data not posted';
    }




?>
