@extends('Layouts.master')
@section('content')

@include('Layouts.verticalSideBar')



<div class="content-container">
      
        <div class="container-fluid">

      
    <div class="d-flex flex-column">
    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
    <span class="HeaderBannerText">Medicine List</span>
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
                                <th class="th-sm tblheadfont1">Category </th>
                                <th class="th-sm tblheadfont1">Selling Price </th>
                                <th class="th-sm tblheadfont1">Generic Name </th>
                                <th class="th-sm tblheadfont1">Company Name </th>
                                <th class="th-sm tblheadfont1">Side Effects </th>
                                <th class="th-sm tblheadfont1" >Quantity </th>
                                <th class="th-sm tblheadfont1">History </th>
                                <th class="th-sm tblheadfont1" >Option </th>
                                
                        </tr>
                    </thead>

                        <tbody>
                            <tr class="text-center">
                                @foreach($medicine as $medicines)
                                    <td class="cnterAlgn">{{$medicines->productCode}}</td>
                                    <td class="cnterAlgn">{{$medicines->name}}</td>
                                    <td class="cnterAlgn">{{$medicines->category}}</td>
                                    <td class="cnterAlgn">{{$medicines->price}}</td>
                                    <td class="cnterAlgn">{{$medicines->genericName}}</td>
                                    <td class="cnterAlgn">{{$medicines->companyName}}</td>
                                    <td class="cnterAlgn">{{$medicines->sideEffects}}</td>
                                    <td class="cnterAlgn">{{ $medicines->pharmacyMedicines->sum('quantity') }}</td>
                                    <td class="cnterAlgn"><button class="btn btn-info btn-sm" onclick="window.location='{{route('medicine.show',$medicines->id)}}'"><i class="far fa-eye"></i> View</button>   
                                    </td>
                                        
                                    <td class="cnterAlgn"><div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                        </button>
                                        <div class="dropdown-menu">
                                        <button class="dropdown-item" onclick="window.location='{{route('medicine.edit',$medicines->id)}}'"> <i class="fa fa-edit"></i> Edit</button>   
                                        <form method="POST" action="{{ route('medicine.destroy', $medicines->id) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item" > <i class="fa fa-trash-alt"></i> remove</button>                   
                                        </form>
                                                          </div>
                                                          
                                    </td>
                                
                            </tr>
                                 @endforeach
                
                        
                        </tbody>
                        
                    </table>
                </div>
                    </div>
                </div>


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