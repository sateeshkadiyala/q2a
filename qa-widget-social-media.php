<?php

/*
  Sateesh Kadiyala

*/

	class qa_social_media {
		
		function allow_template($template)
		{
			return true;
		}

		
		function allow_region($region)
		{
			return true;
		}

		
		function output_widget($region, $place, $themeobject, $template, $request, $qa_content)
		{

			$titlehtml=qa_lang_html('main/social_media');

				$themeobject->output(
					'<DIV CLASS="qa-social-media">',
					'<H2 STYLE="margin-top:0; padding-top:0;">',
					$titlehtml,
					'</H2></DIV>'
				);
				
				$themeobject->output('<DIV CLASS="qa-social-media-buttons">');
					$themeobject->output('<div class="fb-like" data-href="https://www.facebook.com/pages/Desifaq/522182531137815" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>');
                    $themeobject->output('<div class="g-plusone" data-size="medium" data-href="http://desifaq.com/"></div>');
                    $themeobject->output('<div class="twitter-button"> <a href="https://twitter.com/share" class="twitter-share-button" data-url="desifaq.com" data-via="desifaq">Tweet</a> </div>');
				$themeobject->output(
					'</DIV>'
				);


	}

}
/*
	Omit PHP closing tag to help avoid accidental output
*/
