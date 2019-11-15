@extends('Layouts.master')
@section('content')

@include('Layouts.verticalSideBar')



<div class="content-container">
      
        <div class="container-fluid">

      
{{-- Side Nav --}}
    <div class="d-flex flex-column">
    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
    <span class="HeaderBannerText">Products</span>
    </div>
    
    <div class="flex" style="background-color: white; border-radius: 0rem 0rem .75rem .75rem; overflow: auto">
            <button type="submit" onclick="window.location='{{route('price.create')}}'" class="btn btn-success btn-sm mt-1 mr-2" style="float:right;"> <i class="fa fa-plus-circle"></i> Add Medicine</button>
    <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'ProdList')">Product List</button>
            <button class="tablinks" onclick="openTab(event, 'ProdHistory')">History</button>
           

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
                                <th class="th-sm tblheadfont1" >Option </th>
                                
                        </tr>
                    </thead>

                        <tbody>
                            <tr class="text-center">
                                @foreach($price as $prices)
                                    <td class="cnterAlgn">{{$prices->productCode}}</td>
                                    <td class="cnterAlgn">{{$prices->name}}</td>
                                    <td class="cnterAlgn">{{$prices->category}}</td>
                                    <td class="cnterAlgn">{{$prices->price}}</td>
                                    <td class="cnterAlgn">{{$prices->genericName}}</td>
                                    <td class="cnterAlgn">{{$prices->companyName}}</td>
                                    <td class="cnterAlgn">{{$prices->sideEffects}}</td>
                            <td class="cnterAlgn">{{ $prices->inventories->sum('quantity') }}</td>
                                    <td class="cnterAlgn"><div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                        </button>
                                        <div class="dropdown-menu">
                                        <button class="dropdown-item" onclick="window.location='{{route('price.edit',$prices->id)}}'"> <i class="fa fa-edit"></i> Edit</button>   
                                        <button class="dropdown-item" onclick="window.location='{{route('price.show',$prices->id)}}'">Quantity/Date History</button>   
                                        <form method="POST" action="{{ route('price.destroy', $prices->id) }}">
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
                            
                                
{{-- Modal Delete --}}
                                
        <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDelete"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold ml-5 text-danger">Delete</h4>
                        <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body mx-3">
                        <p class="text-center h4">Are you sure to delete selected row?</p>

                        </div>
                    <div class="modal-footer d-flex justify-content-center deleteButtonsWrapper">
                        <button type="button" class="btn btn-danger btnYesClass" id="btnYes" data-dismiss="modal">Yes</button>
                        <button type="button" class="btn btn-primary btnNoClass" id="btnNo" data-dismiss="modal">No</button>
                    </div>
                </div>
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