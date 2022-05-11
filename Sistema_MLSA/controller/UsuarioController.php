<?php

class UsuarioController {

    private $view;

    public function __construct() {
        session_start();
        $this->view = new View();
    }

//    ---------------------------------------------------Raza--------------------------------------
    public function ingresarRaza() {
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->ingresarRaza($_POST['Nombre'], $_POST['Descripcion'], $_POST['Abreviatura']);
    }

    public function actualizarRaza() {
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->actualizarRaza($_POST['ID'], $_POST['Nombre'], $_POST['Descripcion'], $_POST['Abreviatura']);
    }

    public function eliminarRaza() {
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->eliminarRaza($_POST['ID']);
    }

    public function listarRaza() {
        require 'model/UsuarioModel.php';
        $items = new UsuarioModel();
        $datos['data'] = $items->listarRaza();
        echo json_encode($datos);
    }

//    -----------------------------------------------Estado------------------------------------
    public function ingresarEstado() {
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->ingresarEstado($_POST['NombreEstado'], $_POST['DescripcionEstado'], $_POST['IniciaEstado'], $_POST['TerminaEstado']);
    }

    public function actualizarEstado() {
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->actualizarEstado($_POST['IDEstado'], $_POST['NombreEstado'], $_POST['DescripcionEstado'], $_POST['IniciaEstado'], $_POST['TerminaEstado']);
    }

    public function eliminarEstado() {
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->eliminarEstado($_POST['IDEstado']);
    }

    public function listarEstado() {
        require 'model/UsuarioModel.php';
        $items = new UsuarioModel();
        $datos['data'] = $items->listarEstado();
        echo json_encode($datos);
    }

//-----------------------------------------------------Bovino----------------------------------------

    public function ingresarBovino() {
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->ingresarBovino($_POST['NumeroBovino'], $_POST['NombreBovino'], $_POST['NombreMadre'], $_POST['NombrePadre'], $_POST['Fecha'], $_POST['EstadoNombresBovino'], $_POST['RazasNombresBovino'], $_POST['PezonesSanos']);
    }

    public function actualizarBovino() {
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->actualizarBovino($_POST['NumeroBovino'], $_POST['NombreBovino'], $_POST['NombreMadre'], $_POST['NombrePadre'], $_POST['Fecha'], $_POST['EstadoNombresBovino'], $_POST['RazasNombresBovino'], $_POST['PezonesSanos']);
    }

    public function eliminarBovino() {
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->eliminarBovino($_POST['NumeroBovino'], $_POST['FechaMuerte'], $_POST['MotivoMuerte'], $_POST['ValorMuerte']);
    }

    public function listarBovino() {
        require 'model/UsuarioModel.php';
        $items = new UsuarioModel();
        $datos['data'] = $items->listarBovino();
        echo json_encode($datos);
    }

//-----------------------------------------------------Toro----------------------------------------

    public function ingresarToro() {
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->ingresarToro($_POST['ToroSerie'], $_POST['NombreToro'], $_POST['CasaComercialToro'], $_POST['ToroRaza']);
    }

    public function actualizarToro() {
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->actualizarToro($_POST['ToroSerie'], $_POST['NombreToro'], $_POST['CasaComercialToro'], $_POST['ToroRaza']);
    }

    public function eliminarToro() {
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->eliminarToro($_POST['ToroSerie'], $_POST['FechaMuerte'], $_POST['MotivoMuerte'], $_POST['ValorMuerte']);
    }

    public function listarToro() {
        require 'model/UsuarioModel.php';
        $items = new UsuarioModel();
        $datos['data'] = $items->listarToro();
        echo json_encode($datos);
    }

//    -----------------------------------------------Vaquero------------------------------------
    public function ingresarVaquero() {
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->ingresarVaquero($_POST['Vaquerocedula'], $_POST['Vaqueronombre'], $_POST['Vaqueroroll']);
    }

    public function actualizarVaquero() {
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->actualizarVaquero($_POST['Vaquerocedula'], $_POST['Vaqueronombre'], $_POST['Vaqueroroll']);
    }

    public function eliminarVaquero() {
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->eliminarVaquero($_POST['Vaquerocedula']);
    }

    public function listarVaquero() {
        require 'model/UsuarioModel.php';
        $items = new UsuarioModel();
        $datos['data'] = $items->listarVaquero();
        echo json_encode($datos);
    }
//    -----------------------------------------------Inseminacion------------------------------------
    public function ingresarInseminacion() {
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->ingresarInseminacion($_POST['NumeroBovino'], $_POST['ToroSerie'], $_POST['FechaInseminacion'], $_POST['Vaquerocedula'], $_POST['DescripcionInseminacion']);
    }

    public function actualizarInseminacion() {
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->actualizarInseminacion($_POST['InseminacionId'], $_POST['NumeroBovino'], $_POST['ToroSerie'], $_POST['FechaInseminacion'], $_POST['Vaquerocedula'], $_POST['DescripcionInseminacion']);
    }

    public function listarInseminacion() {
        require 'model/UsuarioModel.php';
        $items = new UsuarioModel();
        $datos['data'] = $items->listarInseminacion();
        echo json_encode($datos);
    }
}

?>