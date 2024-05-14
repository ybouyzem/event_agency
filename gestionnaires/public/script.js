//for the mode of the website
const switchMode = document.getElementById('switch-mode');

// Check if there is a mode saved in local storage
const isDarkMode = localStorage.getItem('darkMode') === 'true';

// Set the initial mode based on the local storage value
document.body.classList.toggle('dark', isDarkMode);
switchMode.checked = isDarkMode;

switchMode.addEventListener('change', function () {
	const isDarkMode = this.checked;
	localStorage.setItem('darkMode', isDarkMode); // Save the mode in local storage
	document.body.classList.toggle('dark', isDarkMode);
});


// for the sidebar menu
const windowPathname = window.location.pathname;
const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

window.onload = function() {
	const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		});
		allSideMenu.forEach(items=> {
			const li = items.parentElement;
			const sidebarlink = new URL(items.href).pathname;
			if (windowPathname == sidebarlink)
				li.classList.add('active');
		});
};






// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})







const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})




