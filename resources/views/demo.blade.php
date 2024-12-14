<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Google Form Responses with Images</title>
  <style>
    /* CSS for Cards */
    .card {
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 16px;
      margin: 16px 0;
      background-color: #f9f9f9;
      box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .card h3 {
      margin: 0 0 8px;
    }

    .card p {
      margin: 4px 0;
    }

    .card img {
      max-width: 100px;
      max-height: 100px;
      border-radius: 50%;
      margin: 8px 0;
    }
  </style>
</head>
<body>
  <h1>Google Form Responses</h1>
  <div id="response-cards">
    <!-- Cards will be dynamically inserted here -->
  </div>

  <script>
    // Your Apps Script Web App URL
    const apiUrl = "https://script.google.com/macros/s/AKfycbzxKQTKgSl2BlxlrYraWRfcbZkAkPX6R-D-1qTAFxmpEZKGkYS5Giz6Ci5InASMQ8egtw/exec";

    // Fetch data and display it on the page
    fetch(apiUrl)
      .then(response => response.json())
      .then(data => {
        const cardsContainer = document.getElementById('response-cards');
        data.forEach(entry => {
          // Create a card for each entry
          const card = document.createElement('div');
          card.classList.add('card');

          // Populate card content including the profile image
          card.innerHTML = `
            <h3>Name: ${entry['your name'] || 'N/A'}</h3>
            <p>Company: ${entry['your company (leave if you dont have)'] || 'N/A'}</p>
            <p>Position: ${entry['your postion'] || 'N/A'}</p>
            <p>Comment: ${entry['your comment'] || 'N/A'}</p>
            ${entry['your profile'] ? `<img src="${entry['your profile']}" alt="Profile Image">` : '<p>No Profile Image</p>'}
          `;

          // Append the card to the container
          cardsContainer.appendChild(card);
        });
      })
      .catch(error => console.error('Error fetching data:', error));
  </script>
</body>
</html>
