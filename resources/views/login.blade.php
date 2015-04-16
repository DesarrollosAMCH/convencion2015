<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AMCH | Convención 2015</title>

    <link href="css/back/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <script src="js/front/jquery-2.1.1.js"></script>

    <!--Chosen Plugin-->
    <link href="css/back/plugins/chosen/chosen.css" rel="stylesheet">
    <script src="js/plugins/chosen/chosen.jquery.js"></script>

    <link href="css/back/animate.css" rel="stylesheet">
    <link href="css/back/style.css" rel="stylesheet">


    <style>
        .align-center{
            text-align: center;
        }
        .msg p{
            padding: 15px;
        }
        .my_hidden{
            display: none;
        }
        .chosen-container{
            margin-left: 1px;
        }
        h1{
            text-align: center;
            margin-bottom: 70px;
        }
        img{
            display: block;
            margin: 0 auto 10px;
            width: 350px;
        }
    </style>

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-12">
                <h1 class="font-bold">Convención de Conquistadores AMCH 2015</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            
                <img src="img/parcheamch.png" width="350">

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" role="form">
                        <div class="form-group">
                            <!--<input type="email" class="form-control" placeholder="Username" required="">-->
                            <select class="chosen-select form-control" required>
                                <option>Seleccione su Club</option>
                                <optgroup label="Zona Poniente">
                                    <option value="1">Club Rejas Sur</option>
                                    <option value="2">Club Ararat</option>
                                    <option value="3">Club K2</option>
                                    <option value="4">Club Republica de Francia</option>
                                </optgroup>
                                <optgroup label="Otra Zona">
                                    <option>Club 1</option>
                                    <option>Club 2</option>
                                    <option>Club 3</option>
                                    <option>Club 4</option>
                                </optgroup>
                                <optgroup label="3a Zona">
                                    <option>Club 5</option>
                                    <option>Club 6</option>
                                    <option>Club 7</option>
                                    <option>Club 8</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Escriba su Contraseña" required="">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                        <div class="msg my_hidden">
                            <p class="bg-warning">
                                El sistema aún no está disponible
                            </p>
                        </div>

                        <a href="#">
                            <small>Forgot password?</small>
                        </a>

                        <p class="text-muted text-center">
                            <small>¿Tu club no aparece en el listado?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="http://www.conquis.cl/" target="_blank">Registra tu Club</a>
                    </form>
                    <!--<p class="m-t">
                        <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
                    </p>-->
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-12">
                <p class="align-center">
                    El horario de acceso es desde las 11:00 hasta las 23:59 del día Sábado 16 de Mayo
                </p>
            </div>
            <div class="align-center">
                Regional de Conquistadores AMCH <small>© 2015</small>
            </div>

            </div>
        </div>
    </div>

</body>

<script>
    $(function() {
        $('.chosen-select').chosen();


        $("form").submit(function(e){
            e.preventDefault();
            $(".my_hidden").fadeIn("slow");
        });
    });
</script>

</html>
