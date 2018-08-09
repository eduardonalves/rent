<script type="text/javascript">
$(document).ready(function(){
  $('.tooltipped').tooltip({delay: 50});
   $('select').material_select();
   $('body').on('#numFiltered','change',function() {
     console.log('trigou change');
   });
});

</script>

<div ng-controller="imoveisController" class="row col s12">
  <br>
  <br>

  <a class="btn" data-position="top" data-delay="50" data-tooltip="Clique aqui para adicionar um novo registro!" ng-class="{active: activetab == 'cadastrar'}" href="#imoveis/cadastrar"  >Novo Registro</a>
  <br>
  <br>

    <div class="row">
        <div class="col-md-2">PageSize:
            <select ng-model="entryLimit" class="form-control">

                <option>10</option>
                <option>20</option>
                <option>50</option>
                <option>100</option>
            </select>
        </div>
        <div class="col-md-3">Filter:
            <input type="text" ng-model="search" ng-change="filter()" placeholder="Filter" class="form-control" id="filterGeneral" />
        </div>
        <div class="col-md-4">
            <h5>Filtered @{{ filtered.length }} of @{{ totalItems}} total customers</h5>
            <input type="hidden" name="name" value="@{{ filtered.length }}" id="numFiltered">
        </div>
    </div>
    <br/>
      <br>
    <div class="col-md-12" ng-show="filteredItems > 0">
      <table  class="responsive-table striped bordered highlight centered" >
      <thead>
        <tr>

            <th data-field="codigo_interno" ng-click="sort_by('Imovel.codigointerno')"> Código Interno <a  ><i class="glyphicon glyphicon-sort"></i> </a></th>
            <th data-field="endereco" ng-click="sort_by('Imovel.endereco')"> Endereço <a  ><i class="glyphicon glyphicon-sort"></i> </a></th>
            <th data-field="cidade" ng-click="sort_by('Imovel.cidade')"> Cidade <a  ><i class="glyphicon glyphicon-sort"></i> </a></th>
            <th data-field="uf" ng-click="sort_by('Imovel.uf')"> UF <a  ><i class="glyphicon glyphicon-sort"></i> </a></th>
            <th data-field="valor_aluguel" ng-click="sort_by('Imovel.valor_aluguel')"> Valor do Aluguel <a  ><i class="glyphicon glyphicon-sort"></i> </a></th>
            <th data-field="acoes">Açoes</th>
        </tr>
      </thead>

      <tbody  ng-repeat="imoveis in filtered = (imoveis | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit" >
        <tr>

           <td>@{{ imoveis.Imovel.codigointerno }}</td>
           <td>@{{ imoveis.Imovel.endereco }} @{{ imoveis.Imovel.numero }} @{{ imoveis.Imovel.complemento }} @{{ imoveis.Imovel.bairro }}</td>
           <td>@{{ imoveis.Imovel.cidade }}</td>
           <td>@{{ imoveis.Imovel.uf }}</td>
           <td>R$ @{{ imoveis.Imovel.valor_aluguel }}</td>
           <td>
              <a class="btn  " data-position="top" data-delay="50"   ng-class="{active: activetab == 'Imovel'}" href="#imoveis/ver/?id=@{{ imoveis.$id  }}">Ver</a>
              <a class="btn  " data-position="top" data-delay="50"   ng-class="{active: activetab == 'Imovel'}" href="#imoveis/editar/?id=@{{ imoveis.$id  }}">Editar</a>
              <a class="btn  red" data-position="top" data-delay="50" >Remover</a>
           </td>
         </tr>
      </tbody>
      </table>
    </div>
    <div class="col-md-12" ng-show="filteredItems == 0">
        <div class="col-md-12">
            <h4>No customers found</h4>
        </div>
    </div>
    <div class="col-md-12" ng-show="filteredItems > 0">
        <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>

    </div>
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
      <a class="btn-floating btn-large red">
        <i class="large material-icons">more_horiz</i>
      </a>
      <ul>

        <li><a class="btn-floating red" ng-click="logout($event)"><i class="material-icons">exit_to_app</i></a></li>
        <li><a class="btn-floating blue" href="#home" ><i class="material-icons">home</i></a></li>
        <li><a class="btn-floating yellow darken-1"><i class="material-icons" onclick="history.go(-1);">arrow_back</i></a></li>

        <li><a class="btn-floating green" href="#imoveis/cadastrar"><i class="material-icons">add</i></a></li>

      </ul>
    </div>
</div>
