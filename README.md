Estes codigos em PHP são utilizados para gestão de dados de alunos e contatos, gerando arquivos CSV para integração com sistemas de EAD/Moodle e CRM/SuiteCRM.

## Estrutura do Projeto

- **CriaAlunoEAD.php**: Gera um arquivo CSV com os dados formatados para importar os alunos no sistema do EAD/Moodle.
- **CriaContatoCRM.php**: Gera um arquivo CSV com os dados formatados para importar os contatos/alunos no sistema CRM/SuiteCRM.
- **SeparaCurso.php**: Separa e filtra os dados dos alunos por curso com base no arquivo `lista_Nomes.csv` e armazena em um arquivo CSV.
- **SeparaTurma.php**: Separa e filtra os dados dos alunos por turma com base no arquivo `lista_Nomes.csv` e armazena em um arquivo CSV.
- **CSVs/**: Diretório contendo os arquivos CSV gerados pelos scripts.
  - `alunos_Básico.csv`: Lista de alunos do curso básico.
  - `alunos_Avançado.csv`: Lista de alunos do curso avançado.
  - `alunos_CURSO.csv`: Arquivo gerado pelo codigo`SeparaCurso.php`.
  - `alunos_TURMA.csv`: Arquivo gerado pelo codigo `SeparaTurma.php`.
  - `CriaAlunoEAD.csv`: Arquivo gerado pelo codigo `CriaAlunoEAD.php`.
  - `CriaContatoCRM.csv`: Arquivo gerado pelo codigo `CriaContatoCRM.php`.
- **lista_Nomes.csv**: Arquivo com os todos os dados dos alunos.
- **Nomes.csv**: Arquivo com os dados dos alunos já filtrados.