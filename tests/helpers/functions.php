<?php

/**
 * Dump and die.
 */
function dd()
{
    $args = func_get_args();
    foreach ($args as $arg) {
        var_dump($arg);
    }
    exit();
}

/**
 * Print and die.
 */
function pd()
{
    $args = func_get_args();
    foreach ($args as $arg) {
        print_r($arg);
    }
    exit();
}

/**
 * Dump and return.
 */
function dr()
{
    $args = func_get_args();
    $result = '';
    foreach ($args as $arg) {
        $result .= print_r($arg, true);
    }

    return $result;
}
