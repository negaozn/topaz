<?php
require('conexao.php');
?>

<html>
	<head>
	<title>Exemplo</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
</head>
<body>




<div class="table-bordered table-responsive">
	<table class="table table-light table-hover">
	<thead>
		<tr>
				<th class="col-lg-1">
					ID
				</th>
				<th class="col-lg-1">
					DATA
				</th>
				<th class="col-lg-1">
					EVENTO
				</th>
				<th class="col-lg-1">
					VALOR
				</th>
				<th class="col-lg-1">
					USUARIO
				</th>
				<th class="col-lg-1">
					DISPOSITIVO
				</th>
</thead>
<tbody>
<?php
	// se o número de resultados for maior que zero, mostra os dados
		// inicia o loop que vai mostrar todos os dados
		$total = 0;
		while($row = mysqli_fetch_assoc($result)) {
?>  


            <tr>
                <td><?=$row['id_event']?></td>
                <td><?=explode("T",$row['date_event'])[0]." ".explode("T",$row['date_event'])[1]?></td>
				<td><?=$row['event_type']?></td>
<?php
				if($row['value'] == "")
				{
					?> <td>0</td> <?php
				}else{
					?> <td><?=$row['value']?></td> <?php
				}
				$latitude = $row['latitude'];
				$longitude = $row['longitude'];
				$local = "https://www.google.com/maps/search/?api=1&query=".$latitude.",".$longitude;
?>
				
				<td><?=$row['user']?></td>
<?php
				if($row['event_type'] == "PIX")
				{?>
					<th><a href=<?=$local?>><?=$row['device_id']?></a></th>
				<?php
				}else{
					?>
					<td><a href=<?=$local?>><?=$row['device_id']?></a></td>
					<?php
				}?>
			<!-----	<td>"><?=$row['latitude']?></td>
				<td>"><?=$row['longitude']?></td> ------>
			</td>
<?php
			if($row['value'] != 000 && $row['event_type'] == "PIX")
			{	
				$total = $total + intval($row['value']);
			
			}
			
		// finaliza o loop que vai mostrar os dados
		};
	// fim do if
?>
</tbody>
</table>
</div>
</div>

<div class="table">
	<tr>
		<td>
			<img src='graficos.php'></img>
		</td>
		<td>
			<img src='graficos2.php'></img>
		</td>
	</tr>
</div>
<div class="table">
	
</body>
</html>
<?php

// tira o resultado da busca da memória
//mysqli_free_result($dados);
?>