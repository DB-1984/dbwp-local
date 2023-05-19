function ajaxSearch() {
    // Initialize variables
    var searchField = document.querySelector('#mk-fullscreen-search-input'); // replace with your own search field selector
    var resultsContainer = document.querySelector('#results-container'); // replace with your own results container selector
    var typingTimer;
    var doneTypingInterval = 500; // milliseconds
    
    // Focus on the search field when the page loads
    searchField.focus();
    
    // Listen for keyup events on the search field
    searchField.addEventListener('keyup', function() {
      // Clear the typing timer
      clearTimeout(typingTimer);
  
      // Set a new typing timer
      typingTimer = setTimeout(function() {
        // Get the search query from the search field value
        var searchQuery = searchField.value;
  
        // Make the fetch request
        fetch('/wp-json/wp/v2/posts/?s=' + searchQuery)
          .then(function(response) {
            // Parse the response as JSON
            return response.json();
          })
          .then(function(posts) {
            // Clear any previous results
            resultsContainer.innerHTML = '';
  
            // Generate HTML for each post result using the map() method
            var html = posts.map(function(post) {
              return '<div class="result"><a href="' + post.link + '">' + post.title.rendered + '</a></div>';
            }).join('');
  
            // Add the generated HTML to the results container
            resultsContainer.innerHTML = html;
          })
          .catch(function(error) {
            console.error(error);
          });
      }, doneTypingInterval);
    });
  }
  
  ajaxSearch();
  