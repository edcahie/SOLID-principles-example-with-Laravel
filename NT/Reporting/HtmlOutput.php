<?php namespace NT\Reporting;


use NT\Reporting\SalesOutputInterface;


class HtmlOutput implements SalesOutputInterface{


    public function output($sales)
    {
        return "<h1>Sales: $sales</h1>";
    }

}