@extends('Layouts.master')
@section('content')

@include('Layouts.verticalSideBar')



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
                              <input type="text" id="exampleForm2" class="form-control">
                          </div>
                          <div class="col-sm-4">
                              <label for="exampleForm2">Name</label>
                              <input type="text" id="exampleForm2" class="form-control">
                          </div>
                          <div class="col-sm-4">
                              <label for="exampleForm2">Category</label>
                              <input type="text" id="exampleForm2" class="form-control">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-4">
                              <label for="exampleForm2">Purchase Price</label>
                              <input type="text" id="exampleForm2" class="form-control">
                          </div>
                          <div class="col-sm-4">
                              <label for="exampleForm2">Selling Price</label>
                              <input type="text" id="exampleForm2" class="form-control">
                          </div>
                          <div class="col-sm-4">
                              <label for="exampleForm2">Quantity</label>
                              <input type="text" id="exampleForm2" class="form-control">
                          </div>
                       </div>
                       <div class="row">
                          <div class="col-sm-4">
                              <label for="exampleForm2">Generic Name</label>
                              <input type="text" id="exampleForm2" class="form-control">
                          </div>
                          <div class="col-sm-4">
                              <label for="exampleForm2">Company Name</label>
                              <input type="text" id="exampleForm2" class="form-control">
                          </div>
                          <div class="col-sm-4">
                              <label for="exampleForm2">Effects</label>
                              <input type="text" id="exampleForm2" class="form-control">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                              <label for="exampleForm2">Expire Date</label>
                              <input type="text" id="exampleForm2" class="form-control">
                          </div>
                      
                          <div class="col-sm-4">
                              <label for="exampleForm2">Status</label>
                              <input type="text" id="exampleForm2" class="form-control">
                          </div>
                       


            </div>
          </div>
        </div>

          <div class="DivTemplate">
              <button type="button" class="btn btn-primary" style="float:right;">Save</button>
           </div>



       
</div>
</div>




@endsection