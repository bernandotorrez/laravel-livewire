<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel</title>

    <!-- Load CSS with blade -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

     <!-- Load JS with blade -->
     <script src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"></script>
     <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

     <style>
         body {
            min-height: 75rem;
            padding-top: 4.5rem;
        }
     </style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
  </div>
</nav>

<main role="main" class="container">
  <div class="jumbotron">
    <h1>Hello World!</h1>
  </div>
</main>
    
</body>
</html>