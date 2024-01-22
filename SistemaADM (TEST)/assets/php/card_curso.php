<?php
// Conecta ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// Consulta SQL para buscar todos os cursos
$sql = "SELECT Alunos.foto, Alunos.nome, Alunos.email, TIMESTAMPDIFF(YEAR, Alunos.data_nascimento, CURDATE()) AS idade, Matriculas.situacao, Matriculas.observacao FROM Alunos LEFT JOIN Matriculas ON Alunos.id = Matriculas.aluno_id";

// Executa a consulta SQL
$result = $conn->query($sql);

// Verifica se a consulta retornou algum resultado
if ($result->num_rows > 0) {
  // Percorre cada linha do resultado
  while($row = $result->fetch_assoc()) {
    // Cria um card para cada curso
    echo "<div class='card'>";
    echo "<img src='" . $row["foto"] . "' alt='Foto do curso'>";
    echo "<div class='container'>";
    echo "<h2>" . $row["nome"] . "</h2>";
    echo "<p class='title'>Idade: " . $row["idade"] . "</p>";
    echo "<p>Email: " . $row["email"] . "</p>";
    echo "<p>Situação do curso: " . $row["situacao"] . "</p>";
    echo "<p>Observação: " . $row["observacao"] . "</p>";
    echo "<p><button class='button'>Atualizar</button></p>";
    echo "</div>";
    echo "</div>";
  }
} else {
  echo "Nenhum aluno cadastrado.";
}

$conn->close();
?>