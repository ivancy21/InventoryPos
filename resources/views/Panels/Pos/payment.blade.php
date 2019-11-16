@extends('Layouts.master')
@section('content')



<div class="container">
<div class="d-flex flex-column col-sm-12">
<div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
        <span class="HeaderBannerText">Payment</span>
        </div>
 </div>
      
    <div class="container-fluid ">
        
    <div class="row">
         <div class="col-sm-5">
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
                                    </div>
    
                                        <div class="col-sm-7">
                                                <div class="DivTemplate" >
                                                       <div class="container">
                                                                <div class="col-sm-9">
                                                                    <label for="exampleForm2">Quantity</label>
                                                                    <input type="text" id="quantity" class="form-control" name="quantity" >
                                                                    
                                                                </div>
                                                                <div class="col-sm-9">
                                                                        <label for="exampleForm2">Date Created</label>
                                                                        <input type="text" id="dateCreated" class="form-control" name="dateCreated" >
                                                                    </div>
                                                                <div class="col-sm-9">
                                                                    <label for="exampleForm2">Date Expired</label>
                                                                    <input type="text" id="dateExpiry" class="form-control" name="dateExpiry" >
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <label for="exampleForm2">Date Received</label>
                                                                    <input type="text" id="dateReceived" class="form-control" name="dateReceived" >
                                                                </div>
                                                                <div class="col-sm-9">
                                                                        <label for="exampleForm2">Date Received</label>
                                                                        <input type="text" id="dateReceived" class="form-control" name="dateReceived" >
                                                                    </div>

                                                                    <div class="hr mt-3"></div>
                                                                    <button class="btn btn-info offset-sm-10 mt-2">confirm</div>

                                                                </div>

                                                                
                                                    
                                            </div>
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