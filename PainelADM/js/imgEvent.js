document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('imagem');
    const uploadForm = document.getElementById('upload-form');

    fileInput.addEventListener('change', function() {
      if (this.files && this.files[0]) {
        uploadForm.submit();
      }
    });
  });

function deleteImage(imageId) {
    if (confirm('Você tem certeza que deseja deletar esta imagem?')) {
      fetch(`../config/imgEvent-del.php?id=${imageId}`, { method: 'GET' })
        .then(response => response.text())
        .then(data => {
          console.log(data);
          if (data === 'success') {
            location.reload();
          } else {
            alert('Erro ao deletar a imagem.');
          }
        })
        .catch(error => {
          console.error('Erro:', error);
        });
    }
  }

//  const carregarGaleria = async () => {
//     fetch('../config/imgEvent-list.php')
//     .then(response => response.json())
//     .then(dados => {
//         const galeria = document.getElementById('row-galeria');

//         // Limpa a galeria
//         galeria.innerHTML = '';

//         dados.map(imagem => {
//             galeria.innerHTML += `
//                 <div class="col-md-6">
//                     <div class="add-image" style="width: 38rem;">
//                         <img style="width:100%; max-height:300px; object-fit:cover; border-radius:15px;" src="${imagem.src}" alt="Imagem">
//                         <span class="delete-icon" onclick="deleteImage(${imagem.id})"><i class="fa-solid fa-xmark"></i></span>
//                     </div>
//                 </div>
//             `;
//         });
//     });
// }