<!DOCTYPE html>
<html lang="en" class="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Launcherr</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="../assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="../assets/css/style.css" rel="stylesheet" />
  <link href="../assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- loader-->
  <link href="../assets/css/pace.min.css" rel="stylesheet" />


  <!--Theme Styles-->
  <link href="../assets/css/dark-theme.css" rel="stylesheet" />
  <link href="../assets/css/light-theme.css" rel="stylesheet" />
  <link href="../assets/css/semi-dark.css" rel="stylesheet" />
  <link href="../assets/css/header-colors.css" rel="stylesheet" />

  <!-- loader-->
  <link href="../assets/css/pace.min.css" rel="stylesheet" />


  <!--Theme Styles-->
  <link href="../assets/css/dark-theme.css" rel="stylesheet" />
  <link href="../assets/css/light-theme.css" rel="stylesheet" />
  <link href="../assets/css/semi-dark.css" rel="stylesheet" />
  <link href="../assets/css/header-colors.css" rel="stylesheet" />
</head>

<body class="bg-login">

  <!--start wrapper-->
  <div class="wrapper">

    <!--start content-->
    <main class="authentication-content mt-5 pt-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-4 mx-auto">
            <div class="card shadow rounded-5 overflow-hidden">
              <div class="card-body p-4 p-sm-5">
                <img src="https://launcherr-2q34.vercel.app/logo.svg" style="margin-left:30%"/>
                <h5 class="card-title" style="text-align: center">Sign In</h5>
                <form class="form-body" action="userLogin" method="POST">
                    @csrf
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                        Login Failed
                    </div>
                    @endif
                  <div class="row g-3">
                    <div class="col-12">
                      <label for="inputEmailAddress" class="form-label">Email Address</label>
                      <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                            class="bi bi-envelope-fill"></i></div>
                        <input type="email" class="form-control radius-30 ps-5" id="inputEmailAddress"
                          placeholder="Email Address" name="email">
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="inputChoosePassword" class="form-label">Enter Password</label>
                      <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                            class="bi bi-lock-fill"></i></div>
                        <input type="password" class="form-control radius-30 ps-5" id="inputChoosePassword"
                          placeholder="Enter Password" name="password">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary radius-30">Sign In</button>
                      </div>
                    </div>
                    <div class="col-12">
                      <p class="mb-0">Don't have an account yet? <a href="signup">Sign up here</a>
                      </p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!--end page main-->

  </div>
  <!--end wrapper-->
  <!--plugins-->
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/pace.min.js"></script>


</body>
</html>