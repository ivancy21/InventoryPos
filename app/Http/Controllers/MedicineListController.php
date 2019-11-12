<?php

namespace App\Http\Controllers;

use App\MedicineList;
use Illuminate\Http\Request;

class MedicineListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {

        return view('Panels.addProducts');
        
    }

    function getdata(Students $students)
    {
        $students = MedicineList::select('productCode','name','categroy','purchasePrice','sellingPrice','quantity','genericName','companyName','effects','expiryDate','status');
    }

    function postdata(Request $request){
        $validation = Validator::make($request->all(),[
            'productCode' => 'required',
            'name' => 'required',
            'category' => 'required',
            'purchasePrice' => 'required',
            'sellingPrice' => 'required',
            'quantity' => 'required',
            'genericName' => 'required',
            'companyName' => 'required',
            'effects' => 'required',
            'expiryDate' => 'required',
            'status' => 'required',

        ] );

        $error_array= array();
        $success_output ='';
        if($validation->fails())
             {
            foreach($validation->messages()->getMessages()as $field_name => $messages)
                {
                    $error_array[] =$messages;
                }
            }
        else
        {
            if($request->get('button_action')== "insert")
            {
                $student = new MedicineList([
                    'productCode'=> $request->get('productCode'),
                    'name'=> $request->get('name'),
                    'category'   => $request->get('category'),
                    'purchasePrice'  => $request->get('purchasePrice'),
                    'sellingPrice'=> $request->get('sellingPrice'),
                    'quantity'=> $request->get('quantity'),
                    'genericName'=> $request->get('genericName'),
                    'companyName'=> $request->get('companyName'),
                    'effects'=> $request->get('effects'),
                    'expiryDate'=> $request->get('expiryDate'),
                    'status'=> $request->get('status')
                    
                ]);
                $student->save();
                $success_output='<div class="alert alert-success">Data Inserted</div>';

            }
        }
        $output = array(
            'error' => $error_array,
            'success' => $success_output
        );
        echo \json_encode($output);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedicineList  $medicineList
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineList $medicineList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedicineList  $medicineList
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicineList $medicineList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedicineList  $medicineList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicineList $medicineList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedicineList  $medicineList
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineList $medicineList)
    {
        //
    }






}
