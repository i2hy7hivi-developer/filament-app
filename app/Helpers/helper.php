<?php

function pre($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function pred($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die();
}