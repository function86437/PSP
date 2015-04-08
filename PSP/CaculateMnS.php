<?php
    /**
    *   This is math function for Mean and Standard
    *   @version 3.0
    **/
    class CaculateMnS {

        /**
        *   This is math function for Mean
        *   @param $single obj of single-linked list
        *   @param @size size of single-linked list
        *   @return mean
        **/
        public function caculateMean($single, $size) {
            $total = 0;

            for($i = 0; $i < $size; $i++) {
                $total += $single->getNode($i)->data;
            }

            //cast int into double(two zeroes after decimal)
            return number_format($total/$size, 2);
        }

        /**
        *   This is math function for Standard
        *   @param $single obj of single-linked list
        *   @param $size size of single-linked list
        *   @param $mean
        *   @return standard
        **/
        public function caculateStandard($single, $size, $mean) {
            $total = 0;

            for($i = 0; $i < $size; $i++) {
                $temp = $single->getNode($i)->data - $mean;
                $total += $temp * $temp;
            }

            return sqrt($total / ($size - 1));



        }



    }
?>
