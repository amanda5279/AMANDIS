<?php
$host = 'localhost';
$dbname="livro";
$username="root";
$password="";


//cria conexo com banco de dados usando PDO = PHGP Data Objects

try{
    $conn = new PDO("mysql:host = $host;dbname=$dbname", $username, $password);


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexao realizada com sucesso.<br>";
}
catch(PDOException $e){
    echo'falha na conexao:'.$e->getmessage();
}
//dados a serem inseridos

$nome = "C.S Lewis";
$nacionalidade = "Inglaterra";
$dataNascimento = "1892-01-03";
$sql = "INSERT INTO autores(nome,nacionalidade,dataNascimento) Values(:nome,:nacionalidade,:dataNascimento)";
//prepara a conexao

$stmt= $conn->prepare($sql);
//associa so valores aos parametros de consulta
$stmt->bindParam(':nome',$nome);
$stmt->bindParam(":nacionalidade",$nacionalidade);
$stmt->bindParam(":dataNascimento",$dataNascimento);
// executa

if($stmt->execute()){
    echo "Dados Inseridos com sucesso";
}
else{
    echo "Erro ao Inserir os dados.";
}
//fecha a conexao
$conn=null;
?>
