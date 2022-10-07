<!DOCTYPE html>
<html>

<head>
    <?php
        include 'estilos.php';
    ?>
</head>
<body>
    <br><br><br><br>

    <div class="container">

        <div class="card text-white bg-primary mb-3">
                  <h5 class="card-header">ESCUELA</h5>
                   <form action="" method="POST">
                  <div class="card-body">
               <br><br>
                    <div class="row justify-content-start">
                        <br><br>

                        <div align="center">
                            <button type="submit" class="btn btn-success" style="margin-right: 100px">Opcion1</button>
                            <button type="button" class="btn btn-warning" style="margin-right: 100px">Opcion2</button>
                            <a href=""><input type="button" value="Opcion3" class="btn btn-danger"> </a>  
                               
                        </div>
                       <br><br><br><br>

                    <div class="col-6">
                        <label for="cedula" class="form-label">campo1</label>
                        <input type="text" class="form-control" id="idestudiante" name="idestudiante">
                    </div>
                    <div class="col-6">
                        <label for="nombre" class="form-label">campo2</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    
                     <div class="col-6">
                        <label for="telefono" class="form-label">campo4</label>
                        <input type="number" class="form-control" id="edad" name="edad"min="10" max="100">
                        
                    </div>
                    <div class="col-6">
                        <label for="direccion" class="form-label">campo3<noframes></noframes></label>
                        <input type="text" class="form-control" id="materia" name="materia">
                    </div>                 
                </div>
                  
                     <br>
                    </div>
                </div>
            </form>
    </div>

</body>

</html>

