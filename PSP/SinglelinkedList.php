<?php
    /**
    *   This class implements interface of Single-Linked List .
    *   @version 0.1
    **/
    class SinglelinkedList {

        //total size
        private $size = 0;

        //first node
        private $head = null;

        /**
        *   Add node behind the head node
        *   @param $R_number This is real number which user input
        **/
        private  function addFirst($R_number) {
            $head = new Node($R_number, $head);
        }

        /**
        *   Add node behind some node
        *   @param $R_number This is real number which user input
        *   @param $node Node before the one you want to insert
        **/
        private function addAfter($R_number, $node) {
            $node->$next = new Node($R_number, $node->$next);
        }

        /**
        *   Remove first node
        **/
        private function removeFirst() {
            $head->$next = $head;
        }

        /**
        *   Remove node before node
        *   @param $node Node before the one you want to insert
        **/
        private function removeAfter($node) {
            $temp = $node->$next;
            $node->$next = $temp->$next;
            return $temp;
        }

        /**
        *   Store all nodes one by one in $str
        *   @return $str
        **/
        public function toString() {
            $temp = ($head == null ? null : $head);
            $str = null;
            while($temp != null) {
                $str += $head->$data;
                if($temp->$next != null) {
                    $str += ' -> ';
                    $temp = $temp->$next;
                }
            }
            return $str;
        }

        /**
        *   Get specific node by index
        *   @param $index
        **/
        private function getNode($index) {
            $temp = $head;
            for( $i = 1; $i < $index; $i++) {
                $temp = $temp->$next;
            }
            return $temp;
        }

        /**
        *   Get specific node by index
        *   @param $index
        **/
        public function get($index) {
            if($index < 0 || $index >= $size){
                return -1;
            }
            return getNode($index);
        }

        /**
        *   Replace node with new value
        *   @param index
        *   @return $oldValue
        **/
        public function set($index, $newValue) {
            if($index < 0 || $index >= $size){
                return -1;
            }
            $temp = getNode($index);
            $oldValue = $temp->$data;
            $temp->$data = $newValue;
            return $oldValue;
        }

        /**
        *   Add node by index
        *   @param $index
        *   @param $item
        **/
        public function add($index, $item) {
            if($index < 0 || $index >= $size){
                return -1;
            }
            if($index == 0) {
                addFirst($item);
            } else {
                $temp = getNode($index - 1);
                addAfter($item, $temp);
            }
            $size++;
        }

        /**
        *   Add node at last position
        *   @param $item
        *   @return $boo true|false
        **/
        public function add($item) {
            if($size == 0) {
                addFirst($item);
            }
            $temp = getNode($size -1);
            $temp->$next = addAfter($item, $temp->$next);
            $size++;
            return true;
        }

        /**
        *   Remove node by index
        *   @param $index
        *   @return $removed
        **/
        public function remove($index) {
            if($index < 0 || $index >= $size){
                return -1;
            }
            $temp = getNode($index - 1);
            $removed = $temp->$next;
            $temp->$next = $removed->$next;
            return $removed;
        }

        /**
        *   Remove the last one
        *   @return temp
        **/
        public function remove() {
            if($size == 0) {
                return -1;
            } else if($size == 1)  {
                $temp = removeFirst();
            } else {
                $temp = removeAfter(getNode($size -1));
            }
            $size--;
            return $temp;
        }
    }
?>
