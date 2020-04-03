<?php
echo "these are all the inputs coming in: " . file_get_contents("php://input");
/*
these are all the inputs coming in: entry.2055165912=Marianela&entry.498994277=n%2Fa&entry.359752058=mendoza&entry.119140095=mendoza&entry.2005063964=18689616&entry.1613747071=12&entry.2128285595=M&entry.2101364991=1988-01-31&entry.1309052470=0251-2559078&entry.1677385248=0414-5260300&entry.1522088102=marianela_min%40gmail.com&entry.514490750=av+la+francia+calle+2+parcela+c-4&entry.1338231974=inmaculada&entry.446411834=5to+ano&entry.1241364390=no+trabajo&entry.80365004=ingeniero&entry.1294486902=Bautismo&entry.1294486902=Primera+Comuni%C3%B3n&entry.1294486902=Confirmaci%C3%B3n&entry.1294486902=Matrimonio&entry.107097543=ehh%2C+eac&entry.1204949772=guillermo+carrasco&entry.586164515=2006+Timotes&entry.586164515=2007+Chachopo+-+Mucuch%C3%ADes+-+El+Salado&entry.586164515=2008+La+Azulita&entry.586164515=2009+Santa+Cruz+de+Mora&entry.586164515=2012+Siquisique&entry.992502456=john+crissman&entry.1486206645=Recrear&entry.1486206645=Orar+en+p%C3%BAblico&entry.1486206645=Tocar+un+instrumento%2Fcantar&entry.1486206645=Hacer+manualidades+%28papeler%C3%ADa%29&entry.1486206645=Cocinar&entry.1252199433=lo+que+sea&entry.507951984=O%2B&entry.1907784252=no&entry.2069387399=no&entry.1262205387=no&entry.704382283=ramon&entry.147384584=014&entry.1941103996=marisela&entry.1126146889=014&entry.1560839713=no+carro&draftResponse=%5Bnull%2Cnull%2C%22211116185106149561%22%5D%0D%0A&pageHistory=0&fbzx=211116185106149561&submit=Submit if (number is not correct) bring him back to lonin.php with a message else show the rest of the page
*/

echo '<pre>This is the post content:';
var_dump($_POST);
echo'</pre>';

require ("server.php");

$entradas = $_POST;

// echo '<ol> This are the inputs:';
// foreach ($entradas as $key => $value) {
//    echo '<li> entrada['.$key.']: '."\n".$value.'</li>';  }
// echo '</ol>';
$usr_id = $mysqli->escape_string($_GET['usr_id']);
$name1 =  $mysqli->escape_string($entradas['entry_2055165912']);
$name2 =  $mysqli->escape_string($entradas['entry_498994277']);
$last1 =  $mysqli->escape_string($entradas['entry_359752058']);
$last2 =  $mysqli->escape_string($entradas['entry_119140095']);
$ci =   intval($entradas['entry_2005063964']);
$talla = $mysqli->escape_string($entradas['entry_1613747071']);
$sexo = $mysqli->escape_string($entradas['entry_2128285595']);
$dob = $mysqli->escape_string($entradas['entry_2101364991']);
$tel_fijo = intval($entradas['entry_1309052470']);
$tel_mobil = intval($entradas['entry_1677385248']);
$email = $mysqli->escape_string($entradas['entry_1522088102']);
$direccion = $mysqli->escape_string($entradas['entry_514490750']);

$dond_estudia = $mysqli->escape_string($entradas['entry_1338231974']);
$que_estudia = $mysqli->escape_string($entradas['entry_446411834']);
$dond_trabaja = $mysqli->escape_string($entradas['entry_1241364390']);
$profesion = $mysqli->escape_string($entradas['entry_80365004']);
$sacramento = $mysqli->escape_string($entradas['entry_1294486902']);

$o_catolica = $mysqli->escape_string($entradas['entry_107097543']);
$referido = $mysqli->escape_string($entradas['entry_1204949772']);
$pre_misiones = $mysqli->escape_string($entradas['entry_586164515']);
$novio = $mysqli->escape_string($entradas['entry_992502456']);
$habilidades = $mysqli->escape_string($entradas['entry_1486206645']);
$o_habilidades = $mysqli->escape_string($entradas['entry_1252199433']);

$tipo_sangre = $mysqli->escape_string($entradas['entry_507951984']);
$enfermedad = $mysqli->escape_string($entradas['entry_1907784252']);
$medicamento = $mysqli->escape_string($entradas['entry_2069387399']);
$alergia = $mysqli->escape_string($entradas['entry_1262205387']);

$papa_fulname = $mysqli->escape_string($entradas['entry_704382283']);
$papa_tel = $mysqli->escape_string($entradas['entry_147384584']);
$mama_fulname = $mysqli->escape_string($entradas['entry_1941103996']);
$mama_tel = $mysqli->escape_string($entradas['entry_1126146889']);
$disp_carro = $mysqli->escape_string($entradas['entry_1560839713']);
// $newvariable = $mysqli->escape_string($entradas['draftResponse']);
// $newvariable = $mysqli->escape_string($entradas['pageHistory']);
// $newvariable = $mysqli->escape_string($entradas['fbzx']);
$submit_bttn =  $mysqli->escape_string($entradas['submit']);


$sql1 = "INSERT INTO usuario (user_id, primer_name, segun_name, primer_last, segun_last, "
        ."dob, cedula, sexo, talla, calle_dir, city_dir, edo_dir, tel_fijo, tel_mobil)"
        ." VALUES ( '$usr_id' ,'$name1' , '$name2' , '$last1', '$last2' , '$dob', '$ci',"
        ."'$sexo' , '$talla' , '$direccion' ,'Barquisimeto' , 'Lara' ,'$tel_fijo','$tel_mobil' ); ";

$mysqli->query($sql1) or die($mysqli->error);
echo 'this is insert_id: '.$mysql->insert_id;


$mysqli->close();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>

<div>
<h1 style="color:green;">SUCCESSFULLY INSERTED DATA INTO THE DB</h1>
</div>


</body>
</html>