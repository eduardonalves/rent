function createImovelObj($scope)
{

  var codigointerno = $scope.codigointerno || null;
  var titulo = $scope.titulo || null;
  var tipo=$scope.tipo || null;
  var situacao=$scope.situacao || null;
  var natureza=$scope.natureza || null;
  var descricao=$scope.descricao || null;
  var valor=$scope.valor || null;
  var valor_aluguel=$scope.valor_aluguel || null;
  var valor_aluguel=$scope.valor_aluguel || null;
  var valor_iptu=$scope.valor_iptu || null;
  var valor_condominio=$scope.valor_condominio || null;
  var cep=$scope.cep || null;
  var endereco=$scope.endereco || null;
  var numero=$scope.numero || null;
  var complemento=$scope.complemento || null;
  var bairro=$scope.bairro || null;
  var cidade=$scope.cidade || null;
  var uf=$scope.uf || null;
  var ponto_referencia=$scope.ponto_referencia || null;
  var inscricao_iptu=$scope.inscricao_iptu || null;
  var area_util=$scope.area_util || null;
  var area_construida=$scope.area_construida || null;
  var vagas_garagem=$scope.vagas_garagem || null;
  var chaves=$scope.chaves || null;
  var telefone_check=$scope.telefone_check || null;
  var mobiliado=$scope.mobiliado || null;
  var playground=$scope.playground || null;
  var piscina=$scope.piscina || null;
  var sauna=$scope.sauna || null;
  var salao_festa=$scope.salao_festa || null;
  var salao_festa=$scope.salao_festa || null;
  var quadra_esportes=$scope.quadra_esportes || null;
  var inter_fone=$scope.inter_fone || null;
  var seguranca=$scope.seguranca || null;
  var ar_central=$scope.ar_central || null;
  var circ_tv=$scope.circ_tv || null;

  var objetoImv ={
    Imovel:{
      codigointerno : codigointerno,
      titulo:titulo,
      tipo:tipo,
      situacao:situacao,
      natureza:natureza,
      descricao:descricao,
      valor:valor,
      valor_aluguel:valor_aluguel,
      valor_aluguel:valor_aluguel,
      valor_iptu:valor_iptu,
      valor_condominio:valor_condominio,
      cep:cep,
      endereco:endereco,
      numero:numero,
      complemento:complemento,
      bairro:bairro,
      cidade:cidade,
      uf:uf,
      ponto_referencia:ponto_referencia,
      inscricao_iptu:inscricao_iptu,
      area_util:area_util,
      area_construida:area_construida,
      vagas_garagem:vagas_garagem,
      chaves:chaves,
      telefone_check:telefone_check,
      mobiliado:mobiliado,
      playground:playground,
      piscina:piscina,
      sauna:sauna,
      salao_festa:salao_festa,
      salao_festa:salao_festa,
      quadra_esportes:quadra_esportes,
      inter_fone:inter_fone,
      seguranca:seguranca,
      ar_central:ar_central,
      circ_tv:circ_tv
    }

  };
  return objetoImv;
}
