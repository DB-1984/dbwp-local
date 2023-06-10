<!--https://rapidapi.com/dpventures/api/wordsapi/-->
<?php get_header(); ?>
<?php wp_enqueue_script('restAPItest', get_template_directory_uri() . '/src/modules/restAPItest.js', array(), '1.0', true); ?>

<button id="fetchButton">Fetch Posts</button>
<div id="postContainer"></div>

<style>
    #navbar_top{
        display:none
    }
</style>
 
<?php get_footer(); ?>