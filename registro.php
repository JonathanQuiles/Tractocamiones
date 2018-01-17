<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--Para que se adapete a los dispositivos mas grandes-->
    
    <!-- LINKS de Bootrstrap y CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"><!--Bootstrap-->
    <link rel="stylesheet" href="css/css.css"><!--CSS--> 
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"><!-- Iconos de font-awesome -->

    
    <!--Los "SCRIPTS" van en este orden o no funcionaran despues-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    
    
    <!-- ANGULAR -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script><!--Libreria de Angular-->
    <script type="text/javascript" src="js/angular.js"></script><!-- Archivo JS de Angular--> 
 
    
    <!-- FUENTES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet"><!--Google fonts-->
    
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--Iconos de Google-->
    
    <title>Tractocamiones SyQ</title>

</head>
    
    
<body style="background-color: #E5E5E5; ">
    
    
    



<form class="container" action="insertar.php" method="post" enctype=”multipart/form-data” style="font-size: 17px; background-color: #F2F2F2; height: 100%">
    <br>
    <br>
    <h1 class="text-center roboto">Registro de Vehiculos</h1>
    <br>
    
    <div class="row open-sans">
        <!-- Modelo -->
        <div class="form-group col-lg-6 col-xl-4">
            <label for="exampleInputEmail1">Modelo del vehiculo</label>
            <input class="form-control" name="modelo">
</div>

        <!-- Precio -->
        <div class="form-group col-lg-6 col-xl-4">
            <label for="exampleInputPassword1">Precio</label>
            <input class="form-control" name="precio">
        </div>
        
        <!-- Kilometraje -->
        <div class="form-group col-lg-6 col-xl-4">
            <label for="exampleInputPassword1">Kilometraje</label>
            <input class="form-control" name="kilometraje">
        </div>

        <!-- Año -->
        <div class="form-group col-lg-6 col-xl-4">
            <label for="exampleFormControlSelect1">Año del vehiculo</label>
            <select class="form-control" id="exampleFormControlSelect1" name="age">\
            <option value="2020">2020</option>    
            <option value="2019">2019</option>    
            <option value="2018">2018</option>    
            <option value="2017">2017</option>    
            <option value="2016">2016</option>    
            <option value="2015">2015</option>    
            <option value="2014">2014</option>    
            <option value="2013">2013</option>    
            <option value="2012">2012</option>    
            <option value="2011">2011</option>    
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
        </select>   
</div>

        <!-- Marca -->
        <div class="form-group col-lg-6 col-xl-4">
            <label for="exampleInputPassword1">Marca</label>
            <select class="form-control" id="exampleFormControlSelect1" name="marca">
                <option value="Freightliner">Freightliner</option>    
                <option value="International">International</option>    
                <option value="Kenworth">Kenworth</option>    
                <option value="Volvo">Volvo</option>    
            </select>   
        </div>

        <!-- Tipo -->
        <div class="form-group col-lg-6 col-xl-4">
            <label for="exampleInputPassword1">Categoria de vehiculo</label>
            <select class="form-control" id="exampleFormControlSelect1" name="tipo">
                <option value="Tractocamion">Tractocamion</option>    
                <option value="Torton">Torton</option>    
                <option value="Rabon">Rabon</option>    
                <option value="Equipo aliado">Equipo aliado</option>    
            </select>   
        </div>

        <!-- Descripcion -->
        <div class="form-group col-lg-12 col-xl-12">
            <label for="exampleInputEmail1">Caracteristicas</label>
            <textarea class="form-control" name="descripcion" rows="3" maxlength="1500"></textarea>
        </div>



        <!-- Imagen 1 -->
        <div class="form-group col-md-6 col-lg-6 col-xl-6">
             <div class="form-group">
                <label for="exampleFormControlFile1">Foto 1</label>
                <input type="file" class="form-control-file">
             </div>
</div>

        <!-- Imagen 2 -->
        <div class="form-group col-md-6 col-lg-6 col-xl-6">
             <div class="form-group">
                <label for="exampleFormControlFile1">Foto 2</label>
                <input type="file" class="form-control-file">
             </div>
</div>

        <!-- Imagen 3 -->
        <div class="form-group col-md-6 col-lg-6 col-xl-6">
             <div class="form-group">
                <label for="exampleFormControlFile1">Foto 3</label>
                <input type="file" class="form-control-file">
             </div>
</div>

        <!-- Imagen 4 -->
        <div class="form-group col-md-6 col-lg-6 col-xl-6">
             <div class="form-group">
                <label for="exampleFormControlFile1">Foto 4</label>
                <input type="file" class="form-control-file">
             </div>
</div>

        <!-- Imagen 5 -->
        <div class="form-group col-md-6 col-lg-6 col-xl-6">
             <div class="form-group">
                <label for="exampleFormControlFile1">Foto 5</label>
                <input type="file" class="form-control-file">
             </div>
</div>

        <!-- Imagen 6 -->
        <div class="form-group col-md-6 col-lg-6 col-xl-6">
             <div class="form-group">
                <label for="exampleFormControlFile1">Foto 6</label>
                <input type="file" class="form-control-file">
             </div>
</div>

        <!-- Imagen 7 -->
        <div class="form-group col-md-6 col-lg-6 col-xl-6">
             <div class="form-group">
                <label for="exampleFormControlFile1">Foto 7</label>
                <input type="file" class="form-control-file">
             </div>
</div>

        <!-- Imagen 8 -->
        <div class="form-group col-md-6 col-lg-6 col-xl-6">
             <div class="form-group">
                <label for="exampleFormControlFile1">Foto 8</label>
                <input type="file" class="form-control-file">
             </div>
        </div>
        
        <!-- Imagen 9 -->
        <div class="form-group col-md-6 col-lg-6 col-xl-6">
             <div class="form-group">
                <label for="exampleFormControlFile1">Foto 9</label>
                <input type="file" class="form-control-file">
             </div>
        </div>
        
        <!-- Imagen 10 -->
        <div class="form-group col-md-6 col-lg-6 col-xl-6">
             <div class="form-group">
                <label for="exampleFormControlFile1">Foto 10</label>
                <input type="file" class="form-control-file">
             </div>
        </div>
        
    </div>      
    <br>
    <!-- Submit -->
    <div class="col-md-3 col-lg-3 col-xl-3 offset-md-9 offset-lg-19 offset-xl-9" style="margin-bottom: 25px">
        <button type="submit" class="btn btn-primary boton-rojo text-center col-8 offset-2">Guardar</button>
    </div>
    
</form>   

    

    

</body>
</html>
