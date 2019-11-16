<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use App\PharmacyMedicine;


class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medicine = Medicine::latest()->get();
        return view('Panels.Medicine.index',compact("medicine"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Panels.Medicine.add');
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
        $medicine=Medicine::create($request->all());
        return redirect()->route('medicine.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $Medicine
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $pharmacyMedicine = PharmacyMedicine::where('priceId','=',$id)->latest()->get();
        $medicine = Medicine::where('id','=',$id)->latest()->get();
        return view('Panels.Medicine.show',compact("medicine","pharmacyMedicine"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $Medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
        return view('Panels.Medicine.edit',compact("medicine"));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $Medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
        $medicine->update($request->all());
        return redirect()->route('medicine.index');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $Medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
        $medicine->delete();
        return redirect()->route('medicine.index');
    }
}
