scotchApp.controller("favorecidosController", ["$scope", "$firebaseArray","$routeParams","$timeout",
function($scope, $firebaseArray,$routeParams,$timeout,$http) {
  isLoggedIn();
  $('.loaderDiv').show();
  //Função para saber se o documento está pronto
  $timeout(function(){


    //console.log(selectedAccount);

   var refBaseConta = new Firebase(AppUrl+"contas/"+selectedAccount+'/favorecidos');




    $scope.favorecidos = $firebaseArray(refBaseConta);
    $scope.favorecidos.$watch(function(event) {
      $scope.filteredItems = $scope.favorecidos.length;
      $scope.totalItems = $scope.favorecidos.length;
    });

    $scope.currentPage = 1; //current page
    $scope.entryLimit = 10; //max no of items to display in a page

    //Initially for no filter
    $scope.filteredItems = 0;
    $scope.totalItems = 0;
    $scope.favorecidos.$loaded(
      function(data) {


        $scope.filteredItems = $scope.favorecidos.length;
        $scope.totalItems = $scope.favorecidos.length;
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


      //  createFavorecidoObj($scope);

        //console.log(createFavorecidoObj($scope));
        $scope.favorecidos.$add(createFavorecidoObj($scope)).then(function(refBaseConta) {
          var id = refBaseConta.key();
          alert("added record with id " + id);
        //  $scope.favorecidos.$indexFor(id);
          //  console.log($scope.favorecidos.$indexFor(id)); // returns location in the array
        }).catch(function(error) {
          alert('Error!');
        });

      //  $scope.favorecidos.$add(createFavorecidoObj($scope));
        //RESET MESSAGE
      //  $scope.msg = "";

    }
  },1200);


}
]);

scotchApp.controller("favorecidosVerController", ["$scope", "$firebaseArray","$routeParams","$timeout",
function($scope, $firebaseArray,$routeParams,$timeout) {
  var currentId = $routeParams.id;
  //Função para saber se o documento está pronto
  $('.loaderDiv').show();
  $timeout(function(){
    var refBaseContaFavorecidos = new Firebase(AppUrl+"contas/"+selectedAccount+'/favorecidos/'+currentId);

    $scope.favorecidos = $firebaseArray(refBaseContaFavorecidos);
    setTimeout(function () {
      $('.loaderDiv').hide();
    },1000);

  },1200);

}
]);

scotchApp.controller("favorecidosEditarController", ["$scope", "$firebaseArray","$routeParams","$firebaseObject","$timeout",
function($scope, $firebaseArray,$routeParams,$firebaseObject,$timeout) {
  var currentId = $routeParams.id;
  $('.loaderDiv').show();
  $timeout(function(){
  var refBaseContaFavorecidos = new Firebase(AppUrl+"contas/"+selectedAccount+'/favorecidos/'+currentId);

  $scope.favorecidos = $firebaseArray(refBaseContaFavorecidos);

  setTimeout(function () {
    $('.loaderDiv').hide();
  },1000);

  $scope.editObject = function(e) {



    $scope.favorecidos.$save(0).then(function(ref) {

      ref.key() === $scope.favorecidos[0].$id; // true

    }, function(error) {
      console.log("Error:", error);
    });
  }

  },1200);
}
]);
