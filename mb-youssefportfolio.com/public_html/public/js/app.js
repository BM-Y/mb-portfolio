// Fonction pour afficher la section cliquée avec animation
function showSection(sectionId) {
    // Masquer toutes les sections d'abord
    var sections = document.querySelectorAll('.cv-section');
    sections.forEach(function(section) {
        section.style.display = 'none';  // Masquer sans animation
        section.classList.remove('show');  // Enlever la classe d'animation
    });

    // Afficher la section sélectionnée avec animation
    var selectedSection = document.getElementById(sectionId);
    selectedSection.style.display = 'block';  // Afficher la section
    setTimeout(function() {  // Attendre un court instant avant d'ajouter l'animation
        selectedSection.classList.add('show');  // Ajouter la classe pour l'animation
    }, 10);  // Déclencher l'animation après l'affichage
}

// Fonction pour soumettre le formulaire via AJAX
function submitContactForm() {
    // Récupérer les données du formulaire
    var form = document.getElementById('contactForm');
    var formData = new FormData(form);

    // Envoyer les données via AJAX avec Fetch API
    fetch('/', {  // La même route pour soumettre le formulaire
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest' // Indique que c'est une requête AJAX
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Afficher un message de succès
            document.getElementById('responseMessage').innerHTML = '<div class="alert alert-success">' + data.message + '</div>';
        } else {
            // Afficher un message d'erreur
            document.getElementById('responseMessage').innerHTML = '<div class="alert alert-danger">' + data.message + '</div>';
        }
    })
    .catch(error => {
        console.error('Erreur:', error);
        document.getElementById('responseMessage').innerHTML = '<div class="alert alert-danger">Une erreur s\'est produite. Veuillez réessayer.</div>';
    });
}
