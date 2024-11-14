<?php
$contaCRM = "Miguel Domiciano Vieira";// Nome da Conta do Contato
$usuario = "NBA";// Nome do Usuario atribuido ao Contato


//Informações necessarias para criação de um contato
$contatoCRM = array("Primeiro Nome,Último Nome,Nome da Conta,E-mail,Atribuido a,Aluno");
$file = fopen("Nomes.csv", 'r');
while (($line = fgetcsv($file)) !== false)
{
  $data_csv = implode(',',$line);
  list($nome, $address) = explode(",", $data_csv);
  list($primeironome, $ultimonome) = explode(" ", $nome, 2);
  
  //Adiciona as informações necessarias para criação do contato
  array_push($contatoCRM, "\n$primeironome,$ultimonome,$contaCRM,$address,$usuario,sim");
  
}
fclose($file);

file_put_contents("CSVs/CriaContatoCRM.csv", $contatoCRM);