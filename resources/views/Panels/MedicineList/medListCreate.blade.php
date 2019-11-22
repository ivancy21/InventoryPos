@extends('Layouts.master')
@section('content')

@include('Layouts.verticalSideBar')

<div class="content-container">

<div class="container">
     <div class="row">
            <div class="col-sm-4">
                <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                        <span class="HeaderBannerText">Insert Picture</span>
                </div>

                <div class="DivTemplate">
                        <form class="md-form">
                                <div class="file-field">
                                  <div class="z-depth-1-half mb-4">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" id="blah" class="img-fluid"
                                      alt="example placeholder">
                                  </div>
                                  <div class="d-flex justify-content-center">
                                    <div class="btn btn-mdb-color btn-rounded float-left">
                                      <span>Choose file</span>
                                      <input type="file" id='medicineImage' onchange="readURL(this);"
                                      class="form-control{{ $errors->has('medicineImage') ? ' is-invalid' : '' }}"
                                      name='medicineImage' style="border: none" />
                                      <input type="hidden" id="medicineImage" name="medicineImage">
                                    </div>
                                  </div>
                                </div>
                              </form>
                    </div>
            </div>
    
  <div class="col-sm-8">
                            <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                                    <span class="HeaderBannerText">Details</span>
                            </div>


                        <div class="DivTemplate">
                                <div class="row">
                                    <div class="col">
                                          <label  class="fnt">Medicine Code</label>
                                          <input type="text" id="productCode" class="form-control" name="productCode">
                                    </div>
                             
                                    <div class="col">
                                          <label  class="fnt">Medicine Name</label>
                                          <input type="text" id="name" class="form-control" name="name" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                            <label  class="fnt">Category</label>
                                            <input type="text" id="category" class="form-control" name="category" >
                                    </div>
                            
                                    <div class="col">
                                            <label  class="fnt">Selling Price</label>
                                            <input type="text" id="sellingPrice" class="form-control" name="price" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                            <label  class="fnt">Generic Name</label>
                                            <input type="text" id="genericName" class="form-control" name="genericName" >
                                    </div>
                            
                                  <div class="col">
                                        <label  class="fnt">Company Name</label>
                                        <input type="text" id="companyName" class="form-control" name="companyName" >
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-6">
                                        <label  class="fnt">Side Effect</label>       
                                        <input type="text" id="effects" class="form-control" name="sideEffects" >
                                    </div>
                                </div>
                        </div>
                    

                      <div class="DivTemplate">
                          <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                          <div class="hr mb-2"></div> 
                          <button type="submit" class="btn btn-primary">SAVE</button>
                          <input class="btn btn-outline-info waves-effect float-right" type="button" href="/MedList" value="BACK">    
                      </div>

                    </div>



                    </div>              


            </div>
      </div>

<script>

      function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(350)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>


@endsection