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
        
          
        
        

  <div class="CardDiv" style="margin-top:50px">
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
           <p style="margin-top:5px; color:black;"><b> {{$medicines->name}}</b>({{$medicines->genericName}})</p>
                    <p style="margin-top:-17px; color:black;">{{$medicines->companyName}}</p>
                    <button type="submit" class="btn btn-info btn-sm" style="margin-top:-3px;" onclick="window.location='{{route('medicine.show', $medicines->id)}}'">Select</button>
           </center>  
          </div>
          </div>
        </div>
          <!--cards -->
          @endforeach
              <div class="container" style="margin-top:-250px;float:right"> 
                <form action="{{route('medicine.index')}}" method="GET" >
                    <input type="submit" name="latest" class="btn btn-sm btn-primary" value="Latest" />
                </form>
              </div>

              <div class="container" style="margin-top:-250px; margin-left:50px; float:left "> 
              <form action="{{route('medicine.index')}}" method="GET">
                    <input type="submit" name="oldest" class="btn btn-sm btn-primary" value="Oldest" />
                </form>
              </div>

              <div class="container" style="margin-top:-250px; margin-left:105px; float:left"> 
                  <form action="{{route('medicine.index')}}" method="GET">
                  <input type="submit" name="A-Z" class="btn btn-sm btn-primary" value="A-Z" />
                </form>
              </div>
                
              <div class="container" style="margin-top:-250px; margin-left:148px; float:left"> 
                <form action="{{route('medicine.index')}}" method="GET">
                  <input type="submit" name="Z-A" class="btn btn-sm btn-primary" value="Z-A" >
                </form>
                
                <div class="container" style="margin-top:-30px;margin-left:700px"> 
                    <form action="{{route('medicine.index')}}" method="GET">
                      <input type="text" name="search" value='{{ request()->input('search') }}' />
                      <input type="submit" class="btn btn-sm btn-primary" value="Search" />
                    </form>
                </div>
    
              </div>
  </div>
      </div>
    </div>
@endsection