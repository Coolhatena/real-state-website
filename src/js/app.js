document.addEventListener('DOMContentLoaded', () => {
	eventListeners();

	darkMode();
});

function darkMode() {
	const isDarkMode = localStorage.getItem('darkMode') === 'true';
	const prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
	if ( isDarkMode || prefersDarkMode.matches ) {
		document.body.classList.add('dark-mode');
	}

	prefersDarkMode.addEventListener('change', () => {
		document.body.classList.toggle('dark-mode');
	});

	const darkModeButton = document.querySelector('.dark-mode-button');
	darkModeButton.addEventListener('click', () => {
		document.body.classList.toggle('dark-mode');

		const darkModeState = document.body.classList.contains('dark-mode');
		localStorage.setItem('darkMode', darkModeState);
	});
 }

function eventListeners() {
	const mobileMenu = document.querySelector('.mobile-menu');
	mobileMenu.addEventListener('click', () => {
		const navigation = document.querySelector('.navigation');
		navigation.classList.toggle('show');
	})
}