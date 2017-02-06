<?php

function getFileName($file){
    $array = explode('/', $file);
    return last($array);
}