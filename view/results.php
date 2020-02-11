<?php

   include "connection.php";

   ?>


<html>

<head>

<title>Resultados de pesquisa</title>

</head>

<body>

<?php

$buscar=$_POST['buscar'];
$sql = mysqli_query ("SELECT * FROM usuariosbd WHERE nome LIKE '%".$buscar."%'");
$row = mysql_num_rows($sql);

if($row > 0) {
    
    while($linha = mysql_fetch_array($sql)) {

    	$nome = $linha['nome'];
    	$sobrenome = $linha['sobrenome'];
    	$idade = $linha ['idade'];
    	$descricao = $linha ['descricao'];
    	echo "<strong>Nome: </strong>".@$nome;
    	echo "<br /><br />";
    	echo "<strong>Sobrenome: </strong>".@$sobrenome;
    	echo "<br /><br />";
    	echo "<strong>Idade: </strong>".@$idade;
    	echo "<br /><br />";
    	echo "<strong>Descricao: </strong>".@$descricao;
    }

}else {

   echo "Nenhum usuário com esse nome foi encontrado!";
}

?>
</body>

</html>