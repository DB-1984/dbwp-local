// Words API lets you retrieve information about English words, including definitions, synonyms, rhymes, pronunciation, syllables, and frequency of usage. It also can tell you about relationships between words, for instance that “math” has categories like “algebra” and “geometry”, or that a “finger” is part of a “hand”.

document.getElementById('fetchButton').addEventListener('click', function() { console.log('loaded');
    fetch('https://jsonplaceholder.typicode.com/posts')
      .then(response => response.json())
      .then(data => {
        const container = document.getElementById('postContainer');
  
        const html = data.map(post => `
          <div class="post">
            <h2>${post.title}</h2>
            <p>${post.body}</p>
          </div>
        `).join('');
  
        container.innerHTML = html;
      })
      .catch(error => {
        console.error('Error:', error);
      });
  });
  