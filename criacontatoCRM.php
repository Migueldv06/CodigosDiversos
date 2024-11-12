<?php

$contaCRM = "";// Nome da Conta do Contato
$usuario = "";// Nome do Usuario atribuido ao Contato

//Informações necessarias para criação de um contato
$contatoCRM = array("\"Primeiro Nome\",\"Último Nome\",\"Nome da Conta\",\"E-mail\",\"Atribuido a\",\"Aluno\"");

$file = fopen("alunosCRM.csv", 'r');
while (($line = fgetcsv($file)) !== false)
{
  $nome_email_csv = implode('',$line);
  $data_csv = "$nome_email_csv";
  list($nome, $address) = explode("-", $data_csv);
  list($primeironome, $ultimonome) = explode(" ", $nome, 2);
  
  array_push($contatoCRM, "\n\"$primeironome\",\"$ultimonome\",\"$contaCRM\",\"$address\",\"$usuario\",\"sim\"");
  
}
fclose($file);

file_put_contents("criacontatoCRM.csv", $contatoCRM);