<?php


Route::get('/', function ()
{
    $report = new NT\Reporting\SalesReporter(new \NT\Reporting\SalesRepository);

    $begin = Carbon\Carbon::now()->subDays(10);
    $end = Carbon\Carbon::now();

    return $report->between($begin, $end, new NT\Reporting\HtmlOutput);

});