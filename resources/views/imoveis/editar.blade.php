<script type="text/javascript">
$(document).ready(function() {
  //reinicializa os selects para iniciar corretamente os selects e seus conteúdos
  $('select').material_select('destroy');
   setTimeout(function () {
      $('select').material_select();
   },2000);
});
</script>
<div ng-controller="imoveisEditarController" class="row col s12">

 <form class="formteste2" action="" method="post" class="" ng-repeat="imv in imoveis">

   <div class="row">
      <br>
      <br>

    <h5 class="header">Informações Básicas</h5>
     <div class="input-field  col s2">
        <input   type="text" name="codigointerno" value="imv.codigointerno" ng-model="imv.codigointerno" >
        <label for="codigointerno" class="active">Código</label>
     </div>
     <div class="input-field  col s5">
       <input  type="text" name="titulo"  ng-model="imv.titulo"  >
       <label for="titulo" class="active">Título</label>
     </div>
     <div class="input-field  col s3">
        <select name="tipo"  ng-model="imv.tipo"   >
          <option value="" disabled >Selecione</option>
          <option value="1">Apartamento</option>
          <option value="2">Casa</option>
          <option value="3">Sobrado</option>
        </select>
        <label>Tipo do imóvel</label>
     </div>
     <div class="input-field  col s2">
        <select name="situacao" ng-model="imv.situacao"   >
          <option value="" disabled>Selecione</option>
          <option value="1">Livre</option>
          <option value="2">Alugado</option>
          <option value="3">Inativo</option>
        </select>
        <label>Situação do imóvel</label>
     </div>


  </div>
  <div class="row">
    <div class="input-field  col s2">
       <select name="natureza" ng-model="imv.natureza" >
         <option value="" disabled >Selecione</option>
         <option value="1">Natureza 1</option>
         <option value="2">Natureza 2</option>
         <option value="3">Natureza 3</option>
       </select>
       <label>Natureza do imóvel</label>
    </div>
    <div class="input-field col s10">
           <input type="text" name="descricao" ng-model="imv.descricao"  >
         <label for="descricao" class="active">Descrição</label>
     </div>
  </div>
  <div class="row">
    <div class="input-field col s3">
           <input type="text" name="valor" ng-model="imv.valor"   >
         <label for="valor" class="active">Valor do Imóvel</label>
     </div>
     <div class="input-field col s3">
            <input type="text" name="valor_aluguel" ng-model="imv.valor_aluguel"  >
          <label for="valor_aluguel" class="active">Valor do Aluguel</label>
      </div>
      <div class="input-field col s3">
           <input type="text" name="valor_iptu" ng-model="imv.valor_iptu"  >
           <label for="valor_iptu"  class="active">Valor do IPTU</label>
       </div>
       <div class="input-field col s3">
            <input type="text" name="valor_condominio" ng-model="imv.valor_condominio" >
            <label for="valor_condominio"  class="active">Valor do Condomínio</label>
        </div>
  </div>

  <div class="row">
    <h5 class="header">Endereço</h5>
    <div class="input-field col s2">
      <input type="text" name="cep" ng-model="imv.cep" >
      <label for="cep" class="active">CEP</label>
    </div>
    <div class="input-field col s5">
      <input type="text" name="endereco" ng-model="imv.endereco"  >
      <label for="endereco" class="active">Endereço</label>
    </div>
    <div class="input-field col s1">
      <input type="text" name="numero" ng-model="imv.numero"  >
      <label for="numero" class="active">Número</label>
    </div>
    <div class="input-field col s4">
      <input type="text" name="complemento" ng-model="imv.complemento" >
      <label for="complemento" class="active">Complemento</label>
    </div>
  </div>

  <div class="row">

    <div class="input-field col s5">
      <input type="text" name="bairro"   ng-model="imv.bairro" >
      <label for="bairro" class="active">Bairro</label>
    </div>
    <div class="input-field col s5">
      <input type="text" name="cidade" ng-model="imv.cidade" >
      <label for="cidade" class="active">Cidade</label>
    </div>
    <div class="input-field col s2">
      <input type="text" name="uf" ng-model="imv.uf" >
      <label for="uf" class="active">UF</label>
    </div>
  </div>
  <div class="row">
        <div class="input-field col s12">

          <input type="text" name="ponto_referencia"  ng-model="imv.ponto_referencia" >
          <label for="ponto_referencia" class="active">Ponto de Referência</label>
        </div>
  </div>
  <h5 class="header">Outras Informações</h5>
  <div class="row">
    <div class="input-field col s3">
      <input type="text" name="inscricao_iptu" ng-model="imv.inscricao_iptu"  >
      <label for="inscricao_iptu" class="active">Inscrição IPTU</label>
    </div>
    <div class="input-field col s2">
      <input type="text" name="area_util" ng-model="imv.area_util" >
      <label for="area_util" class="active">Área Útil</label>
    </div>
    <div class="input-field col s2">
      <input type="text" name="area_construida" ng-model="imv.area_construida"  >
      <label for="cidade" class="active">Área Construída</label>
    </div>
    <div class="input-field col s2">
      <input type="text" name="vagas_garagem" ng-model="imv.vagas_garagem" >
      <label for="vagas_garagem" class="active">Vagas na Garagem</label>
    </div>
    <div class="input-field col s3">
      <input type="text" name="chaves" ng-model="imv.chaves"  >
      <label for="chaves" class="active">Chaves</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s3">
      <input type="checkbox" id="telefone_check" name="telefone_check" ng-model="imv.telefone_check" class="validate" />
      <label for="telefone_check" >Telefone</label>
    </div>
    <div class="input-field col s3">
      <input type="checkbox" id="mobiliado" name="mobiliado" ng-model="imv.mobiliado"class="validate"/>
      <label for="mobiliado">Mobiliado</label>
    </div>
    <div class="input-field col s3">
      <input type="checkbox" id="playground" name="playground"  ng-model="imv.playground"  class="validate"/>
      <label for="playground">Play Ground</label>
    </div>
    <div class="input-field col s3">
      <input type="checkbox" id="piscina" name="piscina" ng-model="imv.piscina"  class="validate" />
      <label for="piscina">Piscina</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s3">
      <input type="checkbox" id="sauna" name="sauna" ng-model="imv.sauna"class="validate"/>
      <label for="sauna">Piscina</label>
    </div>
    <div class="input-field col s3">
      <input type="checkbox" id="salao_festa" name="salao_festa"   ng-model="imv.salao_festa" class="validate"/>
      <label for="salao_festa">Salão de Festas</label>
    </div>
    <div class="input-field col s3">
      <input type="checkbox" id="quadra_esportes" name="quadra_esportes" ng-model="imv.quadra_esportes" class="validate" />
      <label for="quadra_esportes">Quadra de Esportes</label>
    </div>
    <div class="input-field col s3">
      <input type="checkbox" id="inter_fone" name="inter_fone"  ng-model="imv.inter_fone" class="validate" />
      <label for="inter_fone">Interfone</label>
    </div>
  </div>
  <div class="row">

      <div class="input-field col s3">
        <input type="checkbox" id="seguranca" name="seguranca"  ng-model="imv.seguranca"  class="validate"/>
        <label for="seguranca">Seguranca</label>
      </div>
      <div class="input-field col s3">
        <input type="checkbox" id="ar_central" name="ar_central" ng-model="imv.ar_central" class="validate"/>
        <label for="ar_central">Ar Condicionado Central</label>
      </div>
      <div class="input-field col s3">
        <input type="checkbox" id="circ_tv" name="circ_tv" ng-model="imv.circ_tv"  class="validate" />
        <label for="circ_tv">Circuito de TV Interno</label>
      </div>
  </div>


    <br>
      <br>
        <br>
        <br>
          <br>

  </form>

    <a class="btn-floating btn-large waves-effect waves-light red" id="view-source" ng-click="editObject($event)" ><i class="material-icons">add</i></a>
  </div>
