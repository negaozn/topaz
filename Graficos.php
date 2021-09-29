<?php
require('phplot/phplot.php');
#require('conexao.php');
$host = "localhost";
$db   = "topaz";
$user = "root";
$pass = "";

$conn = mysqli_connect($host,$user,$pass,$db);
$query = "SELECT * FROM desafio_tpz";
$result = mysqli_query($conn,$query);
#Matriz utilizada para gerar os graficos

while($row = mysqli_fetch_assoc($result))
{
    if(isset($row['value']) && ($row['event_type'] == "PIX"))
    {
        $data_pix[] = array(explode("T",$row['date_event'])[0],$row['value']);
    }
    elseif(isset($row['value']) && $row['event_type'] == "TED")
    {
        $data_ted[] = array(explode("T",$row['date_event'])[0] . " " .explode("T",$row['date_event'])[1],$row['value']);
    };

}; 
$data[] = array($data_pix,$data_ted);
$plot = new PHPlot();
$plot -> SetImageBorderType('plain');
$plot -> SetPlotType('bars');
$plot -> SetDataType('text-data');
$plot -> SetDataValues($data_pix);
$plot -> SetTitle("Topaz - Transacoes efetuadas com PIX");
//$plot -> SetLegend(array('Transações efetuadas com PIX'));
$plot -> SetYLabel('Valor');
$plot -> SetXLabel('Data');
$plot -> SetYDataLabelPos('plotin');
$plot -> SetXTickLabelPos('none');
$plot -> SetXTickPos('plotup');
$plot -> DrawGraph();
?>