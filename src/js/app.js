document.addEventListener('DOMContentLoaded', () => {
	eventListeners();
});

function eventListeners() {
	const mobileMenu = document.querySelector('.mobile-menu');
	mobileMenu.addEventListener('click', () => {
		const navigation = document.querySelector('.navigation');
		navigation.classList.toggle('show');
	})
}