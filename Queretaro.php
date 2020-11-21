<?php  
  $conexion=mysqli_connect('localhost','root','','covid');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Queretaro</title>
	<link rel="stylesheet" href="stylos.css">
    <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>
<body>
	<nav>
        <h3>COVID-19</h3>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Estados <i class="icon ion-md-arrow-dropdown"></i></a>
            	<ul>
                    <li><a href="Aguascalientes.php">Aguacalientes</a></li>
                    <li><a href="Zacatecas.php">Zacatecas</a></li>
                    <!--<li><a href="SanLuisPotosi.php">San Luis Potosi</a></li>-->
                    <li><a href="Jalisco.php">Jalisco</a></li>
                    <li><a href="Michoacan.php">Michoacan</a></li>
                    <li><a href="Guanajuato.php">Guanajuato</a></li>
                    <!--<li><a href="Queretaro.php">Queretaro</a></li>-->
                </ul>
            </li>
            <li><a href="#">Servicios <i class="icon ion-md-arrow-dropdown"></i></a>
                <ul>
                    <li><a href="#">Diseño web</a></li>
                    <li><a href="#">Desarrollo web</a></li>
                    <li><a href="#">Aplicaciones nativas</a></li>
                </ul>
            </li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>
    <section class="borde">
    	<section class="borde">
            <div align="center" STYLE=" height: 35rem; overflow: auto;">
                <table> 
                    <tr>
                        <td>Municipio</td>
                        <td>Casos</td>
                    </tr>
                    <?php  
                    $sql="SELECT municipio, casos FROM queretaro";
                    $result=mysqli_query($conexion, $sql);

                    while ($mostrar=mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $mostrar['municipio']; ?></td>
                        <td align="center"><?php echo $mostrar['casos']; ?></td>
                    </tr>
                 <?php 
                }
                 ?>
                </table>
            </div>
        </section>
    </section>
</body>
</html>