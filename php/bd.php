<?php
//configuração do bnaco de dadso

$host='localhost';
$dbname='livro';
$username='root';
$password='';


//criar a coenexão com o banco de dados

$con=new mysqli($host,$username,$password,$dbname);

//verfica se tem erro na conexão

if($con->connect_error){
    die("falha na conexão".$con->conect_error);
}
echo "conexão realizada com sucesso";

//dados a serem inseridos

$sql="INSERT INTO autores (nome, nacionalidade, dataNascimento) VALUES ('Machado de Assis', 'Brasil','06/21/1836')";
    
//executo a instrucao e verifico erro

if($con->query($sql)==TRUE){
    ECHO "DADOS INSERIDOS COM  SUCESSO. ";

}
else {
    echo"Erro ao inserir dados.".$con->error;
}
$con->close()

?>