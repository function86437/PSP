<?php
    /**
    *   This is math function for Mean and Standard
    *   @version 2.0
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
                $total += $single->get($i);
            }

            return $total/$size;
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
                $temp = $single->get($i) - $mean;
                $total += $temp * $temp;
            }

            return sqrt($total / ($size - 1));



        }



    }
?>
