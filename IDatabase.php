<?php
    interface DatabaseInterface {
        public function select();
        public function executeStatement();
        public function update();
        public function delete();
    }
?>