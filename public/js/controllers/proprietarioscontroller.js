scotchApp.controller("proprietariosController", ["$scope", "$firebaseArray","$routeParams","$timeout",
function($scope, $firebaseArray,$routeParams,$timeout,$http) {
  isLoggedIn();
  $('.loaderDiv').show();
  //Função para saber se o documento está pronto
  $timeout(function(){


    //console.log(selectedAccount);

   var refBaseConta = new Firebase(AppUrl+"contas/"+selectedAccount+'/proprietarios');




    $scope.proprietarios = $firebaseArray(refBaseConta);
    $scope.proprietarios.$watch(function(event) {
      $scope.filteredItems = $scope.proprietarios.length;
      $scope.totalItems = $scope.proprietarios.length;
    });


    $scope.currentPage = 1; //current page
    $scope.entryLimit = 10; //max no of items to display in a page

    //Initially for no filter
    $scope.filteredItems = 0;
    $scope.totalItems = 0;
    $scope.proprietarios.$loaded(
      function(data) {


        $scope.filteredItems = $scope.proprietarios.length;
        $scope.totalItems = $scope.proprietarios.length;
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


      //  createProprietarioObj($scope);

        //console.log(createProprietarioObj($scope));
        $scope.proprietarios.$add(createProprietarioObj($scope)).then(function(refBaseConta) {
          var id = refBaseConta.key();
          alert("added record with id " + id);
        //  $scope.proprietarios.$indexFor(id);
          //  console.log($scope.proprietarios.$indexFor(id)); // returns location in the array
        }).catch(function(error) {
          alert('Error!');
        });

      //  $scope.proprietarios.$add(createProprietarioObj($scope));
        //RESET MESSAGE
      //  $scope.msg = "";

    }
  },1200);


}
]);

scotchApp.controller("proprietariosVerController", ["$scope", "$firebaseArray","$routeParams","$timeout",
function($scope, $firebaseArray,$routeParams,$timeout) {
  var currentId = $routeParams.id;
  //Função para saber se o documento está pronto
  $('.loaderDiv').show();
  $timeout(function(){
    var refBaseContaProprietarios = new Firebase(AppUrl+"contas/"+selectedAccount+'/proprietarios/'+currentId);

    $scope.proprietarios = $firebaseArray(refBaseContaProprietarios);
    setTimeout(function () {
      $('.loaderDiv').hide();
    },1000);
  },1200);

}
]);

scotchApp.controller("proprietariosEditarController", ["$scope", "$firebaseArray","$routeParams","$firebaseObject","$timeout",
function($scope, $firebaseArray,$routeParams,$firebaseObject,$timeout) {
  var currentId = $routeParams.id;
  $('.loaderDiv').show();
  $timeout(function(){
  var refBaseContaProprietarios = new Firebase(AppUrl+"contas/"+selectedAccount+'/proprietarios/'+currentId);

  $scope.proprietarios = $firebaseArray(refBaseContaProprietarios);
  setTimeout(function () {
    $('.loaderDiv').hide();
  },1000);


  $scope.editObject = function(e) {



    $scope.proprietarios.$save(0).then(function(ref) {

      ref.key() === $scope.proprietarios[0].$id; // true

    }, function(error) {
      console.log("Error:", error);
    });
  }

  },1200);
}
]);
