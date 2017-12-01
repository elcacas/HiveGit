<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>HIVE - Encourge Your Future</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stars.css">
    <link rel="icon" href="imagenes/hive.ico">


</head>

<body>
<div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    PROPULSAR
                </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-home"></i> Inicio</a>
            </li>
            <li>
                <a href="360.html"><i class="fa fa-fw fa-file-o"></i> 360</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-cog"></i> Plan de Carrera</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-bank"></i>Pro rewards</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-dropbox"></i> Clima laboral</a>
            </li>
            <li>
                <a href="http://127.0.0.1:8090/scriptcase/app/DH/appt1_Login/" target="_blank"><i class="fa fa-fw fa-dropbox"></i>Administración</a>
            </li>
        </ul>

    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <header class="cho">

    </header>
    <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>
        <div class="container">
            <div class="row">
                <div>
                    <div class="c"><p>Noticia 1</p></div>
                    <div class="cuadro"><p>Noticia 2</p></div>
                    <div class="cuadro"><p>Noticia 3</p></div>
                </div>
                <div>
                    <?php
                    $url = "data/ranking.json";
                    $json=file_get_contents($url);
                    $pros =  json_decode($json);

                    ?>

                    <h2>Tabla</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <th>Pro</th>
                                <th>Nivel</th>
                            </tr>
                            <?php
                            foreach ($pros as $pro) {
                                $stars = round( $pro->level * 2, 0, PHP_ROUND_HALF_UP);

                                echo '<tr>';
                                echo "<td><a href=\"#\" style='color: black' onclick=\"window.open('radar/index.php?value=".$pro->_row."','_blank','toolbar=0,location=0');\">".$pro -> pro."</a><br>
                                        <span style='font-size: small'> $pro->puesto_especifico </span></td>";
                                echo '<td>'. str_repeat('<i class="fa fa-star" style="color: #cb010b"></i> ',$pro->level) .'</td>';
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

<script  src="js/index.js"></script>

</body>
</html>
