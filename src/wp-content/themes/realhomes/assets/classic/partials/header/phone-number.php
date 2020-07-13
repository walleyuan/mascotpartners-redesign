<?php
/**
 * Header Partial: Phone Number
 *
 * @since 2.6.2
 */

$header_phone    = get_option('theme_header_phone');
if (! empty($header_phone)) {
        $desktop_version    =  '<a class="desktop-version" href="tel://'.$header_phone.'>' .$header_phone. '</a>';
    $mobile_version    =  '<a class="mobile-version" href="tel://'.$header_phone.'" title="Make a Call">' .$header_phone. '</a>';

    echo '<h2 class="contact-number "><img src="http://iebasketball.com/demo/mascotpartners/wp-content/uploads/2018/06/phone_icon.png">'.  $desktop_version . $mobile_version .  '<span class="outer-strip"></span></h2>';
}
