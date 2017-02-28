<?php

function getFileName($file){
    $array = explode('/', $file);
    return last($array);
}

function getJobPosition(){
    return [
        'Co-Founder',
        'Project Manager',
        'Senior Programer',

    ];
}