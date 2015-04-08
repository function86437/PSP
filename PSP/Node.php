<?php
    /**
    *   This is Node class for Single-Linked List
    *   @version 3.0
    *   @auther Banana
    **/
    class Node {


        public $data;
        public $next;

        /**
        *   This constructor build node behind some node
        *   @param $data
        *   @param $next
        **/
        function Node($data) {

            $this->data = $data;

        }

    }
?>
