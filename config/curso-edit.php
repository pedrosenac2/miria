<?php
try {
  //code...
  if (empty($_GET['id'])) {
    throw new Exception('ID não existe');
  }
  $id = $_GET['id'];

  include('conexao.php');

  $sql = "SELECT * FROM tb_curso WHERE id = :id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(":id", $id);

  if ($stmt->execute() > 0) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // include "../includes/header.php";       ?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>


      <div class=" w-25  container border mt-5 p-2 rounded">
        <form method="POST" action="curso-salvar.php" class="p-2" enctype="multipart/form-data">

          <input type="hidden" id="id" name="id" value="<?php echo htmlspecialchars($row['id']) ?>">
          <div class=" 100mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" value="<?php echo htmlspecialchars($row['nome']); ?> "
              id="nome" required>
          </div>

          <div class="mb-3 mt-3">
            <label for="descricao" class="form-label">Descricão</label><br>
            <input type="text" name="descricao" class="form-control"
              value="<?php echo htmlspecialchars($row['descricao']); ?> " id="descricao" required>
          </div>

          <div class="mb-3 mt-3">
            <label for="descricao" class="form-label">Video</label><br>
            <input type="text" name="video" class="form-control"
              value="<?php echo htmlspecialchars($row['video']); ?> " id="video" required>
          </div>

          <input type="hidden" id="id_img" name="id_img" value="<?php echo htmlspecialchars($row['id_img']) ?>">
          <div class="mb-3">
            <label for="imagem" class="mb-3">Imagem:</label><br>
            <input type="file" id="imagem" name="imagem" accept="image/*">
          </div>



          <center><button type="submit" class="btn btn-primary">Salvar</button></center>
        </form>
      </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    </body>

    </html>
    <?php
  } else {
    header("location: ../PainelADM/index.php");
  }
} catch (Exception $e) {
  header("location: lista.php");
  echo "Erro ao Editar: " . $e->getMessage();
}
?>