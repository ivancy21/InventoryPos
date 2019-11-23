@extends('Layouts.master')
@section('content')

@include('Layouts.verticalSideBar')


 <div class="content-container container align-middle">
   
            <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                <span class="HeaderBannerText">Add Pharmacy Medicine</span>
            </div>
    
            <div class="flex HeaderBody">      
                        <div class="form-group row cnt mr-5">
                                <label  class="col-sm-2 col-form-label fnt">Medicine Code</label>
                        <div class="col-sm-4">
                                    <input type="text"  class="form-control" >
                        </div>
                        </div>

                        <div class="form-group row cnt mr-5">
                                <label  class="col-sm-2 col-form-label fnt">Name</label>
                        <div class="col-sm-4">
                                    <input type="text"  class="form-control">
                        </div>
                        </div>
                        
                        <div class="form-group row cnt mr-5">
                                <label  class="col-sm-2 col-form-label fnt">Quantity</label>
                        <div class="col-sm-4">
                                    <input type="text" id="quantity" class="form-control" name="quantity" >
                        </div>
                        </div>

                        <div class="form-group row cnt mr-5">
                            <label  class="col-sm-2 col-form-label fnt">Purchased Price</label>
                        <div class="col-sm-4">
                                    <input type="text" id="purchasedPrice" class="form-control" name="purchasedPrice" >
                        </div>
                        </div>
                
                        <div class="form-group row cnt mr-5">
                            <label  class="col-sm-2 col-form-label fnt">Date Created</label>
                        <div class="col-sm-4">
                                <input type="date" id="dateCreated" class="form-control" name="dateCreated" >
                        </div>
                         </div>
            
                         <div class="form-group row cnt mr-5">
                            <label  class="col-sm-2 col-form-label fnt">Date Expired</label>
                        <div class="col-sm-4">
                                <input type="date" id="dateExpiry" class="form-control" name="dateExpiry" >
                        </div>
                        </div>
            
                        <div class="form-group row cnt mr-5">
                            <label  class="col-sm-2 col-form-label fnt">Date Received</label>
                        <div class="col-sm-4">
                                <input type="date" id="dateReceived" class="form-control" name="dateReceived" >
                        </div>
                        </div>
                      
                    
                 </div>

                 <div class="DivTemplate">
                        <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                        <div class="hr mb-2"></div> 
                        <button type="submit" class="btn btn-primary">SAVE</button>
                        <input class="btn btn-outline-info waves-effect float-right" type="button" onclick="window.location = '{{ route('medicine.index') }}'" value="BACK">    
                    </div>
          
                  </div>
                

  </div>




@endsection