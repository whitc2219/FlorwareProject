<?php

namespace App\Http\Controllers;
use App\Sale;

use Illuminate\Http\Request;

use App\Http\Requests\ListsRequest;
use App\Http\Requests;



class SalesController extends Controller
{
    public function __construct()
    {
        //    $this->middleware('auth');

        //$this->importCsv();

    }

    function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }


    public function importCsv()
    {
        $file = public_path('/media/sales.csv');

        $customerArr = $this->csvToArray($file);

       // dd($customerArr);

        for ($i = 0; $i < count($customerArr); $i ++)
        {
            Sale::firstOrCreate($customerArr[$i]);
        }

        return 'Jobi done or what ever';
    }



    public function list() {

        $sales = Sale::all();

        return view('sales.sales', compact('sales'));

    }



}
