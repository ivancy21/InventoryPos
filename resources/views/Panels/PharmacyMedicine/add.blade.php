@extends('Layouts.master')
@section('content')

@include('Layouts.verticalSideBar')
@include('Layouts.cropImageModal')

<div class="content-container">
      <form class="form-horizontal" method="POST" action="{{route('pharmacyMedicine.store')}}">
            @csrf
           <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
           

<div class="container">
     <div class="row">
            <div class="col-sm-4">
                <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                        <span class="HeaderBannerText">Insert Picture</span>
                </div>

                <div class="flex HeaderBody"> 
                        <form class="md-form">
                                <div class="file-field">
                                  <div class="z-depth-1-half mb-1">
                                        @if ($medicine->medicinePhoto != null)
                                        <img src="{{ asset('images/medicinePhotos/'.$medicine->medicinePhoto) }}" size ="200px" class="img-fluid img-size" alt="">
                                        @else
                                        <img src="{{ asset('images/medicineicon.png') }}" size="200px" class="img-fluid img-size" alt="">
                                        @endif 
                                  </div>      
                                            <table class="table table-borderless dataDisplayer">
                                                    <tbody>
                                                         <tr class="highlight">
                                                            <td>Medicine Code</td>
                                                            <td>{{$medicine->productCode}}</td>
                                                        </tr>
                                                        <tr class="highlight">
                                                                <td>Medicine Name</td>
                                                                <td>{{$medicine->name}}</td>
                                                            </tr>
                                                    </tbody>
                                                </table>                                     
                                </div>
                              </form>
                    </div>
            </div>
    
  <div class="col-sm-8">
                            <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                                    <span class="HeaderBannerText">Details</span>
                            </div>


                            <div class="flex HeaderBody"> 
                                <div class="row">
                                        <div class="col">
                                                <label  class="fnt">Quantity</label>
                                                <input type="hidden" id="medicineId" class="form-control" value="{{$medicine->id}}" name="medicineId">
                                                <input type="text" id="quantity" class="form-control" name="quantity">
                                        </div>
                                
                                        <div class="col">
                                                <label  class="fnt">Purchased Price </label>       
                                                <input type="text" id="purchasedPrice" class="form-control" name="purchasedPrice">
                                        </div>
                                    </div>



                                <div class="row">
                                        <div class="col">
                                                <label  class="fnt">Received Date</label>
                                                <input type="date" id="receivedDate" class="form-control" name="receivedDate" >
                                        </div>
                                    <div class="col">
                                            <label  class="fnt">Manufactured Date</label>
                                            <input type="date" id="manufacturedDate" class="form-control" name="manufacturedDate" >
                                    </div>
                                
                              
                                    
                                </div>
                                <div class="row">
                                        <div class="col-sm-6">
                                                <label  class="fnt">Expiration Date</label>
                                                <input type="date" id="expirationDate" class="form-control" name="expirationDate" >
                                        </div>
                                </div>
                        </div>
                    

                      <div class="DivTemplate">
                          <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                          <div class="hr mb-2"></div> 
                          <button type="submit" class="btn btn-primary">SAVE</button>
                          <input class="btn btn-outline-info waves-effect float-right" type="button" onclick="window.location='{{route('inventory.index')}}'" value="BACK">    
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