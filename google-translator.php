<?

/*
Plugin Name: SocialMedia Google Translator
Plugin URI: /
Description: The Google Translator adds a Google Translate Button to every post.
Version: 1.0
Author: Tobias Hoffmann
Author URI: /
License: GPL2
*/

/*  Copyright 2011  Tobias Hoffmann  (email : t.hoffmann82@gmx.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class GoogleTranslator {
	
   public function __construct() {
      add_filter('the_content', array($this, 'Add'));	
   }
   
   public function Add($wordpresscontent=false) { 	
      $Google = '<div id="google_translate_element" style="margin-bottom:11px;"></div><script>function googleTranslateElementInit(){new google.translate.TranslateElement({pageLanguage:\'auto\',autoDisplay:false},\'google_translate_element\');}</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>';
      return $wordpresscontent.$Google;
   }
   
   public function __destruct() {
   	
   }
	
}

$Class = new GoogleTranslator();

?>