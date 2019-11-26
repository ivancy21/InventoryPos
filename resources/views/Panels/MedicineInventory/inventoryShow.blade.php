@extends('Layouts.master')
@section('content')


      
{{-- Side Nav --}}
    <div class="d-flex flex-column">
            <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                    <span class="HeaderBannerText">History</span>
                    </div>
                    <div class="flex HeaderBody"> 
                            <form class="md-form">
                                    <div class="file-field">
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

    

{{-- Product List Template --}}

    <div id="ProdList" class="tabcontent" style="display:block;">
        <div class="DivTemplate">
            <div class="table-responsive">
                
                <table id="TblSorter1" class="table table-hover  table-borderless dataDisplayer " cellspacing="0" width="100%">
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
                            <tr class="text-center">
                                    @foreach($pharmacyMedicine as $pharmacyMedicines)
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
                </div>

                <div class="DivTemplate">
                        <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                        <div class="hr mb-2"></div> 
                        <input class="btn btn-outline-info waves-effect float-right" type="button" onclick="window.location = '{{ route('inventory.index') }}'" value="BACK">    
                    </div>
               

      </div>   
    </div>
 

<script>

    $(document).ready( function () {
    $('#TblSorter1').DataTable();
    $('#TblSorter2').DataTable();
    });

    
    

    function openTab(evt, TabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(TabName).style.display = "block";
        evt.currentTarget.className += " active";
    }


</script>

@endsection