<?php

$parsed = parse_url($_SERVER['REQUEST_URI']);
$path = $parsed['path'];

switch($path)
{
    case '/': 
        require './views/kezdolap.php';
        break;
    case '/mennyiIdo':
        //1. Adatok lementése és eltárolása
        //http://localhost:8080/?megnevezes=auto&ar=10000&sporolt=100
        $megnevezes = $_GET['megnevezes'] ?? '';
        $ar = $_GET['ar'] ?? 0;
        $sporolt = $_GET['sporolt'] ?? 0;

        //2. Számítás, nincs külsős fájl
        $success = false;
        $nap = 0;
        $honap = 0;
        $ev = 0;
        if($ar != 0 && $sporolt != 0)
        {
            $nap = round((float)($ar / $sporolt));
            $honap = round((float)($nap / 31));
            $ev = number_format((float)(float)($nap / 365), 2, '.', '');
            $success = true;
        }
        require './views/content.php';
        break;
    default:
        echo 'Oldal nem található  <a href="/mennyiIdo">Tovább a kalkulátorra!</a>';
}




