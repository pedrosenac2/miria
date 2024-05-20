<?php
    if(isset($_GET["searchbar"])){
        $search = $_GET["searchbar"];
        $sql = "SELECT tb_curso.id ,tb_curso.nome, tb_curso.descricao, tb_curso.id_img, tb_img.img 
        FROM tb_curso 
        INNER JOIN tb_img 
        ON tb_curso.id_img = tb_img.id
        WHERE nome LIKE '%$search%' ";
    
        $resultado = $conn->query($sql);

        if ($resultado) {
            $courses = $resultado->fetchAll(PDO::FETCH_ASSOC);
    
            // Converter o BLOB de imagem para base64
            foreach ($courses as &$course) {
                if (isset($course['img'])) {
                    $course['img'] = base64_encode($course['img']);
                }
            }
    
            // Retornar os resultados em formato JSON
            echo json_encode($courses);
        }
    }
?>