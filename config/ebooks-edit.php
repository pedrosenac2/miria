<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  include('conexao.php');
  $sql = "SELECT * FROM tb_ebooks WHERE id = :id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(":id", $id);

  if ($stmt->execute() > 0) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    ?>

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


      <div class="centraliza"
        style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f8f9fa;">
        <div class="container w-50 border mt-5 p-5 rounded shadow-lg" style="background-color: white;">
          <h1 class="title text-center mb-4">Titulo:
            <?php echo htmlspecialchars($row['nome']) ?>
          </h1>
          <form method="POST" action="ebooks-salvar.php" enctype="multipart/form-data">
            <input type="hidden" id="id" name="id" value="<?php echo htmlspecialchars($row['id']) ?>">
            <div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" name="nome" class="form-control" value="<?php echo htmlspecialchars($row['nome']); ?>"
                id="nome" required>
            </div>
            <div class="mb-3">
              <label for="descricao" class="form-label">Descricão</label>
              <input type="text" name="descricao" class="form-control"
                value="<?php echo htmlspecialchars($row['descricao']); ?>" id="descricao" required>
            </div>
            <div class="form-group">
              <label for="imagem">Imagem:</label>
              <input type="file" id="imagem" name="imagem" accept="image/*" required>
            </div>
            <div class="d-flex justify-content-center mt-5">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </form>
        </div>
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
} else {
  header("location: lista.php");
}
?>