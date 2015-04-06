<?php
<<<<<<< HEAD
    require 'Node.php'
=======
    require '/Node.php';
>>>>>>> origin/oldVersion
    /**
    *   This class implements interface of Single-Linked List .
    *   @version 0.1
    **/
    class SinglelinkedList {

        //total size
<<<<<<< HEAD
        private $size;

        //first node
        private $head;

        //last node
        private $last;

        function SinglelinkedList() {
            $this->size = 0;
            $this->head = null;
            $this->last = null;
=======
        public $size = 0;

        //first node
        public $head = null;

        /**
        *   Add node behind the head node
        *   @param $R_number This is real number which user input
        **/
        private function addFirst($item) {

            $node = new Node($item);

            $node->next = $head;

            $head = $node;

        }

        /**
        *   Add node
        *   @param $R_number
        *   @param $index
        **/
        private function addNode($item, $index) {

            $node = new Node($item);

            $nodeRef = getNode($index - 1);

            $node->next = $nodeRef->next;

            $nodeRef->next = $node;
        }

        /**
        *   Remove first node
        **/
        private function removeFirst() {
            if($head != null)
                $head->next = $head;
            else
                return -1;
        }

        /**
        *   Remove node
        *   @param $index
        **/
        private function removeNode($index) {
            $temp = getNode($index - 1);
            $removed = $temp->next;
            $temp->next = $removed->next;
            return $removed->data;
        }

        /**
        *   Store all nodes one by one in $str
        *   @return $str
        **/
        public function toString() {
            $temp = ($head == null ? null : $head);
            $str = null;
            while($temp != null) {
                $str += $head->data;
                if($temp->next != null) {
                    $str += ' -> ';
                    $temp = $temp->next;
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
                $temp = $temp->next;
            }
            return $temp;
>>>>>>> origin/oldVersion
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
<<<<<<< HEAD
            $this->size++;
=======
            $temp = $this->getNode($index);
            $oldValue = $temp->data;
            $temp->data = $newValue;
            return $oldValue;
>>>>>>> origin/oldVersion
        }

        /**
        *   Add node at last
        *   @param $R_number This is real number which user input
        **/
<<<<<<< HEAD
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
=======
        public function addbyIndex($index, $item) {
            if($index < 0 || $index >= $size){
                return -1;
            }
            if($index == 0) {
                $this->addFirst($item);
            } else {
                $this->addNode($R_number, $index)
            }
            $this->size++;
        }

        /**
        *   Add node at last position
        *   @param $item
        **/
        public function add($item) {
            if($size == 0)
                $this->addFirst($item);
            else
                $this->addNode($item, $size - 1);
            $this->size++;
        }

        /**
        *   Remove node by index
        *   @param $index
        *   @return $temp.data
        **/
        public function removebyIndex($index) {
            if($index < 0 || $index >= $size){
                return -1;
            }
            if($index == 0)
                $temp = $this->removeFirst();
            else
                $temp = $this->removeNode($index);
            $this->size--;
            return $temp->data;
        }

        /**
        *   Remove the last one
        *   @return temp.data
        **/
        public function remove() {
            if($size == 0) {
                return -1;
            } else if($size == 1)  {
                $temp = $this->removeFirst();
            } else {
                $temp = $this->removeNode($size - 1);
            }
            $this->size--;
            return $temp->data;
        }
>>>>>>> origin/oldVersion
    }
?>
