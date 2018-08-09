scotchApp.controller("fornecedoresController", ["$scope", "$firebaseArray","$routeParams","$timeout",
function($scope, $firebaseArray,$routeParams,$timeout,$http) {
  isLoggedIn();
  $('.loaderDiv').show();
  //Função para saber se o documento está pronto
  $timeout(function(){


    //console.log(selectedAccount);

   var refBaseConta = new Firebase(AppUrl+"contas/"+selectedAccount+'/fornecedores');




    $scope.fornecedores = $firebaseArray(refBaseConta);
    $scope.fornecedores.$watch(function(event) {
      $scope.filteredItems = $scope.fornecedores.length;
      $scope.totalItems = $scope.fornecedores.length;
    });


    $scope.currentPage = 1; //current page
    $scope.entryLimit = 10; //max no of items to display in a page

    //Initially for no filter
    $scope.filteredItems = 0;
    $scope.totalItems = 0;
    $scope.fornecedores.$loaded(
      function(data) {


        $scope.filteredItems = $scope.fornecedores.length;
        $scope.totalItems = $scope.fornecedores.length;
        $('.loaderDiv').hide();

      },
      function(error) {
        console.error("Error:", error);
        $('.loaderDiv').hide();
      }
    );



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


      //  createFornecedorObj($scope);

        //console.log(createFornecedorObj($scope));
        $scope.fornecedores.$add(createFornecedorObj($scope)).then(function(refBaseConta) {
          var id = refBaseConta.key();
          alert("added record with id " + id);
        //  $scope.fornecedores.$indexFor(id);
          //  console.log($scope.fornecedores.$indexFor(id)); // returns location in the array
        }).catch(function(error) {
          alert('Error!');
        });

      //  $scope.fornecedores.$add(createFornecedorObj($scope));
        //RESET MESSAGE
      //  $scope.msg = "";

    }
  },1200);


}
]);

scotchApp.controller("fornecedoresVerController", ["$scope", "$firebaseArray","$routeParams","$timeout",
function($scope, $firebaseArray,$routeParams,$timeout) {
  var currentId = $routeParams.id;
  $('.loaderDiv').show();
  //Função para saber se o documento está pronto
  $timeout(function(){
    var refBaseContaFornecedores = new Firebase(AppUrl+"contas/"+selectedAccount+'/fornecedores/'+currentId);

    $scope.fornecedores = $firebaseArray(refBaseContaFornecedores);

    setTimeout(function () {
      $('.loaderDiv').hide();
    },1000);

  },1200);

}
]);

scotchApp.controller("fornecedoresEditarController", ["$scope", "$firebaseArray","$routeParams","$firebaseObject","$timeout",
function($scope, $firebaseArray,$routeParams,$firebaseObject,$timeout) {
  var currentId = $routeParams.id;
  $('.loaderDiv').show();
  $timeout(function(){
  var refBaseContaFornecedores = new Firebase(AppUrl+"contas/"+selectedAccount+'/fornecedores/'+currentId);

  $scope.fornecedores = $firebaseArray(refBaseContaFornecedores);

  setTimeout(function () {
    $('.loaderDiv').hide();
  },1000);

  $scope.editObject = function(e) {



    $scope.fornecedores.$save(0).then(function(ref) {

      ref.key() === $scope.fornecedores[0].$id; // true

    }, function(error) {
      console.log("Error:", error);
    });
  }

  },1200);
}
]);
