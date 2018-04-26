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
		CADASTRO: ALUNOS
		
	</div>
	<div class ="barra-2">
		<form method="POST" action="/Banco/conexao/conexaoCadastroAluno.php">
			<div class="fundo-formulario">
				<table id="formulario-cadastro" width="625" border="0">
					<tr>
						<td width ="350">Nome</td>
						<td ><input type="text" size="100" name="nome" maxlength="100"/></td>
					</tr>
					<tr>
						<td width ="350">Turma</td>
						<td ><input type="text" size="100" name="turma" maxlength="100"/></td>
					</tr>
					<tr>
						<td width ="350">Responsavel</td>
						<td ><input type="text" size="100" name="responsavel" maxlength="100"/></td>
					</tr>
					<tr>
						<td width ="350">Serie</td>
						<td ><input type="text" size="100" name="serie" maxlength="100"/></td>
					</tr>
					<tr>
						<td width ="350">Matricula</td>
						<td ><input type="text" size="100" name="matricula" maxlength="100"/></td>
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