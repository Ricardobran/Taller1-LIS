<!DOCTYPE html>
<html lang="es">
<head>
 <title>Calcular Salario</title>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="stylesheet" href="css/salario.css" />
 <link rel="stylesheet" href="css/links.css" />
 <script src="js/modernizr.custom.lis.js"></script>
</head>
<body>
<header id="inset">
 <h1>Detalle del salario</h1>
</header>
<section>
<article>
<?php
 if(isset($_POST['enviar'])){
 $empleado = isset($_POST['empleado']) ? $_POST['empleado'] : "";
 $sueldobase = isset($_POST['sueldobase']) ? $_POST['sueldobase'] : "";
 if(isset($_POST['hextra'])){
 $horasextras = isset($_POST['numhorasex']) ? $_POST['numhorasex'] : "0";
 $pagohextra = isset($_POST['pagohextra']) ? $_POST['pagohextra'] : "0";
 $crehipohextra = isset($_POST['CHhextra']) ? $_POST['CHhextra'] : "0";
 $sueldohextras = $horasextras * $pagohextra;
 

 }
 else{
 $horasextras = 0;
 $sueldohextras = 0;
 

 
 }

 


 $sueldoneto = $sueldobase + $sueldohextras;
 $Descuento=  $sueldoneto*0.05;
$Descuento1=  $sueldoneto*0.07;
$Descuento2=  $sueldoneto*0.058;

$Descuento3= $Descuento + $Descuento1 + $Descuento2;

$Total= $sueldoneto-$Descuento3;

if(isset($_POST['hextra2'])){

    $crehipohextra = isset($_POST['CHhextra']) ? $_POST['CHhextra'] : "0";
    $descuentoCH= 0.075*$sueldoneto;

}
else{

$crehipohextra = 0;
$descuentoCH= 0;
 }
 $Total= $Total-$descuentoCH;

 if(isset($_POST['hextra3'])){

    $novato = isset($_POST['CHhextra3']) ? $_POST['CHhextra3'] : "0";
    $rol1= 0.16*$sueldoneto;

}
else{

$novato= 0;
$rol1= 0;
$roln=0;
 }
 $Total= $Total-$rol1;
$roln=$rol1;

 if(isset($_POST['hextra4'])){

    $junior = isset($_POST['CHhextra4']) ? $_POST['CHhextra4'] : "0";
    $rol2= 0.13*$sueldoneto;

}
else{

$junior= 0;
$rol2= 0;
$rolj=0;
 }
 $Total= $Total-$rol2;
 $rolj=$rol2;

 if(isset($_POST['hextra5'])){

    $senior = isset($_POST['CHhextra5']) ? $_POST['CHhextra5'] : "0";
    $rol3= 0.09*$sueldoneto;

}
else{

$senior= 0;
$rol3= 0;
$rols=0;
 }
 $Total= $Total-$rol3;
 $rols=$rol3; 

 if(isset($_POST['hextra6'])){

    $thebest = isset($_POST['CHhextra6']) ? $_POST['CHhextra6'] : "0";
    $rol4= 0.07*$sueldoneto;

}
else{

$thebest= 0;
$rol4= 0;
$rolt=0;
 }
 $Total= $Total-$rol4;
 $rolt=$rol4;





 //Formateando las cantidades a mostrar
 $sueldobase = number_format($sueldobase, 2, ".", ",");
 $sueldohextras = number_format($sueldohextras, 2, ".", ",");
 $sueldoneto = number_format($sueldoneto, 2, ".", ",");
 $descuentoCH = number_format(  $descuentoCH, 2, ".", ",");

 $Descuento = number_format(  $Descuento, 2, ".", ",");
 $Descuento1 = number_format(  $Descuento1, 2, ".", ",");
 $Descuento2 = number_format(  $Descuento2, 2, ".", ",");
 $Descuento3 = number_format(  $Descuento3, 2, ".", ",");
 $Total = number_format(  $Total, 2, ".", ",");


 $rol1 = number_format(  $rol1, 2, ".", ",");
 $novato= number_format(  $novato, 2, ".", ",");

 $rol2 = number_format(  $rol2, 2, ".", ",");
 $junior= number_format(  $junior, 2, ".", ",");

 $rol3 = number_format(  $rol3, 2, ".", ",");
 $senior= number_format(  $senior, 2, ".", ",");

 $rol4 = number_format(  $rol4, 2, ".", ",");
 $thebest= number_format(  $thebest, 2, ".", ",");

 $roln = number_format(  $roln, 2, ".", ",");
 $rolj = number_format(  $rolj, 2, ".", ",");
 $rols = number_format(  $rols, 2, ".", ",");
 $rolt = number_format(  $rolt, 2, ".", ",");
 
 echo "<div>\n<h3>Boleta de pago</h3>\n";
 echo "<table>\n";
 echo "\t<tr>\n\t\t<th colspan=\"2\">\n\t\t\tDetalle del
pago\n\t\t</th>\n\t</tr>\n";
 echo "\t<tr>\n\t\t<td>\n\t\t\tEl empleado es: \n\t\t</td>\n\t\t<td
class=\"detail\">\n\t\t\t", $empleado, "\n\t\t</td>\n\t\t\t</tr>\n";
 echo "\t<tr>\n\t\t<td>\n\t\t\tEl sueldo base es: \n\t\t</td>\n\t\t<td
class=\"detail\">\n\t\t\t\$ ", $sueldobase, "\n\t\t</td>\n\t</tr>\n";
 echo "\t<tr>\n\t\t<td>\n\t\t\tLas horas extras son: \n\t\t</td>\n\t\t<td
class=\"detail\">\n\t\t\t", $horasextras, "\n\t\t</td>\n\t</tr>\n";
 echo "\t<tr>\n\t\t<td>\n\t\t\tEl pago por hora extra es: \n\t\t</td>\n\t\t<td
class=\"detail\">\n\t\t\t\$ ", $sueldohextras, "\n\t\t</td>\n\t</tr>\n";

echo "\t<tr>\n\t\t<td>\n\t\t\tEl descuento de la AFP es: \n\t\t</td>\n\t\t<td
class=\"detail\">\n\t\t\t\$ ", $Descuento, "\n\t\t</td>\n\t</tr>\n";

echo "\t<tr>\n\t\t<td>\n\t\t\tEl descuento de ISSS es: \n\t\t</td>\n\t\t<td
class=\"detail\">\n\t\t\t\$ ", $Descuento1, "\n\t\t</td>\n\t</tr>\n";

echo "\t<tr>\n\t\t<td>\n\t\t\tEl descuento de la  Renta es: \n\t\t</td>\n\t\t<td
class=\"detail\">\n\t\t\t\$ ", $Descuento2, "\n\t\t</td>\n\t</tr>\n";

echo "\t<tr>\n\t\t<td>\n\t\t\tEl Descuento del crédito hipotecario es:\n\t\t</td>\n\t\t<td
class=\"detail\">\n\t\t\t\$ ",  $descuentoCH, "\n\t\t</td>\n\t</tr>\n";

echo "\t<tr>\n\t\t<td>\n\t\t\tEl Descuento del Rol Novato es:\n\t\t</td>\n\t\t<td
class=\"detail\">\n\t\t\t\$ ",  $roln, "\n\t\t</td>\n\t</tr>\n";

echo "\t<tr>\n\t\t<td>\n\t\t\tEl Descuento del Rol Junior es:\n\t\t</td>\n\t\t<td
class=\"detail\">\n\t\t\t\$ ",  $rolj, "\n\t\t</td>\n\t</tr>\n";

echo "\t<tr>\n\t\t<td>\n\t\t\tEl Descuento del Rol Senior es:\n\t\t</td>\n\t\t<td
class=\"detail\">\n\t\t\t\$ ",  $rols, "\n\t\t</td>\n\t</tr>\n";

echo "\t<tr>\n\t\t<td>\n\t\t\tEl Descuento del Rol TheBest es:\n\t\t</td>\n\t\t<td
class=\"detail\">\n\t\t\t\$ ",  $rolt, "\n\t\t</td>\n\t</tr>\n";


echo "\t<tr>\n\t\t<td>\n\t\t\tEl sueldo de neto es: \n\t\t</td>\n\t\t<td
class=\"detail\">\n\t\t\t\$ ", $sueldoneto, "\n\t\t</td>\n\t</tr>\n";

echo "\t<tr>\n\t\t<th>\n\t\t\tEl Total apagar es: \n\t\t</th>\n\t\t<th
class=\"number\">\n\t\t\t\$ ", $Total, "\n\t\t</th>\n\t</tr>\n";

 echo "</table>\n</div>\n";
 }
?>
<a href="salario.html" class="a-btn">
 <span class="a-btn-symbol">i</span>
 <span class="a-btn-text">Ingresar</span>
 <span class="a-btn-slide-text">otro empleado</span>
 <span class="a-btn-slide-icon"></span>
</a>
</article>
</section>
</body>
</html>