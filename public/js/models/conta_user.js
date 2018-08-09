function createContaUserObj($scope)
{
  var user_id = $scope.signedUserId || null;
  var conta_id = $scope.conta_id|| null;
  var tipo_conta = $scope.tipo_conta|| 'Free';
  var situacao = $scope.situacao || '1';
  var role = $scope.role || null;
  
  var objetoContaUser =
  {
      user_id :user_id,
      conta_id:conta_id,
      situacao :situacao,
      tipo_conta:tipo_conta,
      role:role,
      status:1,
      can_read:1,
      can_add:1,
      can_edit:1,
      can_delete:1
  };
  console.log(objetoContaUser);
  return objetoContaUser;
}
