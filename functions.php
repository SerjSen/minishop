<?php

function debug($res, $die = 1)
{
    echo '<pre>' . print_r($res, true) . '</pre>';
    if ($die) {
        die();
    }

}