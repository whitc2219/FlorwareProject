<?php

namespace App\Http\Controllers;
use App\Sale;
use App\Http\Requests\ListsRequest;
use App\Http\Requests;

use DataTables;

class SalesController extends Controller
{
    public function __construct()
    {
        //    $this->middleware('auth');
        // $this->importCsv();
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




    public function index()
    {

        //dd('index');

        return view('sales');
        $sales = Sale::select('customer_name', 'phone');
        return Datatables::of($sales)->make(true);
    }



    public function getSales()
    {

       //dd ('getsales');

       //$sales = DataTables::of(Sale::query())->make(true);

       //dd($sales);

        return DataTables::of(Sale::query())->make(true);

    }




    public function indexold(Request $request)
    {

       //dd($request);
       // return Datatables::of(Sale::query())->make(true);


        if ($request->ajax()) {

           // dd('hello2');

            //$data = Sale::latest()->get();

            $data = Sale::all();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);



        }


        return view('/sales/sales');
    }



    public function list() {

        //$sales = Sale::all();
        //return view('sales.sales', compact('sales'));
    }
}