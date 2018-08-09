<div ng-controller="usuariosController" class="row col s12">
  <form name="login_usuarios" method="post"  >
    <div class="container max-width-block z-depth-2 padding-bottom">
    	<div class="header-page-1 padding-side">
    		<h1 class="blue-grey-text">Login de Usuários</h1>

    	</div>
      <div class="row padding-side padding-top">
        <div class="input-field col s12 m8 l9">
            <input id="email" type="text" class="validate" ng-model="email" >
            <label for="email">Email</label>
        </div>
      </div>
      <div class="row padding-side padding-top">
        <div class="input-field col s12 m8 l9">
            <input id="password" type="password" class="validate" ng-model="password" >
            <label for="password" class="active">Senha</label>
        </div>
      </div>
      <a class="btn" data-position="top" data-delay="50"  ng-click="customLogin($event)">Login</a>
      <a class="btn red" data-position="top" data-delay="50" ng-click="loginGoogle($event)"  >Entrar com Google</a>
      <a class="btn red" data-position="top" data-delay="50"  ng-click="logout($event)">Logout</a>
    </div>

  </form>
</div>
<style media="screen">
  .navbar-fixed
  {
    display: none!important;
  }
  #left-sidebar-nav{
    display: none;
  }
</style>
<script type="text/javascript">
  $('document').ready(function() {
    
  });
</script>
