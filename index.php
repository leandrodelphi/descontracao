<!DOCTYPE html>
<html>

<head>
	<title>Descontração</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="icon" href="img/descont.png">
	<link rel="stylesheet" href="/css/global.css">
</head>

<body>
	<main>
		<div style="width:400;margin:auto;text-align: center"><img src="img/logo.png" alt="foto da porção de meio kilo"
				width="400px" height="200px" style="margin:auto"></div>
		<h1> FAÇA SEU PEDIDO </h1>

	</main>
	<form name="form1" action="servlet1" method="post">
		<fieldset id="usuario">
			<legend>CADASTRO DE USUÁRIO</legend>
			<!-- inicio da tabela de cadastro de cliente--->
			<table>
				<tr>
					<td>
						<p><label for="cNome"> Nome:</label> <br><input type="text" name="tNome" id="cNome" size="30"
								maxlength="40" placeholder="Nome Completo" /></p>
					</td>
					<td>
						<p><label for="cLogin">Login:</label> <br><input type="text" name="tLogin" id="cLogin" size="20"
								maxlength="20" placeholder="Nome de Usuário" /></p>
					</td>
					<td>
						<p><label for="cSenha">Senha:</label> <br>
							<input type="password" name="tSenha" id="cSenha" size="8" maxlength="8"
								placeholder="8 Dígitos" /></p>
					</td>
					<td>
						<p><label for="cTel">Telefone:</label><br>
							<input type="text" name="tTel" id="cTel" size="15" maxlength="15"
								placeholder="Número de Telefone" /></p>
					</td>
					<td>
						<p><label for="cMail">E-mail:</label><br>
							<input type="email" name="tMail" id="cMail" size="40" maxlength="45"
								placeholder=" Digite Seu E-mail" /></p>
					</td>
					<td>
						<p><label for="cNasc">Data de Nascimento:</label></p>
						<input type="date" name="tNasc" id="cNasc" />
					</td>
					<td>
						<p style="text-align: center"><label for="cMasc">Sexo</label></p>
						<input type="radio" name="tSexo" id="cMasc" /><label for="cMasc">M</label>
						<input type="radio" name="tSexo" id="cFem" /> <label for="cFem"> F</label>
					</td>
				</tr>
			</table>
			<!-- Final da tabela de cadastro de cliente--->
		</fieldset>
		<!-- inicio da tabela de Cadastro de Endereço--->
		<fieldset id="endereco">
			<legend>CADASTRO DE ENDEREÇO</legend>
			<table>
				<tr>
					<td>
						<label for="cCep">Cep:</label>
						<input type="" name="tCep" id="cCep" size="8" maxlength="8" placeholder="Dígite o Cep" />
					</td>
					<td>
						<label for="cBair">Bairro:</label>
						<input type="" name="tBair" id="cBair" size="8" maxlength="8" placeholder="Dígite o Bairro" />
					</td>
					<td>
						<label for="cRua">Logradouro:</label>
						<input type="text" name="tRua" id="cRua" size="40" maxlength="50"
							placeholder="Dígite sua Rua, Av ou travessa e Bairro" />
					</td>
					<td>
						<label for="cNum">Número:</label>
						<input type="" name="tNum" id="cNum" size="9" maxlength="9" placeholder="Número" />
					</td>
					<td>
						<label for="cRef">Referência:</label>
						<input type="text" name="tRef" id="cRef" size="40" maxlength="50"
							placeholder="Ponto de Referência" />
					</td>
					<td>
						<label for="cTel">Telefone:</label>
						<input type="text" name="tTel" id="cTel" size="15" maxlength="15"
							placeholder="Número de Telefone" />
					</td>
				</tr>
			</table>
			<!-- Final da tabela de Cadastro de Endereço--->
		</fieldset>
	</form>

	<!-- continuar daqui --->
	<fieldset id="Produtos">
		<legend>FRANGUINHO</legend>
		<div>Franguinho de 250g com um acompanhamento</div>
		<div style="width:400;margin:auto;text-align: center"><img style="width:400;margin:auto;text-align: center"
				src="img/frangBatata.png" alt="foto da porção de meio kilo" width="200px" height="100px"
				style="margin:auto"></div>

		<!-- atenção colocar em destaque que os franguinhos de 250 g possui complementos de 200g 
			(batata, aipim, polenta com queijo e ponta) apenas ou 8 unidades (bolinha de queijo 
			e coxinha) camarão e bolinho de bacalhau não se enquadram no complemento. -->
		<p>Franguinho de 500g
			<p>Franguinho de 500g + 1 </p>
			<p>Franguinho de 500g + 2 </p>
			<p>Franguinho de 500g + 3 </p>
	</fieldset>

</body>

</html>