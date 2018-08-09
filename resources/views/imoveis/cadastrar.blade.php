<script type="text/javascript">
$(document).ready(function() {
 $('select').material_select();
});

</script>
<div ng-controller="imoveisController" class="row col s12">

 <form class="formteste2" action="" method="post" class="">

   <div class="row">
    <!--  <div class="col s12 m12">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span class="card-title">Cadastro de Imóveis</span>
            <p>Aqui seguem algumas informações pertinentes ao cadastro de imóveis, pode colocar avisos também Podem ser colocadas várias coisas aqui, perguntar para o Hugo e Robson para saber como aproveitar esse espaço.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>-->
      <br>
      <br>
    <h5 class="header">Informações Básicas</h5>
     <div class="input-field  col s2">
        <input  type="text" name="codigointerno" ng-model="codigointerno" value="" class="validate" id="codigointerno">
        <label for="codigointerno" class="active">Código</label>
     </div>
     <div class="input-field  col s5">
       <input type="text" name="titulo" ng-model="titulo" value="" class="validate">
       <label for="titulo">Título</label>
     </div>
     <div class="input-field  col s3">
        <select name="tipo" class="validate" ng-model="tipo">
          <option value="" disabled selected>Selecione</option>
          <option value="1">Apartamento</option>
          <option value="2">Casa</option>
          <option value="3">Sobrado</option>
        </select>
        <label>Tipo do imóvel</label>
     </div>
     <div class="input-field  col s2">
        <select name="situacao" ng-model="situacao" class="validate">
          <option value="" disabled selected>Selecione</option>
          <option value="1">Livre</option>
          <option value="2">Alugado</option>
          <option value="3">Inativo</option>
        </select>
        <label>Situação do imóvel</label>
     </div>


  </div>
  <div class="row">
    <div class="input-field  col s2">
       <select name="natureza" ng-model="natureza" class="validate">
         <option value="" disabled selected>Selecione</option>
         <option value="1">Natureza 1</option>
         <option value="2">Natureza 2</option>
         <option value="3">Natureza 3</option>
       </select>
       <label>Natureza do imóvel</label>
    </div>
    <div class="input-field col s10">
           <input type="text" name="descricao" ng-model="descricao"  value="" class="validate" >
         <label for="descricao">Descrição</label>
     </div>
  </div>
  <div class="row">
    <div class="input-field col s3">
           <input type="text" name="valor" ng-model="valor"  value="" class="validate" >
         <label for="valor">Valor do Imóvel</label>
     </div>
     <div class="input-field col s3">
            <input type="text" name="valor_aluguel" ng-model="valor_aluguel"  value="" class="validate" >
          <label for="valor_aluguel">Valor do Aluguel</label>
      </div>
      <div class="input-field col s3">
           <input type="text" name="valor_iptu" ng-model="valor_iptu"  value="" class="validate" >
           <label for="valor_iptu">Valor do IPTU</label>
       </div>
       <div class="input-field col s3">
            <input type="text" name="valor_condominio" ng-model="valor_condominio"  value="" class="validate" >
            <label for="valor_condominio">Valor do Condomínio</label>
        </div>
  </div>

  <div class="row">
    <h5 class="header">Endereço</h5>
    <div class="input-field col s2">
      <input type="text" name="cep" ng-model="cep" value="" class="validate" >
      <label for="cep">CEP</label>
    </div>
    <div class="input-field col s5">
      <input type="text" name="endereco" ng-model="endereco"  value="" class="validate" >
      <label for="endereco">Endereço</label>
    </div>
    <div class="input-field col s1">
      <input type="text" name="numero" ng-model="numero" value="" class="validate">
      <label for="numero">Número</label>
    </div>
    <div class="input-field col s4">
      <input type="text" name="complemento" ng-model="complemento" value="" class="validate">
      <label for="complemento">Complemento</label>
    </div>
  </div>

  <div class="row">

    <div class="input-field col s5">
      <input type="text" name="bairro"   ng-model="bairro" value="" class="validate">
      <label for="">Bairro</label>
    </div>
    <div class="input-field col s5">
      <input type="text" name="cidade" ng-model="cidade" value="" class="validate">
      <label for="cidade">Cidade</label>
    </div>
    <div class="input-field col s2">
      <input type="text" name="uf" ng-model="uf" value="" class="validate">
      <label for="uf">UF</label>
    </div>
  </div>
  <div class="row">
        <div class="input-field col s12">

          <input type="text" name="ponto_referencia"  ng-model="ponto_referencia" value="" class="validate">
          <label for="ponto_referencia">Ponto de Referência</label>
        </div>
  </div>
  <h5 class="header">Outras Informações</h5>
  <div class="row">
    <div class="input-field col s3">
      <input type="text" name="inscricao_iptu" value="" ng-model="inscricao_iptu" class="validate">
      <label for="inscricao_iptu">Inscrição IPTU</label>
    </div>
    <div class="input-field col s2">
      <input type="text" name="area_util" ng-model="area_util" value="" class="validate">
      <label for="">Área Útil</label>
    </div>
    <div class="input-field col s2">
      <input type="text" name="area_construida" ng-model="area_construida" value="" class="validate">
      <label for="cidade">Área Construída</label>
    </div>
    <div class="input-field col s2">
      <input type="text" name="vagas_garagem" value="" ng-model="vagas_garagem" class="validate">
      <label for="vagas_garagem">Vagas na Garagem</label>
    </div>
    <div class="input-field col s3">
      <input type="text" name="chaves" ng-model="chaves"  value="" class="validate">
      <label for="chaves">Chaves</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s3">
      <input type="checkbox" id="telefone_check" name="telefone_check" ng-model="telefone_check" value="1" />
      <label for="telefone_check">Telefone</label>
    </div>
    <div class="input-field col s3">
      <input type="checkbox" id="mobiliado" name="mobiliado" ng-model="mobiliado" value="1" />
      <label for="mobiliado">Mobiliado</label>
    </div>
    <div class="input-field col s3">
      <input type="checkbox" id="playground" name="playground"  ng-model="playground"  value="1" />
      <label for="playground">Play Ground</label>
    </div>
    <div class="input-field col s3">
      <input type="checkbox" id="piscina" name="piscina" ng-model="piscina" value="1" />
      <label for="piscina">Piscina</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s3">
      <input type="checkbox" id="sauna" name="sauna" ng-model="sauna" value="1" />
      <label for="sauna">Piscina</label>
    </div>
    <div class="input-field col s3">
      <input type="checkbox" id="salao_festa" name="salao_festa"   ng-model="salao_festa" value="1" />
      <label for="salao_festa">Salão de Festas</label>
    </div>
    <div class="input-field col s3">
      <input type="checkbox" id="quadra_esportes" name="quadra_esportes" ng-model="quadra_esportes" value="1" />
      <label for="quadra_esportes">Quadra de Esportes</label>
    </div>
    <div class="input-field col s3">
      <input type="checkbox" id="inter_fone" name="inter_fone" value="1" ng-model="inter_fone" />
      <label for="inter_fone">Interfone</label>
    </div>
  </div>
  <div class="row">

      <div class="input-field col s3">
        <input type="checkbox" id="seguranca" name="seguranca" value="1" ng-model="seguranca" />
        <label for="seguranca">Seguranca</label>
      </div>
      <div class="input-field col s3">
        <input type="checkbox" id="ar_central" name="ar_central" ng-model="ar_central" value="1"/>
        <label for="ar_central">Ar Condicionado Central</label>
      </div>
      <div class="input-field col s3">
        <input type="checkbox" id="circ_tv" name="circ_tv" ng-model="circ_tv"  value="1" />
        <label for="circ_tv">Circuito de TV Interno</label>
      </div>
  </div>


    <br>
      <br>
        <br>
        <br>
          <br>

  </form>
  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large waves-effect waves-light red" id="view-source" ng-click="saveObject($event)" ><i class="material-icons">add</i></a>
  </div>  
  </div>
