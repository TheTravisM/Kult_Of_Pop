<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package kult_of_pop
 */

namespace WP_Rig\WP_Rig;

/* // todo: Create the SCSS for the footer  */
kult_of_pop()->print_styles( 'kult-of-pop-c-footer-social-media' );

?>

<!-- [ Social Media ] -->
<ul class="c-footer-social-media">
	<li class="c-footer-social-media_li">
		<a class="c-footer-social-media_link" href="#">
			<svg version="1.1" id="itunes-icon" class="c-footer-social-media_img c-footer-social-media_icon--itunes" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 385 385" style="enable-background:new 0 0 385 385;" xml:space="preserve">
				<path class="st0" d="M192.5,21.3C97.9,21.3,21.4,98,21.4,192.5s76.5,171.3,171.1,171.3s171.2-76.7,171.2-171.2 C363.7,98,287,21.3,192.5,21.3L192.5,21.3z M271.9,261.3c-3.2,13.6-13.5,21.2-27.3,23.8c-12.1,2.2-22.2,2.8-31.9-5 c-11.8-10-12-26.4-1.4-36.8c8.4-8,20.3-9.6,38-12.8c3-0.5,5.6-1.2,7.7-3.7c3.2-3.6,2.2-2,2.2-80.8c0-5.6-2.7-7.1-8.4-6.1 c-4,0.7-91.9,17.1-91.9,17.1c-5,1.1-6.7,2.6-6.7,8.3c0,116.1,0.5,110.8-1.2,118.5c-2.1,9-7.6,15.8-14.9,19.6 c-8.3,4.6-23.4,6.6-31.4,5.2c-21.4-4-28.9-28.7-14.4-42.9c8.4-8,20.3-9.6,38-12.8c3-0.5,5.6-1.2,7.7-3.7c5-5.7,0.9-127,2.6-133.7 c0.4-2.6,1.5-4.8,3.5-6.4c2.1-1.7,5.8-2.7,6.7-2.7c101-19,113.3-21.4,115.1-21.4c5.7-0.4,9,3,9,8.7 C272.8,264.3,273.3,255.1,271.9,261.3L271.9,261.3z M192.5,385C86.2,385,0,298.8,0,192.5S86.2,0,192.5,0S385,86.2,385,192.5 S298.8,385,192.5,385z"/>
			</svg>
		</a>
	</li>
	<li class="c-footer-social-media_li">
		<a class="c-footer-social-media_link" href="#">
			<svg version="1.1" id="twitter-icon" class="c-footer-social-media_img c-footer-social-media_icon--twitter" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
				<path class="st0" d="M459.4,151.7c0.3,4.5,0.3,9.1,0.3,13.6c0,138.7-105.6,298.6-298.6,298.6c-59.5,0-114.7-17.2-161.1-47.1 c8.4,1,16.6,1.3,25.3,1.3c49.1,0,94.2-16.6,130.3-44.8c-46.1-1-84.8-31.2-98.1-72.8c6.5,1,13,1.6,19.8,1.6c9.4,0,18.8-1.3,27.6-3.6 c-48.1-9.7-84.1-52-84.1-103v-1.3c14,7.8,30.2,12.7,47.4,13.3c-28.3-18.8-46.8-51-46.8-87.4c0-19.5,5.2-37.4,14.3-53 C87.4,130.9,165,172.5,252.1,177.1c-1.6-7.8-2.6-15.9-2.6-24c0-57.8,46.8-104.9,104.9-104.9c30.2,0,57.5,12.7,76.7,33.1 c23.7-4.5,46.5-13.3,66.6-25.3c-7.8,24.4-24.4,44.8-46.1,57.8c21.1-2.3,41.6-8.1,60.4-16.2C497.7,118.3,479.8,136.8,459.4,151.7 L459.4,151.7z"/>
			</svg>
		</a>
	</li>
	<li class="c-footer-social-media_li">
		<a class="c-footer-social-media_link" href="#">
		<svg xmlns="http://www.w3.org/2000/svg" id="youtube-icon" class="c-footer-social-media_img c-footer-social-media_icon--youtube" viewBox="0 0 576 512">
			<path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/>
		</svg>
		</a>
	</li>
	<li class="c-footer-social-media_li">
		<a class="c-footer-social-media_link c-footer-social-media_link--last" href="#">
			<svg xmlns="http://www.w3.org/2000/svg" id="facebook-icon" class="c-footer-social-media_img c-footer-social-media_icon--facebook" viewBox="0 0 448 512">
				<path d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z"/>
			</svg>
		</a>
	</li>
</ul>
