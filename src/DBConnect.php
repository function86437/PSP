<?php
    /**
    *   Connect to Database by PDO
    *   @version 3.0
    *   @auther Banana
    **/
    class DBConnect {

        //connection obj
        public $con = null;

        //construct
        function DBConnect() {
            $this->connect();
        }

        //destruct
        function _destruct() {
            $this->close();
        }


        //connect to db
        function connect() {

            //import db variables
            require_once __DIR__ . '/DBConfig.php';

            //connecting to db
            try{

                //new PDO obj
                $this->con = new PDO(DB_SERVER_CONFIG, DB_USER, DB_PASSWD);
            } catch (PDOException $e) {
                printf('DatabaseError: %s', $e->getMessange());
            }

        }

        /**
        *   Query
        *   @param $sql query command
        *   @param $exepara query data
        *   @return $stmt
        **/
        public function query($sql, $exepara) {
            //Inorder to avoid sql injection, pdo send twice times for one transaction
            //First is command
            $stmt = $this->con->prepare($sql);

            //Second is data
            $stmt->execute($exepara);

            return $stmt;
        }


        /**
        *   Query without data
        *   @param $sql query command
        *   @param $stmt
        **/
        public function queryWithoutData($sql) {

            $stmt = $this->con->prepare($sql);

            $stmt->execute();

            return $stmt;
        }

        //close db connection
        private function close() {

            $this->con = null;
        }
    }
?>
