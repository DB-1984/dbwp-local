<div class="container-fluid contact-form-columns" id="contact-form-anchor" data-aos="fade-down">
  <div class="row">
    <div class="container py-5 contact-form" data-aos="fade-up">
      <div class="row">
        <div class="col-md-10 mx-auto">
          <form id="contact-form">
            <div class="row" style="align-items: center">
              <div class="col-md-6">
                <h1 class="form-h1">
                  Get in touch!
                </h1>
              </div>
              <div class="col-md-6 text-md-right">
                <p>We aim to reply to all enquiries <span class="text-highlight">within 48 hours.</span> </br></br>If your query is regarding a technical issue please feel free to <span class="text-highlight">upload an image</span> to your message.</p>
              </div>
            </div>
            <div id="contact-columns" class="row collapse show">
              <div class="col-md-6">
                <div class="form-group contact-box">
                  <label for="name"></label>
                  <span class="input-group-addon name">
                    <i class="fa-regular fa-keyboard"></i>
                    <input type="text" name="name" class="form-control" placeholder="Name (required)" required>   
                  </span>
                </div>
                <div class="form-group contact-box">
                  <label for="email"></label>
                  <span class="input-group-addon email">
                    <i class="fa-solid fa-at"></i>
                    <input type="email" name="email" class="form-control icon-before" placeholder="Email (required)" required>
                  </span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group contact-box">
                  <label for="url"></label>
                  <span class="input-group-addon site">
                    <i class="fa-solid fa-computer"></i>
                    <input type="text" name="url" class="form-control icon-before" placeholder="Website URL">   
                  </span>
                </div>
                <div class="form-group contact-box">
                  <label for="number"></label>
                  <span class="input-group-addon number">
                    <i class="fa-solid fa-mobile-screen"></i>
                    <input type="tel" name="number" class="form-control icon-before" placeholder="Contact Number">
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group contact-box">
              <label for="message"></label>
              <span class="input-group-addon message">
                <i class="fa-solid fa-square-envelope"></i>
                <textarea name="message" class="form-control icon-before" rows="5" required placeholder="Message"></textarea>
              </span>
            </div>
            <div class="row file-upload">
            <label for="formFileMultiple" class="form-label">Upload attachment</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple />
            </row>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary px-4 mx-auto contact form-button">
                <p class="text-center">Submit</p>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mx-auto success" style="display:none">
  <div class="success-message" data-aos="fade-down">
    <div class="image-success">
        <img src="wp-content/uploads/2023/06/thank-you-no-bg.png" class="img-fluid">
    </div>
    <p><i class="fa-sharp fa-regular fa-thumbs-up"></i> Successfully submitted - <span class="text-highlight">we'll be in touch soon!</span></p>
    <button id="reset-button" class="btn btn-primary mx-auto contact"><p>New Message</p></button>
  </div>
</div>









