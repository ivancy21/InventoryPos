@extends('Layouts.master')
@section('content')

@include('Layouts.verticalSideBar')



<div class="content-container">
      
        <div class="container-fluid">

      
    <div class="d-flex flex-column">
    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
    <span class="HeaderBannerText">Medicines</span>
    </div>
    <div class="flex" style="background-color: white; border-radius: 0rem 0rem .75rem .75rem; overflow: auto">
            <div class="tab">
            <button class="tablinks">Medicine List</button>
            <button class="tablinks">History</button>    
    </div>
   
</div>



{{-- Product List Template --}}

    <div id="ProdList" class="tabcontent" style="display:block;">
        <div class="DivTemplate">
                @if($message = Session::get('success'))
                <div class="alert alert-success">
                  <center><p>{{$message}}</p></center>
              </div>
            @endif
            <div class="table-responsive">
                <table id="TblSorter1" class="table table-hover  table-borderless" cellspacing="0" width="100%">
                    <thead  class="thead-bg table-bordered">
                        <tr class="text-center">
                                <th class="th-sm tblheadfont1">Product Code </th>
                                <th class="th-sm tblheadfont1">Name </th>
                                <th class="th-sm tblheadfont1">Category </th>
                                <th class="th-sm tblheadfont1">Selling Price </th>
                                <th class="th-sm tblheadfont1" >Quantity </th>
                                <th class="th-sm tblheadfont1" >Option </th>
                                
                        </tr>
                    </thead>

                        <tbody>
                            <tr class="text-center">      
                                    <td class="cnterAlgn"> A115A1558</td>
                                    <td class="cnterAlgn"> Biogesic</td>
                                    <td class="cnterAlgn"> Headache</td>
                                    <td class="cnterAlgn">20</td>
                                    <td class="cnterAlgn">0</td>                                  
                                    <td class="cnterAlgn"><div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/MedInventoryCreate"> <i class="fa fa-edit"></i>Add Quantity</a>   
                                                 <button type="submit" class="dropdown-item" > <i class="fa fa-trash-alt"></i>View History</button>                   
                                        </div>
                                                          
                                    </td>
                      
                      
                      
                                </tr>
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