@extends('Layouts.master')
@section('content')

    <div class="container">
        <div class="d-flex flex-column mb-4">
                <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                     <span class="HeaderBannerText">Medicines</span>
                </div>
                <div class="flex HeaderBody2">
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
                                @foreach($medicine as $medicines)
                                <tr class="text-center tr-bg">
                                    <td class="pwd">
                                    @if ($medicines->medicinePhoto != null)
                                      <img src="{{ asset('images/medicinePhotos/'.$medicines->medicinePhoto) }}" height="50px" width="90px" alt="">
                                      @else
                                      <img src="{{ asset('images/medicineicon.png') }}" height="50px" width="90px" alt="">
                                      @endif </td>
                                    <td class="pad-top">{{$medicines->name}}</td>
                                    <td class="pad-top">{{$medicines->productCode}}</td>
                                    <td class="pad-top">&#8369;{{$medicines->price}}</td>
                                    <td class="pad-top"><button type="submit" class="btn btn-primary" onclick="window.location='{{route('medicine.show', $medicines->id)}}'">select</button></td>
                                </tr>
                                @endforeach
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