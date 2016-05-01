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
                <!-- Form Name -->
                <div class="page-header container-fluid">
                    <label class="control-label">
                        <center>
                            <legend class="label-info">
                                DAFTAR MEMBER BARU
                            </legend>
                        </center>
                    </label>
                </div>
                <form class="form-horizontal" action="controller/proses_daftar.php" enctype="multipart/form-data" method="POST">                    
                    <fieldset>                      <div class="span6">
                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="textinput">Nama</label>
                                <div class="controls">
                                    <input id="textinput" name="nama" type="text" placeholder="Username" style="height: auto" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="textinput">Email</label>
                                <div class="controls">
                                    <input id="textinput" name="email" type="email" placeholder="@example" style="height: auto" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="textinput">Password</label>
                                <div class="controls">
                                    <input id="textinput" name="password" type="password" placeholder="Password" style="height: auto" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="textinput">Tanggal Lahir</label>
                                <div class="controls">
                                    <input id="textinput" name="tgllahir" type="date" placeholder="placeholder" style="height: auto" required="">

                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="control-group">
                                <label class="control-label" for="selectbasic">Kelamin</label>
                                <div class="controls">
                                    <select id="selectbasic" name="kelamin" class="input-small">
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Prepended text-->
                            <div class="control-group">
                                <label class="control-label" for="prependedtext">Telp</label>
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on">+62</span>
                                        <input id="prependedtext" name="nohp" style="height: auto" placeholder="xxxx" type="text" required="">
                                    </div>

                                </div>
                            </div>

                            <!-- Multiple Radios -->
                            <div class="control-group">
                                <label class="control-label" for="checkbox">Centang Untuk Menyetujui Pendaftaran</label>
                                <div class="controls">
                                    <label class="checkbox" id="checkbox">
                                        <input type="checkbox"  value="setuju" checked="checked">
                                        Setuju
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="span6">
                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="fileinput">Foto</label>
                                <div class="controls">
                                    <img class="img-rounded img-polaroid" src="img/user-avatar.jpg" >
                                    <br>
                                    <br>
                                    <input id="fileinput" name="foto" type="file" required="">
                                </div>
                            </div>
                            <div class="control-group">

                                <label class="control-label">
                                    Verifikasi
                                </label>
                                <div class="controls">
                                    <img class="img-rounded img-polaroid" src="controller/captcha.php" >
                                    <br>
                                    <br>
                                    <input name="captcha" type="text" style="height: auto" id="captcha" size="8"/>  
                                </div>
                            </div>
                            <div class="controls">
                                <button class="btn btn-success" type="submit" value="Daftar">Daftar</button>
                                <a class="btn btn-danger" href="index.php">Kembali</a></button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</html>
