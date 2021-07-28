<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Employee | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">Employee</h1>

            </div>
            <h3>Welcome to Employee</h3>
              
                    <div class="tabs-container">
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Employe</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#tab-2">Employer</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" id="tab-1" class="tab-pane active">
                                <div class="panel-body">
                                <form class="m-t" role="form" action="dashboard.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Employee Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" required="">
                                    </div>
                                    <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                                    <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.php">Create an account</a>
                                    <a href="#"><small>Forgot password?</small></a>
                                </form>
                                </div>
                            </div>


                            <div role="tabpanel" id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                   <form class="m-t" role="form" action="dashboard.php">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Employer Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" required="">
                                        </div>
                                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                                        <a href="#"><small>Forgot password?</small></a>
                                        <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.php">Create an account</a>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
            
               
         


          
            <p class="m-t"> <small>Employee All right Reserved &copy; 2021</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
