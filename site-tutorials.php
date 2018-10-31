<?php
/*
Plugin Name: WordPress Site Tutorials
Plugin URI: .
Description: Custom Tutorials Page for your WordPress Dashboard
Version: 0.0.1
Author: Mark Smallman
Author URI: https://macgraphic.co.uk
License: GPLv3
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	 die;
}

add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
	add_menu_page( 'Site Tutorials', 'Site Tutorials', 'edit_posts', 'myplugin/myplugin-admin-page.php', 'myplguin_admin_page', 'dashicons-format-video', 3 );
}

function myplguin_admin_page() {
	?>

	<head>
		<style>

			body {
				background-color: #e6e6e6;
			}

			h2 {
				color: #275da8;
				font-size: 2rem;
			}

			h3 {
				color: #275da8;
				font-size: 1.4rem;
			}

			.wrap ol li a {
				font-size: 1rem;
				margin-left: 1rem;
			}

			.wrap iframe {
				margin-bottom: 60px;
				max-width: 90%;
			}
			
			.sections .wrap,
			.topics-list {
				position: relative;
				margin-top: 20px;
				padding: 1em;
				min-width: 255px;
				max-width: 100%;
				background: #fff;
			}

			.wrap {
				border-bottom: 1px solid #e5e5e5;
			}

			.wrap p {
				font-size: 1rem;
			}

			.video {
				text-align: center;
			}

			section {
				text-align: center;
			}

			section:before {
				content: '';
				display: block;
				height: 50px;
				margin-top: -50px;
			}

			.wrap a.top-link {
				border: 1px solid #aaa;
				border-radius: 3px;
				padding: .25rem .5rem;
				font-size: .9rem;
				background: #f7f7f7;
			}

			.wrap a.top-link:hover {
				background: #fff;
				border-color: #e5e5e5;
				box-shadow: 1px 1px #ddd;
			}

			.wrap a.top-link svg {
				width: .8rem;
				height: .8rem;
				fill: #aaa;
			}

	</style>
</head>
	<div class="wrap">
		<div class="topics-list">
			<h2><?php bloginfo( 'name' ); ?>, WordPress Web Site Tutorials</h2>
			<p>Below are several walk-through videos that should help you add and edit site content, images and other media</p>
		</div>	
	</div>

	<div class="wrap">
		<div class="topics-list">
			<section id="list"><h3>Topics List</h3></section>
			<ol>
				<li><a href="#first">The WordPress dashboard, a guided tour.</a></li>
				<li><a href="#second">Posts, pages & the media library</a></li>
				<li><a href="#third">The custom post types within the site</a></li>
				<li><a href="#twelth">Appearance - editing the site menu</a></li>
				<li><a href="#thirteenth">Users</a></li>
				<li><a href="#fortenth">Tools - dealing with users data</a></li>
				<li><a href="#fiftenth">Theme Settings</a></li>
				<li><a href="#sixtenth">Optimising content for SEO</a></li>
			</ol>
		</div>
	</div>
	
	<div class="sections">
		
		<div class="wrap">
			<section id="first"><h3>The WordPress dashboard, a guided tour.</h3></section>
			<div class="video">
				<h3>Video will be added soon</h3>
			</div>
			<a class="top-link" href="#list"><?php esc_url( svg_icon( 'arrow-up' ) ); ?> Top</a>
		</div>

		<div class="wrap">
			<section id="second"><h3>Posts, pages & the media library</h3></section>
			<div class="video">
				<h3>Video will be added soon</h3>
			</div>
			<a class="top-link" href="#list"><?php esc_url( svg_icon( 'arrow-up' ) ); ?> Top</a>
		</div>

		<div class="wrap">
			<section id="third"><h3>The custom post types within the site</h3></section>
			<div class="video">
				<h3>Video will be added soon</h3>
			</div>
			<a class="top-link" href="#list"><?php esc_url( svg_icon( 'arrow-up' ) ); ?> Top</a>
		</div>

		<div class="wrap">
			<section id="twelth"><h3>Appearance - editing the site menu</h3></section>
				<div class="video">
					<h3>Video will be added soon</h3>
				</div>
				<a class="top-link" href="#list"><?php esc_url( svg_icon( 'arrow-up' ) ); ?> Top</a>
		</div>

		<div class="wrap">
			<section id="thirteenth"><h3>Users</h3></section>
				<div class="video">
					<h3>Video will be added soon</h3>
				</div>
				<a class="top-link" href="#list"><?php esc_url( svg_icon( 'arrow-up' ) ); ?> Top</a>
		</div>

		<div class="wrap">
			<section id="fortenth"><h3>Tools - dealing with users data</h3></section>
				<div class="video">
					<h3>Video will be added soon</h3>
				</div>
				<a class="top-link" href="#list"><?php esc_url( svg_icon( 'arrow-up' ) ); ?> Top</a>
		</div>

		<div class="wrap">
			<section id="fiftenth"><h3>Theme Settings</h3></section>
				<div class="video">
					<h3>Video will be added soon</h3>
				</div>
				<a class="top-link" href="#list"><?php esc_url( svg_icon( 'arrow-up' ) ); ?> Top</a>
		</div>

		<div class="wrap">
			<section id="sixtenth"><h3>Optimising content for SEO</h3></section>
				<div class="video">
					<h3>Video will be added soon</h3>
				</div>
				<a class="top-link" href="#list"><?php esc_url( svg_icon( 'arrow-up' ) ); ?> Top</a>
		</div>

	</div>	<!-- .sections -->

	<?php
}
