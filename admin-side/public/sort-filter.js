var clientIdFilter = document.querySelector("#client-id i");
var clientNameFilter = document.querySelector("#client-name i");

clientIdFilter.parentElement.addEventListener('click', function () {
    if (clientIdFilter.classList.contains("bx-chevron-up")) {
        clientIdFilter.classList.remove("bx-chevron-up");
        clientIdFilter.classList.add("bx-chevron-down");
        clientIdFilter.parentElement.style.color="#3C91E6";
        //now for the other filter
        clientNameFilter.classList.remove("bx-chevron-down");
        clientNameFilter.classList.add("bx-chevron-up");
        if (localStorage.getItem('darkMode') === 'true')
            clientNameFilter.parentElement.style.color="white";
        else
        clientNameFilter.parentElement.style.color="black";
    } else {
        clientIdFilter.classList.remove("bx-chevron-down");
        clientIdFilter.classList.add("bx-chevron-up");
        if (localStorage.getItem('darkMode') === 'true')
            clientIdFilter.parentElement.style.color="white";
        else
            clientIdFilter.parentElement.style.color="black";
    }
    clientIdFilterClickHandler();
});

clientNameFilter.parentElement.addEventListener('click', function () {
    if (clientNameFilter.classList.contains("bx-chevron-up")) {
        clientNameFilter.classList.remove("bx-chevron-up");
        clientNameFilter.classList.add("bx-chevron-down");
        clientNameFilter.parentElement.style.color="#3C91E6";
        //now for the other filter
        clientIdFilter.classList.remove("bx-chevron-down");
        clientIdFilter.classList.add("bx-chevron-up");
        if (localStorage.getItem('darkMode') === 'true')
            clientIdFilter.parentElement.style.color="white";
        else
            clientIdFilter.parentElement.style.color="black";
    } 
    else {
        clientNameFilter.classList.remove("bx-chevron-down");
        clientNameFilter.classList.add("bx-chevron-up");
        if (localStorage.getItem('darkMode') === 'true')
            clientNameFilter.parentElement.style.color="white";
        else
            clientNameFilter.parentElement.style.color="black";
    }
    clientNameFilterClickHandler();

});



 var clientIdSortOrder = 'asc'; // Initial sorting order is ascending

function clientIdFilterClickHandler() {
    // Get the table body
    var tableBody = document.querySelector("tbody");

    // Get the list of table rows (client entries)
    var rows = Array.from(tableBody.querySelectorAll("tr"));

    // Sort the rows by client ID (assuming client ID is in the first column)
    rows.sort(function(a, b) {
        var idA = parseInt(a.cells[0].textContent.trim());
        var idB = parseInt(b.cells[0].textContent.trim());
        return idA - idB;
    });

    // Reverse the order if the current order is descending
    if (clientIdSortOrder === 'desc') {
        rows.reverse();
        clientIdSortOrder = 'asc'; // Update sorting order to ascending
    } else {
        clientIdSortOrder = 'desc'; // Update sorting order to descending
    }

    // Remove all rows from the table
    tableBody.innerHTML = "";

    // Append the sorted rows back to the table
    rows.forEach(function(row) {
        tableBody.appendChild(row);
    });
}

var clientNameSortOrder = 'asc'; // Initial sorting order is ascending

function clientNameFilterClickHandler() {
    // Get the table body
    var tableBody = document.querySelector("tbody");

    // Get the list of table rows (client entries)
    var rows = Array.from(tableBody.querySelectorAll("tr"));

    // Sort the rows alphabetically based on client name (assuming client name is in the second column)
    rows.sort(function(a, b) {
        var nameA = a.cells[1].textContent.trim().toLowerCase();
        var nameB = b.cells[1].textContent.trim().toLowerCase();
        if (nameA < nameB) return -1;
        if (nameA > nameB) return 1;
        return 0;
    });

    // Reverse the order if the current order is descending
    if (clientNameSortOrder === 'desc') {
        rows.reverse();
        clientNameSortOrder = 'asc'; // Update sorting order to ascending
    } else {
        clientNameSortOrder = 'desc'; // Update sorting order to descending
    }

    // Remove all rows from the table
    tableBody.innerHTML = "";

    // Append the sorted rows back to the table
    rows.forEach(function(row) {
        tableBody.appendChild(row);
    });
}


