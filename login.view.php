<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin login</title>

    <!-- Favicon -->
    <link href="assets/images/logo.jpg" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- bootstrap CSS File -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        .form-control:focus {
            outline: none;
            /*border-color: #ffffff;*/
            box-shadow: none;
        }
    </style>

</head>
<body>
    <section class="col-lg-6 mx-auto p-3">
        <div class="container">
            <!-- form header -->
            <header class="text-center">
                <img src="assets/images/logo.jpg" alt="" width="80px">
                <h4 class="pt-2">Login to your account</h4>
                <p>Type your username and password to login</p>
            </header>
            <!-- log in form -->

            <div class="card p-4 bg-light border-0">
                <form action="login.php" method="POST">
                    <div class="form-group mb-2">
                        <label for="email" class="form-label">Username</label>
                        <input class="form-control form-control-sm" type="text" name="username" required />
                    </div>
                    <div class="form-group mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control form-control-sm" type="password" name="password" required />
                    </div>
                    <div class="pt-3">
                        <input type="reset" class="btn btn-secondary btn-sm me-2" value="Cancel">
                        <input type="submit" class="btn btn-primary btn-sm" name="login" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </section>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>