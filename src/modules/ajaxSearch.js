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

      // Create a new XMLHttpRequest object
      var xhr = new XMLHttpRequest();

      // Set the request method to POST and the URL to the custom REST API endpoint
      xhr.open('GET', '/wp-json/wp/v2/posts?search=' + searchQuery, true);

      // Set the Content-Type header to application/x-www-form-urlencoded
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      // Get the nonce value from the localized JavaScript variable
      //var nonce = ajaxSearchAjax.nonce;

      // Set up the request body data including the nonce
      var data = 'search=' + searchQuery //+ '&nonce=' + nonce;

      // Send the request
      xhr.send(data);

      // Handle the response
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          var response = JSON.parse(xhr.responseText);

          // Clear any previous results
          resultsContainer.innerHTML = '';

          // Generate HTML for each post result using the map() method
          var html = response.map(function(post) {
            return '<div class="result"><a href="' + post.link + '">' + post.title.rendered + '</a></div>';
          }).join('');

          // Add the generated HTML to the results container
          resultsContainer.innerHTML = html;
        }
      };
    }, doneTypingInterval);
  });
}
export default ajaxSearch;;
