<?php
function create_copyright(): string
{
    $year = date('Y');
    $message = 'Copyright &copy; ' . $year. ' Protech, Inc.';    
    return $message;
};