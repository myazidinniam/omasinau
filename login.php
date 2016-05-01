<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Member Baru</title>
        <style>
        </style>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap-responsive.css" type="text/css" rel="stylesheet" media="screen">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" >
        <link href="css/docs.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php include 'module/menu.php';
        ?>
        <div class="container">
            <div class="row">
                <div class="login-container">
                    <div class="login-title">
                        <h1 class="text-center">Login</h1>
                        <div class="account-wall">
                            <img class="img img-polaroid img-circle" src="img/hiu.jpg"
                                 alt="">
                            <br>
                            <br>
                            <form class="form-signin" method="post" action="controller/proses_login.php">
                                <input type="text" class="form-control" placeholder="Nama" name="nama" required autofocus>
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                                <div class="input-prepend input-append">
                                    <button class="btn btn-primary" name="login" type="submit">
                                        Masuk</button>
                                    <a href="index.php">
                                        <button class="btn btn-warning" type="reset">
                                            Batal</button>
                                    </a>
                                </div>
                                <br>
                                <br>
                                <label class="checkbox pull-left">
                                    <input type="checkbox" value="remember-me">
                                    Remember me
                                </label>
                                <a href="#" class="pull-right need-help">Butuh Bantuan ? </a><span class="clearfix"></span>

                            </form>
                        </div>
                        <a href="daftar.php" class="text-center new-account">Daftar Akun Baru </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</html>
