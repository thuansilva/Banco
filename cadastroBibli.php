<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset ="UTF-8"/>
	<title> Nome Sistema</title>
</head>
<body>
	<center>
	<a class="dropdown-item" href="home.php"> Voltar</a>
	<br>
	<br>
	<div class ="barra-1">
		CADASTRO: BIBLIOTECÁRIA
		
	</div>
	<div class ="barra-2">
		<form method="POST" action="/Banco/conexao/conexaoCadastroBibli.php">
			<div class="fundo-formulario">
				<table id="formulario-cadastro" width="625" border="0">
					<tr>
						<td width ="350">Nome</td>
						<td ><input type="text" size="100" name="nome" maxlength="100"/></td>
					</tr>
					<tr>
						<td width ="350">Email</td>
						<td ><input type="Email" size="100" name="email" maxlength="100"/></td>
					</tr>
					<tr>
						<td width ="350">Telefone</td>
						<td ><input type="text" size="100" name="telefone" maxlength="100"/></td>
					</tr>
					<tr>
						<td width ="350">Rua</td>
						<td ><input type="text" size="100" name="rua" maxlength="100"/></td>
					</tr>
					<tr>
						<td width ="350">Numero</td>
						<td ><input type="text" size="100" name="numero" maxlength="100"/></td>
					</tr>
					<tr>
						<td width ="350">Bairro</td>
						<td ><input type="text" size="100" name="bairro" maxlength="100"/></td>
					</tr>
					<tr>
						<td width ="350">Login</td>
						<td ><input type="text" size="100" name="login" maxlength="100"/></td>
					</tr>
					<tr>
						<td width ="350">Senha</td>
						<td ><input type="password" size="100" name="senha" maxlength="100"/></td>
					</tr>
					<tr>
						<td><input type="submit" id="salvar" value="Salvar">
					</tr>
					<tr>
						<td><input type="reset" value="Cancelar">
					</tr>
				</table>
			</div>
		</form>
	</div>
	
	<div class ="barra-3">
		
	</div>
	</center>
</body>
</html>