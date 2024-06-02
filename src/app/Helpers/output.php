<?php

if (! function_exists('pre_output')) {
    function pre_output(...$arguments): void
    {
        echo '<pre>';

        foreach ($arguments as $argument) {
            print_r($argument);
        }

        echo '</pre>';
    }
}
