<?php

use Carbon\Carbon;

if (!function_exists('convertDateFormat')) {
    function convertDateFormat($date)
    {
        return Carbon::createFromFormat('m/d/Y', $date)->format('Y-m-d');
    }
}
