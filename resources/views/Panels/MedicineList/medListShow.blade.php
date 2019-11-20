@extends('Layouts.master')
@section('content')

@include('Layouts.verticalSideBar')

<div class="content-container">

<div class="container">
     <div class="row">
            <div class="col-sm-4">
                <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                        <span class="HeaderBannerText">Insert Picture</span>
                </div>

                <div class="DivTemplate">   
                                <div class="file-field">
                                  <div class="z-depth-1-half mb-4">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" id="blah" class="img-fluid"
                                      alt="example placeholder">
                                  </div>
                                </div>  
                </div>
            </div>
    
             <div class="col-sm-8">
                            <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                                    <span class="HeaderBannerText">Details</span>
                            </div>

                        <div class="DivTemplate">
                                <div class="table-responsive">
                                        <table class="table table-borderless dataDisplayer">
                                            <tbody>
                                                <tr class="highlight">
                                                    <td width="200px">Medicine Code</td>
                                                    <td>A115A</td>
                                                </tr>
                                                <tr class="highlight">
                                                    <td>Medicine Name</td>
                                                    <td>Biogesic</td>
                                                </tr>
                                                <tr class="highlight">
                                                    <td>Category</td>
                                                    <td>Head Ache</td>
                                                </tr>
                                                <tr class="highlight">
                                                    <td>Selling Price</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr class="highlight">
                                                    <td>Generic Name</td>
                                                    <td>Gayagesic</td>
                                                </tr>
                                                <tr class="highlight">
                                                    <td>Company Name</td>
                                                    <td>IvanMedSolutions</td>
                                                </tr>
                                                <tr class="highlight">
                                                    <td>Side Effect</td>
                                                    <td>1min feeling Hight</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                            
                        </div>
                    

                      <div class="DivTemplate">
                          <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                          <div class="hr mb-2"></div> 
                          <button type="submit" class="btn btn-info">EDIT</button>
                          <input class="btn btn-outline-info waves-effect float-right" type="button" href="/MedList" value="BACK">    
                      </div>

                    </div>



                    </div>              


            </div>
      </div>

@endsection