<?php
function dateHeure () :string
{
$date = new Datetime("now");
$madate = $date->format("d/m/Y");


return $madate;

}
echo "la date est : ".dateHeure();
?>