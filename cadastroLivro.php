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
		CADASTRO: LIVRO
		
	</div>
	<div class ="barra-2">
		<form method="POST" action="/Banco/conexao/conexaoCadastroLivro.php">
			<div class="fundo-formulario">
				<table id="formulario-cadastro" width="625" border="0">
					<tr>
						<td width ="350">Nome</td>
						<td ><input type="text" size="100" name="nome" maxlength="100"/></td>
					</tr>
					<tr>
						<td width ="350">Autor(es)</td>
						<td ><input type="text" size="100" name="autor" maxlength="100"/></td>
					</tr>
					<tr>
						<td width ="350">Ano da Publicação</td>
						<td ><input type="text" size="100" name="anoPublicacao" maxlength="100"/></td>
					</tr>
					<tr>
						<td width ="350">Volume</td>
						<td ><input type="text" size="100" name="volume" maxlength="100"/></td>
					</tr>
					<tr>
						<td width ="350">Editora</td>
						<td ><input type="text" size="100" name="editora" maxlength="100"/></td>
					</tr>
					<tr>
						<td width ="350">Data de Cadastro</td>
						<td ><input type="date" size="100" name="dataCadastro" maxlength="100"/></td>
					</tr>
					<tr>
						<td width ="350">Observações</td>
						<td ><input type="text" size="100" name="obs" maxlength="100"/></td>
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