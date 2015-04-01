<?php
    /**
    *   This is Node class for Single-Linked List
    *   @version 0.1
    **/
    class Node {
        private $data = 0;
        private $next = null;

        /**
        *   This constructor build node at first time
        *   @param $data
        **/
        function _construct($data) {
            $this->$data = $data;
            $this->$next = null;
        }

        /**
        *   This constructor build node behind some node
        *   @param $data
        *   @param $next
        **/
        function _construct($data, $next) {
            $this->$data = $data;
            $this->$next =$next;
        }

    }
?>
