<?php
    interface linkedList {
        /**
        *   List is empty or not
        *   return boolean
        **/
        public function isEmpty();

        /**
        *   Add node at head
        *   @param $R_number
        **/
        public function addFirst($R_number);

        /**
        *   Add node at last
        *   @param $R_number
        **/
        public function addLast($R_number);

        /**
        *   Get node by index
        *   @param $index
        **/
        public function get($index);

        /**
        *   Replace $R_number with current node data
        *   @param $R_number
        *   @param $index
        **/
        public function set($R_number, $index);

        /**
        *   remove first node
        **/
        public function removeFirst();

        /**
        *   remove last node
        **/
        public function removeLast();
    }
?>
