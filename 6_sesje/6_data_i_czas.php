<?php
//funkcja Date()
echo "Rok - miesiąc - dzień: ",date("Y-m-d"),'<br>';
echo "Rok - miesiąc - dzień: ",date("Y-M-d"),'<br>';
echo "Dzień - miesiąc - rok: ",date("d-m-Y"),'<br>';
echo "Rok - miesiąc - dzień: ",date("d-m-Y"),'<br>';
echo date("G:i:s"),'<br>';
echo date("h:i:sa"),'<br>';
echo date("Y-m-d G:i:s"),'<br>';
echo date("w"),'<br>';//niedziela - 0

//funkcja getdate()
$data=getdate();

echo '<pre>',print_r($data),'</pre>';

//dzień - miesiąc - rok, dzieńtygodnia
echo $data['mday']," ",$data['month']," ",$data['year']," ",$data['weekday'];

?>