<?php
function redirection(string $url, int $time): string
{
    $displayHTML = "<script>";
    $displayHTML .= "setTimeout(\"location.href = '$url';\", $time);";
    $displayHTML .= "</script>";
    return $displayHTML;
}