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
        <input  type="text" name="codigointerno" ng-model="codigointerno" value="" class="validate">
        <label for="codigointerno">Código Interno</label>
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



  <br>
  <br>
  <br>
  <br>
  <br>

  </form>
    <a class="btn-floating btn-large waves-effect waves-light red" id="view-source" ng-click="addMessage($event)" ><i class="material-icons">add</i></a>
  </div>
