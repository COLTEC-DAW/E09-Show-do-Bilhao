<?php
    require('data.inc');
    function loadQuestion($id)
    {
        global $data;
        return $data[$id];
    }
?>