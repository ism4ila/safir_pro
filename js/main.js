document.addEventListener('DOMContentLoaded', () => {
    // Sélectionne les éléments à animer
    const animatedItems = document.querySelectorAll('.service-item, .gallery-item, .form-container');

    // Créer un observateur
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Ajouter la classe 'visible' quand l'élément entre dans la vue
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1 // L'animation se déclenche quand 10% de l'élément est visible
    });

    // Observer chaque élément
    animatedItems.forEach(item => {
        observer.observe(item);
    });
});

// Ajout d'un peu de CSS pour que l'animation fonctionne
// Ce CSS peut aussi être ajouté à votre fichier style.css
const style = document.createElement('style');
style.innerHTML = `
    .service-item, .gallery-item, .form-container {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .service-item.visible, .gallery-item.visible, .form-container.visible {
        opacity: 1;
        transform: translateY(0);
    }
`;
document.head.appendChild(style);