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

  <div class="CardDiv">
  @foreach($medicine as $medicines)
      <div class="cards">
          <div class="image">
              @if ($medicines->medicinePhoto != null)
              <img src="{{ asset('images/medicinePhotos/'.$medicines->medicinePhoto) }}" height="50px" width="90px" alt="" class="img-shadow card-img">
              @else
              <img src="{{ asset('images/medicineicon.png') }}" height="50px" width="90px" alt="" class="img-shadow card-img">
              @endif
          </div>
         <div class="container">
           <div class="table-responsive">
           <center>
                    <p style="margin-top:5px; color:black;"> {{$medicines->productCode}}</p>
                    <p style="margin-top:-17px; color:black;">   {{$medicines->name}}</p>
                    <button type="submit" class="btn btn-info btn-sm" style="margin-top:-3px;" onclick="window.location='{{route('medicine.show', $medicines->id)}}'">Select</button>
           </center>  
          </div>
          </div>
        </div>
          <!--cards -->
          @endforeach
    
        </div>
      
      </div>
    </div>
@endsection