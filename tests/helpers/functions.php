<?php

/**
 * Dump and die
 */
function dd() {
    $args = func_get_args();
    foreach($args as $arg) {
        var_dump($arg);
    }
    exit();
}

/**
 * Print and die
 */
function pd() {
    $args = func_get_args();
    foreach($args as $arg) {
        print_r($arg);
    }
    exit();
}