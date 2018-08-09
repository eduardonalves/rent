scotchApp.controller("locatariosController", ["$scope", "$firebaseArray","$routeParams","$timeout",
function($scope, $firebaseArray,$routeParams,$timeout,$http) {

  //Função para saber se o documento está pronto
  isLoggedIn();
  $('.loaderDiv').show();
  $timeout(function(){


    //console.log(selectedAccount);

   var refBaseConta = new Firebase(AppUrl+"contas/"+selectedAccount+'/locatarios');




    $scope.locatarios = $firebaseArray(refBaseConta);
    $scope.locatarios.$watch(function(event) {
      $scope.filteredItems = $scope.locatarios.length;
      $scope.totalItems = $scope.locatarios.length;
    });

    $scope.currentPage = 1; //current page
    $scope.entryLimit = 10; //max no of items to display in a page

    //Initially for no filter
    $scope.filteredItems = 0;
    $scope.totalItems = 0;
    $scope.locatarios.$loaded(
      function(data) {

        $('.loaderDiv').hide();
        $scope.filteredItems = $scope.locatarios.length;
        $scope.totalItems = $scope.locatarios.length;


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


      //  createLocatarioObj($scope);

        //console.log(createLocatarioObj($scope));
        $scope.locatarios.$add(createLocatarioObj($scope)).then(function(refBaseConta) {
          var id = refBaseConta.key();
          alert("added record with id " + id);
        //  $scope.locatarios.$indexFor(id);
          //  console.log($scope.locatarios.$indexFor(id)); // returns location in the array
        }).catch(function(error) {
          alert('Error!');
        });

      //  $scope.locatarios.$add(createLocatarioObj($scope));
        //RESET MESSAGE
      //  $scope.msg = "";

    }
  },1200);


}
]);

scotchApp.controller("locatariosVerController", ["$scope", "$firebaseArray","$routeParams","$timeout",
function($scope, $firebaseArray,$routeParams,$timeout) {
  var currentId = $routeParams.id;
  //Função para saber se o documento está pronto
  $('.loaderDiv').show();
  $timeout(function(){
    var refBaseContaLocatarios = new Firebase(AppUrl+"contas/"+selectedAccount+'/locatarios/'+currentId);

    $scope.locatarios = $firebaseArray(refBaseContaLocatarios);
    setTimeout(function () {
      $('.loaderDiv').hide();
    },1000);
  },1200);

}
]);

scotchApp.controller("locatariosEditarController", ["$scope", "$firebaseArray","$routeParams","$firebaseObject","$timeout",
function($scope, $firebaseArray,$routeParams,$firebaseObject,$timeout) {
  var currentId = $routeParams.id;
  $('.loaderDiv').show();
  $timeout(function(){
  var refBaseContaLocatarios = new Firebase(AppUrl+"contas/"+selectedAccount+'/locatarios/'+currentId);

  $scope.locatarios = $firebaseArray(refBaseContaLocatarios);

  setTimeout(function () {
    $('.loaderDiv').hide();
  },1000);

  $scope.editObject = function(e) {



    $scope.locatarios.$save(0).then(function(ref) {

      ref.key() === $scope.locatarios[0].$id; // true

    }, function(error) {
      console.log("Error:", error);
    });
  }

  },1200);
}
]);
