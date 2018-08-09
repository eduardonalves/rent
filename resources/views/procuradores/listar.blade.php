<script type="text/javascript">
$(document).ready(function(){
 $('.tooltipped').tooltip({delay: 50});
  $('select').material_select();
});
</script>
<div ng-controller="procuradoresController" class="row col s12">
  <br>
  <br>
  <a class="btn" data-position="top" data-delay="50" data-tooltip="Clique aqui para adicionar um novo registro!" ng-class="{active: activetab == 'cadastrar'}" href="#procuradores/cadastrar"  >Novo Registro</a>
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

              <th data-field="nome" ng-click="sort_by('Procurador.nome')"> Nome <a  ><i class="glyphicon glyphicon-sort"></i> </a></th>
              <th data-field="endereco" ng-click="sort_by('Procurador.endereco')"> Endereço <a  ><i class="glyphicon glyphicon-sort"></i> </a></th>
              <th data-field="cidade" ng-click="sort_by('Procurador.cidade')"> Cidade <a  ><i class="glyphicon glyphicon-sort"></i> </a></th>
              <th data-field="uf" ng-click="sort_by('Procurador.uf')"> UF <a  ><i class="glyphicon glyphicon-sort"></i> </a></th>

              <th data-field="name">Açoes</th>
          </tr>
        </thead>

        <tbody ng-repeat="procuradores in filtered = (procuradores | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
          <tr>
             <td>@{{ procuradores.$id }}</td>
             <td>@{{ procuradores.Procurador.nome }}</td>
             <td>@{{ procuradores.Procurador.endereco }} @{{ procuradores.Procurador.complemento }} @{{ procuradores.Procurador.bairro }}</td>
             <td>@{{ procuradores.Procurador.cidade }}</td>
             <td>@{{ procuradores.Procurador.uf }}</td>

             <td>
                <a class="btn  " data-position="top" data-delay="50"   ng-class="{active: activetab == 'Procurador'}" href="#procuradores/ver/?id=@{{ procuradores.$id  }}">Ver</a>
                <a class="btn  " data-position="top" data-delay="50"   ng-class="{active: activetab == 'Procurador'}" href="#procuradores/editar/?id=@{{ procuradores.$id  }}">Editar</a>
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
