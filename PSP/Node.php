<?php
    /**
    *   This is Node class for Single-Linked List
    *   @version 0.1
    **/
    class Node {
        public $data = 0;
        public $next = null;

        /**
        *   This constructor build node at first time
        *   @param $data
        **/
        function _construct($data) {
            $this->data = $data;
        }

    }
?>
