// Recuperar el tema actual del LocalStorage
const currentTheme = localStorage.getItem('theme') || 'light';

// Aplicar el tema guardado
if (currentTheme === 'dark') {
    document.body.classList.add('dark-theme');
}

// Alternar entre temas
const themeToggle = document.getElementById('theme-toggle');
themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme');
    
    // Guardar el estado en el LocalStorage
    const theme = document.body.classList.contains('dark-theme') ? 'dark' : 'light';
    localStorage.setItem('theme', theme);
});