
<header>
    <?php
//    
    include_once 'public/headerPrincipal.php';
//        
    ?>
</header>
<html> 

    <body>
        <div >
            <ul class="nav navbar-nav">

                <li class="dropdown col-md-4 col-sm-12">
                    <a href="#" class="scroll dropdown-toggle" data-toggle="dropdown">Raza<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#ingresarRaza">Ingresar Raza</a>

                            <div id="ingresarRaza" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <form autocomplete="off" class="form" method="POST" id="ingresarRazaF" enctype="multipart/form-data">
                                        <div >
                                            <label>Nombre raza </label>
                                            <div>
                                                <input class="form-control" id="Nombre" name="Nombre"type="text">
                                            </div>
                                        </div>
                                        <div >
                                            <label>Descripcion </label>
                                            <div>
                                                <input class="form-control" id="Descripcion" name="Descripcion"type="text">
                                            </div>
                                        </div>
                                        <div >
                                            <label>Abreviatura </label>
                                            <div>
                                                <input class="form-control" id="Abreviatura" name="Abreviatura"type="text">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label ></label>
                                            <div >
                                                <input class="btn-primary" id="registrarRaza" type="submit" value="Registrar" >
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div></li>
                        <li><a href="#actualizarRaza">Actualizar Raza</a>

                            <div id="actualizarRaza" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <form autocomplete="off" class="form" method="POST" id="actualizarRazaF" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label>Seleccionar raza </label>
                                            <div>
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <select class="browser-default custom-select" id="RazasNombre" name="RazasNombre"></select>
                                            </div>
                                        </div>

                                        <div >
                                            <label>Nombre raza </label>
                                            <div>
                                                <input class="form-control" id="NombreA" name="NombreA"type="text">
                                            </div>
                                        </div>
                                        <div >
                                            <label>Descripcion </label>
                                            <div>
                                                <input class="form-control" id="DescripcionA" name="DescripcionA"type="text">
                                            </div>
                                        </div>
                                        <div >
                                            <label>Abreviatura </label>
                                            <div>
                                                <input class="form-control" id="AbreviaturaA" name="AbreviaturaA"type="text">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label ></label>
                                            <div >
                                                <input class="btn-primary" id="btnactualizarRaza" type="submit" value="Actualizar Raza" >
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div></li>
                        <li><a href="#eliminarRaza">Eliminar Raza</a>

                            <div id="eliminarRaza" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <form autocomplete="off" class="form" method="POST" id="eliminarRazaF" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label>Seleccionar raza </label>
                                            <div>
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <select class="browser-default custom-select" id="RazasNombres" name="RazasNombres"></select>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label ></label>
                                            <div >
                                                <input class="btn-primary" id="btneliminarRaza" type="submit" value="Eliminar Raza" >
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div></li>
                        <li><a href="#verRaza">Ver Raza</a>
                            <div id="verRaza" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <label>Razas </label>
                                    <br><br><br>
                                    <div class="table-responsive col-md-12">
                                        <table id="tablaRaza" class="table table-bordered " style="width:85%">
                                            <thead>
                                                <tr>
                                                    <th class="bg-info">Codigo</th>
                                                    <th class="bg-info">Nombre</th>
                                                    <th class="bg-info">Descripcion</th>
                                                    <th class="bg-info">Abreviatura</th>





                                                </tr>
                                            </thead>

                                        </table>
                                    </div>
                                </div>
                            </div></li>
                    </ul>
                </li>					
                <li class="dropdown col-md-4 col-sm-12">
                    <a href="#" class="scroll dropdown-toggle" data-toggle="dropdown">Estado<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#ingresarEstado">Ingresar Estado</a>

                            <div id="ingresarEstado" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <form autocomplete="off" class="form" method="POST" id="ingresarEstadoF" enctype="multipart/form-data">
                                        <div >
                                            <label>Nombre Estado </label>
                                            <div>
                                                <input class="form-control" id="NombreEstado" name="NombreEstado"type="text">
                                            </div>
                                        </div>
                                        <div >
                                            <label>Descripcion </label>
                                            <div>
                                                <input class="form-control" id="DescripcionEstado" name="DescripcionEstado"type="text">
                                            </div>
                                        </div>
                                        <div >
                                            <label>Semana Inicio </label>
                                            <div>
                                                <input type='number' id='IniciaEstado' value='1' min='1'>
                                            </div>
                                        </div>
                                        <div >
                                            <label>Semana Final </label>
                                            <div>
                                                <input type='number' id='TerminaEstado' value='1' min='1'>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label ></label>
                                            <div >
                                                <input class="btn-primary" id="registrarEstado" type="submit" value="Registrar" >
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div></li>
                        <li><a href="#actualizarEstado">Actualizar Estado</a>

                            <div id="actualizarEstado" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <form autocomplete="off" class="form" method="POST" id="actualizarEstadoF" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label>Seleccionar Estado </label>
                                            <div>
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <select class="browser-default custom-select" id="EstadoNombre" name="EstadoNombre"></select>
                                            </div>
                                        </div>

                                        <div >
                                            <label>Nombre Estado </label>
                                            <div>
                                                <input class="form-control" id="NombreEstadoA" name="NombreEstadoA"type="text">
                                            </div>
                                        </div>
                                        <div >
                                            <label>Descripcion </label>
                                            <div>
                                                <input class="form-control" id="DescripcionEstadoA" name="DescripcionEstadoA"type="text">
                                            </div>
                                        </div>
                                        <div >
                                            <label>Semana Inicio </label>
                                            <div>
                                                <input type='number' id='IniciaEstadoA' value='1' min='1'>
                                            </div>
                                        </div>
                                        <div >
                                            <label>Semana Final </label>
                                            <div>
                                                <input type='number' id='TerminaEstadoA' value='1' min='1'>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label ></label>
                                            <div >
                                                <input class="btn-primary" id="btnactualizarEstado" type="submit" value="Actualizar Estado" >
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div></li>
                        <li><a href="#eliminarEstado">Eliminar Estado</a>

                            <div id="eliminarEstado" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <form autocomplete="off" class="form" method="POST" id="eliminarEstadoF" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label>Seleccionar Estado </label>
                                            <div>
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <select class="browser-default custom-select" id="EstadoNombres" name="EstadoNombres"></select>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label ></label>
                                            <div >
                                                <input class="btn-primary" id="btneliminarEstado" type="submit" value="Eliminar Estado" >
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div></li>
                        <li><a href="#verEstado">Ver Estados</a>
                            <div id="verEstado" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <label>Estados </label>
                                    <br><br><br>
                                    <div class="table-responsive col-md-12">
                                        <table id="tablaEstado" class="table table-bordered " style="width:85%">
                                            <thead>
                                                <tr>
                                                    <th class="bg-info">Codigo</th>
                                                    <th class="bg-info">Nombre</th>
                                                    <th class="bg-info">Descripcion</th>
                                                    <th class="bg-info">Semana Inicio</th>
                                                    <th class="bg-info">Semana Final</th>





                                                </tr>
                                            </thead>

                                        </table>
                                    </div>
                                </div>
                            </div></li>
                    </ul>
                </li>
                <li class="dropdown col-md-4 col-sm-12">
                    <a href="#" class="scroll dropdown-toggle" data-toggle="dropdown">Bovino<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#ingresarBovino">Ingresar Bovino</a>

                            <div id="ingresarBovino" class="modalDialog ">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <form autocomplete="off" class="form" method="POST" id="ingresarEstadoF" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label>Numero del Bovino </label>
                                                <div>
                                                    <input class="form-control" id="NumeroBovino" name="NumeroBovino"type="text">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-4 col-sm-12">
                                                <label>Nombre Bovino </label>
                                                <div>
                                                    <input class="form-control" id="NombreBovino" name="NombreBovino"type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div >
                                                <label>Nombre Madre </label>
                                                <div>
                                                    <input class="form-control" id="NombreMadre" name="NombreMadre"type="text">
                                                </div>
                                            </div>
                                            <br>
                                            <div >
                                                <label>Nombre Padre </label>
                                                <div>
                                                    <input class="form-control" id="NombrePadre" name="NombrePadre"type="text">
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="row">
                                            <div class="input-box">
                                                <span class="details">Fecha Nacimiento</span>
                                                <br>
                                                <input type="date" id="Fecha" name="trip-start"
                                                       value=""
                                                       min="1940-01-01" max="2050-12-31"id="Fecha" required >
                                            </div>
                                            <br>
                                            <div class="form-group row">
                                                <label>Seleccionar Estado </label>
                                                <div>
                                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                                    <select class="browser-default custom-select" id="EstadoNombresBovino" name="EstadoNombresBovino"></select>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="row">
                                            <div class="form-group row">
                                                <label>Seleccionar raza </label>
                                                <div>
                                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                                    <select class="browser-default custom-select" id="RazasNombresBovino" name="RazasNombresBovino"></select>
                                                </div>
                                            </div>
                                            <br>

                                            <div >
                                                <label>Pezones sanos </label>
                                                <div>
                                                    <input type='number' id='PezonesSanos' value='1' min='1' max='4'>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="form-group row">
                                            <label ></label>
                                            <div >
                                                <input class="btn-primary" id="registrarBovino" type="submit" value="Registrar" >
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div></li>

                        <li><a href="#actualizarBovino">Actualizar Bovino</a>

                            <div id="actualizarBovino" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <form autocomplete="off" class="form" method="POST" id="ingresarEstadoF" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="form-group row">
                                                <label>Seleccionar Bovino </label>
                                                <div>
                                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                                    <select class="browser-default custom-select" id="BovinoNombre" name="BovinoNombre"></select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-4 col-sm-12">
                                                <label>Nombre Bovino </label>
                                                <div>
                                                    <input class="form-control" id="NombreBovino" name="NombreBovino"type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div >
                                                <label>Nombre Madre </label>
                                                <div>
                                                    <input class="form-control" id="NombreMadre" name="NombreMadre"type="text">
                                                </div>
                                            </div>
                                            <br>
                                            <div >
                                                <label>Nombre Padre </label>
                                                <div>
                                                    <input class="form-control" id="NombrePadre" name="NombrePadre"type="text">
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="row">
                                            <div class="input-box">
                                                <span class="details">Fecha Nacimiento</span>
                                                <br>
                                                <input type="date" id="Fecha" name="trip-start"
                                                       value=""
                                                       min="1940-01-01" max="2050-12-31"id="Fecha" required >
                                            </div>
                                            <br>
                                            <div class="form-group row">
                                                <label>Seleccionar Estado </label>
                                                <div>
                                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                                    <select class="browser-default custom-select" id="EstadoNombresBovinos" name="EstadoNombresBovinos"></select>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="row">
                                            <div class="form-group row">
                                                <label>Seleccionar raza </label>
                                                <div>
                                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                                    <select class="browser-default custom-select" id="RazasNombresBovinos" name="RazasNombresBovino"></select>
                                                </div>
                                            </div>
                                            <br>

                                            <div >
                                                <label>Pezones sanos </label>
                                                <div>
                                                    <input type='number' id='PezonesSanos' value='1' min='1' max='4'>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="form-group row">
                                            <label ></label>
                                            <div >
                                                <input class="btn-primary" id="actualizarBovino" type="submit" value="Actualizar" >
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div></li>
                        <li><a href="#eliminarBovino">Eliminar Bovino</a>

                            <div id="eliminarBovino" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <form autocomplete="off" class="form" method="POST" id="eliminarBovinoF" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label>Seleccionar Bovino </label>
                                            <div>
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <select class="browser-default custom-select" id="BovinoNombres" name="BovinoNombres"></select>
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Fecha Muerte</span>
                                            <br>
                                            <input type="date" id="FechaMuerte" name="trip-start"
                                                   value=""
                                                   min="1940-01-01" max="2050-12-31"id="Fecha" required >
                                        </div>


                                        <div >
                                            <label>Motivo muerte </label>
                                            <div>
                                                <textarea class="form-control" id="MotivoMuerte" name="MotivoMuerte"type="text"></textarea>
                                            </div>
                                        </div>
                                        <div >
                                            <label>Valor muerte </label>
                                            <div>
                                                <input type='number' id='ValorMuerte' value='1' min='1'>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label ></label>
                                            <div >
                                                <input class="btn-primary" id="btneliminarBovino" type="submit" value="Eliminar Bovino" >
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div></li>
                        <li><a href="#verBovino">Ver Bovino</a>
                            <div id="verBovino" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <label>Bovino </label>
                                    <br><br><br>
                                    <div class="table-responsive col-md-12">
                                        <table id="tablaBovino" class="table table-bordered " style="width:85%">
                                            <thead>
                                                <tr>
                                                    <th class="bg-info">Numero</th>
                                                    <th class="bg-info">Nombre</th>
                                                    <th class="bg-info">Madre</th>
                                                    <th class="bg-info">Padre</th>
                                                    <th class="bg-info">Fecha</th>
                                                    <th class="bg-info">Raza</th>
                                                    <th class="bg-info">Estado</th>
                                                    <th class="bg-info">Pezones sanos</th>
                                                    <th class="bg-info">Facilidad parto</th>





                                                </tr>
                                            </thead>

                                        </table>
                                    </div>
                                </div>
                            </div></li>
                    </ul>
                </li>
                <li class="dropdown col-md-4 col-sm-12">
                    <a href="#" class="scroll dropdown-toggle" data-toggle="dropdown">Toro<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#ingresarToro">Ingresar Toro</a>

                            <div id="ingresarToro" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <form autocomplete="off" class="form" method="POST" id="ingresarToroF" enctype="multipart/form-data">
                                        <div >
                                            <label>Toro serie</label>
                                            <div>
                                                <input class="form-control" id="ToroSerie" name="ToroSerie"type="text">
                                            </div>
                                        </div>
                                        <div >
                                            <label>Nombre del toro</label>
                                            <div>
                                                <input class="form-control" id="NombreToro" name="NombreToro"type="text">
                                            </div>
                                        </div>
                                        <div >
                                            <label>Casa comercial</label>
                                            <div>
                                                <input type='number' id='CasaComercialToro' value='1' min='1'>
                                            </div>
                                        </div>
                                        <div >
                                            <label>Raza de toro </label>
                                            <div>
                                                <input class="form-control" id="ToroRaza" name="ToroRaza"type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label ></label>
                                            <div >
                                                <input class="btn-primary" id="registrarToro" type="submit" value="Registrar" >
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div></li>
                        <li><a href="#actualizarToro">Actualizar Toro</a>

                            <div id="actualizarToro" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <form autocomplete="off" class="form" method="POST" id="actualizarToroF" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label>Seleccionar Toro </label>
                                            <div>
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <select class="browser-default custom-select" id="ToroNombre" name="ToroNombre"></select>
                                            </div>
                                        </div>

                                        <div >
                                            <label>Nombre del toro</label>
                                            <div>
                                                <input class="form-control" id="NombreToroA" name="NombreToroA"type="text">
                                            </div>
                                        </div>
                                        <div >
                                            <label>Casa comercial</label>
                                            <div>
                                                <input type='number' id='CasaComercialToroA' value='1' min='1'>
                                            </div>
                                        </div>
                                        <div >
                                            <label>Raza de toro </label>
                                            <div>
                                                <input class="form-control" id="ToroRazaA" name="ToroRazaA"type="text">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label ></label>
                                            <div >
                                                <input class="btn-primary" id="btnactualizarToro" type="submit" value="Actualizar Toro" >
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div></li>
                        <li><a href="#eliminarToro">Eliminar Toro</a>

                            <div id="eliminarToro" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <form autocomplete="off" class="form" method="POST" id="eliminarToroF" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label>Seleccionar Bovino </label>
                                            <div>
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <select class="browser-default custom-select" id="ToroNombres" name="ToroNombres"></select>
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Fecha Muerte</span>
                                            <br>
                                            <input type="date" id="FechaMuerteToro" name="trip-start"
                                                   value=""
                                                   min="1940-01-01" max="2050-12-31"id="FechaToro" required >
                                        </div>


                                        <div >
                                            <label>Motivo muerte </label>
                                            <div>
                                                <textarea class="form-control" id="MotivoMuerteToro" name="MotivoMuerteToro"type="text"></textarea>
                                            </div>
                                        </div>
                                        <div >
                                            <label>Valor muerte </label>
                                            <div>
                                                <input type='number' id='ValorMuerteToro' value='1' min='1'>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label ></label>
                                            <div >
                                                <input class="btn-primary" id="btneliminarToro" type="submit" value="Eliminar Toro" >
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div></li>
                        <li><a href="#verToro">Ver Toros</a>
                            <div id="verToro" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <label>Toros </label>
                                    <br><br><br>
                                    <div class="table-responsive col-md-12">
                                        <table id="tablaToro" class="table table-bordered " style="width:85%">
                                            <thead>
                                                <tr>
                                                    <th class="bg-info">Serie</th>
                                                    <th class="bg-info">Nombre</th>
                                                    <th class="bg-info">Casa Comercial</th>
                                                    <th class="bg-info">Raza</th>

                                                </tr>
                                            </thead>

                                        </table>
                                    </div>
                                </div>
                            </div></li>
                    </ul>
                </li>
                <li class="dropdown col-md-4 col-sm-12">
                    <a href="#" class="scroll dropdown-toggle" data-toggle="dropdown">Vaquero<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#ingresarVaquero">Ingresar Vaquero</a>

                            <div id="ingresarVaquero" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <form autocomplete="off" class="form" method="POST" id="ingresarVaqueroF" enctype="multipart/form-data">
                                        <div >
                                            <label>Cedula</label>
                                            <div>
                                                <input class="form-control" id="Vaquerocedula" name="Vaquerocedula"type="text">
                                            </div>
                                        </div>
                                        <div >
                                            <label>Nombre Vaquero </label>
                                            <div>
                                                <input class="form-control" id="Vaqueronombre" name="Vaqueronombre"type="text">
                                            </div>
                                        </div>
                                        <div >
                                            <label>Rol de Vaquero</label>
                                            <div>
                                                <input type='number' id='Vaqueroroll' value='1' min='1'>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label ></label>
                                            <div >
                                                <input class="btn-primary" id="registrarVaquero" type="submit" value="Registrar" >
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div></li>
                        <li><a href="#actualizarVaquero">Actualizar Vaquero</a>

                            <div id="actualizarVaquero" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <form autocomplete="off" class="form" method="POST" id="actualizarVaqueroF" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label>Seleccionar Vaquero </label>
                                            <div>
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <select class="browser-default custom-select" id="VaqueroNombre" name="VaqueroNombre"></select>
                                            </div>
                                        </div>

                                        <div >
                                            <label>Nombre Vaquero </label>
                                            <div>
                                                <input class="form-control" id="VaqueronombreA" name="VaqueronombreA"type="text">
                                            </div>
                                        </div>

                                        <div >
                                            <label>Rol de Vaquero </label>
                                            <div>
                                                <input type='number' id='VaquerorollA' value='1' min='1'>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label ></label>
                                            <div >
                                                <input class="btn-primary" id="btnactualizarVaquero" type="submit" value="Actualizar Vaquero" >
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div></li>
                        <li><a href="#eliminarVaquero">Eliminar Vaquero</a>

                            <div id="eliminarVaquero" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <form autocomplete="off" class="form" method="POST" id="eliminarVaqueroF" enctype="multipart/form-data">
                                        <br><br>
                                        <div class="form-group row">
                                            <label>Seleccionar Vaquero </label>

                                            <div>
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <select class="browser-default custom-select" id="VaqueroNombres" name="VaqueroNombres"></select>
                                            </div>
                                        </div>

                                        <br><br>
                                        <div class="form-group row">
                                            <label ></label>
                                            <div >
                                                <input class="btn-primary" id="btneliminarVaquero" type="submit" value="Eliminar Vaquero" >
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div></li>
                        <li><a href="#verVaquero">Ver Vaquero</a>
                            <div id="verVaquero" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <label>Vaqueros </label>
                                    <br><br><br>
                                    <div class="table-responsive col-md-12">
                                        <table id="tablaVaquero" class="table table-bordered " style="width:85%">
                                            <thead>
                                                <tr>
                                                    <th class="bg-info">Cedula</th>
                                                    <th class="bg-info">Nombre</th>
                                                    <th class="bg-info">Roll</th>

                                                </tr>
                                            </thead>

                                        </table>
                                    </div>
                                </div>
                            </div></li>
                    </ul>
                </li>
                <li class="dropdown col-md-4 col-sm-12">
                    <a href="#" class="scroll dropdown-toggle" data-toggle="dropdown">Inseminación<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#ingresarInseminacion">Ingresar Inseminacion</a>

                            <div id="ingresarInseminacion" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <form autocomplete="off" class="form" method="POST" id="ingresarInseminacionF" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label>Seleccionar Bovino </label>
                                            <div>
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <select class="browser-default custom-select" id="BovinoInseminacion" name="BovinoInseminacion"></select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label>Seleccionar Toro </label>
                                            <div>
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <select class="browser-default custom-select" id="ToroInseminacion" name="ToroInseminacion"></select>
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Fecha</span>
                                            <br>
                                            <input type="date" id="FechaInseminacion" name="trip-start"
                                                   value=""
                                                   min="1940-01-01" max="2050-12-31"id="FechaInseminacion" required >
                                        </div>
                                        <div class="form-group row">
                                            <label>Seleccionar Vaquero </label>
                                            <div>
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <select class="browser-default custom-select" id="VaqueroInseminacion" name="VaqueroInseminacion"></select>
                                            </div>
                                        </div>
                                        <div >
                                            <label>Descripcion</label>
                                            <div>
                                                <textarea class="form-control" id="DescripcionInseminacion" name="DescripcionInseminacion"type="text"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label ></label>
                                            <div >
                                                <input class="btn-primary" id="registrarInseminacion" type="submit" value="Registrar" >
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div></li>
                        <li><a href="#actualizarInseminacion">Actualizar Inseminacion</a>

                            <div id="actualizarInseminacion" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <form autocomplete="off" class="form" method="POST" id="actualizarInseminacionF" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label>Seleccionar Inseminacion </label>
                                            <div>
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <select class="browser-default custom-select" id="InseminacionNombre" name="InseminacionNombre"></select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label>Seleccionar Bovino </label>
                                            <div>
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <select class="browser-default custom-select" id="BovinosInseminacion" name="BovinosInseminacion"></select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label>Seleccionar Toro </label>
                                            <div>
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <select class="browser-default custom-select" id="TorosInseminacion" name="TorosInseminacion"></select>
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Fecha</span>
                                            <br>
                                            <input type="date" id="FechaInseminacionA" name="trip-start"
                                                   value=""
                                                   min="1940-01-01" max="2050-12-31"id="FechaInseminacionA" required >
                                        </div>
                                        <div class="form-group row">
                                            <label>Seleccionar Vaquero </label>
                                            <div>
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <select class="browser-default custom-select" id="VaquerosInseminacion" name="VaquerosInseminacion"></select>
                                            </div>
                                        </div>
                                        <div >
                                            <label>Descripcion</label>
                                            <div>
                                                <textarea class="form-control" id="DescripcionInseminacionA" name="DescripcionInseminacionA"type="text"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label ></label>
                                            <div >
                                                <input class="btn-primary" id="btnactualizarInseminacion" type="submit" value="Actualizar Inseminacion" >
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div></li>
                        
                        <li><a href="#verInseminacion">Ver Inseminacion</a>
                            <div id="verInseminacion" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    <label>Inseminacion </label>
                                    <br><br><br>
                                    <div class="table-responsive col-md-12">
                                        <table id="tablaInseminacion" class="table table-bordered " style="width:85%">
                                            <thead>
                                                <tr>
                                                    <th class="bg-info">Codigo</th>
                                                    <th class="bg-info">Bovino N°</th>
                                                    <th class="bg-info">Toro Serie</th>
                                                    <th class="bg-info">Fecha</th>
                                                    <th class="bg-info">Vaquero</th>
                                                    <th class="bg-info">Descripcion</th>

                                                </tr>
                                            </thead>

                                        </table>
                                    </div>
                                </div>
                            </div></li>
                    </ul>
                </li>

            </ul>
        </div>
    </body>

</html>

