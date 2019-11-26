@extends('Layouts.master')
@section('content')


      
<div class="container">
        <div class="row">
               <div class="col-sm-4">
                   <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                           <span class="HeaderBannerText">Picture</span>
                   </div>
   
                   <div class="flex HeaderBody"> 
                           <form class="md-form">
                                   <div class="file-field">
                                     <div class="z-depth-1-half mb-1">
                                       {{-- Photo Insertion --}}
                                           @if ($medicine->medicinePhoto != null)
                                           <img src="{{ asset('images/medicinePhotos/'.$medicine->medicinePhoto) }}" size ="200px" class="img-fluid img-size img-shadow" alt="">
                                           @else
                                           <img src="{{ asset('images/medicineicon.png') }}" size="200px" class="img-fluid img-size img-shadow" alt="">
                                           @endif 
                                     </div>      
                                               <table class="table table-borderless tr-bg">
                                                       <tbody>
                                                            <tr class="highlight text-center">
                                                               <td>{{$medicine->productCode}}</td>
                                                           </tr>
                                                           <tr class="highlight text-center">
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
                            <span class="HeaderBannerText">History</span>
                    </div>

                    <div class="flex HeaderBody"> 
                            <div class="table-responsive">
                                    <table class="table table-image table-hover" id="TblSorter1" cellspacing="0" width="100%">
                                        <thead  class="thead-bg table-bordered">
                                            <tr class="text-center">
                                                    <th class="th-sm tblheadfont1">Purchased Price </th>
                                                    <th class="th-sm tblheadfont1">Manufactured Date </th>
                                                    <th class="th-sm tblheadfont1">Expiration Date </th>
                                                    <th class="th-sm tblheadfont1"> Received Date </th>
                                                    <th class="th-sm tblheadfont1" >Quantity </th>
                                            </tr>
                                        </thead>
                    
                                            <tbody>
                                                    @foreach($pharmacyMedicine as $pharmacyMedicines)
                                                <tr class="text-center highlight">                                 
                                                        <td class="cnterAlgn">&#8369;{{$pharmacyMedicines->purchasedPrice}}</td>
                                                        <td class="cnterAlgn">{{$pharmacyMedicines->manufacturedMonth}}-{{$pharmacyMedicines->manufacturedDay}}-{{$pharmacyMedicines->manufacturedYear}}</td>
                                                        <td class="cnterAlgn">{{$pharmacyMedicines->expirationMonth}}-{{$pharmacyMedicines->expirationDay}}-{{$pharmacyMedicines->expirationYear}}</td>
                                                        <td class="cnterAlgn">{{$pharmacyMedicines->receivedMonth}}-{{$pharmacyMedicines->receivedDay}}-{{$pharmacyMedicines->receivedYear}}</td>
                                                        <td class="cnterAlgn">{{$pharmacyMedicines->quantity}}</td>
                                                </tr>
                                                @endforeach
                                     
                                            </tbody>
                                            
                                        </table>
                                    </div>


                    </div>



                <div class="DivTemplate">
                        <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                        <div class="hr mb-2"></div> 
                        <input class="btn btn-outline-info waves-effect float-right" type="button" onclick="window.location = '{{ route('inventory.index') }}'" value="BACK">    
                    </div>
                </div>
            </div>
        </div>
    

<script>

    $(document).ready( function () {
    $('#TblSorter1').DataTable();
    });

</script>

@endsection