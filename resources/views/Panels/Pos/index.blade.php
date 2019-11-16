@extends('Layouts.master')
@section('content')




<div class="d-flex flex-column col-sm-12">
<div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
        <span class="HeaderBannerText">Pos</span>
        </div>
 </div>
      
    <div class="container-fluid ">
        <div class="row">         
                <div class="col-sm-8">
                        <div class="DivTemplate">
                                <div class="table-responsive">
                                    <table id="tbl1" class="table table-hover  table-borderless dataDisplayer " cellspacing="0" width="100%">
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
                                                  
                                                        <td class="cnterAlgn">ASDASD</td>
                                                        <td class="cnterAlgn">ASDAS</td>
                                                        <td class="cnterAlgn">ASD</td>
                                                        <td class="cnterAlgn">ASD</td>
                                                        <td class="cnterAlgn">ASD</td>
                                                        <td class="cnterAlgn">ASD</td>
                                                        <td class="cnterAlgn">ASD</td>
                                                        <td class="cnterAlgn">ASD</td>
                                                        <td class="cnterAlgn">ASD</td>
                                                </tr>
                                                  
                                            
                                            </tbody>
                                            
                                        </table>
                                </div>
                        </div>       
                </div>
        

                                <div class="col-sm-4">
                                        <div class="DivTemplate" >
                                                <div class="table-responsive">
                                                    <table class="table table-borderless">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">First</th>
                                                                <th scope="col">Last</th>
                                                                <th scope="col">Handle</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Jacob</td>
                                                                <td>Thornton</td>
                                                                <td>@fat</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td colspan="2">Larry the Bird</td>
                                                                <td>@twitter</td>
                                                            </tr>
                                                            <tr>
                                                                    <th scope="row">3</th>
                                                                    <td colspan="2">Larry the Bird</td>
                                                                    <td>@twitter</td>
                                                                </tr>
                                                                <tr>
                                                                        <th scope="row">3</th>
                                                                        <td colspan="2">Larry the Bird</td>
                                                                        <td>@twitter</td>
                                                                    </tr>
                                                            </tbody>
                                                        </table>
                                                </div>
                                        </div>
                        
                                                <div class="DivTemplate" >
                                                    <div class="DivHeaderText">Total : $100000  <a type="button" href="/payment" class="btn btn-info btn-sm" style="float:right;">Payment</a></div>
                                                    <div class="hr mt-2"></div>

                                                </div>

                    </div>
            </div>
            
    </div>
                        

              

<script>
  $(document).ready( function () {
    $('#tbl1').DataTable();
   
    });

    </script>


@endsection