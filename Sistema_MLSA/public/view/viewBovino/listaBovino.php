<header>
    <?php
//    
    include_once 'public/headerPrincipal.php';
//        
    ?>
</header>

<body>
    <div class="row justify-content-center">
        <div class="card">
            <div class="title-cards">
                <h2>Bovinos</h2>
            </div>
            <div>
                <h3>Agregar un bovino</h3>
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
            <div class="card-body">

                <div class="row ">
                    <div class="table-responsive col-md-12">
                        <table id="tablaBovino" class="table table-bordered " >
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

            </div>
        </div>
    </div>
</body>

