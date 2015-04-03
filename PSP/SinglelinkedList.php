<?php
    require 'Node.php'
    /**
    *   This class implements interface of Single-Linked List .
    *   @version 0.1
    **/
    class SinglelinkedList {

        //total size
        private $size;

        //first node
        private $head;

        //last node
        private $last;

        function SinglelinkedList() {
            $this->size = 0;
            $this->head = null;
            $this->last = null;
        }

        /**
        *   Add node behind the head node
        *   @param $R_number This is real number which user input
        **/
        private function addFirst($R_number) {
            $node = new Node($R_number);
            $node->next = $this->head;
            $this->head = $node;

            if($this->last == null) {
               $this->last = $node;
            }
            $this->size++;
        }

        /**
        *   Add node at last
        *   @param $R_number This is real number which user input
        **/
        private function addLast($R_number) {

            if($this->head != null) {
                $node = new Node($R_number);
                $this->last->next = $node;
                $node->next = null;
                $this->last = $node;
            }

            $this->size++;
        }

        private function
    }
?>
