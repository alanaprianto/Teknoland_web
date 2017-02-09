<?php

function getFileName($file){
    $array = explode('/', $file);
    return last($array);
}

function getJobPosition(){
    return [
        'CEO',
        'CMO',
        'CTO',
        'COO',
        'CFO'
    ];
}