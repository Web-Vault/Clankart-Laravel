<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Login | ClanKart </title>
          <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

          <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">


           <!-- Bootstrap CSS -->
           <link href="{{ URL::to('/') }}/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="{{URL::to('/')}}/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="{{URL::to('/')}}/view_css/login.css">
</head>

<body>
          <div class="container">
                    @if(session('success'))
                              <div class="alert alert-success mt-3">{{ session('success') }}</div>
                    @endif
                    @if(session('error'))
                              <div class="alert alert-danger mt-3">{{ session('error') }}</div>
                    @endif
                    <div class="tab-content">
                              <div id="loginForm" class="active">
                                        <h3 class="mb-4">Login</h3>
                                        <form action="indexLogin" method="post">
                                                  @csrf
                                                  <div class="form-group">
                                                            <label for="loginEmail">Email</label>
                                                            <input type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="Enter email">
                                                            <span class="text-danger">
                                                                      @error('loginEmail')
                                                                      {{ $message}}
                                                                      @enderror
                                                            </span>
                                                  </div>
                                                  <div class="form-group">
                                                            <label for="loginPassword">Password</label>
                                                            <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Enter password">
                                                            <span class="text-danger">
                                                                      @error('loginPassword')
                                                                      {{ $message}}
                                                                      @enderror
                                                            </span>
                                                  </div>
                                                  <div class="form-actions d-flex justify-content-between align-items-center">
                                                            <a href="{{ route('password.request_form') }}" class="btn btn-link p-0">Forgot Password?</a>
                                                            <button type="submit" class="update">Login</button>
                                                  </div>
                                          </form>
                              </div>

                              <div class="mt-4">
                                        <span>Don't have an account?</span>
                                        <a href="{{ route('register') }}">Create one</a>
                              </div>

                              <!-- Forgot Password (OTP) moved to separate dedicated pages -->
                    </div>
          </div>

          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<script>
          document.addEventListener('DOMContentLoaded', function() {
                    // No tabs anymore; page only contains login form
          });
</script>

</html>