<?php

// Conexão do Banco
include 'conexao.php';

// Consulta SQL para buscar todos os "cursos"


// Executa a consulta SQL
$result = $conn->query($sql);

// Verifica se a consulta retornou algum resultado
if ($result->num_rows > 0) {
  // Percorre cada linha do resultado
  while($row = $result->fetch_assoc()) {
    // Cria um card para cada curso , para ficar de amostra 
    //"Exemplo do thiago, já deixai de jeito, --> testar"

    echo "<div class='card'>";
    echo "<img src='" . $row["imgCurso"] . "' alt='Imagem do Curso'>";
    echo "<div class='container'>";
    echo "<h2>" . $row["nome"] . "</h2>";
    // echo "<p class='title'>Titulo: " . $row["tiduloCurso"] . "</p>";
    // echo "<p>Descrição: " . $row["descricaoCurso"] . "</p>";
    // echo "<p>Duração do curso: " . $row["duracaoCurso"] . "</p>";
    // echo "<p>Observação: " . $row["observacao"] . "</p>";
    // echo "<p><button class='button'>Atualizar</button></p>";
    echo "</div>";
    echo "</div>";
  }
} else {
  echo "Nenhum curso está cadastrado.";
}

$conn->close();
?>