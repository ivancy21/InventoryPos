<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use App\PharmacyMedicine;
use Intervention\Image\ImageManagerStatic as Image;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request   )
    {
        //
        
        
        $medicine=Medicine::all();
        if($request->has('search')){
            $query = $request->get('search');
            $medicine = Medicine::where("name", 'LIKE', '%'.$query.'%')->orWhere("genericName", 'LIKE', '%'.$query.'%')->orWhere("companyName", 'LIKE', '%'.$query.'%')
                        ->paginate(20);
            
            return view('Panels.Medicine.medListIndex',compact("medicine"));
        
        }
        if($request->has('latest')){
            $medicine=Medicine::latest()->get();
                 
            return view('Panels.Medicine.medListIndex',compact("medicine"));
        
        }
        if($request->has('oldest')){
            $medicine=Medicine::oldest()->get();
                 
            return view('Panels.Medicine.medListIndex',compact("medicine"));
        
        }

        if($request->has('A-Z')){
            $medicine=Medicine::orderBy('name','asc')->get();
                 
            return view('Panels.Medicine.medListIndex',compact("medicine"));
        
        }
        
        if($request->has('Z-A')){
            $medicine=Medicine::orderBy('name','desc')->get();
                 
            return view('Panels.Medicine.medListIndex',compact("medicine"));
        
        }



        
        else {
            return view('Panels.Medicine.medListIndex',compact("medicine"));
        }

          
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $medicine = Medicine::latest()->first();
        return view('Panels.Medicine.medListCreate',compact('medicine'));
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
       
        $medicine = Medicine::create($request->except('medicinePhoto','medicinePic'));

         if ($request->hasFile('medicinePic')){
            $this->validate($request, [
                'medicinePic' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
        //     $filename = time().'.'.$request->medicinePic->getClientOriginalExtension();
        //     $resizedImage = Image::make($request->file('medicinePic')->getRealPath());
        //     $resizedImage->resize(100, 100);
        //     $user->medicinePic = $filename;
        //     $resizedImage->save(public_path().'/images/userPhotos/' .  $filename);
        //     $user->save(); 
        //     $alert = $filename;
        } 
       
        if ($request->input('medicinePhoto') != NULL){
            $screen = $request->input('medicinePhoto');
            $filterd_data = substr($screen, strpos($screen, ",")+1);
            //Decode the string
            $unencoded_data=base64_decode($filterd_data);
            $name = time().'.png';
            $medicinePhoto = Image::make($unencoded_data);
            $medicinePhoto->save(public_path().'/images/medicinePhotos/' .  $name);
            $medicine->medicinePhoto = $name;
            $medicine->save();
        }               

        return redirect()->route('medicine.show',$medicine->id)->with('success','Successfully Added');
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
        $pharmacyMedicine = PharmacyMedicine::where('medicineId','=',$id)->latest()->get();
        $medicine = Medicine::where('id','=',$id)->latest()->first();
        return view('Panels.Medicine.medListShow',compact("medicine","pharmacyMedicine"));
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
        return view('Panels.Medicine.medListEdit',compact("medicine"));
    
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
        $medicine->update($request->except('medicinePic','medicinePhoto'));
        if ($request->hasFile('medicinePic')){
            $this->validate($request, [
                'medicinePic' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
        //     $filename = time().'.'.$request->medicinePic->getClientOriginalExtension();
        //     $resizedImage = Image::make($request->file('medicinePic')->getRealPath());
        //     $resizedImage->resize(100, 100);
        //     $user->medicinePic = $filename;
        //     $resizedImage->save(public_path().'/images/userPhotos/' .  $filename);
        //     $user->save(); 
        //     $alert = $filename;
        } 
       
        if ($request->input('medicinePhoto') != NULL){
            $screen = $request->input('medicinePhoto');
            $filterd_data = substr($screen, strpos($screen, ",")+1);
            //Decode the string
            $unencoded_data=base64_decode($filterd_data);
            $name = time().'.png';
            $medicinePhoto = Image::make($unencoded_data);
            $medicinePhoto->save(public_path().'/images/medicinePhotos/' .  $name);
            $medicine->medicinePhoto = $name;
            $medicine->save();
        }               
        return redirect()->route('medicine.show',$medicine->id)->with('success','Medicine has been EDITED');
       
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
