@extends('Layouts.master')
@section('content')

@include('Layouts.verticalSideBar')

<div class="content-container">

            <div class="mr-4">
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
                    <th class="th-sm tblheadfont1">Image</th>
                    <th class="th-sm tblheadfont1">Medicine Name</th>
                    <th class="th-sm tblheadfont1">Code</th>
                    <th class="th-sm tblheadfont1">Price</th>
                    <th class="th-sm tblheadfont1 tbw">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center tr-bg">
                    <td class="pwd">
                        <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/sheep-3.jpg" class="img-fluid img-thumbnail" alt="Sheep">
                    </td>
                    <td>Biogesic</td>
                    <td>A115A</td>
                    <td>2.846</td>
                    <td><a type="submit" href="/MedShow" class="btn btn-primary tbw">Select</a></td>
                  </tr>
                  <tr class="text-center tr-bg">
                    <td class="pwd">
                        <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/sheep-5.jpg" class="img-fluid img-thumbnail" alt="Sheep">
                    </td>
                    <td>LevoCitirizine</td>
                    <td>A115B</td>
                    <td>20</td>
                    <td><button type="submit" class="btn btn-primary" onclick="window.location='{{route('allergyHistory.show', $allergyHistories->id)}}'">show</button></td>
                  </tr>
                </tbody>
              </table>   
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