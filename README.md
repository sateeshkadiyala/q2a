q2a
===

Add a widget to q2a website which will give the f like , +1 and twitter button.
by
sateesh kadiyala

Modify qa-base.php :
Add the following line to function qa_register_core_modules() method.
  qa_register_module('widget', 'qa-widget-social-media.php', 'qa_social_media', 'Social Media');

Add the following to qa-lang-html.php
'social_media' => 'Find Us On',

Add the following to qa-styles.css

.fb-like{padding: 10px}.twitter-button{padding:10px}

Include the javascript from google +1, twitter, fb in HEAD.You can do with the admin console

 

