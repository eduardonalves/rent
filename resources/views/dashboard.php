<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en"  ng-app="scotchApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Design Lite</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="/images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="/images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="/images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="/images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/material.min.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">

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


    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>

  <body ng-controller="mainController">
    <script type="text/javascript">
    $(document).ready(function() {
      $('select').material_select('destroy');
     setTimeout(function() {
       $('select').material_select('destroy');
       $('select').material_select();
       $('#base').trigger('change');
     },2500);
     setTimeout(function() {
       $('select').material_select('destroy');
       $('select').material_select();
       $('#base').trigger('change');
     },3000);
    });

    </script>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <!--<span class="mdl-layout-title">Home</span>-->
          <div class="input-field col s12 m6 l3">
      			<select ng-model="base" name="base" ng-change="changeBase($event)"   id="base" >

      				<option ng-repeat="account in my_account" value="@{{ account.conta_id }}">@{{ account.conta_id}}</option>

      			</select>
      			<label >Conta</label>
      		</div>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>hello@example.com</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">hello@example.com</li>
              <li class="mdl-menu__item">info@example.com</li>
              <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
            </ul>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link"   ng-class="{active: activetab == 'home'}" href="#home"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
          <a class="mdl-navigation__link" ng-class="{active: activetab == 'cadastrar'}" href="#imoveis/cadastrar"  ><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Cadastrar Imóveis</a>
          <a class="mdl-navigation__link" ng-class="{active: activetab == 'listar'}" href="#imoveis/listar" ><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>Listar Imóveis</a>
          <a class="mdl-navigation__link"  ng-class="{active: activetab == 'proprietarios/cadastrar'}" href="#proprietarios/cadastrar"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i>Cadastrar Proprietarios</a>
          <a class="mdl-navigation__link" ng-class="{active: activetab == 'proprietarios/listar'}" href="#proprietarios/listar"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Listar Proprietarios</a>
          <a class="mdl-navigation__link" ng-class="{active: activetab == 'locatarios/cadastrar'}" href="#locatarios/cadastrar"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">flag</i>Cadastrar Locatário</a>
          <a class="mdl-navigation__link" ng-class="{active: activetab == 'locatarios/listar'}" href="#locatarios/listar"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Listar Locatarios</a>
          <a class="mdl-navigation__link"  ng-class="{active: activetab == 'fiadores/cadastrar'}" href="#fiadores/cadastrar"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">shopping_cart</i>Cadastrar Fiadores</a>
          <a class="mdl-navigation__link" ng-class="{active: activetab == 'fiadores/listar'}" href="#fiadores/listar"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Listar Fiadores</a>
          <a class="mdl-navigation__link"  ng-class="{active: activetab == 'fornecedores/cadastrar'}" href="#fornecedores/cadastrar"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">shopping_cart</i>Cadastrar Fornecedores</a>
          <a class="mdl-navigation__link" ng-class="{active: activetab == 'fornecedores/listar'}" href="#fornecedores/listar"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Listar Fornecedores</a>
          <a class="mdl-navigation__link"  ng-class="{active: activetab == 'procuradores/cadastrar'}" href="#procuradores/cadastrar"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">shopping_cart</i>Cadastrar Procuradores</a>
          <a class="mdl-navigation__link" ng-class="{active: activetab == 'procuradores/listar'}" href="#procuradores/listar"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Listar Procuradores</a>
          <a class="mdl-navigation__link"  ng-class="{active: activetab == 'favorecidos/cadastrar'}" href="#favorecidos/cadastrar"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">shopping_cart</i>Cadastrar Favorecidos</a>
          <a class="mdl-navigation__link" ng-class="{active: activetab == 'favorecidos/listar'}" href="#favorecidos/listar"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Listar Favorecido</a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div id="main">
        <div class="mdl-grid demo-content " ng-view >




        </div>
        </div>
      </main>
    </div>
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" style="position: fixed; left: -1000px; height: -1000px;">
        <defs>
          <mask id="piemask" maskContentUnits="objectBoundingBox">
            <circle cx=0.5 cy=0.5 r=0.49 fill="white">
            <circle cx=0.5 cy=0.5 r=0.40 fill="black">
          </mask>
          <g id="piechart">
            <circle cx=0.5 cy=0.5 r=0.5>
            <path d="M 0.5 0.5 0.5 0 A 0.5 0.5 0 0 1 0.95 0.28 z" stroke="none" fill="rgba(255, 255, 255, 0.75)">
          </g>
        </defs>
      </svg>
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 250" style="position: fixed; left: -1000px; height: -1000px;">
        <defs>
          <g id="chart">
            <g id="Gridlines">
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="27.3" x2="468.3" y2="27.3">
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="66.7" x2="468.3" y2="66.7">
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="105.3" x2="468.3" y2="105.3">
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="144.7" x2="468.3" y2="144.7">
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="184.3" x2="468.3" y2="184.3">
            </g>
            <g id="Numbers">
              <text transform="matrix(1 0 0 1 485 29.3333)" fill="#888888" font-family="'Roboto'" font-size="9">500</text>
              <text transform="matrix(1 0 0 1 485 69)" fill="#888888" font-family="'Roboto'" font-size="9">400</text>
              <text transform="matrix(1 0 0 1 485 109.3333)" fill="#888888" font-family="'Roboto'" font-size="9">300</text>
              <text transform="matrix(1 0 0 1 485 149)" fill="#888888" font-family="'Roboto'" font-size="9">200</text>
              <text transform="matrix(1 0 0 1 485 188.3333)" fill="#888888" font-family="'Roboto'" font-size="9">100</text>
              <text transform="matrix(1 0 0 1 0 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">1</text>
              <text transform="matrix(1 0 0 1 78 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">2</text>
              <text transform="matrix(1 0 0 1 154.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">3</text>
              <text transform="matrix(1 0 0 1 232.1667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">4</text>
              <text transform="matrix(1 0 0 1 309 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">5</text>
              <text transform="matrix(1 0 0 1 386.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">6</text>
              <text transform="matrix(1 0 0 1 464.3333 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">7</text>
            </g>
            <g id="Layer_5">
              <polygon opacity="0.36" stroke-miterlimit="10" points="0,223.3 48,138.5 154.7,169 211,88.5
              294.5,80.5 380,165.2 437,75.5 469.5,223.3 	">
            </g>
            <g id="Layer_4">
              <polygon stroke-miterlimit="10" points="469.3,222.7 1,222.7 48.7,166.7 155.7,188.3 212,132.7
              296.7,128 380.7,184.3 436.7,125 	">
            </g>
          </g>
        </defs>
      </svg>
      <!--<a href="https://github.com/google/material-design-lite/blob/master/templates/dashboard/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">View Source</a>-->

  </body>
</html>
