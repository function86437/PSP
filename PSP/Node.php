<?php
    /**
    *   This is Node class for Single-Linked List
    *   @version 2.0
    **/
    class Node {
<<<<<<< HEAD

        public $data;
        public $next;

        /**
        *   This constructor build node behind some node
        *   @param $data
        *   @param $next
        **/
        function Node($data) {
=======
        public $data = 0;
        public $next = null;

        /**
        *   This constructor build node at first time
        *   @param $data
        **/
        function _construct($data) {
>>>>>>> origin/oldVersion
            $this->data = $data;
        }

    }
?>
