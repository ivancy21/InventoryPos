@extends('Layouts.master')
@section('content')

@include('Layouts.verticalSideBar')

<div class="content-container">



    <div class="container">

            <div class="d-flex flex-column">
                    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                    <span class="HeaderBannerText">Medicines</span>
                    </div>

                    <div class="flex" style="background-color: white; border-radius: 0rem 0rem .75rem .75rem; overflow: auto">
                            <a onclick="window.location='{{route('medicine.create')}}'" style="float:right; color:#00a1db;"  data-toggle="tooltip" title="Add Medicine"><i class="fas fa-plus fa-2x mt-1 mr-2 "></i></a>                                            
                    </div>
                

      <div class="DivTemplate">
            <div class="table-responsive">
                  
              <table class="table table-image table-hover" id="TblSorter1" cellspacing="0" width="100%">
                <thead class="thead-bg table-bordered">
                  <tr class="text-center">
                   <th class="th-sm tblheadfont1">Medicine Name</th>
                    <th class="th-sm tblheadfont1">Code</th>
                    <th class="th-sm tblheadfont1">Price</th>
                    <th class="th-sm tblheadfont1">Quantity</th>
                    <th class="th-sm tblheadfont1 tbw">Option</th>
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach($medicine as $medicines)
                 
                  <tr class="text-center tr-bg">
                    <td>{{$medicines->name}}</td>
                    <td>{{$medicines->productCode}}</td>
                    <td>{{$medicines->price}}</td>
                    <td>{{$medicines->pharmacyMedicines->sum('quantity')}}</td>
                    <td class="cnterAlgn"><div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                            </button>
                            <div class="dropdown-menu">
                                <a type="submit" class="dropdown-item" onclick="window.location='{{route('pharmacyMedicine.show', $medicines->id)}}'"> <i class="fa fa-edit"></i>Add Quantity</a>   
                                     <a type="submit" onclick="window.location='{{route('inventory.show', $medicines->id)}}'" class="dropdown-item" > <i class="fa fa-trash-alt"></i>View History</a>                   
                            </div>
                                              
                        </td>
                </tr>
              
                  @endforeach
                </tbody>
              </table>   
          </div>
        </div>
      </div>

<script>
 
 $(document).ready( function () {
    $('#TblSorter1').DataTable();
 });

</script>




</div>
@endsection