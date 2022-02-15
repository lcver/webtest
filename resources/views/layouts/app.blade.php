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
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> --}}
    {{-- Fontawesome Icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
    <div class="container">
      <div class="justify-content">
        <a href="#" class="logo">
            <img src="{{asset('storage/assets/images/coffee-house-logo.png')}}" alt="Coffee house logo">
        </a>
        <div class="toggle" onclick="toggleMenu()">
          {{-- <i class="bi bi-justify"></i> --}}
          <i class="fas fa-bars"></i>
        </div>
        <ul class="menu" >
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Our Product</a></li>
            <li><a href="#">Contact Us</a></li>
            <ul class="menu-footer">
              {{-- <li><a href=""><i class="bi bi-instagram"></i></a></li>
              <li><a href=""><i class="bi bi-facebook"></i></a></li>
              <li><a href=""><i class="bi bi-youtube"></i></a></li> --}}
              <li><a href=""><i class="fab fa-instagram"></i></a></li>
              <li><a href=""><i class="fab fa-facebook"></i></a></li>
              <li><a href=""><i class="fab fa-youtube"></i></a></li>
            </ul>
        </ul>
      </div>
    </div>
  </header>
  @yield('content')
  {{-- JQUERY --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  {{-- BOOTSTRAP --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  {{-- AOS --}}
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>