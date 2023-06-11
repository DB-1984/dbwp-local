// Words API lets you retrieve information about English words, including definitions, synonyms, rhymes, pronunciation, syllables, and frequency of usage. It also can tell you about relationships between words, for instance that “math” has categories like “algebra” and “geometry”, or that a “finger” is part of a “hand”.

document.getElementById('fetchButton').addEventListener('click', function() { console.log('loaded');

const apiKey = '7191c0ff16dcd07869860eadfa045f32';
const cityName = 'London'; // Replace with the desired city name

// Construct the API request URL
const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${cityName}&appid=${apiKey}`;

// Create the results container element
const resultsContainer = document.createElement('div');
resultsContainer.className = 'results-container';

// Append the results container element to the document body
const pageContainer = document.querySelector("#postContainer");
pageContainer.appendChild(resultsContainer);

// Make the API call using fetch()
fetch(apiUrl)
  .then(response => response.json())
  .then(data => {
    // Handle the response data
    console.log(data);
    
    // Generate HTML for the results using the map() method
    const html = `
      <div class="result">
        <h2>${data.name}</h2>
        <p>Temperature: ${data.main.temp}</p>
        <p>Humidity: ${data.main.humidity}</p>
        <p>Description: ${data.weather[0].description}</p>
      </div>
    `;

    // Add the generated HTML to the results container
    resultsContainer.innerHTML = html;
  })
  .catch(error => {
    console.error('Error:', error);
  });
});



   /* fetch('https://jsonplaceholder.typicode.com/posts')
      .then(response => response.json())
      .then(data => {
        const container = document.getElementById('postContainer');
        console.log(data);
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
  */ 