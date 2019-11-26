@extends('Layouts.master')
@section('content')


        <div class="container">         
                    <div class="col-sm-8 offset-sm-2">
                                    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                                            <span class="HeaderBannerText">Details</span>
                                    </div>
                                    <div class="flex HeaderBody">
                                            <div class="row">
                                            <div class="col-sm-6">
                                                    <div class="file-field">
                                                            <div class="z-depth-1-half mb-1">
                                                                    @if ($medicine->medicinePhoto != null)
                                                                    <img src="{{ asset('images/medicinePhotos/'.$medicine->medicinePhoto) }}" size="250px"  class="img-fluid img-sizes img-shadow" alt="">
                                                                    @else
                                                                    <img src="{{ asset('images/medicineicon.png') }}" size="250px"  class="img-fluid img-sizes img-shadow" alt="" >
                                                                    @endif </td>
                                                            </div>
                                                            </div>  
                                            </div>





                                        <div class="col-sm-6">
                                        <div class="table-responsive">
                                                <table class="table table-borderless dataDisplayer">
                                                    <tbody>
                                                        
                                                        <tr class="highlight">
                                                            <td>Medicine Name</td>
                                                            <td>{{$medicine->name}}</td>
                                                        </tr>
                                                        
                                                        <tr class="highlight">
                                                            <td width="200px">Medicine Code</td>
                                                            <td>{{$medicine->productCode}}</td>
                                                        </tr>
                                                    
                                                        <tr class="highlight">
                                                            <td>Generic Name</td>
                                                            <td>{{$medicine->genericName}}</td>
                                                        </tr>
                                                        
                                                        <tr class="highlight">
                                                            <td>Company Name</td>
                                                            <td>{{$medicine->companyName}}</td>
                                                        </tr>
                                                            
                                                        <tr class="highlight">
                                                            <td>Category</td>
                                                            <td>{{$medicine->category}}</td>
                                                        </tr>
                                                        
                                                        <tr class="highlight">
                                                            <td>Selling Price</td>
                                                            <td>{{$medicine->price}}</td>
                                                        </tr>
                                                        
                                                        <tr class="highlight">
                                                            <td>Side Effect</td>
                                                            <td>{{$medicine->sideEffects}}</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            

                        <div class="DivTemplate">
                            <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                            <div class="hr mb-2"></div> 
                            <button type="submit" class="btn btn-info"  onclick="window.location='{{route('medicine.edit',$medicine->id)}}'">EDIT</button>
                            <input class="btn btn-outline-info waves-effect float-right" type="button"  onclick="window.location='{{route('medicine.index')}}'" value="BACK">           
                        </div>
                                
                </div>
                          
        </div>


@endsection