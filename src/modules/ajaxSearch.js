function ajaxSearch() {
  var searchField = document.querySelector('#mk-fullscreen-search-input');
  var resultsContainer = document.querySelector('#results-container');
  var typingTimer;
  var doneTypingInterval = 500;

  searchField.focus();

  searchField.addEventListener('keyup', function() {
    clearTimeout(typingTimer);
    typingTimer = setTimeout(function() {
      var searchQuery = searchField.value;

      // Check if the search query is empty
      if (searchQuery.trim() === '') {
        resultsContainer.innerHTML = ''; // Clear the results container
        return; // Exit the function
      }

      // Posts
      fetch('/wp-json/wp/v2/posts?search=' + searchQuery)
        .then(function(response) {
          if (response.ok) {
            return response.json();
          } else {
            throw new Error('Request failed.');
          }
        })
        .then(function(data) {
          resultsContainer.innerHTML = '';

          var html = data.map(function(post) {
            return '<div class="result"><a href="' + post.link + '">' + post.title.rendered + '</a></div>';
          }).join('');

          resultsContainer.innerHTML = html;
        })
        .catch(function(error) {
          console.error(error);
        });

      // Pages
      fetch('/wp-json/wp/v2/pages?search=' + searchQuery)
        .then(function(response) {
          if (response.ok) {
            return response.json();
          } else {
            throw new Error('Request failed.');
          }
        })
        .then(function(data) {
          var html = data.map(function(page) {
            return '<div class="result"><a href="' + page.link + '">' + page.title.rendered + '</a></div>';
          }).join('');

          resultsContainer.innerHTML = html;
        })
        .catch(function(error) {
          console.error(error);
        });
    }, doneTypingInterval);
  });
}

export default ajaxSearch;
