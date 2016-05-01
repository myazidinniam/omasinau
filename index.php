<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>
            OmasinaU
        </title>
        <link href="css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="css/docs.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <?php
        include './module/menu.php';
        ?>
        <div class="container">
            <div class="row">
                <div class="page-header container-fluid">
                    <label class="control-label">
                        <center>
                            <legend class="label-info">
                                SELAMAT DATANG DI RUMAH BELAJAR 
                            </legend>
                        </center>
                    </label>
                </div>
                <?php
                include './config/config.php';
                ?>
            </div>
        </div>
        <?php
        //buat koneksi dengan MySQL
        $link = mysql_connect('localhost', 'root', '');
        $result = mysql_query('USE sinau');
        $result = mysql_query('SELECT * FROM user');
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
            ?>

            <div class="container">
                <table class='table table-hover table-striped table-bordered'>
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Kelamin</th>
                        </tr>
                        <tr>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['kelamin']; ?></td>
                        </tr>
                    </tbody>

                </table>
            <?php } ?>
    </body>
    <script src="js/bootstrap.js"></script>
</html>
