function contactForm(){
jQuery(document).ready(function($){
  $('#contact-form').on('submit', function(event) {
      event.preventDefault();
      // sets up a constructor which organises our form data as key=>value pairs
      var formData = new FormData(this);
      // add the callback and nonce data to the ajax object
      formData.append('action', 'contact_form_submit');
      formData.append('nonce', contactFormAjax.nonce);

      var form = this;
      var xhr = $.ajax({
          type: 'POST',
          url: contactFormAjax.ajaxUrl,
          data: formData,
          contentType: false,
          processData: false,
          success: function(response) {
              // Hide the form
              $(form).hide();
              // Show success message
              $(".success-message").show();
          },
          error: function(xhr, status, error) {
              console.log(error);
              // check if the error is due to an invalid nonce
              if (xhr.responseJSON && xhr.responseJSON.data && xhr.responseJSON.data.error === 'Invalid nonce') {
                  // abort the request
                  xhr.abort();
              }
          }
      });
  });

  // Reset button click handler
  $('#reset-button').on('click', function(event) {
      event.preventDefault();
      // Show the form
      $('#contact-form').show();
      $("body > div.colour-band.aos-init.aos-animate > div > h3").show();
      // Hide the success message
      $('.success-message').hide();
      // Reset the form
      $('#contact-form')[0].reset();
  });
});
}
contactForm();