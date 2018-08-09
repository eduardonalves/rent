<script type="text/javascript">
$(document).ready(function() {
 $('select').material_select();
});

</script>
<div ng-controller="procuradoresController" class="row col s12">
<form name="cadastro_procurador" method="post"  >

<div class="container max-width-block z-depth-2 padding-bottom">

	<div class="header-page-1 padding-side">
		<h1 class="blue-grey-text">Cadastro Procurador</h1>
		<h2 class="blue-grey-text text-lighten-3">Dados Básicos</h2>
	</div>

	<div class="row padding-side padding-top">
        <div class="input-field col s12 m8 l9">
          <input id="codigointerno" type="text" class="validate" ng-model="codigointerno" >
          <label for="codigointerno">Código</label>
        </div>
        <div class="input-field col s12 m6 l3">
    			<select ng-model="tipo_pessoa" name="tipo_pessoa">
    				<option value="" disabled selected>Selecione</option>
    				<option value="1">Física</option>
    				<option value="2">Jurídica</option>
    			</select>
    			<label>Tipo de Pessoa</label>
    		</div>
        <div class="input-field col s12 m8 l9">
			       <input id="cnpj" type="text" class="validate" ng-model="cnpj" >
			          <label for="cnpj">CNPJ</label>
        </div>
        <div class="input-field col s12 m8 l9">
			       <input id="ie" type="text" class="validate" ng-model="ie" >
			          <label for="ie">Inscrição Estadual</label>
        </div>
        <div class="input-field col s12 m8 l9">
			       <input id="im" type="text" class="validate" ng-model="im" >
              <label for="im">Inscrição Municipal</label>
        </div>
        <div class="input-field col s6 m6 l2">
				<input type="date" class="datepicker" placeholder="Data de Abertura" ng-model="data_abertura">
        <label for="orgao_emissor" class="active">Data de Abertura</label>
        </div>
        <div class="input-field col s12 m8 l9">
			       <input id="nome" type="text" class="validate" ng-model="nome" >
			          <label for="nome">Nome</label>
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

	<div class="row padding-side">

        <div class="input-field col s12 m6 l6">
			<input id="email" type="email" class="validate" ng-model="email">
			<label for="email">Email</label>
        </div>

        <div class="input-field col s12 m6 l6">
			<input id="site" type="text" class="validate" name="site" ng-model="site">
			<label for="site">Site</label>
        </div>

	</div>

	<div class="row padding-side">

        <div class="input-field col s12 m6 l4">
			<input id="cpf" type="number" class="validate"  /name="cpf" ng-model="cpf">
			<label for="cpf">CPF</label>
        </div>

        <div class="input-field col s12 m6 l4">
			<input id="rg" type="number" class="validate" name="rg" ng-model="rg">
			<label for="rg">RG</label>
        </div>

        <div class="input-field col s6 m6 l2">
			<input id="orgao_emissor" type="text" class="validate" name="orgao_emissor" ng-model="orgao_emissor">
			<label for="orgao_emissor">Órgão Emissor</label>
        </div>

        <div class="input-field col s6 m6 l2">
				<input type="date" class="datepicker" placeholder="Data de Emissão" ng-model="data_emissao">
        <label for="orgao_emissor" class="active">Data de Emissão</label>
        </div>


	</div>

	<div class="row padding-side">

		<div class="input-field col s12 m6 l3">
			<select ng-model="sexo" name="sexo">
				<option value="" disabled selected>Selecione</option>
				<option value="1">Masculino</option>
				<option value="2">Feminino</option>
			</select>
			<label>Sexo</label>
		</div>

		<div class="input-field col s12 m6 l3">
			<select ng-model="estado_civil" name="estado_civil">
				<option value="" disabled selected>Selecione</option>
				<option value="1">Solteiro(a)</option>
				<option value="2">Casado(a)</option>
				<option value="3">Divorciado(a)</option>
				<option value="4">Viúvo(a)</option>
			</select>
			<label>Estado Civil</label>
		</div>

        <div class="input-field col s12 m6 l3">
			<input id="nacionalidade" type="text" class="validate" ng-model="nacionalidade">
			<label for="nacionalidade">Nacionalidade</label>
        </div>

        <div class="input-field col s12 m6 l3">
			<input id="naturalidade" type="text" class="validate"  ng-model="naturalidade">
			<label for="naturalidade">Naturalidade</label>
        </div>

	</div>

	<div class="row padding-side">

        <div class="input-field col s12 m5 l5">
			<input id="profissao" type="text" class="validate" ng-model="profissao">
			<label for="profissao">Profissão</label>
        </div>

        <div class="input-field col s12 m5 l5">
			<input id="empresa" type="text" class="validate" name="empresa" ng-model="empresa">
			<label for="empresa">Empresa</label>
        </div>

        <div class="input-field col s12 m2 l2">
			<input id="renda" type="number" class="validate" ng-model="renda">
			<label for="renda">Renda</label>
        </div>

	</div>

	<div class="row padding-side">

        <div class="input-field col s12 m7 l7">
			<input id="nome_conjuge" type="text" class="validate" ng-model="nome_conjuge">
			<label for="nome_conjuge">Nome do Cônjuge</label>
        </div>

        <div class="input-field col s12 m5 l5">
			<input id="cpf_conjugue" type="number" class="validate" name="cpf_conjugue" ng-model="cpf_conjugue">
			<label for="cpf_conjugue">CPF do Cônjuge</label>
        </div>

	</div>

	<div class="row padding-side">

        <div class="input-field col s12">
          <textarea id="observacoes_basicas" class="materialize-textarea"  name="observacoes_basicas" ng-model="observacoes_basicas"></textarea>
          <label for="observacoes_basicas">Observações Básicas</label>
        </div>

	</div>


</div>








<div class="container max-width-block z-depth-2 padding-bottom">

	<div class="header-page-1 padding-side">
		<h1 class="blue-grey-text">Cadastro Procurador</h1>
		<h2 class="blue-grey-text text-lighten-3">Dados Particulares</h2>
	</div>

	<div class="row padding-side padding-top">

		<div class="input-field col s12 m6 l6">
			<select name="tipo_imovel" ng-model="tipo_imovel">
				<option value="" disabled selected>Selecione</option>
				<option value="1">Residencial</option>
				<option value="2">Comercial</option>
			</select>
			<label>Tipo de Endereço</label>
		</div>

		<div class="input-field col s12 m6 l6">
			<select name="tipo_endereco" ng-model="tipo_endereco">
				<option value="" disabled selected>Selecione</option>
				<option value="1">Rua</option>
				<option value="2">Avenida</option>
				<option value="4">Praça</option>
				<option value="5">Praia</option>
				<option value="6">Estrada</option>
				<option value="7">SQL</option>
				<option value="8">Travessa</option>
				<option value="9">Campo</option>
			</select>
			<label>Logradouro</label>
		</div>

	</div>

	<div class="row padding-side">

		<div class="input-field col s12 m6">
			<input id="endereco" type="text" class="validate" ng-model="endereco">
		    <label for="endereco">Endereço</label>
		</div>

		<div class="input-field col s12 m6">
			<input id="complemento" type="text" class="validate" ng-model="complemento">
		    <label for="complemento">Complemento</label>
		</div>

	</div>

	<div class="row padding-side">

		<div class="input-field col s12 m5 l5">
			<select name="bairro" ng-model="bairro">
				<option value="" disabled selected>Selecione</option>
				<option value="1">Bairros</option>
			</select>
			<label>Bairro</label>
		</div>

		<div class="input-field col s12 m5 l5">
			<select name="cidade" ng-model="cidade">
				<option value="" disabled selected>Selecione</option>
				<option value="1">Cidade</option>
			</select>
			<label>Cidade</label>
		</div>

		<div class="input-field col s12 m2 l2">
			<select name="uf" ng-model="uf">
				<option value="" disabled selected>Selecione</option>
				<option value="1">RJ</option>
			</select>
			<label>UF</label>
		</div>

	</div>

	<div class="row padding-side">

        <div class="input-field col s12">
          <textarea id="observacoes_particulares" class="materialize-textarea" ng-model="observacoes_particulares"></textarea>
          <label for="observacoes_particulares">Observações Básicas</label>
        </div>

	</div>

</div>



<div class="container max-width-block z-depth-2 padding-bottom">

	<div class="header-page-1 padding-side">
		<h1 class="blue-grey-text">Cadastro Procurador</h1>
		<h2 class="blue-grey-text text-lighten-3">Dados Bancários</h2>
	</div>

	<div class="row padding-side padding-top">

		<div class="input-field col s12 m3 l3">
			<input id="codigo_banco" type="number" class="validate" name="codigo_banco" ng-model="codigo_banco">
		    <label for="codigo_banco">Código do Banco</label>
		</div>

		<div class="input-field col s12 m4 l4">
			<input id="banco" type="text" class="validate" name="banco" ng-model="banco">
		    <label for="banco">Banco</label>
		</div>

		<div class="input-field col s12 m5 l5">
			<input id="codigo_reconhecimento" type="number" class="validate" name="codigo_reconhecimento" ng-model="codigo_reconhecimento">
		    <label for="codigo_reconhecimento">Código de Reconhecimento</label>
		</div>

	</div>

	<div class="row padding-side">

		<div class="input-field col s12 m4">
			<input id="agencia" type="number" class="validate" name="agencia" ng-model="agencia">
		    <label for="agencia">Agência</label>
		</div>
    <div class="input-field col s12 m4">
			<input id="agencia_nome" type="text" class="validate" name="agencia_nome" ng-model="agencia_nome">
		    <label for="agencia_nome">Nome da Agência</label>
		</div>
		<div class="input-field col s12 m8">
			<input id="conta_corrente" type="number" class="validate" name="conta_corrente" ng-model="conta_corrente">
		    <label for="conta_corrente">Conta Corrente</label>
		</div>
    <div class="input-field col s12 m8">
			   <input id="digito" type="number" class="validate" name="digito" ng-model="digito">
		    <label for="digito">Dígito</label>
		</div>
	</div>

</div>



</form>
  <a class="btn-floating btn-large waves-effect waves-light red" id="view-source" ng-click="saveObject($event)" ><i class="material-icons">add</i></a>
</div>
