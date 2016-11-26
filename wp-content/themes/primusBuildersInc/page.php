<?php

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";

  }

  //response messages
  $not_human       = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];
  $phone = $_POST['message_phone'];
  $subject = $_POST['message_subject'];

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'Sender-Name: ' . $name . "\r\n" .
    'Phone-Number: ' . $phone . "\r\n";
  $message_send = "headers :" . $headers . "message :" . $message;


  if(!$human == 0){
    if($human != 4) my_contact_form_generate_response("error", $not_human); //not human!
    else {

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message_send), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

?>

<?php get_header(); ?>

  <div id="primary" class="site-content">
    <div id="content" role="main">

<?php while ( have_posts() ) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>

    <div class="entry-content">
      <?php the_content(); ?>

      <style type="text/css">
        .error{
          padding: 5px 9px;
          border: 1px solid red;
          color: red;
          border-radius: 3px;
        }

        .success{
          padding: 5px 9px;
          border: 1px solid green;
          color: green;
          border-radius: 3px;
        }

        form span{
          color: red;
        }
      </style>









       <section id="quote">
         <div class="quote-form" >


           <div id="respond" class="quote-form-inner">

             <?php echo $response; ?>
             <form action="<?php the_permalink(); ?>" method="post" class="quote-form-form">
               <h3>What can we do for you?</h3>
               <div class="column1">
                 <label for="message_name">Your Name: <span>*</span>
                 <input class="quote-form-name" name="message_name" placeholder="Name"
                 value="<?php echo esc_attr($_POST['message_name']); ?>">
                 </label>
               </div>
               <div class="column1">
                 <label for="message_phone">Phone Number:
                 <input class="quote-form-phone" name="message_phone" placeholder="(773)555-5555"
                 value="<?php echo esc_attr($_POST['message_phone']); ?>">
                 </label>
               </div>
               <div class="column1">
                 <label for="message_email">Email: <span>*</span>
                 <input class="quote-form-email" name="message_email" placeholder="Email"
                  value="<?php echo esc_attr($_POST['message_email']); ?>">
                 </label>
               </div>
               <div class="column1">
                 <label for="message_subject">Subject: <span>*</span>
                 <input class="quote-form-subject" name="message_subject" placeholder="Subject"
                 value="<?php echo esc_attr($_POST['message_subject']); ?>">
                 </label>
               </div>
               <textarea name="message_text" cols="45" rows="10" class="textarea"
               id="message" aria-required="true" aria-invalid="false"
               placeholder="Message"><?php echo esc_textarea($_POST['message_text']); ?></textarea>

               <p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 50px;" name="message_human"> + 4 = 8</label></p>

               <input type="hidden" name="submitted" value="1">
               <p><input type="submit"></p>
               <!-- <a href="#">
                 <button class="quote-send" type="submit">Send</button>
               </a> -->
             </form>
           </div>







             </div>
           </section>







    </div><!-- .entry-content -->

  </article><!-- #post -->

      <?php endwhile; // end of the loop. ?>



    </div><!-- #content -->
  </div><!-- #primary -->


<?php get_footer(); ?>
