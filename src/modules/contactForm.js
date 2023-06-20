function contactForm() {
    var contactForm = document.getElementById('contact-form');
    var resetButton = document.getElementById('reset-button');
    //lvar formMessageHeading = document.getElementById('form-message-heading');
  
    contactForm.addEventListener('submit', function(event) {
      event.preventDefault();
  
      var formData = new FormData(contactForm);
      formData.append('action', 'contact_form_submit');
      formData.append('nonce', contactFormAjax.nonce);
  
      fetch(contactFormAjax.ajaxUrl, {
        method: 'POST',
        body: formData
      })
        .then(function(response) {
          if (response.ok) {
            // Hide the form
            contactForm.style.display = 'none';
            // Show success message
            var successMessage = document.querySelector('.success-message');
            successMessage.style.display = 'block';
            // Change H4 content
            //formMessageHeading.textContent = "Thanks!";
          } else {
            throw new Error('Request failed');
          }
        })
        .catch(function(error) {
          console.log(error);
          // Check if the error is due to an invalid nonce
          var responseJSON = error.responseJSON;
          if (responseJSON && responseJSON.data && responseJSON.data.error === 'Invalid nonce') {
            // Abort the request
            console.log('Invalid nonce error');
          }
        });
    });
  
    resetButton.addEventListener('click', function(event) {
      event.preventDefault();
  
      // Show the form
      contactForm.style.display = 'block';
      //formMessageHeading.textContent = "Get in touch!";                             
      // Show other elements if needed
      var otherElements = document.querySelectorAll("body > div.colour-band.aos-init.aos-animate > div > h3");
      otherElements.forEach(function(element) {
        element.style.display = 'block';
      });
      // Hide the success message
      var successMessage = document.querySelector('.success-message');
      successMessage.style.display = 'none';
  
      contactForm.reset();
    });
  }
  if (window.location.pathname === '/') {
    contactForm();
  }