<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./css/estilo.css" rel="stylesheet">
    <title>Curriculos</title>
  </head>
  <body> 
    <nav class="navbar navbar-expand-lg" style="background-color:darkblue;">
      <div class="container-fluid">
      <img src="./img/logo.png" alt="" width="50" height="50">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
          </ul>
        </div>
      </div>
    </nav>
</br>
</br> 
<?php
$nome = $_POST['nome']; 
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$formacao = $_POST['formacao'];
$experiencia = $_POST['experiencia'];
$arqnome = $nome.".txt";
$arqtxt = fopen($arqnome, 'a');
if ($arqtxt == true)
 
{
fwrite($arqtxt, " ". $nome, strlen($nome)+1);
fwrite($arqtxt, "\n". $telefone, strlen($telefone)+1);
fwrite($arqtxt, "\n". $email, strlen($email)+1);
fwrite($arqtxt, "\n". $cidade, strlen($cidade)+1);
fwrite($arqtxt, "\n". $formacao, strlen($formacao)+1);
fwrite($arqtxt, "\n". $experiencia, strlen($experiencia)+1);

    print "<center><h2>Currículo de $nome gerado com sucesso!</h2></center><br>";  
}
else
{
    print "Arquivo inexistente";
    exit(0);
}
fclose ($arqtxt); 

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$formacao = $_POST['formacao'];
$experiencia = $_POST['experiencia'];
$arqnome = $nome.".txt";

$arqtxt = fopen ($arqnome, 'r'); 

 while(true) 
{
 $linha = fgets($arqtxt); 
 if ($linha==null)
 break; 
  
echo "<center>";
echo "<table border='1' width = '40%'>"; 
echo "<tr>"; 
echo "   <td>$linha</td>"; 
echo "</tr>";
echo "</table>";
echo "</center>";
}
fclose($arqtxt);
?> 
</br> 
</br> 
</br> 
<center>
<img src="./img/curriculo.png" width="200" height="200">
</center>
