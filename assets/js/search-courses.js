function debounce(func, wait) {
    let timeout;
    return function(...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), wait);
    };
}

const fetchCourses = debounce(function(event) {
    const value = event.target.value

    $.ajax({
        url: '/miria1/api?method=getCourses&searchbar=' + value, // Substitua pelo caminho do seu script PHP
        type: 'GET',
        data: { searchbar: value },
        success: function(response) {
            if (response.error) {
                $('#results').html('<p>Error: ' + response.error + '</p>');
            } else {
                console.log(response)
                $(".list-curso").html("")
                for(const course of response){
                    $(`
                        <div class="col-md-4 link-curso">
                            <a href="cursoEspecifico.php?id=${course.id}">
                                <div class="curso">
                                    <div class="img-curso">
                                        <img class="card-img-top" alt="Card Imagem" src="data:image/jpeg;base64,${course.img}" style="width:100%; height:100%; object-fit:cover; margin-bottom:15px;">
                                    </div>
                                    <div class="txt-curso">
                                        <h3 class="text-center">${course.nome}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    `).appendTo(".list-curso")
                }              
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $('#results').html('<p>An error occurred: ' + textStatus + ' - ' + errorThrown + '</p>');
        }
    });
},300)

$('#searchbar').keyup(fetchCourses);