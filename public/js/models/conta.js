function createContaObj($scope)
{
  var nome_da_conta = $scope.nome_da_conta || 'Conta Padrão';
  var tipo_conta = $scope.tipo_conta|| 'Free';

  var situacao = $scope.situacao || '1';
  var signedUserId = $scope.signedUserId || null;
  var objetoConta =
  {
      nome_da_conta :nome_da_conta,
      situacao :situacao,
      tipo_conta:tipo_conta,
      user_id:signedUserId
  };
  return objetoConta;
}
