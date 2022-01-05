<?php

namespace MyApp\Model;

class Task
{
    public function __construct()
    {
        //echo "Task Model";
        return true;
    }
    public function read(){
        $str = "Read method Model";
        return $str;
    }
}
?>