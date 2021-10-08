<?php
    class BienenwissenView {

        private $model;



        public function __construct(BienenwissenModel $model) {

            $this->model = $model;

        }



        public function showInhalte($inhaltID) {

            return '<p>' . $this->model->getInhalte($inhaltID) .'</p>';

        }

    }
?>

