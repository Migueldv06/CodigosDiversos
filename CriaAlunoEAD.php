<?php
$curso = "CURSO";//curso que o aluno sera inscrito

//Informações necessarias para criação de um aluno
$contatoEAD = array("username,firstname,lastname,email,password,course1");

$file = fopen("Nomes.csv", 'r');
while (($line = fgetcsv($file)) !== false) {
  $data_csv = implode(',', $line);
  list($nome, $address) = explode(",", $data_csv);
  list($primeironome, $ultimonome) = explode(" ", $nome, 2);

  array_push($contatoEAD, "\n$address,$primeironome,$ultimonome,$address,sejalivre123,$curso");
}
fclose($file);

file_put_contents("CSVs/CriaAlunoEAD.csv", $contatoEAD);
