const texts = ["Explore um universo de conhecimento sobre desenvolvimento humano, qualidade de vida e bem-estar.", "Descubra dicas valiosas para aprimorar suas habilidades e alcançar o seu potencial máximo."];
let index = 0;
let isDeleting = false;
let textIndex = 0;
let speed = 100;

const typewrite = () => {
    const typewriteElement = document.querySelector("#typewrite");
    const currentText = texts[textIndex];

    if (!isDeleting && index <= currentText.length) {
        typewriteElement.textContent = currentText.substring(0, index);
        index++;
        speed = 60;
    } else if (isDeleting && index >= 0) {
        typewriteElement.textContent = currentText.substring(0, index);
        index--;
        speed = 20;
    }

    if (index > currentText.length) {
        isDeleting = true;
    }
    if (index === 0 && isDeleting) {
        isDeleting = false;

        if (textIndex < texts.length - 1) {
            textIndex++;
        } else {
            textIndex = 0;
        }
    }
    setTimeout(typewrite, speed);
};
window.addEventListener("load", typewrite);
