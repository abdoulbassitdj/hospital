<?php

    function Format_date($date){
        $datetime = new DateTime($date);
        $date = $datetime->format('d-m-Y');
        return $date;
    }

?>