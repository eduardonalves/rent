<script type="text/javascript">
$(document).ready(function() {
 $('select').material_select();
});

</script>
<div ng-controller="contasController" class="row col s12">
<form name="cadastro_conta" method="post"  >

    <div class="container max-width-block z-depth-2 padding-bottom">

      <div class="header-page-1 padding-side">
      <h1 class="blue-grey-text">Cadastro Conta</h1>
      <h2 class="blue-grey-text text-lighten-3">Dados Básicos</h2>
      </div>

      <div class="row padding-side padding-top">
        <div class="input-field col s12 m8 l9">
          <input id="nome_da_conta" type="text" class="validate" ng-model="nome_da_conta" >
          <label for="nome_da_conta">Nome da Conta</label>
        </div>

        <div class="col s12 m4 l3 switch">
          <label class="center_table_label">
            Inativo
              <input type="checkbox" checked="checked" ng-model="situacao">
              <span class="lever"></span>
            Ativo
          </label>
        </div>
      </div>
    </div>
</form>
<a class="btn-floating btn-large waves-effect waves-light red" id="view-source" ng-click="saveObject($event)" ><i class="material-icons">add</i></a>
</div>
