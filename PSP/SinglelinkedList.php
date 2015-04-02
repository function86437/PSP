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


        function SinglelinkedList() {
            $this->size = 0;
            $this->head = null;
        }
        /**
        *   Add node behind the head node
        *   @param $R_number This is real number which user input
        **/
        private function addFirst($R_number) {
            $node = new Node($R_number);
            $node->next = $head;
            $head = $node;
        }

        /**
        *   Add node behind some node
        *   @param $R_number This is real number which user input
        *   @param $node Node before the one you want to insert
        **/
        private function addAfter($R_number, $node) {

            $node->setNext(new Node($R_number, $node->getNext()));
        }

        /**
        *   Remove first node
        **/
        private function removeFirst() {
            $this->head->setNext($this->head);
        }

        /**
        *   Remove node before node
        *   @param $node Node before the one you want to insert
        **/
        private function removeAfter($node) {
            $temp = $node->getNext();
            $node->setNext($temp->getNext());
            return $temp;
        }

        /**
        *   Store all nodes one by one in $str
        *   @return $str
        **/
        public function toString() {
            $temp = ($this->head == null ? null : $this->head);
            $str = null;
            while($temp != null) {
                $str += $temp->getData();
                if($temp->getNext() != null) {
                    $str += ' -> ';
                    $temp = $temp->getNext();
                }
            }
            return $str;
        }

        /**
        *   Get specific node by index
        *   @param $index
        **/
        private function getNode($index) {
            $temp = $this->head;
            for( $i = 1; $i < $index; $i++) {
                $temp = $temp->getNext();
            }
            return $temp;
        }

        /**
        *   Get specific node by index
        *   @param $index
        **/
        public function get($index) {
            if($index < 0 || $index >= $this->size){
                return -1;
            }
            return $this->getNode($index);
        }

        /**
        *   Replace node with new value
        *   @param index
        *   @return $oldValue
        **/
        public function set($index, $newValue) {
            if($index < 0 || $index >= $this->size){
                return -1;
            }
            $temp = $this->getNode($index);
            $oldValue = $temp->getData();
            $temp->data = $newValue;
            return $oldValue;
        }

        /**
        *   Add node by index
        *   @param $index
        *   @param $item
        **/
        public function addbyIndex($index, $item) {
            if($index < 0 || $index >= $this->size){
                return -1;
            }
            if($index == 0) {
                $this->addFirst($item);
            } else {
                $temp = $this->getNode($index - 1);
                $this->addAfter($item, $temp);
            }
            $this->size = $this->size + 1;
        }

        /**
        *   Add node at last position
        *   @param $item
        *   @return $boo true|false
        **/
        public function add($item) {
            if($this->size == 0) {
                $this->addFirst($item);
            }
            $temp = $this->getNode($this->size - 1);
            $temp->setNext($this->addAfter($item, $temp->getNext()));
            $this->size = $this->size + 1;
            return true;
        }

        /**
        *   Remove node by index
        *   @param $index
        *   @return $removed
        **/
        public function removebyIndex($index) {
            if($index < 0 || $index >= $this->size){
                return -1;
            }
            $temp = $this->getNode($index - 1);
            $removed = $temp->getNext();
            $temp->setNext($removed->getNext());
            $this->size = $this->size - 1;
            return $removed;
        }

        /**
        *   Remove the last one
        *   @return temp
        **/
        public function remove() {
            if($this->size == 0) {
                return -1;
            } else if($this->size == 1)  {
                $temp = $this->removeFirst();
            } else {
                $temp = $this->removeAfter(getNode($this->size -1));
            }
            $this->size = $this->size - 1;
            return $temp;
        }
    }
?>
