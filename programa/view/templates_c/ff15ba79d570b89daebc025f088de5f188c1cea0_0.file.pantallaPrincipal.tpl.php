<?php
/* Smarty version 4.3.0, created on 2023-04-09 09:42:10
  from 'C:\xampp\htdocs\Centro_Educativo\programa\view\templates\pantallaPrincipal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64326c521e6e56_43180297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff15ba79d570b89daebc025f088de5f188c1cea0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Centro_Educativo\\programa\\view\\templates\\pantallaPrincipal.tpl',
      1 => 1681026126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64326c521e6e56_43180297 (Smarty_Internal_Template $_smarty_tpl) {
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
  <strong><p id="frasePantPrin" style="margin-left: 290px; width: 780px" class="maquina-escribir">Centro Educativo-Perfil: Administrador</p></strong>
  <strong><input class="btnModReg" type="submit" id="btnReg" onclick="" name="" value="Crear Usuario"></strong>
  <section class="modalReg">
    <div class="modal_container">
      <strong><p class="maquina-escribir" style="width:250px; margin-left:33px">Registrarse - Centro Educativo</p></strong>
      <form method="post" action="index.php">
        <input type="hidden"  name="accion" value="ingresar_contacto">
        <strong><label id="lb_reg" for="nomTxt">Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
        <input style="font-family: Century-Gothic" type="text" id="txt_reg" name="txtNombre" placeholder=""><br>
        <strong><label id="lb_reg" for="pApellidoTxt">Apellido:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
        <input style="font-family: Century-Gothic" type="text" id="txt_reg" name="txtpApellido" placeholder="" style="height:300px"><br>
        <strong><label id="lb_reg" for="passTxt">Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
        <input style="font-family: Century-Gothic" type="password" id="txt_reg" name="pass" placeholder="" style="height:300px"><br>
        <strong><label id="lb_reg" for="emailTxt">Correo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
        <input style="font-family: Century-Gothic" type="email" id="txt_reg" name="email" placeholder="" style="height:300px">
        <br>
        <strong><label id="lb_reg" for="perfilTxt">Perfil:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
        <input style="font-family: Century-Gothic" type="text" id="txt_reg" list="perfiles">
        <datalist id="perfiles">
          <option value="Docente/Admin">
          <option value="Estudiante">
          <option value="Padre">
        </datalist>
        <br>
        <strong><label id="lb_reg" for="estadoTxt">Estado:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
        <input style="font-family: Century-Gothic" type="text" id="txt_reg" list="estado">
        <datalist id="estado">
          <option value="Activo">
          <option value="Inactivo">
        </datalist>
        <strong><input type="submit" id="btnFmReg" onclick="alert('Informacion Ingresada')" name="" value="Registrarse"></strong>
        <strong><input class="btnCanReg" type="submit" id="btnFmReg" onclick="" name="" value="Cancelar"></strong>
      </form>
    </div>
  </section>
  <?php echo '<script'; ?>
 src="js/main.js" type="text/javascript"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
