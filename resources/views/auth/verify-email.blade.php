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
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="{{ asset('login.jpg') }}" alt="login" class="login-card-img">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end footer-link text-small">
              Free <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">Bootstrap dashboard templates</a> from Bootstrapdash
            </p>
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="https://www.bootstrapdash.com/demo/login-template-free-2/assets/images/logo.svg" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Please visit your mail box to verify account.</p>
              <form action="{{ route('verification.send') }}" method="POST">
                    @csrf
                    @if(session('status'))
                        <span class="text-success">
                            {{ session('status')  }}
                        </span>
                    @endif
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" 
                  value="Resend Link">
                </form>
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
