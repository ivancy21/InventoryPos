@extends('Layouts.master')
@section('content')

@include('Layouts.verticalSideBar')

<form class="form-horizontal" method="POST"  action="{{ route('inventory.store') }}">
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
{!!csrf_field()!!}
<div class="content-container">
      
        <div class="container-fluid">

    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
        <span class="HeaderBannerText">Add Items</span>
    </div>
          <div class="DivTemplate">
              <div class="container container-fluid">
                <div class="row">
                        <div class="row">
                            <div class="col-sm">
                                                
                                            
                                    <label for="exampleForm2">Select </label>
                                    <select   name="priceId" id="priceId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @foreach ($price as $prices)
                                        <option value="{{$prices->id}}">{{$prices->name}}</option>
                                    @endforeach     
                                    </select>
                                    
                                </div>

                        </div>
                                </div>  
                    
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="exampleForm2">Quantity</label>
                                        <input type="text" id="quantity" class="form-control" name="quantity" >
                                        
                                    </div>
                                    <div class="col-sm-4">
                                            <label for="exampleForm2">Date Created</label>
                                            <input type="date" id="dateCreated" class="form-control" name="dateCreated" >
                                        </div>
                                    <div class="col-sm-4">
                                        <label for="exampleForm2">Date Expired</label>
                                        <input type="date" id="dateExpiry" class="form-control" name="dateExpiry" >
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="exampleForm2">Date Received</label>
                                        <input type="date" id="dateReceived" class="form-control" name="dateReceived" >
                                    </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="DivTemplate">
                        <button type="submit" class="btn btn-primary" style="float:right;">Save</button>
                    </div>
                
</div>
</div>
</form>



@endsection