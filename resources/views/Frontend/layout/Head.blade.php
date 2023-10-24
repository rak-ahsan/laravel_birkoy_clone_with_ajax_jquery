<!DOCTYPE html>
<html lang="en">
<head>
  <?php $login = true?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
    <title>Bikroy - Electronics, Cars, Property and Jobs in Bangladesh</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg" style="background-color: #149777;">
        <div class="container" >
          <a class="navbar-brand" href="/"><img src="logo.png" alt="" srcset="" style="height:40px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('ads')}}"><b>All ads</b></a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 left">
                <li class="nav-item px-2">
                  <a class="nav-link active" aria-current="page" href="{{ route('chat') }}"> <i class="fa-solid fa-comments px-2" style="color: #ffffff;"></i>Chats</a>
                </li>
                
                @if (Auth::user())
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}"><i class="fa-solid fa-user-large px-2" style="color: #ffffff;"></i> My Account</a>
              </li>
              <form method="POST" action="{{ route('logout') }}" id="logout-form">
                @csrf
                <a href="{{ route('logout') }}" class="nav-link text-white" 
                   class="nav-link" 
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
              @else
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('login')}}">Login</a>
            </li>
                @endif
                  <li class="nav-item px-2">
                    <a class="nav-link active btn text-dark p-2" aria-current="page" href="#" style="background-color: #ffc800"><b>POST YOUR AD</b></a>
                  </li>
              </ul>
          </div>
        </div>
    </nav>
    @yield('content')
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="{{ asset('assets/css/main.js') }}"></script>

</body>
</html>