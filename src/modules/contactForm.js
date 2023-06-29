function contactForm() {
  var contactForm = document.getElementById('contact-form');
  var resetButton = document.getElementById('reset-button');
  var successDiv = document.querySelector("body > div.container.mx-auto.success");
  var formParent = document.querySelector("body > div.container.contact-form-columns");

  contactForm.addEventListener('submit', function (event) {
    event.preventDefault();

    var formData = new FormData(contactForm);
    formData.append('action', 'contact_form_submit');
    formData.append('nonce', contactFormAjax.nonce);

    fetch(contactFormAjax.ajaxUrl, {
      method: 'POST',
      body: formData
    })
      .then(function (response) {
        if (response.ok) {
          // Hide the form
          formParent.style.display = 'none';
          // Show success message
          var successMessage = document.querySelector('.success-message');
          //successMessage.style.display = 'block';
          successDiv.style.display = 'block';
          // Change H4 content
          //formMessageHeading.textContent = "Thanks!";
        } else {
          throw new Error('Request failed');
        }
      })
      .catch(function (error) {
        console.log(error);
        // Check if the error is due to an invalid nonce
        var responseJSON = error.responseJSON;
        if (responseJSON && responseJSON.data && responseJSON.data.error === 'Invalid nonce') {
          // Abort the request
          console.log('Invalid nonce error');
        }
      });
  });

  resetButton.addEventListener('click', function (event) {
    event.preventDefault();

    // Show the form
    contactForm.style.display = 'block';
    formParent.style.display = 'block';
      // Hide the success message
    successDiv.style.display = 'none';

    contactForm.reset();
  });
}

contactForm();
