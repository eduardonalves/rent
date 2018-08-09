<!doctype html>
<html lang="pt-br" ng-app="scotchApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sistemas inovador">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Imovapp</title>

    <link rel="shortcut icon" href="/images/favicon.png">


    <!-- css -->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/app.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
    <script src="https://cdn.firebase.com/js/client/2.2.1/firebase.js"></script>
    <script src="https://cdn.firebase.com/libs/angularfire/1.0.0/angularfire.min.js"></script>
    <script src="js/ui-bootstrap-tpls-0.10.0.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/routes.js"></script>
    <script src="js/models/model.js"></script>
    <script src="js/models/conta_user.js"></script>
    <script src="js/models/imovel.js"></script>
    <script src="js/models/conta.js"></script>
    <script src="js/models/proprietario.js"></script>
    <script src="js/models/fiador.js"></script>
    <script src="js/models/locatario.js"></script>
    <script src="js/models/procurador.js"></script>
    <script src="js/models/fornecedor.js"></script>
    <script src="js/models/favorecido.js"></script>
    <script src="js/controllers/contascontroller.js"></script>
    <script src="js/controllers/usuarioscontroller.js"></script>
    <script src="js/controllers/imoveiscontroller.js"></script>
    <script src="js/controllers/proprietarioscontroller.js"></script>
    <script src="js/controllers/locatarioscontroller.js"></script>
    <script src="js/controllers/procuradorescontroller.js"></script>
    <script src="js/controllers/fiadorescontroller.js"></script>
    <script src="js/controllers/fornecedorescontroller.js"></script>
    <script src="js/controllers/favorecidoscontroller.js"></script>
    <script src="js/controllers/controllers.js"></script>
    <script src="js/material.min.js"></script>

<script>
      $(document).ready(function(){

        $('select').material_select('destroy');
       setTimeout(function() {
         $('select').material_select('destroy');
         $('select').material_select();
      //   $('#base').trigger('change');
       },2500);
       setTimeout(function() {
         $('select').material_select('destroy');
         $('select').material_select();
        // $('#base').trigger('change');
        console.log('triggou');
       },3000);

        $(".button-collapse").sideNav();

        $(".button-collapse-sidebar-right").sideNav({
          menuWidth: 300,
          edge: 'right'
        });

        $(".button-collapse-left").sideNav({
          menuWidth: 250,
          edge: 'left'
        });

        $(".button-collapse-left").click(function(){
          if( $(this).hasClass("sidebar-fixed-left") ){
            $(this).removeClass("sidebar-fixed-left");
          }
        });

        $(".button-collapse-sidebar-left").sideNav({
          menuWidth: 240,
          edge: 'left'
        });

        $(".open-sidebar-right").click(function(){
          $(".button-collapse-sidebar-right").trigger("click");
        });

        $(".open-sidebar-left").click(function(){
          $(".button-collapse-sidebar-left").trigger("click");
        });

        $('select').material_select();

        $('.datepicker').pickadate({
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15, // Creates a dropdown of 15 years to control year
          monthsShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
          weekdaysFull: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
          monthsFull: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
          weekdaysShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
          weekdaysLetter: ['D','S','T','Q','Q','S','S','D'],
          today:"Hoje",
          clear:"Limpar",
          close:"Finalizar",
          format:"dd/mm/yyyy",
          labelYearSelect: "Selecione o ano",
          labelMonthNext:"Próximo mês",
          labelMonthPrev:"Mês anterior",
          labelMonthSelect:"Selecione o mês"
        });

      });
    </script>

  </head>
  <script type="text/javascript">
  $(document).ready(function() {
   $('select').material_select();
   $('#base').trigger('change');
   console.log('aqui');
  });

  </script>

  <body ng-controller="mainController">



<?php /* menu */


$itens_menu_principal = array(

  1 => array("link" => "#home", "nome" => "Dashboard", "icone" => "dashboard"),
  2 => array("link" => "#imoveis/listar", "nome" => "Imóveis", "icone" => "home"),
  3 => array("link" => "#", "nome" => "Clientes", "icone" => "group"),
  4 => array("link" => "#!", "nome" => "Cadastros", "icone" => "list", "submenu" => array(
    "id_top" => "cadastro_top","id_left" => "cadastro_left",
    1 => array("link" => "#proprietarios/listar", "nome" => "Proprietário"),
    2 => array("link" => "#locatarios/listar", "nome" => "Locatário"),
    3 => array("link" => "#fiadores/listar", "nome" => "Fiador"),
    4 => array("link" => "#fornecedores/listar", "nome" => "Fornecedor"),
    5 => array("link" => "#favorecidos/listar", "nome" => "Favorecido"),
    6 => array("link" => "#procuradores/listar", "nome" => "Procurador"),
    7 => array("link" => "#imoveis/listar", "nome" => "Imóvel"),
    8 => array("link" => "#", "nome" => "Contrato de Administração"),
    9 => array("link" => "#", "nome" => "Contrato de Locação"),
  )),

);


$itens_menu = array(

  ""

);



?>


<header id="header" class="page-topbar">
        <!-- start header nav-->
<div class="navbar-fixed">

<nav class="corPrimaria" role="navigation">

  <?php /* <a id="logo-container" href="#" class="brand-logo blue-grey-text">Logo</a> */ ?>

    <ul class="right itens-nav-fixed-top">
      <li class="notification-item">
        <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button open-sidebar-right">
          <i class="material-icons">
          email
          </i>
          <span>5</span>
        </a>
      </li>
      <li class="notification-item">
        <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button open-sidebar-right">
          <i class="material-icons">
          notifications
          </i>
          <span>7</span>
        </a>
      </li>
      <li class="notification-item">
        <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button open-sidebar-right">
          <i class="material-icons">
          warning
          </i>
          <span>3</span>
        </a>
      </li>
      <li class="procurar waves-effect waves-block waves-light">
        <form>
            <div class="input-field">

              <label for="procurar">
                <i class="mdi-action-search"></i>
              </label>
              <input id="procurar" type="text" class="validate" placeholder="Procurar">
            </div>
        </form>
      </li>
    </ul>
    <ul class="right hide-on-med-and-down">
      <li>
          <select ng-model="base" name="base" ng-change="changeBase($event)"   id="base" >

            <option ng-repeat="account in my_account" value="@{{ account.conta_id }}">@{{ account.conta_id}}</option>

          </select>
          <label >Conta</label>
      </li>
      <?php foreach($itens_menu_principal as $item_menu): ?>
        <li>
          <a <?php if( ! empty ($item_menu["submenu"]) ){echo 'data-activates="' . $item_menu["submenu"]["id_top"] . '"'; } ?> href="<?php echo $item_menu["link"]; ?>" class="<?php if( ! empty ($item_menu["submenu"]) ){echo 'dropdown-button';} ?> waves-effect waves-block waves-light">

            <?php if( ! empty ($item_menu["icone"]) ): ?>
                <i class="material-icons icons-menu-principal"><?php echo $item_menu["icone"]; ?></i>
            <?php endif; ?>

            <?php echo $item_menu["nome"];

            if( ! empty ($item_menu["submenu"]) ): ?>
              <i class="material-icons right">arrow_drop_down</i>
            <?php endif; ?>

          </a>

          <?php if( ! empty ($item_menu["submenu"]) ): ?>

                <ul id="<?php echo $item_menu["submenu"]["id_top"]; ?>" class="dropdown-content">

                  <?php foreach($item_menu["submenu"] as $sub_item_menu):
                    if( ! empty ($sub_item_menu["nome"]) ):
                  ?>

                    <li>
                      <a href="<?php echo $sub_item_menu["link"]; ?>">
                        <?php echo $sub_item_menu["nome"]; ?>
                      </a>
                    </li>

                  <?php
                    endif;
                  endforeach;
                  ?>

                </ul>

            <?php endif; ?>

        </li>
      <?php endforeach;?>
    </ul>


<a href="#" data-activates="left-sidebar-menu" class="button-collapse-left" style="display: table; padding: 0px 10px;"><i class="material-icons">menu</i></a>


</nav>

</div>

</header>






<?php /* menu */ ?>






<main>
    <div class="row col s12" ng-view >

    </div>

</main>





<aside id="left-sidebar-nav">
    <ul id="left-sidebar-menu" class="side-nav fixed leftside-navigation ps-container ps-active-y">
        <li>
            <a class="dropdown-button waves-effect waves-light" href="#" data-activates="profile-dropdown">
                <div class="row">
                    <div class="col s4 m4 l4">
                        <img src="images/user.jpg" alt="" class="circle responsive-img valign profile-image left">
                    </div>
                    <div class="col s8 m8 l8">
                        Usuário
                        <i class="material-icons right">arrow_drop_down</i>
                    </div>
                </div>
            </a>

            <ul id="profile-dropdown" class="dropdown-content">
                <li>
                    <a href="#">Configurações</a>
                </li>
                <li>
                    <a href="#">Sair</a>
                </li>
            </ul>
            <p class="user-roal">Administrator</p>

        </li>






<?php foreach($itens_menu_principal as $item_menu): ?>

  <?php if( empty ($item_menu["submenu"]) ): ?>

          <li class="waves-effect waves-block waves-light">
            <a <?php if( ! empty ($item_menu["submenu"]) ){echo 'data-activates="' . $item_menu["submenu"]["id_left"] . '"'; } ?> href="<?php echo $item_menu["link"]; ?>" class="<?php if( ! empty ($item_menu["submenu"]) ){echo 'dropdown-button';} ?>">
              <?php if( ! empty ($item_menu["icone"]) ): ?>
                <i class="material-icons icons-sidebar-left"><?php echo $item_menu["icone"]; ?></i>
              <?php endif; ?>

              <?php echo $item_menu["nome"]; ?>
            </a>
          </li>

  <?php endif; ?>

<?php if( ! empty ($item_menu["submenu"]) ): ?>

<ul id="<?php echo $item_menu["submenu"]["id_left"]; ?>" class="collapsible collapsible-accordion">

    <li class="waves-effect waves-light waves-block">
      <a class="collapsible-header">
        <?php if( ! empty ($item_menu["icone"]) ): ?>
          <i class="material-icons icons-sub-sidebar-left"><?php echo $item_menu["icone"]; ?></i>
        <?php endif; ?>
        <?php echo $item_menu["nome"]; ?>
        <i class="mdi-navigation-arrow-drop-down right" style="margin-top: -64px !important; position: absolute; right: 0;"></i>
      </a>
      <ul class="collapsible-body">

      <?php foreach($item_menu["submenu"] as $sub_item_menu):
            if( ! empty ($sub_item_menu["nome"]) ):
      ?>

        <li>
          <a href="<?php echo $sub_item_menu["link"]; ?>">
            <?php echo $sub_item_menu["nome"]; ?>
          </a>
        </li>

      <?php
        endif;
        endforeach;
      ?>

      </ul>

<?php endif; ?>

      <?php endforeach;?>







        <?php /*
        <li>
          <a href="index.html" class="waves-effect waves-cyan">
            <i class="mdi-action-dashboard"></i>
            Dashboard
          </a>
        </li>

        <li>
          <a href="app-email.html" class="waves-effect waves-cyan">
            <i class="mdi-communication-email"></i>
            Mailbox
            <span class="new badge">4</span>
          </a>
        </li>
        */ ?>

    </ul>
</aside>






              <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                  <div class="circle"></div>
                </div><div class="gap-patch">
                  <div class="circle"></div>
                </div><div class="circle-clipper right">
                  <div class="circle"></div>
                </div>
              </div>

              <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                  <div class="circle"></div>
                </div><div class="gap-patch">
                  <div class="circle"></div>
                </div><div class="circle-clipper right">
                  <div class="circle"></div>
                </div>
              </div>




<footer class="page-footer">
  <div class="footer-copyright">
    <div class="container">
    <span>Todos os direitos reservados</span> <a href="#">ADM Imóveis</a>
    </div>
  </div>
</footer>

</body>
</html>
