@extends('Layouts.master')
@section('content')

@include('Layouts.verticalSideBar')

<form class="form-horizontal" method="POST" action="{{route('price.update',$price->id)}}">
 @csrf
 @method('PUT')
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<div class="content-container">
      
        <div class="container-fluid">

    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
        <span class="HeaderBannerText">Add Products</span>
    </div>
          <div class="DivTemplate">
              <div class="container container-fluid">
                      <div class="row">
                          <div class="col-sm-4">
                              <label for="exampleForm2">Product Code</label>
                              <input type="text" id="productCode" class="form-control" name="productCode" value='{{$price->productCode}}' >
                          </div>
                          <div class="col-sm-4">
                              <label for="exampleForm2">Name</label>
                              <input type="text" id="name" class="form-control" name="name" value='{{$price->name}}' >
                          </div>
                          <div class="col-sm-4">
                              <label for="exampleForm2">Category</label>
                              <input type="text" id="category" class="form-control" name="category" value='{{$price->category}}'>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-4">
                              <label for="exampleForm2">Selling Price</label>
                              <input type="text" id="sellingPrice" class="form-control" name="price" value='{{$price->price}}'>
                          </div>
                         </div>
                       <div class="row">
                          <div class="col-sm-4">
                              <label for="exampleForm2">Generic Name</label>
                              <input type="text" id="genericName" class="form-control" name="genericName" value='{{$price->genericName}}'>
                          </div>
                          <div class="col-sm-4">
                              <label for="exampleForm2">Company Name</label>
                              <input type="text" id="companyName" class="form-control" name="companyName" value='{{$price->companyName}}'>
                          </div>
                          <div class="col-sm-4">
                              <label for="exampleForm2">Effects</label>
                              <input type="text" id="effects" class="form-control" name="sideEffects" value='{{$price->sideEffects}}'>
                          </div>
                        </div>
                        
                         
                       


            </div>
          </div>
        </div>

          <div class="DivTemplate">
              <button type="submit" class="btn btn-primary" style="float:right;">Save</button>
           </div>



       
</div>
</div>
</form>



@endsection