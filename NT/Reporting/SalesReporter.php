<?php namespace NT\Reporting;



class SalesReporter {

    private  $repo;

    public function __construct(SalesRepository $repo){

        $this->repo = $repo;

    }


    public function between($startDate,$endDate, SalesOutputInterface $formmatter)
    {

        $sales = $this->between($startDate, $endDate);

        return $formatter->output($sales);

    }


}


/*namespace NT\Reporting;


Use Auth, DB, Exception;


class SalesReporter {


    public function between($startDate,$endDate)
    {

        //Perform authentication
        if( ! Auth::check()) throw new Exception('Authentication required for reporting');

        //get sales from db
        $sales =$this->queryDBSalesBetween($startDate,$endDate);

        //Return results
        return $this->format($sales);

    }

    protected function queryDBForSalesBetween($startDate,$endDate)
    {

        return DB::table('sales')->whereBetween('created_at')[$startDate,$endDate])->sum('charge')/100;

    }

    protected function format ($sales)
    {

        return "<h1>Sales: $sales</h1>";

    }

}*/
