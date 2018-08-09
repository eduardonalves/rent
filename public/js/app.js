// script.js
    var $empresa = '';
    var signedUserId='';
    var baseUrl = 'https://crackling-fire-8527.firebaseio.com/';
    var AppUrl ='https://crackling-fire-8527.firebaseio.com/';
    var accounts=[];
    var contaPadrao=[];
    var contaIdpadrao;
    var selectedAccount;
    var countLogado=0;

    //@TODO FAZER UM INIT PARA CARREGAR AS INFORMAÇÕES DO REF APÓS O CARREGAMENTO OU CARREGAR UMA FILIAL PADRÃO PARA CONSERTAR O ERRO DE INICIALIZAÇÃO
    var ref = new Firebase(AppUrl);



    // create the module and name it scotchApp
        // also include ngRoute for all our routing needs
    var scotchApp = angular.module('scotchApp', ['ngRoute','firebase','ui.bootstrap']);

    scotchApp.filter('startFrom', function() {

        return function(input, start) {
            if(input) {
                start = +start; //parse to int
                return input.slice(start);
            }
            return [];
        }
    });
    isLoggedIn();
    //Função que remonta o select das contas
    function remontaSelectContas() {
        $('select').material_select('destroy');
       setTimeout(function() {
         $('select').material_select('destroy');
         $('select').material_select();
         $('#base').trigger('change');
       },2500);
       setTimeout(function() {
         $('select').material_select('destroy');
         $('select').material_select();
         $('#base').trigger('change');
       },3000);
    }
    //recupera os acessos do clientes
    function getAccessUser(signedUserId) {
      ref.child('contas_users/'+signedUserId).orderByValue().on("value", function(snapshot) {
        i=0;
        snapshot.forEach(function(data) {
          //console.log("The " + data.key() + " dinosaur's score is "  );
          accounts[i]= data.val();
          contaPadrao = data.val();
          if(i==0)
          {
              contaIdpadrao = contaPadrao.conta_id;
              selectedAccount = contaPadrao.conta_id;
          }
          i++;
        });
        remontaSelectContas();
        return contaIdpadrao;
        console.log(accounts);
      });
    }
    function zerosFromLeft(num) {
      var str = "" + num;
      var pad = "0000";
      var ans = pad.substring(0, pad.length - str.length) + str;
      return ans;
      console.log(ans);
    }
    function counterRecords(url) {

    }
    function logout() {
        ref.unauth();
        window.location.href = '#/usuarios/login';
    }
    //Verifica se o usuário está logado
    function isLoggedIn() {


          var authData = ref.getAuth();
          if (authData)
          {
            console.log("User " + authData.uid + " is logged in with " + authData.provider);
            signedUserId = authData.uid;
            $empresa = authData.uid;
            contaIdpadrao = getAccessUser(signedUserId)

          } else
          {
            signedUserId = '';
            $empresa = '';
            contaPadrao=[];
            authData=[];
            console.log("User is logged out");
            window.location.href = '#/usuarios/login';
          }

          return contaIdpadrao;

    }

    // create the controller and inject Angular's $scope
    scotchApp.controller('mainController', function($scope) {

        $scope.my_account = accounts;

        baseUrl= "https://crackling-fire-8527.firebaseio.com/contas/"+selectedAccount;
        $scope.changeBase = function (e) {
            if($('#base').val() != '')
            {
                selectedAccount = $('#base').val();

                ref.child('contas/'+selectedAccount+'/nome_da_conta').orderByValue().on("value", function(snapshot) {
                  $('#base option[value="'+selectedAccount+'"').text(snapshot.val());
                  console.log('aqui');

                });

            }

        };

    });


    scotchApp.controller('dashboardController', function($scope) {
        $scope.message = 'Contact us! JK. This is just a demo.';
    });
