document.querySelector('#themeselector').addEventListener('click', () => {
    let themelink = document.querySelector('#themelink');
    let currentTheme = themelink.getAttribute('href');
    let themeSelector = document.querySelector('#themeselector'); 

    let newTheme = '';
    let newButtonText = '';

    if (currentTheme.includes('sombre')){
        newTheme = currentTheme.replace('sombre', 'claire');
        newButtonText = "Thème Sombre"; 
    } else{
        newTheme = currentTheme.replace ('claire', 'sombre');
        newButtonText = "Thème Clair"; 
    }

    themelink.setAttribute('href', newTheme);
    themeSelector.textContent = newButtonText;
});

const avisForm = document.getElementById('avis-form');

if (avisForm) {
    avisForm.addEventListener('submit', function(e) {
        // Supprime ou commente la ligne e.preventDefault();
        
        const pseudo = document.getElementById('pseudo').value;
        alert(`Merci pour ton avis, Capitaine ${pseudo} ! Tes données sont en route vers le QG via les courants marins.`);
        
        // On ne met pas avisForm.reset() ici car la page va changer 
        // lors de l'envoi vers le PHP.
    });
}