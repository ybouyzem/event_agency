document.getElementById("search-input").addEventListener("keyup", function() {
        let searchValue = this.value.toLowerCase();
        let rows = document.querySelectorAll(".items tr");

        rows.forEach(function(row) {
            let cells = row.querySelectorAll("td");
            let found = false;

            cells.forEach(function(cell) {
                let text = cell.textContent.toLowerCase();
                if (text.includes(searchValue)) {
                    found = true;
                }
            });

            if (found) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
});

