<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/ico" />

    <title>Gestion des cadres</title>

    <!-- Bootstrap -->

    <link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('assets/vendors/animate.css/animate.min.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <h1>Login Form</h1>
               
              <div>
                <input type="text" class="form-control" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required="" />
              </div>
              <div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mot de Passe" />
              </div>
              <div>
                <button type="submit"  class="btn btn-outline-info" >Log in</button>
               
              </div>

              <div class="clearfix"></div>

              
                  <h1><i href="index.html" class="site_title"><img src="assets/images/wilaya.png" alt="Logo"></i> Wilaya Activités</h1>
                  <p>© Prefecture Région Marrakech-Safi</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
              
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

