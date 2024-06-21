<form id="searchForm" action="search.php" method="get">
    <div class="search-container">
        <input type="text" placeholder="Search..." name="query" id="searchInput">
        <button type="submit"><i class="bi bi-search"></i></button>
    </div>
</form>

<script>
    // Get references to form and input field
    const form = document.getElementById('searchForm');
    const input = document.getElementById('searchInput');
    let timeoutId; // Variable to store timeout ID

    // Function to handle form submission
    const handleSubmit = (event) => {
        event.preventDefault(); // Prevent default form submission
        performSearch(input.value.trim()); // Perform search with trimmed input value
    };

    // Function to perform search action
    const performSearch = (query) => {
        // Clear previous timeout if exists
        if (timeoutId) {
            clearTimeout(timeoutId);
        }

        // Set a new timeout for delayed search
        timeoutId = setTimeout(() => {
            if (query !== '') {
             
                // Perform your search action here, for example:
                window.location.href = `search.php?query=${encodeURIComponent(query)}`;
               

            }
        }, 500); // Adjust delay time as needed (500 milliseconds in this example)
    };

    // Initialize input value on page load if there's a query parameter in the URL
    window.onload = () => {
        const input = document.getElementById('searchInput');

        // Get the query parameter from the URL
        const urlParams = new URLSearchParams(window.location.search);
        const queryParam = urlParams.get('query');

        if (queryParam) {
            input.value = queryParam; // Set input value to the query parameter
        }
    };

    // Add event listeners
    input.addEventListener('input', () => performSearch(input.value.trim())); // Trigger search on input change
    form.addEventListener('submit', handleSubmit); // Handle form submission
</script>


 