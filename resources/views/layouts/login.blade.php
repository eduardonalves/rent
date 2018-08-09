<html>
    <head>
        <title>ImovApp - @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Sistemas inovador">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Imovapp</title>

        <link rel="shortcut icon" href="/images/favicon.png">


        <!-- css -->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/app.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
        <script src="https://cdn.firebase.com/js/client/2.2.1/firebase.js"></script>
        <script src="https://cdn.firebase.com/libs/angularfire/1.0.0/angularfire.min.js"></script>
        <script src="js/ui-bootstrap-tpls-0.10.0.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/routes.js"></script>
        <script src="js/models/model.js"></script>
        <script src="js/models/conta_user.js"></script>
        <script src="js/models/imovel.js"></script>
        <script src="js/models/conta.js"></script>
        <script src="js/models/proprietario.js"></script>
        <script src="js/models/fiador.js"></script>
        <script src="js/models/locatario.js"></script>
        <script src="js/models/procurador.js"></script>
        <script src="js/models/fornecedor.js"></script>
        <script src="js/models/favorecido.js"></script>
        <script src="js/controllers/contascontroller.js"></script>
        <script src="js/controllers/usuarioscontroller.js"></script>
        <script src="js/controllers/imoveiscontroller.js"></script>
        <script src="js/controllers/proprietarioscontroller.js"></script>
        <script src="js/controllers/locatarioscontroller.js"></script>
        <script src="js/controllers/procuradorescontroller.js"></script>
        <script src="js/controllers/fiadorescontroller.js"></script>
        <script src="js/controllers/fornecedorescontroller.js"></script>
        <script src="js/controllers/favorecidoscontroller.js"></script>
        <script src="js/controllers/controllers.js"></script>
        <script src="js/material.min.js"></script>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
