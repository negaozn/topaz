<?php
require('conexao.php')
/* definições de host, database, usuário e senha
$host = "localhost";
$db   = "topaz";
$user = "root";
$pass = "";

$conn = mysqli_connect($host,$user,$pass,$db);
$query = "SELECT * FROM topaz.desafio_tpz";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result,MYSQLI_NUM);*/
//printf("%s (%s)\n", $row[0] ,$row[1]);
?>

<html>
	<head>
	<title>Exemplo</title>
</head>
<body>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<div class="container">
<div class="table-bordered table-responsive-sm">
<?php
	// se o número de resultados for maior que zero, mostra os dados
		// inicia o loop que vai mostrar todos os dados
		$total = 0;
		while($row = mysqli_fetch_assoc($result)) {
?>  
			
            <div class="row">
                <div class="col-1"><?=$row['id_event']?></div>
                <div class="col-2"><?=$row['date_event']?></div>
				<div class="col-2"><?=$row['event_type']?></div>
<?php
				if($row['value'] == "")
				{
					?> <div class="col-1">000</div> <?php
				}else{
					?> <div class="col-1"><?=$row['value']?></div> <?php
				}
?>
				
				<div class="col-3"><?=$row['user']?></div>
				<div class="col-3"><?=$row['device_id']?></div>
				<div class="col-3"><?=$row['latitude']?></div>
				<div class="col-3"><?=$row['longitude']?></div>
			</div>
<?php
			if($row['value'] != 000 && $row['event_type'] == "PIX")
			{	
				$total = $total + intval($row['value']);
			
			}
			
		// finaliza o loop que vai mostrar os dados
		};
	// fim do if

?>
	 	<div class="container">
			 <tr>
				 
			</tr>
			<tr>
				<img alt="" src="graficos.php" title=""></img>
			</tr>
		</div>
	</div>
	</div>
	<div id="Mapa"></div>

</body>
</html>
<?php
// tira o resultado da busca da memória
//mysqli_free_result($dados);
?>