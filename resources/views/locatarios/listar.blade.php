<script type="text/javascript">
$(document).ready(function(){
  $('.tooltipped').tooltip({delay: 50});
   $('select').material_select();
});
</script>
<div ng-controller="locatariosController" class="row col s12">
  <br>
  <br>
  <a class="btn" data-position="top" data-delay="50" data-tooltip="Clique aqui para adicionar um novo registro!" ng-class="{active: activetab == 'cadastrar'}" href="#locatarios/cadastrar"  >Novo Registro</a>
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

              <th data-field="nome" ng-click="sort_by('Locatario.nome')"> Nome <a  ><i class="glyphicon glyphicon-sort"></i> </a></th>
              <th data-field="nome" ng-click="sort_by('Locatario.endereco')"> Endereço <a  ><i class="glyphicon glyphicon-sort"></i> </a></th>
              <th data-field="nome" ng-click="sort_by('Locatario.cidade')"> Cidade <a  ><i class="glyphicon glyphicon-sort"></i> </a></th>
              <th data-field="nome" ng-click="sort_by('Locatario.uf')"> UF <a  ><i class="glyphicon glyphicon-sort"></i> </a></th>

              <th data-field="name">Açoes</th>
          </tr>
        </thead>

        <tbody ng-repeat="locatarios in filtered = (locatarios | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
          <tr>
             <td>@{{ locatarios.$id }}</td>
             <td>@{{ locatarios.Locatario.nome }}</td>
             <td>@{{ locatarios.Locatario.endereco }} @{{ locatarios.Locatario.complemento }} @{{ locatarios.Locatario.bairro }}</td>
             <td>@{{ locatarios.Locatario.cidade }}</td>
             <td>@{{ locatarios.Locatario.uf }}</td>

             <td>
                <a class="btn  " data-position="top" data-delay="50"   ng-class="{active: activetab == 'Locatario'}" href="#locatarios/ver/?id=@{{ locatarios.$id  }}">Ver</a>
                <a class="btn  " data-position="top" data-delay="50"   ng-class="{active: activetab == 'Locatario'}" href="#locatarios/editar/?id=@{{ locatarios.$id  }}">Editar</a>
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
