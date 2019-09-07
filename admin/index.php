<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/ProductosNegocios/admin/config.php");

if (isset($_GET['view']) && $_GET['view'] != "") {
    include_once WEB . 'controlador/' . $_GET['view'] . '-controlador.php';
} else {
    include_once WEB . 'controlador/principal-controlador.php';
}