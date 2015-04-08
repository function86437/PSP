<?php
    require '/SinglelinkedList.php';
    require '/CaculateMnS.php';

    /**
    *   Get post from index.html and connect to DB
    *   @version 3.0
    *   @auther Banana
    **/

    if(isset($_POST['input']) && isset($_POST['size'])){

        $input = $_POST['input'];
        $count = 0;
        $size = $_POST['size'];
        echo $input[0];
        echo $size;

        $single = new SinglelinkedList();
        $caculate = new CaculateMnS();

        while( $count < $size) {
            $single->add($input[$count]);
            $count++;
        }
        $count = 0;

        $mean = $caculate->caculateMean($single, $size);
        $standard = $caculate->caculateStandard($single, $size, $mean);
        echo "<br>" . $mean . " " . $standard;
        require_once __DIR__ . '/DBConnect.php';

        //new PDO connection
        $dbcon = new DBConnect();
        echo "<br>" . ($dbcon->con != null?1:0);
        $sql = "INSERT INTO Mean_standard(mean,standard) VALUES (?, ?)";

        $resultInsert = $dbcon->query($sql, array($mean, $standard));

        $sql = "SELECT MAX(R_group) from mean_standard";

        $group = $dbcon->queryWithoutData($sql)->fetchColumn();

        $sql = "INSERT INTO Real_number(R_group, content) VALUES (?, ?)";
        while($count < $size){
            $resultInsert = $dbcon->query($sql,array($group, $single->getNode($count)->data));
            $count++;
        }

    } else {
        echo 'Data not posted';
    }



?>
