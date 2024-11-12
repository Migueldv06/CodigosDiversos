<?php
$arquivocurso = array();

// Abre o arquivo CSV para leitura
$file = fopen("alunosEAD.csv", 'r');

// Itera pelas linhas do CSV
while (($line = fgetcsv($file, 1000, "\t")) !== false) {
    // Obtém os valores diretamente do CSV
    list($Diretoria, $nome, $email, $Nível_do_Conhecimento, $Conhecimento_Exigido, $CURSO, $TURMA) = $line;

    // Inicializa o array para a turma, caso ainda não exista
    if (!isset($arquivocurso[$CURSO])) {
        $arquivocurso[$CURSO] = array();
    }

    // Adiciona o nome e email à turma correspondente
    $arquivocurso[$CURSO][] = "$nome-$email";
}
fclose($file);

// Cria arquivos para cada turma
foreach ($arquivocurso as $curso => $alunos) {
    // Concatena os alunos no formato nome,email separados por nova linha
    $conteudo = implode("\n", $alunos);

    // Gera o nome do arquivo baseado na turma e escreve o conteúdo
    file_put_contents("alunos_$curso.csv", $conteudo);
}
