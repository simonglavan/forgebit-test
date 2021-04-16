<?php

/**
 * Plugin Name:       WE Dev Js GSAP All Free
 * Plugin URI:        https://webevolvement.com
 * Description:       Loads GSAP core and all free plugins for development purpose.
 * Version:           0.1
 * Requires at least: 5.2
 * Requires PHP:      5.2
 * Author:            Simon Glavan
 * Author URI:        https://webevolvement.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       we-dev-js-gsap-all-free
 * Domain Path:       /languages
 */

 function we_dev_js_gsap_all_free() {
    wp_enqueue_script( 'dev-plugin-js-gsap-core', plugins_url('js/gsap.min.js', __FILE__), array(), _S_VERSION, true );
    wp_enqueue_script( 'dev-plugin-js-gsap-ease-pack', plugins_url('js/EasePack.min.js', __FILE__), array(), _S_VERSION, true );
    wp_enqueue_script( 'dev-plugin-js-gsap-easel', plugins_url('js/EaselPlugin.min.js', __FILE__), array(), _S_VERSION, true );
    wp_enqueue_script( 'dev-plugin-js-gsap-draggable', plugins_url('js/Draggable.min.js', __FILE__), array(), _S_VERSION, true );
    wp_enqueue_script( 'dev-plugin-js-gsap-css-rule', plugins_url('js/CSSRulePlugin.min.js', __FILE__), array(), _S_VERSION, true );
    wp_enqueue_script( 'dev-plugin-js-gsap-scroll-to', plugins_url('js/ScrollToPlugin.min.js', __FILE__), array(), _S_VERSION, true );
    wp_enqueue_script( 'dev-plugin-js-gsap-scroll-trigger', plugins_url('js/ScrollTrigger.min.js', __FILE__), array(), _S_VERSION, true );
    wp_enqueue_script( 'dev-plugin-js-gsap-scroll-text', plugins_url('js/TextPlugin.min.js', __FILE__), array(), _S_VERSION, true );
    wp_enqueue_script( 'dev-plugin-js-gsap-scroll-pixi', plugins_url('js/PixiPlugin.min.js', __FILE__), array(), _S_VERSION, true );
    wp_enqueue_script( 'dev-plugin-js-gsap-scroll-motion-path', plugins_url('js/MotionPathPlugin.min.js', __FILE__), array(), _S_VERSION, true );
 }

 add_action('wp_enqueue_scripts', 'we_dev_js_gsap_all_free');