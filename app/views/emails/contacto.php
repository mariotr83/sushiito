<?php
/**
 * Created by PhpStorm.
 * User: Maquina Sentadillas
 * Date: 9/10/14
 * Time: 1:44 AM
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Correo</title>

<style>
    .rwd-table {
        margin: auto;
        min-width: 300px;
    }

    th, td {
        text-align: left;

    }
    th{
        text-align: center;
    }


    h1 {
        font-weight: normal;
        letter-spacing: -1px;
        color: black;
    }

    .rwd-table {
        background: #34495E;
        color: #fff;
        border-radius: .4em;
        overflow: hidden;
    }
    tr {
        min-height: 60px;
        font-size: 14px;
        border-color: lighten (#34495E, 10%);
    }
    td{
        min-height: 60px;
        border-right: 1px solid white;
    }


</style>


</head>
<body>
<div style="width:100%;text-align: center;margin-bottom: 30px;"><img src="<?= URL::to('/images/logo_sushiitto.png') ?>"></div>
<div style="width:100%;text-align: center;"><h1>Información</h1></div>
<table class="rwd-table">
    <tr>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Sucursal</th>
        <th>Mensaje</th>
    </tr>
    <tr>
        <td data-th="Movie Title"> <?=$name ?> </td>
        <td data-th="Genre"> <?=$phone ?> </td>
        <td data-th="Year"> <?=$email ?> </td>
        <td data-th="Gross"> <?=$sucursal ?> </td>
        <td data-th="Gross"> <?=$mensaje ?> </td>
    </tr>

</table>

</body>
</html>





