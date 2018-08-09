scotchApp.controller("contasController", ["$scope", "$firebaseArray","$routeParams","$timeout",
function($scope, $firebaseArray,$routeParams,$timeout) {
  isLoggedIn();
  var ref = new Firebase(AppUrl+"/contas");



  $scope.contas = $firebaseArray(ref);
  $scope.contas.$watch(function(event) {
    $scope.filteredItems = $scope.contas.length;
    $scope.totalItems = $scope.contas.length;
  });
  $scope.currentPage = 1; //current page
  $scope.entryLimit = 10; //max no of items to display in a page
  $scope.filteredItems = 0;
  $scope.totalItems = 0;
  $scope.signedUserId=signedUserId;
  $scope.contas.$loaded(
  function(data) {


    $scope.filteredItems = $scope.contas.length;
    $scope.totalItems = $scope.contas.length;


  },
  function(error) {
    console.error("Error:", error);
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
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
    };


  //ADD MESSAGE METHOD
  $scope.saveObject = function(e) {
    console.log(createContaObj($scope));

    $scope.contas.$add(createContaObj($scope)).then(function(ref)
    {
      var id = ref.key();

      $scope.conta_id = ref.key();
      console.log("user added record with id " + id);

      var refChild = new Firebase(AppUrl+"/contas/"+id+'/contasUser');


      $scope.usercontas = $firebaseArray(refChild);
      $scope.role='owner';
      $scope.usercontas.$add(createContaUserObj($scope)).then(function(refChild) {
        var id = ref.key();
        console.log("user permission added record with id " + id);
      }).catch(function(error) {
        alert('Error!');
      });
      /*ref.child("contasUser").set({
        user_id:signedUserId,
        conta_id:id,
        role:'owner',
        status:1,
        can_read:1,
        can_add:1,
        can_edit:1,
        can_delete:1,
      });*/
      /*$scope.contas.$add(createContaUserObj($scope)).then(function(ref) {
        var id = ref.key();
        console.log("user permission added record with id " + id);
      }).catch(function(error) {
        alert('Error!');
      });*/
    }).catch(function(error) {
        alert('Error!');
    });
        /*$scope.contas.$add(createContaObj($scope)).then(function(ref) {
        var id = ref.key();

        $scope.conta_id = ref.key();

        //Adiciona a permissao do usuário

        $scope.contas.$add($scope);

        console.log("added record with id " + id);
      $scope.contas.$add(createContaUserObj($scope)).then(function(ref) {
          var id = ref.key();
          alert("added record with id " + id);
          console.log($scope.contas.$indexFor(id)); // returns location in the array
        }).catch(function(error) {
          alert('Error!');
        });

          console.log($scope.contas.$indexFor(id)); // returns location in the array
      }).catch(function(error) {
        alert('Error!');
      });*/



  }
}
]);

scotchApp.controller("contasVerController", ["$scope", "$firebaseArray","$routeParams",
function($scope, $firebaseArray,$routeParams) {
  var currentId = $routeParams.id;
  var ref = new Firebase(baseUrl+"/contas/"+ currentId);
  isLoggedIn(ref);
  $scope.contas = $firebaseArray(ref);

}
]);

scotchApp.controller("contasEditarController", ["$scope", "$firebaseArray","$routeParams","$firebaseObject",
function($scope, $firebaseArray,$routeParams) {
  var currentId = $routeParams.id;
  var ref = new Firebase(baseUrl+'/contas/'+ currentId);
  isLoggedIn(ref);
  $scope.contas = $firebaseArray(ref);



  $scope.editObject = function(e) {



    $scope.contas.$save(0).then(function(ref) {

      ref.key() === $scope.contas[0].$id; // true

    }, function(error) {
      console.log("Error:", error);
    });
  }


}
]);
