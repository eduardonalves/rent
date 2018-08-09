<script type="text/javascript">
$(document).ready(function() {
 $('select').material_select();
});

</script>
<div ng-controller="usuariosController" class="row col s12">

 <form class="cadastrar_usuario" action="" method="post" class="">

  <div class="row">
    <h5 class="header">Informações Básicas</h5>
     <div class="input-field  col s2">
        <input  type="text" name="email" ng-model="email" value="" class="validate">
        <label for="email">Email</label>
     </div>
     <div class="input-field  col s5">
       <input type="text" name="password" ng-model="password" value="" class="validate">
       <label for="titulo">Senha</label>
     </div>
     <div class="input-field  col s5">
       <input type="text" name="repassword" ng-model="repassword" value="" class="validate">
       <label for="titulo">Confirme sua Senha</label>
     </div>
       <a class="btn red" data-position="top" data-delay="50" ng-click="cadastrarUsuario($event)"  >Cadastrar</a>
  </div>
</form>
</div>
