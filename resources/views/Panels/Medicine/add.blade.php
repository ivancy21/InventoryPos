@extends('Layouts.master')
@section('content')

@include('Layouts.verticalSideBar')

<form class="form-horizontal" method="POST" action="{{route('medicine.store')}}">
 @csrf
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

    <div class="content-container container align-middle">
        

    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
        <span class="HeaderBannerText">Add Medicine</span>
    </div>
          <div class="DivTemplate">
                    <div class="form-group row cnt mr-6">
                            <label  class="col-sm-2 col-form-label fnt">Medicine Code</label>
                        <div class="col-sm-4">
                              <input type="text" id="productCode" class="form-control" name="productCode">
                        </div>
                  </div>

                    <div class="form-group row cnt mr-6">
                             <label  class="col-sm-2 col-form-label fnt">Medicine Name</label>
                        <div class="col-sm-4">
                                <input type="text" id="name" class="form-control" name="name" >
                            </div>
                    </div>
    
                    <div class="form-group row cnt mr-6">
                             <label  class="col-sm-2 col-form-label fnt">Category</label>
                        <div class="col-sm-4">
                                <input type="text" id="category" class="form-control" name="category" >
                        </div>
                   </div>

                    <div class="form-group row cnt mr-6">
                              <label  class="col-sm-2 col-form-label fnt">Selling Price</label>
                        <div class="col-sm-4">
                                <input type="text" id="sellingPrice" class="form-control" name="price" >
                        </div>
                     </div>

                    <div class="form-group row cnt mr-6">
                              <label  class="col-sm-2 col-form-label fnt">Generic Name</label>
                        <div class="col-sm-4">
                              <input type="text" id="genericName" class="form-control" name="genericName" >
                        </div>
                    </div>

                    <div class="form-group row cnt mr-6">
                            <label  class="col-sm-2 col-form-label fnt">Company Name</label>
                      <div class="col-sm-4">
                            <input type="text" id="companyName" class="form-control" name="companyName" >
                        </div>
                    </div>
                    <div class="form-group row cnt mr-6">
                            <label  class="col-sm-2 col-form-label fnt">Side Effect</label>       
                      <div class="col-sm-4">
                            <input type="text" id="effects" class="form-control" name="sideEffects" >
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