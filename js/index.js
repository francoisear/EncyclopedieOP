/*document.querySelector('#themeselector').addEventListener('click', () => {
    let themelink = document.querySelector('#themelink');
    let currentTheme = themelink.getAttribute('href');

    let newTheme = '';
    if (currentTheme.includes('sombre')){
        newTheme = currentTheme.replace('sombre', 'claire');
    } else{
        newTheme = currentTheme.replace ('claire', 'sombre');

    }

    themelink.setAttribute('href', newTheme);
}); LAISSE LE COMMENTAIRE */

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