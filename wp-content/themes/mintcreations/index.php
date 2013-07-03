<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Mint_Creations
 * @since Mint Creations 1.0
 */
get_header();
?>
<div id="parallaxHolder" >
	<div id="view1">
		<h1 class="logo"> MINT CREATIONS </h1>
		<h2>INNOVATIVE DEVELOPMENT</h2>
		<ul class="nav">
			<li class="green-circle" onclick="Parallax.navigateTo(1)"><p>ABOUT</p></li>
			<li class="green-circle" onclick="Parallax.navigateTo(2)"><p class="lower">PORTFOLIO</p></li>
			<li class="green-circle" onclick="Parallax.navigateTo(3)"><p>CONTACT</p></li>
			<li class="clearBoth"></li>
		</ul>
	</div>
	<div id="view2">
		<div class="contentHolder">
			
			<ul class="copy">
				<li>
					<p class="title">ABOUT</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>
					</p>
				<li>
					<p class="title">WHAT WE DO</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>
					</p>
				</li>
				<li></li>
				<li class="clearBoth"></li>
			</ul>
		</div>
	</div>
	<div id="view3"></div>
	<div id="view4"></div>
	</body>
	</html>

