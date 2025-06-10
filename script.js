document.getElementById('formContact').addEventListener('submit', function(event) {
    // Validation simple du formulaire
    const email = document.getElementById('email').value;
    if (!email.includes('@')) {
        alert('Veuillez entrer une adresse email valide.');
        event.preventDefault();
        return;
    }
    
    // Vérification que tous les champs sont remplis
    const inputs = this.querySelectorAll('input, select, textarea');
    for (let input of inputs) {
        if (input.required && !input.value.trim()) {
            alert('Veuillez remplir tous les champs obligatoires.');
            event.preventDefault();
            return;
        }
    }
    
    // Si tout est valide, afficher un message de confirmation
    alert('Formulaire soumis avec succès!');
});