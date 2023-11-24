// Función para abrir el modal
function openModal(anuncioId) {
    const modalId = "modal" + anuncioId;
    const modal = document.getElementById(modalId);
    modal.style.display = "block";
}

// Función para cerrar el modal
function closeModal(anuncioId) {
    const modalId = "modal" + anuncioId;
    const modal = document.getElementById(modalId);
    modal.style.display = "none";
}

// Agrega un evento de clic a los divs de anuncio
const anuncios = document.querySelectorAll(".ad");
anuncios.forEach((anuncio) => {
    anuncio.addEventListener("click", function () {
        const anuncioId = this.getAttribute("data-anuncio");
        openModal(anuncioId);
    });
});