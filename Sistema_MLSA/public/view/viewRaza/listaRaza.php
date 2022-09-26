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
                <h2>Razas</h2>
            </div>
            <div>
                <h3>Agregar nuev raza</h3>
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
            
            <div class="card-body">

                <div class="row ">
                    <div class="table-responsive col-md-12">
                        <table id="tablaRaza" class="table table-bordered " >
                            <thead>
                                <tr>
                                    <th class="bg-info">Codigo</th>
                                    <th class="bg-info">Nombre</th>
                                    <th class="bg-info">Descripcion</th>
                                    <th class="bg-info">Abreviatura</th>
                                    <th class="bg-info">Actualizar</th>
                                    <th class="bg-info">Eliminar</th>
                                </tr>
                            </thead>

                        </table>
                    </div>

                </div>


            </div>

        </div>

    </div>
</body>

