<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | School Managment </title>

    <!--Materia - Bootswatch theme(Bootstrap v5.1.3) -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/materia/bootstrap.min.css' />
    <!-- Custom Style theme -->
    <link rel="stylesheet" href="./style/style.css">

</head>

<body class="bg-primary login-page">
    <div class="container">
        <div class="login-container d-flex flex-column align-items-center">

            <div class="login-form col-lg-4 p-4 border border-secondary shadow-lg bg-light">
                <!-- Logo  -->
                <div class="company-logo">
                    <p class="fs-3 text-center">
                        <strong>School MGMT</strong> | Login
                    </p>
                </div>
                <div class="error-container">
                    <!-- display error here -->
                </div>
                <!--Login Form start-->
                <form>
                    <div class="form-container d-flex flex-column justify-content-center">
                        <div class="form-group">
                            <label for="user_email" class="form-label mt-4">Email address</label>
                            <input type="email" class="form-control" id="user_email" name="u_email" aria-describedby="emailHelp" placeholder="Enter email">

                        </div>
                        <div class="form-group">
                            <label for="user_password" class="form-label mt-4">Password</label>
                            <input type="password" class="form-control" id="user_password" name="u_password" placeholder="Password">
                        </div>

                        <button type="submit" name="login" class="btn btn-dark mt-4">Login</button>
                    </div>
                </form>
                <div class="mt-4">
                    <a href="#" class="forgot-link">Forgot your password? click here</a>
                </div>
                <!-- Login Form end -->


            </div>
        </div>
    </div>

    <!-- Scripts -->
    <!-- jQuery script v3.6.0 -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <!-- Bootstrap script v5.1.3 -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js'></script>


</body>

</html>