

// configure our routes
scotchApp.config(function($routeProvider,$locationProvider) {
  //$locationProvider.html5Mode(true);
    $routeProvider

        // route for the home page
        .when('/', {
            templateUrl : 'home',
            controller  : 'mainController'
        })
        .when('/home', {
            templateUrl : 'home',
            controller  : 'mainController'
        })
        // route for imoveis
        .when('/imoveis/cadastrar', {
            templateUrl : 'imoveis/cadastrar',
            controller  : 'imoveisController'
        })
        .when('/imoveis/listar', {
            templateUrl : 'imoveis/listar',
            controller  : 'imoveisController'
        })
        .when('/imoveis/ver', {
            templateUrl : 'imoveis/ver/:id',
            controller  : 'imoveisVerController'
        })
        .when('/imoveis/editar', {
            templateUrl : 'imoveis/editar/:id',
            controller  : 'imoveisEditarController'
        })
        // route for the contato page
        .when('/contato', {
            templateUrl : '/contato',
            controller  : 'contactController'
        })

        // route for the proprietarios page
        .when('/proprietarios/listar', {
            templateUrl : 'proprietarios/listar',
            controller  : 'proprietariosController'
        })
        .when('/proprietarios/ver', {
            templateUrl : 'proprietarios/ver/:id',
            controller  : 'proprietariosVerController'
        })
        .when('/proprietarios/editar', {
            templateUrl : 'proprietarios/editar/:id',
            controller  : 'proprietariosEditarController'
        })
        .when('/proprietarios/cadastrar', {
            templateUrl : 'proprietarios/cadastrar',
            controller  : 'proprietariosController'
        })

        // route for the locatarios page
        .when('/locatarios/listar', {
            templateUrl : 'locatarios/listar',
            controller  : 'locatariosController'
        })
        .when('/locatarios/ver', {
            templateUrl : 'locatarios/ver/:id',
            controller  : 'locatariosVerController'
        })
        .when('/locatarios/editar', {
            templateUrl : 'locatarios/editar/:id',
            controller  : 'locatariosEditarController'
        })
        .when('/locatarios/cadastrar', {
            templateUrl : 'locatarios/cadastrar',
            controller  : 'locatariosController'
        })
        // route for the fiadores page
        .when('/fiadores/listar', {
            templateUrl : 'fiadores/listar',
            controller  : 'fiadoresController'
        })
        .when('/fiadores/ver', {
            templateUrl : 'fiadores/ver/:id',
            controller  : 'fiadoresVerController'
        })
        .when('/fiadores/editar', {
            templateUrl : 'fiadores/editar/:id',
            controller  : 'fiadoresEditarController'
        })
        .when('/fiadores/cadastrar', {
            templateUrl : 'fiadores/cadastrar',
            controller  : 'fiadoresController'
        })
        // route for the fornecedores page
        .when('/fornecedores/listar', {
            templateUrl : 'fornecedores/listar',
            controller  : 'fornecedoresController'
        })
        .when('/fornecedores/ver', {
            templateUrl : 'fornecedores/ver/:id',
            controller  : 'fornecedoresVerController'
        })
        .when('/fornecedores/editar', {
            templateUrl : 'fornecedores/editar/:id',
            controller  : 'fornecedoresEditarController'
        })
        .when('/fornecedores/cadastrar', {
            templateUrl : 'fornecedores/cadastrar',
            controller  : 'fornecedoresController'
        })
        // route for the procuradores page
        .when('/procuradores/listar', {
            templateUrl : 'procuradores/listar',
            controller  : 'procuradoresController'
        })
        .when('/procuradores/ver', {
            templateUrl : 'procuradores/ver/:id',
            controller  : 'procuradoresVerController'
        })
        .when('/procuradores/editar', {
            templateUrl : 'procuradores/editar/:id',
            controller  : 'procuradoresEditarController'
        })
        .when('/procuradores/cadastrar', {
            templateUrl : 'procuradores/cadastrar',
            controller  : 'procuradoresController'
        })
        // route for the favorecidos page
        .when('/favorecidos/listar', {
            templateUrl : 'favorecidos/listar',
            controller  : 'favorecidosController'
        })
        .when('/favorecidos/ver', {
            templateUrl : 'favorecidos/ver/:id',
            controller  : 'favorecidosVerController'
        })
        .when('/favorecidos/editar', {
            templateUrl : 'favorecidos/editar/:id',
            controller  : 'favorecidosEditarController'
        })
        .when('/favorecidos/cadastrar', {
            templateUrl : 'favorecidos/cadastrar',
            controller  : 'favorecidosController'
        })
        //Login
        .when('/usuarios/login', {
            templateUrl : 'usuarios/login',
            controller  : 'usuariosController'
        })
        .when('/usuarios/cadastrar', {
            templateUrl : 'usuarios/cadastrar',
            controller  : 'usuariosController'
        })

        // route for the contas page
        .when('/contas/listar', {
            templateUrl : 'contas/listar',
            controller  : 'contasController'
        })
        .when('/contas/ver', {
            templateUrl : 'contas/ver/:id',
            controller  : 'contasVerController'
        })
        .when('/contas/editar', {
            templateUrl : 'contas/editar/:id',
            controller  : 'contasEditarController'
        })
        .when('/contas/cadastrar', {
            templateUrl : 'contas/cadastrar',
            controller  : 'contasController'
        })

        // caso não seja nenhum desses, redirecione para a rota '/'
        .otherwise ({ redirectTo: '/' });


});
