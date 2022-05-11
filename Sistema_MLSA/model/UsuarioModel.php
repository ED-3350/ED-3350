<?php

class UsuarioModel {

    protected $db;

    public function __construct() {

        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }

//----------------------------------------------------------Raza---------------------------------------
    public function ingresarRaza($Nombre, $Descripcion, $Abreviatura) {
        echo $Nombre;
        $consulta = $this->db->prepare("call sp_inserttbraza('$Nombre','$Descripcion','$Abreviatura')");
        $consulta->execute();
        return $consulta;
    }

    public function actualizarRaza($ID, $Nombre, $Descripcion, $Abreviatura) {
        echo $Nombre;
        $consulta = $this->db->prepare("call sp_updatetbraza('$ID','$Nombre','$Descripcion','$Abreviatura')");
        $consulta->execute();
        return $consulta;
    }

    public function eliminarRaza($ID) {
        
        $consulta = $this->db->prepare("call sp_deletedtbraza('$ID')");
        $consulta->execute();
        return $consulta;
    }

    public function listarRaza() {
        $this->db->exec("set names utf8");
        $consulta = $this->db->prepare('call sp_readtbraza()');
        $consulta->execute();
        $resulado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resulado;
    }

//    ----------------------------------------------------Estado------------------------------------------------------
    public function ingresarEstado($NombreEstado, $DescripcionEstado, $IniciaEstado, $TerminaEstado) {
       
        $consulta = $this->db->prepare("call sp_inserttbestado('$NombreEstado','$DescripcionEstado','$IniciaEstado','$TerminaEstado')");
        $consulta->execute();
        return $consulta;
    }

    public function actualizarEstado($IDEstado, $NombreEstado, $DescripcionEstado, $IniciaEstado, $TerminaEstado) {
        
        $consulta = $this->db->prepare("call sp_updatetbestado('$IDEstado','$NombreEstado','$DescripcionEstado','$IniciaEstado','$TerminaEstado')");
        $consulta->execute();
        return $consulta;
    }

    public function eliminarEstado($IDEstado) {

        $consulta = $this->db->prepare("call sp_deletedtbestado('$IDEstado')");
        $consulta->execute();
        return $consulta;
    }

    public function listarEstado() {
        $this->db->exec("set names utf8");
        $consulta = $this->db->prepare('call sp_readtbestado()');
        $consulta->execute();
        $resulado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resulado;
    }

//    ------------------------------------------------------Bovino--------------------------------------------------------
    public function ingresarBovino($NumeroBovino, $NombreBovino, $NombreMadre, $NombrePadre, $Fecha, $EstadoNombresBovino, $RazasNombresBovino, $PezonesSanos) {
        echo $Nombre;
        $consulta = $this->db->prepare("call sp_inserttbbovino('$NumeroBovino','$NombreBovino','$NombreMadre','$NombrePadre','$Fecha','$EstadoNombresBovino',' $RazasNombresBovino',' $PezonesSanos')");
        $consulta->execute();
        return $consulta;
    }

    public function actualizarBovino($NumeroBovino, $NombreBovino, $NombreMadre, $NombrePadre, $Fecha, $EstadoNombresBovino, $RazasNombresBovino, $PezonesSanos) {

        $consulta = $this->db->prepare("call sp_updatetbbovino('$NumeroBovino','$NombreBovino','$NombreMadre','$NombrePadre','$Fecha','$EstadoNombresBovino',' $RazasNombresBovino',' $PezonesSanos')");
        $consulta->execute();
        return $consulta;
    }

    public function eliminarBovino($NumeroBovino, $FechaMuerte, $MotivoMuerte, $ValorMuerte) {

        $consulta = $this->db->prepare("call sp_deletedtbbovino('$NumeroBovino','$FechaMuerte','$MotivoMuerte','$ValorMuerte')");
        $consulta->execute();
        return $consulta;
    }

    public function listarBovino() {
        $this->db->exec("set names utf8");
        $consulta = $this->db->prepare('call sp_readtbbovino()');
        $consulta->execute();
        $resulado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resulado;
    }

    //    ------------------------------------------------------Toro--------------------------------------------------------
    public function ingresarToro($ToroSerie, $NombreToro, $CasaComercialToro, $ToroRaza) {
        
        $consulta = $this->db->prepare("call sp_inserttbtoro('$ToroSerie','$NombreToro','$CasaComercialToro','$ToroRaza')");
        $consulta->execute();
        return $consulta;
    }

    public function actualizarToro($ToroSerie, $NombreToro, $CasaComercialToro, $ToroRaza) {
        
        $consulta = $this->db->prepare("call sp_updatetbtoro('$ToroSerie','$NombreToro','$CasaComercialToro','$ToroRaza')");
        $consulta->execute();
        return $consulta;
    }

    public function eliminarToro($NumeroBovino, $FechaMuerte, $MotivoMuerte, $ValorMuerte) {

        $consulta = $this->db->prepare("call sp_deletedtbtoro('$NumeroBovino','$FechaMuerte','$MotivoMuerte','$ValorMuerte')");
        $consulta->execute();
        return $consulta;
    }

    public function listarToro() {
        $this->db->exec("set names utf8");
        $consulta = $this->db->prepare('call sp_readtbtoro()');
        $consulta->execute();
        $resulado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resulado;
    }
//    ----------------------------------------------------Vaquero------------------------------------------------------
    public function ingresarVaquero($Vaquerocedula, $Vaqueronombre, $Vaqueroroll) {
       
        $consulta = $this->db->prepare("call sp_inserttbvaquero('$Vaquerocedula','$Vaqueronombre','$Vaqueroroll')");
        $consulta->execute();
        return $consulta;
    }

    public function actualizarVaquero($Vaquerocedula, $Vaqueronombre, $Vaqueroroll) {
        
        $consulta = $this->db->prepare("call sp_updatetbvaquero('$Vaquerocedula','$Vaqueronombre','$Vaqueroroll')");
        $consulta->execute();
        return $consulta;
    }

    public function eliminarVaquero($Vaquerocedula) {

        $consulta = $this->db->prepare("call sp_deletedtbvaquero('$Vaquerocedula')");
        $consulta->execute();
        return $consulta;
    }

    public function listarVaquero() {
        $this->db->exec("set names utf8");
        $consulta = $this->db->prepare('call sp_readtbvaquero()');
        $consulta->execute();
        $resulado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resulado;
    }
//    ----------------------------------------------------Inseminacion------------------------------------------------------
    public function ingresarInseminacion($NumeroBovino, $ToroSerie, $FechaInseminacion,$Vaquerocedula,$DescripcionInseminacion) {
       
        $consulta = $this->db->prepare("call sp_inserttbinseminacion('$NumeroBovino','$ToroSerie','$FechaInseminacion','$Vaquerocedula','$DescripcionInseminacion')");
        $consulta->execute();
        return $consulta;
    }

    public function actualizarInseminacion($InseminacionId,$NumeroBovino, $ToroSerie, $FechaInseminacion,$Vaquerocedula,$DescripcionInseminacion) {
       
        $consulta = $this->db->prepare("call sp_updatetbinseminacion('$InseminacionId','$NumeroBovino','$ToroSerie','$FechaInseminacion','$Vaquerocedula','$DescripcionInseminacion')");
        $consulta->execute();
        return $consulta;
    }

    public function listarInseminacion() {
        $this->db->exec("set names utf8");
        $consulta = $this->db->prepare('call sp_readtbinseminacion()');
        $consulta->execute();
        $resulado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resulado;
    }
}

//class
