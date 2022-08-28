<?php
    interface GatewayInterface {
        public function find($id);
        public function findAll();
        public function insert($input);
        public function update($id, Array $input);
        public function delete($id);
    }
?>