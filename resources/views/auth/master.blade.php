<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            <img src="https://www.bootstrapdash.com/demo/login-template-free-1/assets/images/logo.svg" alt="logo" class="logo">
          </div>
          <div class="login-wrapper my-auto">
            @yield('form')
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="https://www.bootstrapdash.com/demo/login-template-free-1/assets/images/login.jpg" alt="login image" class="login-img">
          <p class="text-white font-weight-medium text-center flex-grow align-self-end footer-link">
             <a href="https://web.facebook.com/thearith.loveTechnology/" target="_blank" class="text-white">Thearith</a> Develop
          </p>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
