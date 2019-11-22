@extends('Layouts.master')
@section('content')

@include('Layouts.verticalSideBar')
@include('Layouts.cropImageModal')

<link href="https://res.cloudinary.com/mdrecords/raw/upload/v1561439126/jquery.signaturepad.css" rel="stylesheet">
<script type="text/javascript" src="https://res.cloudinary.com/mdrecords/raw/upload/v1561439191/json2.min.js" defer>
</script>
<script type="text/javascript" src="https://res.cloudinary.com/mdrecords/raw/upload/v1561439191/numeric-1.2.6.min.js"
    defer></script>
<script type="text/javascript" src="https://res.cloudinary.com/mdrecords/raw/upload/v1561439179/bezier.js" defer>
</script>
<script type="text/javascript" src="https://res.cloudinary.com/mdrecords/raw/upload/v1561439185/html2canvas.js" defer>
</script>
<script type="text/javascript" src="https://res.cloudinary.com/mdrecords/raw/upload/v1561439191/jquery.signaturepad.js"
    defer></script>

<link href="{{ asset('css/croppie.css') }}" rel="stylesheet" />
<script type="text/javascript" src="{{ asset('js/croppie.js') }}" defer></script>
<div class="content-container">
      <form class="form-horizontal" method="POST" action="{{route('medicine.update',$medicine->id)}}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
           <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
           

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
                                      < @if ($medicine->medicinePhoto != null)
                                      <img src="{{ asset('images/medicinePhotos/'.$medicine->medicinePhoto) }}" size ="300px" width ="300px" alt="">
                                      @else
                                      <img src="{{ asset('images/medicinePhotos/default pic.jpg') }}" size="300px" width="300px" alt="">
                                      @endif
                                  </div>
                                  <div class="d-flex justify-content-center">
                                    <div class="btn btn-mdb-color btn-rounded float-left">
                                      <span>Choose file</span>
                                          
                                      <input type="file" id='medicinePhoto' onchange="readURL(this);"
                                      class="form-control{{ $errors->has('medicinePhoto') ? ' is-invalid' : '' }}"
                                      name='medicinePic' style="border: none" />
                                      <input type="hidden" id="medicinePhotos" name="medicinePhoto">
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
                                    <input type="text" id="productCode" class="form-control" name="productCode" value="{{$medicine->productCode}}">
                                    </div>
                             
                                    <div class="col">
                                          <label  class="fnt">Medicine Name</label>
                                          <input type="text" id="name" class="form-control" name="name" value="{{$medicine->name}}" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                            <label  class="fnt">Category</label>
                                            <input type="text" id="category" class="form-control" name="category" value="{{$medicine->category}}">
                                    </div>
                            
                                    <div class="col">
                                            <label  class="fnt">Selling Price</label>
                                            <input type="text" id="sellingPrice" class="form-control" name="price" value="{{$medicine->price}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                            <label  class="fnt">Generic Name</label>
                                            <input type="text" id="genericName" class="form-control" name="genericName" value="{{$medicine->genericName}}" >
                                    </div>
                            
                                  <div class="col">
                                        <label  class="fnt">Company Name</label>
                                        <input type="text" id="companyName" class="form-control" name="companyName" value="{{$medicine->companyName}}">
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-6">
                                        <label  class="fnt">Side Effect</label>       
                                        <input type="text" id="effects" class="form-control" name="sideEffects" value="{{$medicine->sideEffects}}">
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
</div>
</div>
<script>
  $(document).ready(function () {
      //Crop image
      $image_crop = $('#image_demo').croppie({
              enableExif: true,
              viewport: {
              width:200,
              height:200,
              type:'square' //circle
              },
              boundary:{
              width:300,
              height:300
              }
          });
                  
          $('#medicinePhoto').on('change', function(){
              var reader = new FileReader();
              reader.onload = function (event) {
              $image_crop.croppie('bind', {
                  url: event.target.result
              }).then(function(){
                  console.log('jQuery bind complete');
              });
              }
              reader.readAsDataURL(this.files[0]);
              $('#uploadimageModal').modal('show');
          });
          
          $('.crop_image').click(function(event){
              $image_crop.croppie('result', {
              type: 'canvas',
              size: 'viewport'
              }).then(function(response){
              $('#Photo').attr('src', response);
              $("#medicinePhotos").val(response);
              $('#uploadimageModal').modal('hide');
              })
          });
 
  });
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
  $(function () {
        $("#medicinePhoto").change(function () {
            readURL(this);
        });
    });
   
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                //alert(e.target.result);
                $('#Photo').attr('src', e.target.result);
            };
            
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


@endsection