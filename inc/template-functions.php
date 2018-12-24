<?php
/**
 * Additional features to allow styling of the templates
 *
 */

 /**
  * Adds random welcome message from array to navbar.
  *
  * @return string
  */
function random_welcome_message() {
    $messages = ['Welcome', 'Hello', 'Howdy', 'Hi'];

    echo $messages[array_rand($messages)];
}