<script>
 
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("searchInput");
        const searchBtn = document.getElementById("searchBtn");
        const table = document.getElementById("registerTable");
        const rows = table.querySelectorAll("tbody tr");

     
        function filterRows() {
            let filter = searchInput.value.toLowerCase();

            rows.forEach(row => {
                
                let id = row.cells[0]?.textContent.toLowerCase() || ""; 
                let firstName = row.cells[1]?.textContent.toLowerCase() || "";
                let lastName = row.cells[2]?.textContent.toLowerCase() || "";

              
                if (id.includes(filter) || firstName.includes(filter) || lastName.includes(filter)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        }

   
        searchInput.addEventListener("keyup", filterRows);

        searchBtn.addEventListener("click", filterRows);
    });
</script>