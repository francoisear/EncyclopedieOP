document.querySelector('#themeselector').addEventListener('click', () => {
    let themelink = document.querySelector('#themelink');
    let currentTheme = themelink.getAttribute('href');

    let newTheme = '';
    if (currentTheme.includes('sombre')){
        newTheme = currentTheme.replace('sombre', 'claire');
    } else{
        newTheme = currentTheme.replace ('claire', 'sombre');

    }

    themelink.setAttribute('href', newTheme);
});