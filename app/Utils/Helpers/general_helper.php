<?php

use Carbon\Carbon;

if (!function_exists('convertDateFormat')) {
    function convertDateFormat($date)
    {
        return Carbon::createFromFormat('m/d/Y', $date)->format('Y-m-d');
    }
}

    function convertDateToHumanFormat($date)
    {

        return Carbon::createFromFormat('Y-m-d', $date)->format('j M Y');

    }

    function convertToDefaultDateFormat($date)
    {
        return Carbon::createFromFormat( 'Y-m-d', $date)->format('m/d/Y');
    }

