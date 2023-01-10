
// Fonction qui met à jour le SVG
function updateSVG(size, colors) {
    // créer une nouvelle instance de XMLHttpRequest
    let xhr = new XMLHttpRequest();

    // ouvrir une requête POST vers le serveur
    xhr.open('POST', 'index.php');

    // définir l'en-tête de la requête
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // ajouter un écouteur d'événement de chargement à l'objet xhr
    xhr.addEventListener('load', function () {
        // récupérer l'élément SVG
        let svg = document.getElementById('svg');

        // mettre à jour l'élément SVG avec le nouveau code SVG
        svg.innerHTML = this.responseText;
    });

    // envoyer la requête
    xhr.send('size=' + encodeURIComponent(size) + '&colors=' + encodeURIComponent(colors));
}

// Fonction qui gère l'événement de soumission de formulaire
function handleFormSubmit(event) {
    // empêcher la soumission du formulaire
    event.preventDefault();

    // récupérer l'élément formulaire
    let form = event.target;

    // récupérer les valeurs de taille et de couleurs du formulaire
    let size = form.elements['size'].value;
    let colors = form.elements['colors'].value;

    // appeler la fonction updateSVG
    updateSVG(size, colors);
}

// Fonction qui gère l'événement de clic sur le bouton de téléchargement
function handleDownloadButtonClick(event) {
    // empêcher le clic sur le bouton
    event.preventDefault();

    // récupérer la valeur actuelle de l'attribut innerHTML de l'élément 'svg'
    let avatar = document.getElementById('svg').innerHTML;
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../libs/save.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status === 200) {
            // La soumission du formulaire s'est déroulée avec succès
            alert('L\'image à été enregistré avec succès');
        } else {
            // Il y a eu une erreur
            alert('Il y a eu une erreur. Veuillez réessayer.');
        }
    };
    xhr.send('svg=' + avatar);
}

// Fonction qui déclenche le téléchargement du SVG
function triggerSVGDownload(svg) {
    let file = new Blob([svg], { type: 'image/svg+xml' });
    let a = document.createElement("a");
    a.href = URL.createObjectURL(file);
    a.download = "MonAvatar.svg";
    a.style.display = "none";
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}


document.addEventListener('DOMContentLoaded', function () {
    // Récupère l'élément formulaire
    let form = document.getElementById('submit-form');

    // Ajoute un écouteur d'événement de soumission au formulaire
    form.addEventListener('submit', handleFormSubmit);

    // Récupère le bouton de téléchargement
    let downloadButton = document.getElementById('downloadAvatar');

    // Ajoute un écouteur d'événement de clic au bouton de téléchargement
    downloadButton.addEventListener('click', handleDownloadButtonClick);

    // Ajoute un écouteur d'événement de soumission au formulaire
    document.getElementById("registerAvatar").addEventListener("submit", function(event) {
        event.preventDefault();
        let svg = document.getElementById("svgImage").outerHTML;
        triggerSVGDownload(svg);
    });
});
