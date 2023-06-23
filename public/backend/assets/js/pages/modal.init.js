/*var exampleModal = document.getElementById("exampleModal");
exampleModal.addEventListener("show.bs.modal", function (e) {
    var t = e.relatedTarget.getAttribute("data-bs-whatever"), a = exampleModal.querySelector(".modal-title"),
        l = exampleModal.querySelector(".modal-body input");
    a.textContent = "New message to " + t, l.value = t
});*/

var slideUpdateModal = document.getElementById("slideUpdateModal");
slideUpdateModal.addEventListener("show.bs.modal", function (e) {
    var titre = e.relatedTarget.getAttribute("data-bs-slide-titre"),
        src = e.relatedTarget.getAttribute("data-bs-slide-image"),
        id = e.relatedTarget.getAttribute("data-bs-slide-id"),
        a = slideUpdateModal.querySelector(".modal-title"),
        input_id = document.getElementById('id_slide'),
        input_titre = document.getElementById('titre_slide'),
        input_image = document.getElementById('image_slide'),
        l = slideUpdateModal.querySelector(".modal-body input");
    input_titre.value = titre
    input_image.src = src
    a.textContent = "New message to " + titre;
});
