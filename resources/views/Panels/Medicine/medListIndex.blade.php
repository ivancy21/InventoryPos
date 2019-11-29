@extends('Layouts.master')
@section('content')

<div class="container">

    <div class="d-flex flex-column mb-4">
        <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
             <span class="HeaderBannerText">Medicines</span>
             <a onclick="window.location='{{route('medicine.create')}}'" style="float:right; color:white;"  data-toggle="tooltip" title="Add Medicine"><i class="fas fa-plus fa-lg "></i></a>                                            
              
        </div>
        <div class="flex HeaderBody2">
          <div class="container" style="margin:3px;">
          <div class="row ml-1">
                   <div class="col-sm-3">
                      <div class="row">
                    <form action="{{route('medicine.index')}}" method="GET" >
                        <input type="submit" name="latest" class="btn btn-sm btn-primary ml-2" value="Latest" />
                    </form>     
                   
                  <form action="{{route('medicine.index')}}" method="GET">
                        <input type="submit" name="oldest" class="btn btn-sm btn-primary ml-2" value="Oldest" />
                    </form>
            
                      <form action="{{route('medicine.index')}}" method="GET">
                      <input type="submit" name="A-Z" class="btn btn-sm btn-primary ml-2" value="A-Z" />
                    </form>
 
                    <form action="{{route('medicine.index')}}" method="GET">
                      <input type="submit" name="Z-A" class="btn btn-sm btn-primary ml-2" value="Z-A" >
                    </form>
                  </div>
                  </div>
                  <div class="col-sm-3 offset-sm-6">
                        <form action="{{route('medicine.index')}}" method="GET">
                          <input type="text" name="search" style="width:190px;" value='{{ request()->input('search') }}'/>
                          <input type="submit" class="btn btn-sm btn-primary float-right" value="Search"/>
                        </form>    
                    </div>
                  </div>
                </div>
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
           <p style="margin-top:5px; color:black;"><b> {{$medicines->name}}</b>({{$medicines->genericName}})</p>
                    <p style="margin-top:-17px; color:black;">{{$medicines->companyName}}</p>
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