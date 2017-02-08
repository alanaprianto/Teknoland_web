<?php

function getFileName($file){
    $array = explode('/', $file);
    return last($array);
}

function getJobPosition(){
    return [
        'Manager',
        'HRD',
        'Teknnisi',
        'Programmer',
    ];
}