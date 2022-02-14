<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffe House @yield('title')</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    {{-- Style --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script>
      function toggleMenu() {
            var menuToggle = document.querySelector('.toggle');
            var menu = document.querySelector('.menu');
            var header = document.querySelector('header');
            menuToggle.classList.toggle('active');
            header.classList.toggle('active');
            menu.classList.toggle('active');
        }
    </script>
</head>
<body>
  <header>
    <a href="#" class="logo">
        <img src="{{asset('storage/assets/images/coffee-house-logo.png')}}" alt="Coffee house logo">
    </a>
    <div class="toggle" onclick="toggleMenu()">
      <i class="bi bi-justify"></i>
    </div>
    <ul class="menu" >
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Our Product</a></li>
        <li><a href="#">Contact Us</a></li>
        <ul class="menu-footer">
            <li><a href=""><i class="bi bi-instagram"></i></a></li>
            <li><a href=""><i class="bi bi-facebook"></i></a></li>
            <li><a href=""><i class="bi bi-youtube"></i></a></li>
        </ul>
    </ul>
</header>
  @yield('content')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>