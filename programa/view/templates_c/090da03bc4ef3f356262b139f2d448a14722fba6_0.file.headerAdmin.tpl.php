<?php
/* Smarty version 4.3.0, created on 2023-04-09 09:07:58
  from 'C:\xampp\htdocs\Centro_Educativo\programa\view\templates\headerAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6432644e3def89_78446095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '090da03bc4ef3f356262b139f2d448a14722fba6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Centro_Educativo\\programa\\view\\templates\\headerAdmin.tpl',
      1 => 1681024056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6432644e3def89_78446095 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <title>Centro Educativo</title>
  <link rel="icon" type="image/png" href="graphics/TC.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
  @import url("css/styleMainPage.css");
</style>
</head>
<body>
  <ul class="active">
    <li><a class="nav-link" href="index.php?accion=volver">Volver</a></li>
    <li><a class="nav-link" href="index.php?accion=admAlumnos">Administrar Alumnos</a></li>
    <li><a class="nav-link" href="index.php?accion=admPadres">Administrar Padres</a></li>
    <li><a class="nav-link" href="index.php?accion=salir" tabindex="-1">Salir</a></li>
  </ul>
<?php echo '<script'; ?>
 src="js/jsMainPage.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
