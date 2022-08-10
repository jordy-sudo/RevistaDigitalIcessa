<?php 
use Carbon\Carbon;
$fecha = Carbon::now();
$date = $fecha->locale('es');
$date = $fecha->monthName;
return ['date'=>$date];