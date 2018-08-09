<script type="text/javascript">
$(document).ready(function(){
 $('.tooltipped').tooltip({delay: 50});
  $('select').material_select();
});
</script>
<div ng-controller="contasController" class="row col s12">
  <br>
  <br>
  <a class="btn" data-position="top" data-delay="50" data-tooltip="Clique aqui para adicionar um novo registro!" ng-class="{active: activetab == 'cadastrar'}" href="#contas/cadastrar"  >Novo Registro</a>
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
          <input type="text" ng-model="search" ng-change="filter()" placeholder="Filter" class="form-control" />
      </div>
      <div class="col-md-4">
          <h5>Filtered @{{ filtered.length }} of @{{ totalItems}} total customers</h5>
      </div>
  </div>
  <br>
  <br>
  <div class="col-md-12" ng-show="filteredItems > 0">
    <table  class="responsive-table striped bordered highlight centered" >
        <thead>
          <tr>
              <th data-field="id">id</th>

              <th data-field="nome_da_conta" ng-click="sort_by('Conta.nome_da_conta')"> Nome da Conta <a  ><i class="glyphicon glyphicon-sort"></i> </a></th>
              <th data-field="situacao" ng-click="sort_by('Conta.situacao')"> Situacao <a  ><i class="glyphicon glyphicon-sort"></i> </a></th>
              <th data-field="name">Açoes</th>
          </tr>
        </thead>

        <tbody ng-repeat="contas in filtered = (contas | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
          <tr>
             <td>@{{ contas.$id }}</td>
             <td>@{{ contas.Conta.nome_da_conta }}</td>


             <td>@{{ contas.Conta.situacao }}</td>

             <td>
                <a class="btn  " data-position="top" data-delay="50"   ng-class="{active: activetab == 'Conta'}" href="#contas/ver/?id=@{{ contas.$id  }}">Ver</a>
                <a class="btn  " data-position="top" data-delay="50"   ng-class="{active: activetab == 'Conta'}" href="#contas/editar/?id=@{{ contas.$id  }}">Editar</a>
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
</div>
