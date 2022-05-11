<?php

class IndexController {

    public function __construct() {

        $this->view = new View();
    }

//Fin del constructor.
    public function login() {
        $this->view->show("login.php", 1, 0);
    }
    public function inicio() {
        $this->view->show("indexView.php", 1, 0);
    }
    public function ingresoMercadieria() {
        $this->view->show("/view/registroCompras/ingresoMercaderia.php", 1, 0);
    }
    public function Raza() {
        $this->view->show("/view/viewRaza/listaRaza.php", 1, 0);
    }
    public function Estado() {
        $this->view->show("/view/viewEstado/listaEstado.php", 1, 0);
    }
    public function Bovino() {
        $this->view->show("/view/viewBovino/listaBovino.php", 1, 0);
    }
    public function Toro() {
        $this->view->show("/view/viewToro/listaToro.php", 1, 0);
    }
    public function pruebas() {
        $this->view->show("bodyPrincipal.php", 1, 0);
    }


}
?>

