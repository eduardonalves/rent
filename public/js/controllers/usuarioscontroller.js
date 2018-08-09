scotchApp.controller("usuariosController", ["$scope", "$firebaseArray","$routeParams","$timeout",
function($scope, $firebaseArray,$routeParams,$timeout) {
  //alert();

  // Create a callback which logs the current auth state
  function authDataCallback(authData) {
    if (authData) {
      console.log("User " + authData.uid + " is logged in with " + authData.provider);
    } else {
      console.log("User is logged out");
    }
  }



  $scope.logout = function(e) {
    ref.unauth();
    window.location.href = '#/usuarios/login';
  }
  $scope.cadastrarUsuario = function (e) {
    // body...

    ref.createUser({
      email    : $scope.email,
      password : $scope.password
    }, function(error, userData) {
      if (error) {
        console.log("Error creating user:", error);
      } else {
        console.log("Successfully created user account with uid:", userData.uid);

          $scope.customLogin();
          isLoggedIn(ref);

          ref.child("users/"+ userData.uid ).on("value", function(hasuser) {
             // Alerts "San Francisco"
            if(hasuser.val() == null)
            {

                ref.child("users").child(userData.uid).set({
                  provider: 'password',
                  name: $scope.email.replace(/@.*/, ''),
                  role:'owner'
                });




            }
            window.location.href = '#/home';
        });
      }
    });
  }
  $scope.customLogin = function (e) {

    ref.authWithPassword({
      email    : $scope.email,
      password : $scope.password
    }, function(error, authData) {
      if (error) {
        console.log("Login Failed!", error);
      } else {
        console.log("Authenticated successfully with payload:", authData);
        window.location.href = '#/home';
      }
    });
  }
  // find a suitable name based on the meta info given by each provider
  function getName(authData) {
    switch(authData.provider) {
       case 'password':
         return authData.password.email.replace(/@.*/, '');
       case 'twitter':
         return authData.twitter.displayName;
       case 'facebook':
         return authData.facebook.displayName;
        case 'google':
          return authData.google.displayName;
    }
  }
  $scope.loginGoogle = function(e) {

      ref.authWithOAuthPopup("google", function(error, authData) {
      if (error) {
        console.log("Login Failed!", error);
        //@TODO enviar mensagem de erro quando houver falha no lagin do usuário
      } else {
        console.log("Authenticated successfully with payload:", authData);
        // we would probably save a profile when we register new users on our site
        // we could also read the profile to see if it's null
        // here we will just simulate this with an isNewUser boolean
        var isNewUser = true;

        ref.onAuth(function(authData) {
          if (authData && isNewUser) {
            // save the user's profile into the database so we can list users,
            // use them in Security and Firebase Rules, and show profiles
            $scope.signedUserId = authData.uid;
            ref.child("users/"+ authData.uid ).on("value", function(hasuser) {
               // Alerts "San Francisco"
              if(hasuser.val() == null)
              {
                  ref.child("users").child(authData.uid).set({
                    provider: authData.provider,
                    name: getName(authData),
                    role:'owner',
                    foto:authData.google.profileImageURL,
                  });
                  //console.log(authData.google.email);
                  //console.log(authData.google.profileImageURL);
                  var conta = ref.child('contas').push(createContaObj($scope), function(error) {
                    if (error) {
                      console.log("Data could not be saved." + error);
                    } else {
                      console.log("Data saved successfully.");
                    }
                  });

                  setTimeout(function() {
                    var usuarios_conta  = ref.child('contas_users/'+ $scope.signedUserId ).push(
                      {
                        user_id:$scope.signedUserId,
                        conta_id:conta.key(),
                        role:'owner',
                        status:1
                      }
                      , function(error) {
                      if (error) {
                        console.log("Data could not be saved." + error);
                      } else {
                        console.log("Data saved successfully.");
                      }
                    });

                    setTimeout(function() {
                      ref.child('contas/'+conta.key()+'/contas_users/'+ $scope.signedUserId ).set(
                        {
                          user_id:$scope.signedUserId,
                          conta_id:conta.key(),
                          usuarios_conta_id:usuarios_conta.key(),
                          role:'owner',
                          status:1,
                          can_read:1,
                          can_add:1,
                          can_edit:1,
                          can_delete:1,
                          can_give_permission:1
                        }
                        , function(error) {
                        if (error) {
                          console.log("Data could not be saved." + error);
                        } else {
                          console.log("Data saved successfully.");
                          console.log('pegaacesso');
                          getAccessUser($scope.signedUserId);
                        }
                      });
                    },1500);


                  },2000);

              }
            });

          }
        });

        //@TODO fazer redirecionamento para a tela depois do login
        //Monitora se o usuário está logado
        ref.onAuth(authDataCallback);
        window.location.href = '#/home';
      }
    });
  }

}
]);
