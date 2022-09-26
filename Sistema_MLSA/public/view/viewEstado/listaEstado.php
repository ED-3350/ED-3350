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
                    <h2>Estados</h2>
                </div>
                
                <div>
                    <h3>Agregar nuevo estado</h3>
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

                <div class="card-body">

                    <div class="row ">
                        <div class="table-responsive col-md-12">
                            <table id="tablaEstado" class="table table-bordered " >
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


                </div>

            </div>

        </div>
    </body>

