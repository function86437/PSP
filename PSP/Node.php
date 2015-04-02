<?php
    /**
    *   This is Node class for Single-Linked List
    *   @version 2.0
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
