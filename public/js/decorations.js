function openModal(decorationName, decorationImageUrl) {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("modalImg");
    modal.style.display = "block";
    modalImg.src = decorationImageUrl;
}

function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}
