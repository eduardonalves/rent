<script type="text/javascript">
$(document).ready(function() {
  //reinicializa os selects para iniciar corretamente os selects e seus conteúdos
  $('select').material_select('destroy');
   setTimeout(function () {
      $('select').material_select();
   },2000);
});

</script>
<div ng-controller="locatariosVerController" class="row col s12">
<form name="cadastro_locatarios" method="post" ng-repeat="loc in locatarios" >

<div class="container max-width-block z-depth-2 padding-bottom">

	<div class="header-page-1 padding-side">
		<h1 class="blue-grey-text">Cadastro Proprietário</h1>
		<h2 class="blue-grey-text text-lighten-3">Dados Básicos</h2>
	</div>

	<div class="row padding-side padding-top">
      <div class="input-field col s12 m8 l9">
           <input readonly id="codigointerno" type="text" class="validate" ng-model="loc.codigointerno" >
            <label class="active" for="codigointerno">Código</label>
      </div>
      <div class="input-field col s12 m6 l3">
        <select readonly ng-model="loc.tipo_pessoa" name="tipo_pessoa">
          <option value="" disabled selected>Selecione</option>
          <option value="1">Física</option>
          <option value="2">Jurídica</option>
        </select>
        <label class="active">Tipo de Pessoa</label>
      </div>
      <div class="input-field col s12 m8 l9">
           <input readonly  id="cnpj" type="text" class="validate" ng-model="loc.cnpj" >
              <label for="cnpj" class="active">CNPJ</label>
      </div>
      <div class="input-field col s12 m8 l9">
           <input readonly id="ie" type="text" class="validate" ng-model="loc.ie" >
              <label for="ie" class="active">Inscrição Estadual</label>
      </div>
      <div class="input-field col s12 m8 l9">
           <input readonly id="im" type="text" class="validate" ng-model="loc.im" >
            <label for="im"class="active" >Inscrição Municipal</label>
      </div>
      <div class="input-field col s6 m6 l2">
      <input readonly type="date" class="datepicker" placeholder="Data de Abertura" ng-model="loc.data_abertura">
      <label for="orgao_emissor" class="active">Data de Abertura</label>
      </div>
        <div class="input-field col s12 m8 l9">
			       <input readonly id="nome" type="text" class="validate" ng-model="loc.nome" >
			        <label class="active" for="nome">Nome</label>
        </div>

        <div class="col s12 m4 l3 switch">
		    <label class="active center_table_label">
		      Inativo
		      <input readonly type="checkbox" checked="checked" ng-model="loc.situacao">
		      <span class="lever"></span>
		      Ativo
		    </label>
		</div>



	</div>

	<div class="row padding-side">

        <div class="input-field col s12 m6 l6">
			<input readonly id="email" type="email" class="validate" ng-model="loc.email">
			<label class="active" for="email">Email</label>
        </div>



	</div>

	<div class="row padding-side">

        <div class="input-field col s12 m6 l4">
			<input readonly id="cpf" type="number" class="validate"  /name="cpf" ng-model="loc.cpf">
			<label class="active" for="cpf">CPF</label>
        </div>

        <div class="input-field col s12 m6 l4">
			<input readonly id="rg" type="number" class="validate" name="rg" ng-model="loc.rg">
			<label class="active" for="rg">RG</label>
        </div>

        <div class="input-field col s6 m6 l2">
			<input readonly id="orgao_emissor" type="text" class="validate" name="orgao_emissor" ng-model="loc.orgao_emissor">
			<label class="active" for="orgao_emissor">Órgão Emissor</label>
        </div>

        <div class="input-field col s6 m6 l2">
				<input readonly type="date" class="datepicker" placeholder="Data de Emissão" ng-model="loc.data_emissao">
        </div>


	</div>

	<div class="row padding-side">

		<div class="input-field col s12 m6 l3">
			<select readonly ng-model="loc.sexo" name="sexo">
				<option value="" disabled>Selecione</option>
				<option value="1">Masculino</option>
				<option value="2">Feminino</option>
			</select>
			<label class="active">Sexo</label>
		</div>

		<div class="input-field col s12 m6 l3">
			<select readonly ng-model="loc.estado_civil" name="estado_civil">
				<option value="" disabled >Selecione</option>
				<option value="1">Solteiro(a)</option>
				<option value="2">Casado(a)</option>
				<option value="3">Divorciado(a)</option>
				<option value="4">Viúvo(a)</option>
			</select>
			<label class="active">Estado Civil</label>
		</div>

        <div class="input-field col s12 m6 l3">
			<input readonly id="nacionalidade" type="text" class="validate" ng-model="loc.nacionalidade">
			<label class="active" for="nacionalidade">Nacionalidade</label>
        </div>

        <div class="input-field col s12 m6 l3">
			<input readonly id="naturalidade" type="text" class="validate"  ng-model="loc.naturalidade">
			<label class="active" for="naturalidade">Naturalidade</label>
        </div>

	</div>

	<div class="row padding-side">

        <div class="input-field col s12 m5 l5">
			<input readonly id="profissao" type="text" class="validate" ng-model="loc.profissao">
			<label class="active" for="profissao">Profissão</label>
        </div>

        <div class="input-field col s12 m5 l5">
			<input readonly id="empresa" type="text" class="validate" name="empresa" ng-model="loc.empresa">
			<label class="active" for="empresa">Empresa</label>
        </div>

        <div class="input-field col s12 m2 l2">
			<input readonly id="renda" type="number" class="validate" ng-model="loc.renda">
			<label class="active" for="renda">Renda</label>
        </div>

	</div>

	<div class="row padding-side">

        <div class="input-field col s12 m7 l7">
			<input readonly id="nome_conjuge" type="text" class="validate" ng-model="loc.nome_conjuge">
			<label class="active" for="nome_conjuge">Nome do Cônjuge</label>
        </div>

        <div class="input-field col s12 m5 l5">
			<input readonly id="cpf_conjugue" type="number" class="validate" name="cpf_conjugue" ng-model="loc.cpf_conjugue">
			<label class="active" for="cpf_conjugue">CPF do Cônjuge</label>
        </div>

	</div>

	<div class="row padding-side">

        <div class="input-field col s12">
          <textarea id="observacoes_basicas" class="materialize-textarea"  name="observacoes_basicas" ng-model="loc.observacoes_basicas"></textarea>
          <label class="active" for="observacoes_basicas">Observações Básicas</label>
        </div>

	</div>


</div>



<div class="container max-width-block z-depth-2 padding-bottom">

	<div class="header-page-1 padding-side">
		<h1 class="blue-grey-text">Cadastro Proprietário</h1>
		<h2 class="blue-grey-text text-lighten-3">Dados da Administradora</h2>
	</div>

	<div class="row padding-side padding-top">

		<div class="input-field col s12 m6 l6">
			<select readonly>
				<option value="" disabled  name="filial_id" ng-model="loc.filial_id">Selecione</option>
				<option value="1">Filial matriz</option>
				<option value="2">Filial Copacabana</option>
				<option value="3">Filial Barra</option>
				<option value="4">Filial Recreio</option>
			</select>
			<label class="active">Filial</label>
		</div>

		<div class="input-field col s12 m6 l6">
			<select readonly>
				<option value="" disabled  name="gerente_id" ng-model="loc.gerente_id">Selecione</option>
				<option value="1">Eduardo</option>
				<option value="2">Robson</option>
				<option value="3">Hugo</option>
			</select>
			<label class="active">Gerente</label>
		</div>

	</div>

	<div class="row padding-side">
		<div class="col s6 m3 l3">
			<p>
		      <input readonly disabled type="checkbox" id="dimob" name="dimob" ng-model="loc.dimob"/>
		      <label class="active" for="dimob">DIMOB</label>
		    </p>
	    </div>
		<div class="col s6 m3 l3">
			<p>
		      <input readonly disabled type="checkbox" id="reside_exterior" ng-model="loc.reside_exterior" />
		      <label class="active" for="reside_exterior">RESIDE EXTERIOR</label>
		    </p>
		</div>
		<div class="col s6 m3 l3">
			<p>
		      <input readonly disabled type="checkbox" id="darf" name="darf" ng-model="loc.darf" />
		      <label class="active" for="darf">DARF</label>
		    </p>
		</div>
		<div class="col s6 m3 l3">
			<p>
		      <input readonly disabled type="checkbox" id="retencao_irrf" name="retencao_irrf" ng-model="loc.retencao_irrf" />
		      <label class="active" for="retencao_irrf">RETENÇÃO IRRF</label>
		    </p>
		</div>
	</div>

</div>




<div class="container max-width-block z-depth-2 padding-bottom">

	<div class="header-page-1 padding-side">
		<h1 class="blue-grey-text">Cadastro Proprietário</h1>
		<h2 class="blue-grey-text text-lighten-3">Dados Particulares</h2>
	</div>

	<div class="row padding-side padding-top">

		<div class="input-field col s12 m6 l6">
			<select readonly name="tipo_imovel" ng-model="loc.tipo_imovel">
				<option value="" disabled >Selecione</option>
				<option value="1">Residencial</option>
				<option value="2">Comercial</option>
			</select>
			<label class="active">Tipo de Endereço</label>
		</div>

		<div class="input-field col s12 m6 l6">
			<select readonly name="tipo_endereco" ng-model="loc.tipo_endereco">
				<option value="" disabled >Selecione</option>
				<option value="1">Rua</option>
				<option value="2">Avenida</option>
				<option value="4">Praça</option>
				<option value="5">Praia</option>
				<option value="6">Estrada</option>
				<option value="7">SQL</option>
				<option value="8">Travessa</option>
				<option value="9">Campo</option>
			</select>
			<label class="active">Logradouro</label>
		</div>

	</div>

	<div class="row padding-side">

		<div class="input-field col s12 m6">
			<input readonly id="endereco" type="text" class="validate" ng-model="loc.endereco">
		    <label class="active" for="endereco">Endereço</label>
		</div>

		<div class="input-field col s12 m6">
			<input readonly id="complemento" type="text" class="validate" ng-model="loc.complemento">
		    <label class="active" for="complemento">Complemento</label>
		</div>

	</div>

	<div class="row padding-side">

		<div class="input-field col s12 m5 l5">
			<select readonly name="bairro" ng-model="loc.bairro">
				<option value="" disabled >Selecione</option>
				<option value="1">Bairros</option>
			</select>
			<label class="active">Bairro</label>
		</div>

		<div class="input-field col s12 m5 l5">
			<select readonly name="cidade" ng-model="loc.cidade">
				<option value="" disabled >Selecione</option>
				<option value="1">Cidade</option>
			</select>
			<label class="active">Cidade</label>
		</div>

		<div class="input-field col s12 m2 l2">
			<select readonly name="uf" ng-model="loc.uf">
				<option value="" disabled >Selecione</option>
				<option value="1">RJ</option>
			</select>
			<label class="active">UF</label>
		</div>

	</div>

	<div class="row padding-side">

        <div class="input-field col s12">
          <textarea id="observacoes_particulares" class="materialize-textarea" ng-model="loc.observacoes_particulares"></textarea>
          <label class="active" for="observacoes_particulares">Observações Básicas</label>
        </div>

	</div>

</div>



<div class="container max-width-block z-depth-2 padding-bottom">

	<div class="header-page-1 padding-side">
		<h1 class="blue-grey-text">Cadastro Proprietário</h1>
		<h2 class="blue-grey-text text-lighten-3">Dados Bancários</h2>
	</div>

	<div class="row padding-side padding-top">

		<div class="input-field col s12 m3 l3">
			<input readonly id="codigo_banco" type="number" class="validate" name="codigo_banco" ng-model="loc.codigo_banco">
		    <label class="active" for="codigo_banco">Código do Banco</label>
		</div>

		<div class="input-field col s12 m4 l4">
			<input readonly id="banco" type="text" class="validate" name="banco" ng-model="loc.banco">
		    <label class="active" for="banco">Banco</label>
		</div>

		<div class="input-field col s12 m5 l5">
			<input readonly id="codigo_reconhecimento" type="number" class="validate" name="codigo_reconhecimento" ng-model="loc.codigo_reconhecimento">
		    <label class="active" for="codigo_reconhecimento">Código de Reconhecimento</label>
		</div>

	</div>

	<div class="row padding-side">

		<div class="input-field col s12 m4">
			<input readonly id="agencia" type="number" class="validate" name="agencia" ng-model="loc.agencia">
		    <label class="active" for="agencia">Agência</label>
		</div>

		<div class="input-field col s12 m8">
			<input readonly id="conta_corrente" type="number" class="validate" name="conta_corrente" ng-model="loc.conta_corrente">
		    <label class="active" for="conta_corrente">Conta Corrente</label>
		</div>
    <div readonly class="input-field col s12 m8">
         <input id="digito" type="number" class="validate" name="digito" ng-model="digito">
        <label class="active"  for="digito">Dígito</label>
    </div>
	</div>

</div>



</form>
  <a class="btn-floating btn-large waves-effect waves-light red" id="view-source" ng-click="saveObject($event)" ><i class="material-icons">add</i></a>
</div>
