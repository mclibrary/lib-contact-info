<?php
/*
Plugin Name: LibraryContactInfo
Plugin URI: http://github.com/jackweinbender/welshimer2013.git
Description: Displays the contact info of PH Welshimer Memorial Library
Author: Jack Weinbender
Version: 1
Author URI: http://github.com/jackweinbender/
*/
 
 
class ContactWidget extends WP_Widget
{
  function ContactWidget()
  {
    $widget_ops = array('classname' => 'ContactWidget', 'description' => 'Displays contact information, properly formatted for search engines' );
    $this->WP_Widget('ContactWidget', 'Contact Info', $widget_ops);
  }
 
  function form($instance)
  {}
 
  function update($new_instance, $old_instance)
  {}
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;

    $content = '<h1 class="contact-icon">Contact</h1>';
	$content .= '<div class="textwidget" itemscope itemtype="http://schema.org/PostalAddress">';
	$content .= 'P.O. Box <span itemprop="postOfficeBoxNumber">600</span><br />';
	$content .= '<span itemprop="streetAddress">200 Blowers Blvd.</span><br />';
	$content .= '<span itemprop="addressLocality">Milligan College</span>, <span itemprop="addressRegion">TN</span> <span itemprop="postalCode">37682</span><br />';
	$content .= '<span itemprop="telephone">423.461.8703</span> (Welshimer)<br />';
	$content .= '<span itemprop="telephone">423.461.1540</span> (Seminary)<br />';
	$content .= '</div>';
 	$content .= '<div class="sidebar-social-menu">';
	$content .= '<ul>';
	$content .=	'<li style="margin: 3px 0 -3px 0;"><a href="mailto:library@milligan.edu"></a></li>';
	$content .= 	'<li><a href="https://library.milligan.edu/blog/"></a></li><!--Library Blog-->';
	$content .=	'<li><a href="https://twitter.com/intent/user?screen_name=MilliganLibrary" target="_blank"></a></li><!--Twitter-->';
	$content .=	'<li><a href="https://www.facebook.com/milligancollegelibrary" target="_blank"></a></li><!--Facebook-->';
	$content .=	'<li><a href="https://www.instagram.com/milliganlibraries/" target="_blank"></a></li>';
   $content .= '</ul>';
	$content .=	'</div>';
 	echo $content;

    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("ContactWidget");') );?>
