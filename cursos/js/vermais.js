const button = document.querySelector(".veja-mais")

button.addEventListener("click", function(){
    const hideElements = []
    document.querySelectorAll(".curso").forEach(function(element){
        if(window.getComputedStyle(element).display == "none"){
            hideElements.push(element)
        }

    })
    
    for(let i = 0; i < 9; i++){
        hideElements[i].style.display = "grid"
    }

})
