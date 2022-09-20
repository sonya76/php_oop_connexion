<?php

function dump($var, $type = "print_r")
{

    echo "
    <style>
    pre {
        font-familly: monospace;
        background: rgba(40,42,54,1);
        color:rgba(248,248,242,1);
        padding:10px 20px;
        border:2px solid white;
        word-wrap: break-word;
        resize: both;
        overflow: auto;
    }
    pre:hover , pre:focus { width :min-content; }
    </style>
    ";

    echo "<pre>";
    if ($type == "print_r") {
        print_r($var);
    } else {
        var_dump($var);
    }
    echo "</pre>";
}