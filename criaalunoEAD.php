<?php
$contatoEAD = array("username,firstname,lastname,email,password,course1");
$curso = "KAFKA AVANÇADO";

$file = fopen("turma_2.csv", 'r');
while (($line = fgetcsv($file)) !== false) {
  $nome_email_csv = implode('', $line);
  $data_csv = "$nome_email_csv";
  list($nome, $address) = explode("-", $data_csv);
  list($primeironome, $ultimonome) = explode(" ", $nome, 2);

  array_push($contatoEAD, "\n$address,$primeironome,$ultimonome,$address,sejalivre123,$curso");
}
fclose($file);

file_put_contents("alunosEAD.csv", $contatoEAD);
