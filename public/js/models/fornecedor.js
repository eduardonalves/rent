function createFornecedorObj($scope) {
  var codigointerno = $scope.codigointerno || null;
  var tipo_pessoa = $scope.tipo_pessoa || null;
  var nome = $scope.nome || null;
  var situacao = $scope.situacao || null;
  var email=$scope.email || null;
  var site=$scope.site || null;
  var cpf=$scope.cpf || null;
  var rg=$scope.rg || null;
  var orgao_emissor=$scope.orgao_emissor || null;
  var data_emissao=$scope.data_emissao || null;
  var sexo=$scope.sexo || null;
  var estado_civil=$scope.estado_civil || null;
  var nacionalidade=$scope.nacionalidade || null;
  var naturalidade = $scope.naturalidade || null;
  var profissao=$scope.profissao || null;
  var empresa=$scope.empresa || null;
  var renda=$scope.renda || null;
  var nome_conjuge=$scope.nome_conjuge || null;
  var cpf_conjugue=$scope.cpf_conjugue || null;
  var observacoes_basicas=$scope.observacoes_basicas || null;

  var tipo_endereco=$scope.tipo_endereco || null;
  var tipo_imovel=$scope.tipo_imovel || null;
  var endereco=$scope.endereco || null;
  var complemento=$scope.complemento || null;
  var bairro=$scope.bairro || null;
  var cidade=$scope.cidade || null;
  var uf=$scope.uf || null;
  var observacoes_particulares=$scope.observacoes_particulares || null;
  var codigo_banco=$scope.codigo_banco || null;
  var banco=$scope.banco || null;
  var codigo_reconhecimento=$scope.codigo_reconhecimento || null;
  var agencia=$scope.agencia || null;
  var conta_corrente=$scope.conta_corrente || null;
  var agencia_nome =$scope.agencia_nome || null;
  var digito =$scope.digito || null;
  //dados pessoa juridica
  var cnpj = $scope.cnpj || null;
  var ie = $scope.ie || null;
  var im = $scope.im || null;
  var data_abertura = $scope.data_abertura || null;

  //Dados do tipo de parceiro de negócios
  var objetoForn ={
    Fornecedor:{
      nome :nome,
      situacao :situacao,
      tipo_pessoa:tipo_pessoa,
      codigointerno:codigointerno,
      email:email,
      site:site,
      cpf:cpf,
      rg:rg,
      orgao_emissor:orgao_emissor,
      data_emissao:data_emissao,
      sexo:sexo,
      estado_civil:estado_civil,
      nacionalidade:nacionalidade,
      naturalidade :naturalidade,
      profissao:profissao,
      empresa:empresa,
      renda:renda,
      nome_conjuge:nome_conjuge,
      cpf_conjugue:cpf_conjugue,
      observacoes_basicas:observacoes_basicas,

      tipo_endereco:tipo_endereco,
      tipo_imovel:tipo_imovel,
      endereco:endereco,
      complemento:complemento,
      bairro:bairro,
      cidade:cidade,
      uf:uf,
      observacoes_particulares:observacoes_particulares,
      codigo_banco:codigo_banco,
      banco:banco,
      codigo_reconhecimento:codigo_reconhecimento,
      agencia:agencia,
      conta_corrente:conta_corrente,
      agencia_nome: agencia_nome,
      digito:digito,
      cnpj: cnpj,
      ie:ie,
      im: im,
      data_abertura : data_abertura
    }

  };
  return objetoForn;
}
