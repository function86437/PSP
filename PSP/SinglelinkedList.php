<?php

    require '/Node.php';

    /**
    *   This class implements interface of Single-Linked List .
    *   @version 3.0
    *   @auther Banana
    **/
    class SinglelinkedList {

        //total size
        public $size = 0;

        //first node
        public $head = null;

        /**
        *   Add node behind the head node
        *   @param $R_number This is real number which user input
        **/
        private function addFirst($item) {

            $node = new Node($item);

            $node->next = $this->head;

            $this->head = $node;

        }

        /**
        *   Get specific node by index
        *   @param $index
        **/
        public function getNode($index) {
            $temp = $this->head;
            for( $i = 1; $i < $index; $i++) {
                $temp = $temp->next;
            }
            return $temp;

        }

        /**
        *   Add node
        *   @param $R_number
        *   @param $index
        **/
        private function addNode($item, $index) {

            $node = new Node($item);

            $nodeRef = $this->getNode($index - 1);

            $node->next = $nodeRef->next;

            $nodeRef->next = $node;
        }

        /**
        *   Remove first node
        **/
        private function removeFirst() {
            if($this->head != null)
                $this->head->next = $this->head;
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
            $temp = ($this->head == null ? null : $this->head);
            $str = null;
            while($temp != null) {
                $str += $this->head->data;
                if($temp->next != null) {
                    $str += ' -> ';
                    $temp = $temp->next;
                }
            }
            return $str;
        }



        public function addbyIndex($index, $item) {
            if($index < 0 || $index >= $this->size){
                return -1;
            }
            if($index == 0) {
                $this->addFirst($item);
            } else {
                $this->addNode($R_number, $index);
            }
            $this->size++;
        }

        /**
        *   Add node at last position
        *   @param $item
        **/
        public function add($item) {
            if($this->size == 0)
                $this->addFirst($item);
            else
                $this->addNode($item, $this->size - 1);
            $this->size++;
        }

        /**
        *   Remove node by index
        *   @param $index
        *   @return $temp.data
        **/
        public function removebyIndex($index) {
            if($index < 0 || $index >= $this->size){
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
            if($this->size == 0) {
                return -1;
            } else if($this->size == 1)  {
                $temp = $this->removeFirst();
            } else {
                $temp = $this->removeNode($size - 1);
            }
            $this->size--;
            return $temp->data;
        }
    }
?>
