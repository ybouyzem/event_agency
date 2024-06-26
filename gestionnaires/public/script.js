


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
			else if (windowPathname == "/services-gestionnaire/ajouter")
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


function showModifierService()
{
	var ajouterServiceForm = document.getElementById('modifier-service-form');
	ajouterServiceForm.style.visibility="visible";
	ajouterServiceForm.style.display="grid";
}

function annulerAjouterService()
{
	window.location.href = '/services-gestionnaire';
}

function annulerModifierService()
{
	var ajouterServiceForm = document.getElementById('modifier-service-form');
	ajouterServiceForm.style.visibility="hidden";
	ajouterServiceForm.style.display="none";

	document.getElementById('ajouter-service').style.visibility="visible";
}
	function supprimerService(serviceId) {
		if (confirm('Êtes-vous sûr de vouloir supprimer ce service ?')) {
			window.location.href = '/services-gestionnaire/supprimer/' + serviceId;
		}
	}
	

