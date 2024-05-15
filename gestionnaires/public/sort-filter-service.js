var serviceIdFilter = document.querySelector("#service-id i");
var serviceNameFilter = document.querySelector("#service-name i");

serviceIdFilter.parentElement.addEventListener('click', function () {
    if (serviceIdFilter.classList.contains("bx-chevron-up")) {
        serviceIdFilter.classList.remove("bx-chevron-up");
        serviceIdFilter.classList.add("bx-chevron-down");
        serviceIdFilter.parentElement.style.color="#3C91E6";
        //now for the other filter
        serviceNameFilter.classList.remove("bx-chevron-down");
        serviceNameFilter.classList.add("bx-chevron-up");
        if (localStorage.getItem('darkMode') === 'true')
            serviceNameFilter.parentElement.style.color="white";
        else
        serviceNameFilter.parentElement.style.color="black";
    } else {
        serviceIdFilter.classList.remove("bx-chevron-down");
        serviceIdFilter.classList.add("bx-chevron-up");
        if (localStorage.getItem('darkMode') === 'true')
            serviceIdFilter.parentElement.style.color="white";
        else
            serviceIdFilter.parentElement.style.color="black";
    }
    serviceIdFilterClickHandler();
});

serviceNameFilter.parentElement.addEventListener('click', function () {
    if (serviceNameFilter.classList.contains("bx-chevron-up")) {
        serviceNameFilter.classList.remove("bx-chevron-up");
        serviceNameFilter.classList.add("bx-chevron-down");
        serviceNameFilter.parentElement.style.color="#3C91E6";
        //now for the other filter
        serviceIdFilter.classList.remove("bx-chevron-down");
        serviceIdFilter.classList.add("bx-chevron-up");
        if (localStorage.getItem('darkMode') === 'true')
            serviceIdFilter.parentElement.style.color="white";
        else
            serviceIdFilter.parentElement.style.color="black";
    } 
    else {
        serviceNameFilter.classList.remove("bx-chevron-down");
        serviceNameFilter.classList.add("bx-chevron-up");
        if (localStorage.getItem('darkMode') === 'true')
            serviceNameFilter.parentElement.style.color="white";
        else
            serviceNameFilter.parentElement.style.color="black";
    }
    serviceNameFilterClickHandler();

});



 var serviceIdSortOrder = 'asc'; // Initial sorting order is ascending

function serviceIdFilterClickHandler() {
    // Get the table body
    var tableBody = document.querySelector("tbody");

    // Get the list of table rows (service entries)
    var rows = Array.from(tableBody.querySelectorAll("tr"));

    // Sort the rows by service ID (assuming service ID is in the first column)
    rows.sort(function(a, b) {
        var idA = parseInt(a.cells[0].textContent.trim());
        var idB = parseInt(b.cells[0].textContent.trim());
        return idA - idB;
    });

    // Reverse the order if the current order is descending
    if (serviceIdSortOrder === 'desc') {
        rows.reverse();
        serviceIdSortOrder = 'asc'; // Update sorting order to ascending
    } else {
        serviceIdSortOrder = 'desc'; // Update sorting order to descending
    }

    // Remove all rows from the table
    tableBody.innerHTML = "";

    // Append the sorted rows back to the table
    rows.forEach(function(row) {
        tableBody.appendChild(row);
    });
}

var serviceNameSortOrder = 'asc'; // Initial sorting order is ascending

function serviceNameFilterClickHandler() {
    // Get the table body
    var tableBody = document.querySelector("tbody");

    // Get the list of table rows (service entries)
    var rows = Array.from(tableBody.querySelectorAll("tr"));

    // Sort the rows alphabetically based on service name (assuming service name is in the second column)
    rows.sort(function(a, b) {
        var nameA = a.cells[1].textContent.trim().toLowerCase();
        var nameB = b.cells[1].textContent.trim().toLowerCase();
        if (nameA < nameB) return -1;
        if (nameA > nameB) return 1;
        return 0;
    });

    // Reverse the order if the current order is descending
    if (serviceNameSortOrder === 'desc') {
        rows.reverse();
        serviceNameSortOrder = 'asc'; // Update sorting order to ascending
    } else {
        serviceNameSortOrder = 'desc'; // Update sorting order to descending
    }

    // Remove all rows from the table
    tableBody.innerHTML = "";

    // Append the sorted rows back to the table
    rows.forEach(function(row) {
        tableBody.appendChild(row);
    });
}


