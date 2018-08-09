scotchApp.controller("imoveisController", ["$scope", "$firebaseArray","$routeParams","$timeout","$firebaseObject",
function($scope, $firebaseArray,$routeParams,$timeout,$http,$firebaseObject) {
  var countRec;
  isLoggedIn();
  //Função para saber se o documento está pronto
  $('.loaderDiv').show();

  $timeout(function(){





   var refBaseConta = new Firebase(AppUrl+"contas/"+selectedAccount+'/imoveis');



    $scope.imoveis = $firebaseArray(refBaseConta);

    $scope.imoveis.$watch(function(event) {
      console.log(event);
      $scope.filteredItems = $scope.imoveis.length;
      $scope.totalItems = $scope.imoveis.length;
    });

    $scope.currentPage = 1; //current page
    $scope.entryLimit = 10; //max no of items to display in a page

    //Initially for no filter
    $scope.filteredItems = 0;
    $scope.totalItems = 0;

    $scope.imoveis.$loaded(
      function(data) {
        $scope.filteredItems = $scope.imoveis.length;
        $scope.totalItems = $scope.imoveis.length;

        $('#filterGeneral').trigger('change');
        $('.loaderDiv').hide();
        console.log('mudou');
      },
      function(error) {
        console.error("Error:", error);
        $('.loaderDiv').hide();
      }
    );

    $scope.logout = function(e) {
      logout();
    }

    $scope.setPage = function(pageNo) {
          $scope.currentPage = pageNo;

      };
      $scope.filter = function() {

          $timeout(function() {
              $scope.filteredItems = $scope.filtered.length;

          }, 10);
      };
      $scope.sort_by = function(predicate) {
            console.log(predicate);
          $scope.predicate = predicate;
          $scope.reverse = !$scope.reverse;

      };


    //ADD MESSAGE METHOD
    $scope.saveObject = function(e) {


      //  createImovelObj($scope);

        //console.log(createImovelObj($scope));

        //var refContador = new Firebase(AppUrl+"contas/"+selectedAccount+'/imoveis');

        refBaseConta.once("value", function(snapshot) {
           var snapRec = snapshot.numChildren();
           num = snapRec + 1;
           countRec= zerosFromLeft(num);
           $scope.totalItems = snapRec;
           $scope.codigointerno =  'imv-'+ countRec;
        });

        console.log($scope.codigointerno);
        $scope.imoveis.$add(createImovelObj($scope)).then(function(refBaseConta) {
          var id = refBaseConta.key();
          alert("added record with id " + id);
        //  $scope.imoveis.$indexFor(id);
          //  console.log($scope.imoveis.$indexFor(id)); // returns location in the array
        }).catch(function(error) {
          alert('Error!');
        });

      //  $scope.imoveis.$add(createImovelObj($scope));
        //RESET MESSAGE
      //  $scope.msg = "";

    }
  },2000);


}
]);

scotchApp.controller("imoveisVerController", ["$scope", "$firebaseArray","$routeParams","$timeout",
function($scope, $firebaseArray,$routeParams,$timeout) {
  var currentId = $routeParams.id;
  $('.loaderDiv').show();
  //Função para saber se o documento está pronto
  $timeout(function(){
    var refBaseContaImoveis = new Firebase(AppUrl+"contas/"+selectedAccount+'/imoveis/'+currentId);

    $scope.imoveis = $firebaseArray(refBaseContaImoveis);
    setTimeout(function () {
      $('.loaderDiv').hide();
    },1000);
  },1200);

}
]);

scotchApp.controller("imoveisEditarController", ["$scope", "$firebaseArray","$routeParams","$firebaseObject","$timeout",
function($scope, $firebaseArray,$routeParams,$firebaseObject,$timeout) {
  var currentId = $routeParams.id;
  $('.loaderDiv').show();
  $timeout(function(){
  var refBaseContaImoveis = new Firebase(AppUrl+"contas/"+selectedAccount+'/imoveis/'+currentId);

  $scope.imoveis = $firebaseArray(refBaseContaImoveis);



  $scope.editObject = function(e) {



    $scope.imoveis.$save(0).then(function(ref) {

      ref.key() === $scope.imoveis[0].$id; // true

    }, function(error) {
      console.log("Error:", error);
    });
  }
  setTimeout(function () {
    $('.loaderDiv').hide();
  },1000);

  },1200);
}
]);
