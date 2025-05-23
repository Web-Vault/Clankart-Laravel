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
                    <ul class="nav nav-tabs" id="tabMenu">
                              <li class="nav-item">
                                        <a class="nav-link active" id="loginTab">Login</a>
                              </li>
                              <li class="nav-item">
                                        <a class="nav-link" id="signupTab">Signup</a>
                              </li>
                    </ul>

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
                                                  <div class="form-actions">
                                                            <button type="button" class="btn btn-secondary" id="forgotPasswordLink">Forgot Password?</button>
                                                            <button type="submit" class="update">Login</button>
                                                  </div>
                                        </form>
                              </div>

                              <!-- Signup Form -->
                              <div id="signupForm">
                                        <h3 class="mb-4">Signup</h3>
                                        <form action="indexSignup" method="post">
                                                  @csrf
                                                  <div class="form-group">
                                                            <label for="signupName">First Name</label>
                                                            <input type="text" class="form-control" id="signupName" name="signupName" placeholder="Enter first name">
                                                             <span class="text-danger">
                                                                      @error('signupName')
                                                                      {{ $message}}
                                                                      @enderror
                                                            </span>
                                                  </div>
                                                  <div class="form-group">
                                                            <label for="signupEmail">Email</label>
                                                            <input type="email" class="form-control" id="signupEmail" name="signupEmail" placeholder="Enter email">
                                                             <span class="text-danger">
                                                                      @error('signupEmail')
                                                                      {{ $message}}
                                                                      @enderror
                                                            </span>
                                                  </div>
                                                  <div class="form-group">
                                                            <label for="signupPassword">Password</label>
                                                            <input type="password" class="form-control" id="signupPassword" name="signupPassword" placeholder="Enter password">
                                                             <span class="text-danger">
                                                                      @error('signupPassword')
                                                                      {{ $message}}
                                                                      @enderror
                                                            </span>
                                                  </div>
                                                  <div class="form-group">
                                                            <label for="signupConfirmPassword">Confirm Password</label>
                                                            <input type="password" class="form-control" id="signupConfirmPassword" name="signupConfirmPassword" placeholder="Confirm password">
                                                             <span class="text-danger">
                                                                      @error('signupConfirmPassword')
                                                                      {{ $message}}
                                                                      @enderror
                                                            </span>
                                                  </div>
                                                  <div class="form-actions">
                                                            <button type="submit" class="update">Signup</button>
                                                  </div>
                                        </form>
                              </div>

                              <!-- Forgot Password Form -->
                              <div id="forgotPasswordForm">
                                        <h3 class="mb-4">Forgot Password</h3>
                                        <form action="forgotPassword" method="post">
                                                  @csrf
                                                  <div class="form-group">
                                                            <label for="forgotEmail">Email</label>
                                                            <input type="email" class="form-control" id="forgotEmail" name="forgotEmail" placeholder="Enter your email">
                                                  </div>
                                                  <div class="form-actions">
                                                            <button type="submit" class="update">Submit</button>
                                                  </div>
                                        </form>
                              </div>
                    </div>
          </div>

          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<script>
          document.addEventListener('DOMContentLoaded', function() {
                    const loginTab = document.getElementById('loginTab');
                    const signupTab = document.getElementById('signupTab');
                    const loginForm = document.getElementById('loginForm');
                    const signupForm = document.getElementById('signupForm');
                    const forgotPasswordForm = document.getElementById('forgotPasswordForm');
                    const forgotPasswordLink = document.getElementById('forgotPasswordLink');

                    loginTab.addEventListener('click', function() {
                              showForm('login');
                    });

                    signupTab.addEventListener('click', function() {
                              showForm('signup');
                    });

                    forgotPasswordLink.addEventListener('click', function() {
                              showForm('forgotPassword');
                    });

                    forgotPasswordForm.addEventListener('submit', function(event) {
                              event.preventDefault();
                              showForm('login');
                    });

                    function showForm(formType) {
                              loginForm.style.display = formType === 'login' ? 'block' : 'none';
                              signupForm.style.display = formType === 'signup' ? 'block' : 'none';
                              forgotPasswordForm.style.display = formType === 'forgotPassword' ? 'block' : 'none';

                              loginTab.classList.toggle('active', formType === 'login');
                              signupTab.classList.toggle('active', formType === 'signup');
                    }

                    showForm('login');
          });
</script>

</html>