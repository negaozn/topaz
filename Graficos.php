<?php
require('phplot/phplot.php');
require('conexao.php');
#Matriz utilizada para gerar os graficos
/*$data = array(
    array('Jan', 20, 2, 4), array('Fev', 30, 3, 4), array('Mar', 20, 4, 14),
    array('Abr', 30, 5, 4), array('Mai', 13, 6, 4), array('Jun', 37, 7, 24),
    array('Jul', 10, 8, 4), array('Ago', 15, 9, 4), array('Set', 20, 5, 12),
    array('Out', 28, 4, 14), array('Nov', 16, 7, 14), array('Dez', 24, 3, 15),
    );*/
$lista = array();
while($row = mysqli_fetch_array($result))
{
    if(isset($row['value']) && ($row['event_type'] == "PIX"))
    {
        $data_pix[] = array(explode("T",$row['date_event'])[0],$row['value']);
    }
    elseif(isset($row['value']) && $row['event_type'] == "TED")
    {
        $data_ted[] = array(explode("T",$row['date_event'])[0],$row['value']);
    };

}; 
$data[] = array($data_pix,$data_ted);
$plot = new PHPlot();
$plot -> SetImageBorderType('plain');
$plot -> SetPlotType('bars');
$plot -> SetDataType('text-data');
$plot -> SetDataValues($data_pix);
$plot -> SetTitle("Topaz");
/*while($row = mysqli_fetch_array($result))
{
    if(isset($row['value']) && $row['id_event'] > 0)
    {
        $plot -> SetDataValues(array($row['date_event'],$row['value']));
    }
    else
    {
        $plot -> SetDataValues(array($row['date_event'],0));
    } 
}*/
$plot -> SetLegend(array('PIX','TED'));
$plot -> SetXTickLabelPos('none');
$plot -> SetXTickPos('none');
$plot -> DrawGraph();
?>