@extends('Layouts.master')
@section('content')

@include('Layouts.verticalSideBar')

<form class="form-horizontal" method="POST"  action="{{ route('pharmacyMedicine.store') }}">
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
@csrf


 <div class="content-container container align-middle">
   
            <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                <span class="HeaderBannerText">Add Pharmacy Medicine</span>
            </div>
            
                
                 <div class="DivTemplate">
          

                        <div class="form-group row cnt mr-6">
                                <label  class="col-sm-2 col-form-label fnt">Quantity</label>
                        <div class="col-sm-4">
                                    <input type="text" id="quantity" class="form-control" name="quantity" >
                        </div>
                        </div>

          
                        <div class="DivTemplate">
                        <button type="submit"    class="btn btn-primary" style="float:right;">Save</button>
                        </div>
  
</form>



@endsection