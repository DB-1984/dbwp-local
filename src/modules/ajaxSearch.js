function ajaxSearch() {
  // Initialize variables
  var searchField = document.querySelector('#mk-fullscreen-search-input');
  var resultsContainer = document.querySelector('#results-container');
  var typingTimer;
  var doneTypingInterval = 500;

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

      // Fetch the search results from the custom REST API endpoint
      fetch('/wp-json/wp/v2/posts?search=' + searchQuery)
        .then(function(response) {
          if (response.ok) {
            return response.json();
          } else {
            throw new Error('Request failed.');
          }
        })
        .then(function(data) {
          // Clear any previous results
          resultsContainer.innerHTML = '';

          // Generate HTML for each post result using the map() method
          var html = data.map(function(post) {
            return '<div class="result"><a href="' + post.link + '">' + post.title.rendered + '</a></div>';
          }).join('');

          // Add the generated HTML to the results container
          resultsContainer.innerHTML = html;
        })
        .catch(function(error) {
          // Handle any errors
          console.error(error);
        });
    }, doneTypingInterval);
  });
}

export default ajaxSearch;
