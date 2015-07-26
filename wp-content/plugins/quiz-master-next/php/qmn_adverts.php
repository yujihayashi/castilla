<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/**
* Creates the advertisements that are used throughout the plugin page. 
*
* The advertisements are randomly generated every time the page is loaded. The function also handles the CSS for this.
* 
* @return $mlw_advert This variable is the main variable of the function and contains the advertisement content. 
* @since 4.4.0
*/
function mlw_qmn_show_adverts()
{
	$mlw_advert = "";
	$mlw_advert_text = "";
	if ( get_option('mlw_advert_shows') == 'true' )
	{
		$mlw_random_int = rand(0, 7);
		switch ($mlw_random_int) {
			case 0:
				$mlw_advert_text = "Need support or features? Check out our Premium Support options! Visit our <a href=\"http://quizmasternext.com/downloads/premium-support/\">Quiz Master Next Support</a> for details!";
				break;
			case 1:
				$mlw_advert_text = "Is Quiz Master Next beneficial to your website? Please help by giving us a review on WordPress.org by going <a href=\"http://wordpress.org/support/view/plugin-reviews/quiz-master-next\">here</a>!";
				break;
			case 3:
				$mlw_advert_text = "Would you like to support this plugin but do not need or want premium support? Please consider our inexpensive 'Advertisements Be Gone' add-on which will get rid of these ads. Visit our <a href=\"http://quizmasternext.com/addons/\">Addon Store</a> for details!";
				break;
			case 4:
				$mlw_advert_text = "Need help keeping your plugins, themes, and WordPress up to date? Want around the clock security monitoring and off-site back-ups? How about WordPress training videos, a monthly status report, and support/consultation? Check out our <a href=\"http://mylocalwebstop.com/downloads/wordpress-maintenance/\">WordPress Maintenance Services</a> for more details!";
				break;
			default:
				$mlw_advert_text = "Need support or features? Check out our Premium Support options! Visit our <a href=\"http://quizmasternext.com/downloads/premium-support/\">Quiz Master Next Support</a> for details!";
		}
		$mlw_advert .= "
			<style>
			div.help_decide
			{
				display: block;
				text-align:center;
				letter-spacing: 1px;
				margin: auto;
				text-shadow: 0 1px 1px #000000;
				background: #0d97d8;
				border: 5px solid #106daa;
				-moz-border-radius: 20px;
				-webkit-border-radius: 20px;
				-khtml-border-radius: 20px;
				border-radius: 20px;
				color: #FFFFFF;
			}
			div.help_decide a
			{
				color: yellow;
			}
			</style>";
		$mlw_advert .= "
			<div class=\"help_decide\">
			<p>$mlw_advert_text</p>
			</div>";
	}
	return $mlw_advert;
}
?>
