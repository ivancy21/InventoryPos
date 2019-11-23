<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>MDRecords</title>
    <!-- Bootstrap Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- CSS File -->
    <link href="{{ asset('css/tableSorter.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />  
    <!-- Jquery Steps -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.js"></script>
   
    <script defer src="{{ asset('js/tableSorter.js') }}"></script>
    <script defer src="{{ asset('js/master.js') }}"></script>

    <link href="https://res.cloudinary.com/mdrecords/raw/upload/v1561439126/jquery.signaturepad.css" rel="stylesheet">
<script type="text/javascript" src="https://res.cloudinary.com/mdrecords/raw/upload/v1561439191/json2.min.js" defer>
</script>
<script type="text/javascript" src="https://res.cloudinary.com/mdrecords/raw/upload/v1561439191/numeric-1.2.6.min.js"
    defer></script>
<script type="text/javascript" src="https://res.cloudinary.com/mdrecords/raw/upload/v1561439179/bezier.js" defer>
</script>
<script type="text/javascript" src="https://res.cloudinary.com/mdrecords/raw/upload/v1561439185/html2canvas.js" defer>
</script>
<script type="text/javascript" src="https://res.cloudinary.com/mdrecords/raw/upload/v1561439191/jquery.signaturepad.js"
    defer></script>

    
<link href="{{ asset('css/croppie.css') }}" rel="stylesheet" />
<script type="text/javascript" src="{{ asset('js/croppie.js') }}" defer></script>

</head>
    
<body id="mainbody">
        <div id="master">
            <!-- Navigation -->    
            <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
                <img class="mdrecords-logo" src="{{ asset('images/MDR_icon.png') }}">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="navigation" href="/home">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="dropbtn">Patient Care
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="#">Patient Selection</a>
                                    <a href="/patientShow">Demographics</a>
                                    <a href="/createPatient">Registration</a>
                                    <a href="/createMedicalHistory">Medical History</a>
                                    <a href="/createOfficeVisit">Office Visit</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="navigation" href="/waitingRoom">Waiting Room</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="dropbtn">PhilHealth
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="philhealthclaimform1">CF-1</a>
                                    <a href="philhealthclaimform2">CF-2</a>
                                    <a href="philhealthclaimform3">CF-3</a>
                                    <a href="philhealthclaimform4">CF-4</a>
                                    <a href="claimSignatureForm">CSF</a>
                                </div>
                            </div>
                        </li>
                       
                    </ul>
                    {{-- <div class="nav-displayer user-details">
                        <table class="user-details-table">
                            <tr>
                                <td rowspan="2"><img src="
                                    @if (!empty(Auth::user()->userPic))
                                    {{ asset('images/userPhotos/'.Auth::user()->userPic) }}
                                    @else
                                    {{ asset('images/default pic.jpg') }}
                                    @endif
                                    " class="rounded-circle user-detail-photo">
                                </td>
                                <td>&emsp;
                                    <label onclick="window.location = '{{ route('users.show', Auth::user()->id) }}'" class="user-detail-name">
                                        {{ Auth::user()->lastName }}, {{ Auth::user()->firstName }} </label>&emsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    @if(!empty(Auth::user()->getRoleNames()))
                                    @foreach(Auth::user()->getRoleNames() as $userType)
                                    <strong class="label-color">{{ $userType }} </strong>
                                    @endforeach
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div> --}}
                   
                </div>
            </nav>
    
            <div class="mdrecords-body">    
                @yield('content')
            </div>
    </body>

</html>