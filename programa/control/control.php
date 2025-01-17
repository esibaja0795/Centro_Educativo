<?php
session_start();
require_once "libs/config_smarty.php";
require_once "model/model.php";
require_once "model/model_usuario.php";

class ControlException extends Exception {
}

class Control
{
    private $obj_smarty;
    private $objModel;
    private $nombreApp = "Centro Educativo";

    public function __construct()
    {
        $this->nombreApp = "Centro Educativo";
        $this->objModel = new model();
        $this->obj_smarty = new config_smarty();
    }

    public function displayHeaderAdmin(){
      $this->obj_smarty->setDisplay("headerAdmin.tpl");
    }

    public function displayHeaderUsuario(){
      $this->obj_smarty->setDisplay("headerUsuario.tpl");
    }

    public function displayPantallaPrincipal(){
      $this->obj_smarty->setDisplay("pantallaPrincipal.tpl");
    }

    public function displayAdministrarAlumnos(){
      $this->obj_smarty->setDisplay("administrarAlumnos.tpl");
    }

      public function displayAdministrarPadres(){
        $this->obj_smarty->setDisplay("administrarPadres.tpl");
      }

    public function gestor_solicitudes() {
        $this->validar_inactividad();

        try {
            if (isset($_REQUEST['accion'])) {
                $accion = $_REQUEST['accion'];
                switch ($accion) {
                    case 'validar_login':
                        $this->ctl_validar_login();
                        break;
                    case 'salir':
                        $this->ctl_salir();
                        break;
                    case 'admAlumnos':
                        $this->displayHeaderAdmin();
                        $this->ctl_listar_usuarios();
                        break;
                    case 'admPadres':
                        $this->displayHeaderAdmin();
                        $this->ctl_listar_padres();
                        break;
                    case 'volver':
                        $this->displayHeaderAdmin();
                        $this->displayPantallaPrincipal();
                        break;
                  }
            } else {
                if (isset($_SESSION['USUARIO'])) {

                    $rs = unserialize($_SESSION['USUARIO']);

                    if ($rs->get_id_usuario() == 2) {
                        $this->displayHeaderAdmin();
                        $this->displayPantallaPrincipal();
                    } else if($rs->get_id_usuario() == 1){
                        $this->displayHeaderUsuario();
                    } else {
                        $this->obj_smarty->setDisplay("frm_login.tpl");
                    }
                } else {
                    $this->obj_smarty->setDisplay("frm_login.tpl");
                }
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function ctl_salir() {
      $this->obj_smarty->setDisplay("frm_login.tpl");
    }

    public function ctl_administrarPadres(){
      $this->displayHeaderAdmin();
      $this->displayAdministrarPadres();
    }

    public function ctl_listar_usuarios() {
        $rs = $this->objModel->m_listar_usuarios();

        $us = unserialize($_SESSION['USUARIO']);
        $this->obj_smarty->setAssign("lista_usuarios",$rs);
        $this->obj_smarty->setDisplay("administrarAlumnos.tpl");
    }

    public function ctl_listar_padres(){
      $ra = $this->objModel->m_listar_padres();

      $this->obj_smarty->setAssign("lista_padres",$ra);
      $this->obj_smarty->setDisplay("administrarPadres.tpl");
    }

    public function ctl_validar_login() {
        $obj_u = new model_usuario();
        $obj_u->set_useremail($_REQUEST['txt_usuario']);
        $obj_u->set_pass($_REQUEST['pwd_password']);


        $rs = $this->objModel->m_Validar_Login($obj_u);

        // Validar que el resultado de m_Validar_Login es un objeto de tipo model_usuario
        if ($rs != null && $rs->get_id_usuario() > 0) {
            $_SESSION['USUARIO'] = serialize($rs);
            header("location:index.php");
        } else {
            echo '<script>alert("Credenciales incorrectas!");</script>';
            $this->obj_smarty->setDisplay("frm_login.tpl");
        }
    }

    public function validar_inactividad() {
        //Comprobamos si esta definida la sesión 'tiempo'.
        if (isset($_SESSION['tiempo'])) {
            //Tiempo en segundos para dar vida a la sesión.
            $inactivo = 60;
            //Calculamos tiempo de vida inactivo.
            $vida_session = time() - $_SESSION['tiempo'];
            //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
            if ($vida_session > $inactivo) {
                //Removemos sesión.
                session_unset();
                //Destruimos sesión.
                session_destroy();
                //Redirigimos pagina.
                header("location: index.php");
                exit();
            } else { // si no ha caducado la sesion, actualizamos
                $_SESSION['tiempo'] = time();
            }
        } else {
            //Activamos sesion tiempo.
            $_SESSION['tiempo'] = time();
        }
    }

}

?>
