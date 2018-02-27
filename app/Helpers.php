<?php

use Illuminate\Support\Facades\DB;


if (!function_exists('checked')) {
    function checked($value)
    {
        return $value ? 'checked' : '';
    }
}


function dataSQLtoPTbr($data_mysql = null)
{
    if (is_null($data_mysql)) {
        $data = date('Y-m-d');
    } else {
        $data = $data_mysql;
    }

    return date('d/m/Y', strtotime($data));
}

function dataPTbrToDb($data)
{
    $auxdata = strtotime($data);
    return date('Y-d-m', $auxdata);
    //2016-02-23 20:02:46
}

function dataNormalDb($data)
{
    $auxdata = strtotime($data);
    return date('Y-m-d', $auxdata);
}

if (!function_exists('dataPorExtenso')) {

    function dataPorExtenso($date)
    {

        setlocale(LC_ALL, "pt_BR.UTF-8", "ptb");
        return strftime("%d de %B de %Y", strtotime($date));

    }
}

function UrlAtual() {
    $dominio = $_SERVER['HTTP_HOST'];
    $url = "http://" . $dominio . $_SERVER['REQUEST_URI'];
    return $url;
}

function printPre($var){
     
    $retorno =  print_r('<pre>');
    $retorno .= print_r($var); 
    $retorno .= print_r('</pre>');
    $retorno .= exit;
    
    return $retorno;
}


