@extends('Layouts.master')
@section('content')

@include('Layouts.verticalSideBar')



<div class="content-container">
      
        <div class="container-fluid">

      
    <div class="d-flex flex-column">
            <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                    <span class="HeaderBannerText">History</span>
                    </div>
                    <div class="flex" style="background-color: white; border-radius: 0rem 0rem .75rem .75rem; overflow: auto">
                            <div class="tab">
                            <button class="tablinks" onclick="window.location='{{route('medicine.index')}}'">Medicine List</button>
                            <button class="tablinks" onclick="window.location='{{route('pharmacyMedicine.index')}}'">History</button>
                            <a onclick="window.location='{{route('medicine.create')}}'" style="float:right; color:#00a1db;"><i class="fas fa-plus fa-2x mt-1 mr-2 "></i></a>
                  
                          
                        
                    </div>
                   
                </div>
                


{{-- Product List Template --}}

    <div id="ProdList" class="tabcontent" style="display:block;">
        <div class="DivTemplate">
            <div class="table-responsive">
                
                <table id="TblSorter1" class="table table-hover  table-borderless dataDisplayer " cellspacing="0" width="100%">
                    <thead  class="thead-bg table-bordered">
                        <tr class="text-center">
                                <th class="th-sm tblheadfont1">Product Code </th>
                                <th class="th-sm tblheadfont1">Name </th>
                                <th class="th-sm tblheadfont1">Purchased Price </th>
                                <th class="th-sm tblheadfont1">Date Created </th>
                                <th class="th-sm tblheadfont1">Date Expired </th>
                                <th class="th-sm tblheadfont1"> Date Received </th>
                                <th class="th-sm tblheadfont1" >Quantity </th>
                                
                        </tr>
                    </thead>

                        <tbody>
                            <tr class="text-center">
                              
                                    @foreach($pharmacyMedicine as $pharmacyMedicines)
                                            <td class="cnterAlgn">{{$pharmacyMedicines->medicine->productCode}}</td>
                                            <td class="cnterAlgn">{{$pharmacyMedicines->medicine->name}}</td>
                                            <td class="cnterAlgn">{{$pharmacyMedicines->purchasedPrice}}</td>
                                            <td class="cnterAlgn">{{$pharmacyMedicines->dateCreated}}</td>
                                            <td class="cnterAlgn">{{$pharmacyMedicines->dateExpiry}}</td>
                                            <td class="cnterAlgn">{{$pharmacyMedicines->dateReceived}}</td>
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
                        <input class="btn btn-outline-info waves-effect float-right" type="button" onclick="window.location = '{{ route('medicine.index') }}'" value="BACK">    
                    </div>
                            

      </div>   
    </div>
  </div>












<script>

    $(document).ready( function () {
    $('#TblSorter1').DataTable();
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