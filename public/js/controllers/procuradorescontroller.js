scotchApp.controller("procuradoresController", ["$scope", "$firebaseArray","$routeParams","$timeout",
function($scope, $firebaseArray,$routeParams,$timeout,$http) {
  isLoggedIn();
  $('.loaderDiv').show();

  //Função para saber se o documento está pronto
  $timeout(function(){


    //console.log(selectedAccount);

   var refBaseConta = new Firebase(AppUrl+"contas/"+selectedAccount+'/procuradores');




    $scope.procuradores = $firebaseArray(refBaseConta);
    $scope.procuradores.$watch(function(event) {
      $scope.filteredItems = $scope.procuradores.length;
      $scope.totalItems = $scope.procuradores.length;
    });

    $scope.currentPage = 1; //current page
    $scope.entryLimit = 10; //max no of items to display in a page

    //Initially for no filter
    $scope.filteredItems = 0;
    $scope.totalItems = 0;
    $scope.procuradores.$loaded(
      function(data) {


        $scope.filteredItems = $scope.procuradores.length;
        $scope.totalItems = $scope.procuradores.length;
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


      //  createProcuradorObj($scope);

        //console.log(createProcuradorObj($scope));
        $scope.procuradores.$add(createProcuradorObj($scope)).then(function(refBaseConta) {
          var id = refBaseConta.key();
          alert("added record with id " + id);
        //  $scope.procuradores.$indexFor(id);
          //  console.log($scope.procuradores.$indexFor(id)); // returns location in the array
        }).catch(function(error) {
          alert('Error!');
        });

      //  $scope.procuradores.$add(createProcuradorObj($scope));
        //RESET MESSAGE
      //  $scope.msg = "";

    }
  },1200);


}
]);

scotchApp.controller("procuradoresVerController", ["$scope", "$firebaseArray","$routeParams","$timeout",
function($scope, $firebaseArray,$routeParams,$timeout) {
  var currentId = $routeParams.id;
  //Função para saber se o documento está pronto
  $('.loaderDiv').show();
  $timeout(function(){
    var refBaseContaProcuradores = new Firebase(AppUrl+"contas/"+selectedAccount+'/procuradores/'+currentId);

    $scope.procuradores = $firebaseArray(refBaseContaProcuradores);
    setTimeout(function () {
      $('.loaderDiv').hide();
    },1000);
  },1200);

}
]);

scotchApp.controller("procuradoresEditarController", ["$scope", "$firebaseArray","$routeParams","$firebaseObject","$timeout",
function($scope, $firebaseArray,$routeParams,$firebaseObject,$timeout) {
  var currentId = $routeParams.id;
  $('.loaderDiv').show();
  $timeout(function(){
  var refBaseContaProcuradores = new Firebase(AppUrl+"contas/"+selectedAccount+'/procuradores/'+currentId);

  $scope.procuradores = $firebaseArray(refBaseContaProcuradores);

  setTimeout(function () {
    $('.loaderDiv').hide();
  },1000);

  $scope.editObject = function(e) {



    $scope.procuradores.$save(0).then(function(ref) {

      ref.key() === $scope.procuradores[0].$id; // true

    }, function(error) {
      console.log("Error:", error);
    });
  }

  },1200);
}
]);
