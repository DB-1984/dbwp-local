<?php 

function theme_files() {

    wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('black-ops-one', 'https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap');
    wp_enqueue_style('work-sans', '//fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,300;0,400;0,500;0,600;0,800;1,200;1,300;1,500;1,600;1,800&display=swap');
    wp_enqueue_style('main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('extra_styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), '5.0.0-beta1', 'all' );
    wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/54232688aa.js', array(), '5.15.3', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0-beta1', true );
    
  }

 
add_action('wp_enqueue_scripts', 'theme_files');

function features() {
  
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  }

add_action('after_setup_theme', 'features'); 

// make callback available to AJAX (private and non-private)
add_action('wp_ajax_contact_form_submit', 'contact_form_submit');
add_action('wp_ajax_nopriv_contact_form_submit', 'contact_form_submit');

// the callback itself
function contact_form_submit() {
  // check the expected nonce value was sent with the for submission
  check_ajax_referer('contact-form-nonce', 'nonce'); // nonce check
  // declare an error if nonce is invalid (for debugging)
  if (!wp_verify_nonce($_POST['nonce'], 'contact-form-nonce')) { //
    wp_send_json_error('Invalid nonce');
  }
  // gather and sanitize form variables
  $name = sanitize_text_field($_POST['name']);
  $email = sanitize_email($_POST['email']);
  $message = sanitize_textarea_field($_POST['message']);
  $number = sanitize_text_field($_POST['number']);
  $url = sanitize_textarea_field($_POST['url']);

  // File upload handling
  if (isset($_FILES['file'])) {
    // grab the file from the form
    $uploaded_file = $_FILES['file'];
    // deprecated compatibility check for older form upload methods
    $upload_overrides = array('test_form' => false);
    //
    $movefile = wp_handle_upload($uploaded_file, $upload_overrides);
    // if no errors, add uploaded file path to $attachments or set empty array
    if ($movefile && !isset($movefile['error'])) {
      $attachments = $movefile['file'];
    } else {
      $attachments = '';
    }
  } else {
    $attachments = '';
  }

  $to = 'your-email@example.com';
  $subject = 'New contact form submission';
  $body = "Name: $name \n\nEmail: $email \n\nMessage: $message \n\nURL: $url \n\nNumber: $number";
  $headers = "From: $name <$email>" . "\r\n";

  // Send the email
  if (wp_mail($to, $subject, $body, $headers, $attachments)) {
    //show success in console
    wp_send_json_success('Thank you for your message');
  } else {
    // or error
    wp_send_json_error('Unable to send email. Please try again later.');
  }

  wp_die();
}

function enqueue_contact_form_scripts() {
  // load the form JS
  wp_enqueue_script('contactForm', get_template_directory_uri() . '/src/modules/contactForm.js', array('jquery'), '1.0', true);

  // make PHP available to JS - admin-ajax.php path, and a nonce that is specific to this form
  wp_localize_script('contactForm', 'contactFormAjax', array(
    'ajaxUrl' => esc_url( admin_url( "admin-ajax.php" ) ), 
    'nonce' => wp_create_nonce('contact-form-nonce'), // becomes contactFormAjax.nonce in JS script
  ));
}

add_action('wp_enqueue_scripts', 'enqueue_contact_form_scripts');

/*
OPTIONAL NONCE FOR SEARCH
function enqueue_search_scripts() {
  // Enqueue index.js
  wp_enqueue_script('ajaxSearch', get_template_directory_uri() . '/src/modules/ajaxSearch.js', array('jquery'), '1.0', true);

  // Localize the main-js script and pass the nonce value
  wp_localize_script('ajaxSearch', 'ajaxSearchAjax', array(
      'nonce' => wp_create_nonce('ajax-search-nonce')
  ));
}
add_action('wp_enqueue_scripts', 'enqueue_search_scripts');*/
 
/*function ajaxSearchResults($data) {
  // Verify the nonce
  $nonce = $data->get_header('X-WP-Nonce');
  if (!wp_verify_nonce($nonce, 'ajax-search-nonce')) {
    return array(
      'error' => 'Unauthorized request.'
    );
  }
  return $results;
}*/