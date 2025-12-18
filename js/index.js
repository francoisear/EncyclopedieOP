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
        e.preventDefault();
        
        const pseudo = document.getElementById('pseudo').value;
        alert(`Merci pour ton avis, Capitaine ${pseudo} ! Tes données ont été envoyées au fond des mers (pour l'instant).`);
        
        avisForm.reset();
    });
}