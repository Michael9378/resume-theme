<?php 	/*
		* Dynamic Styles for pages
		* Has inline scripts that pull custom styles to override regular style sheet
		*/
?>

<?php 
$pd = get_field("primary_dark");
$pl = get_field("primary_light");
$sd = get_field("secondary_dark");
$sl = get_field("secondary_light");

$fz = get_field("font_size");
$fp = get_field("font_primary");
$fs = get_field("font_secondary");
?>

<!-- Dynamic styles from custom field -->


<style>
@import url('https://fonts.googleapis.com/css?family=<?php echo $fp; ?>:400,400i,700|<?php echo $fs; ?>:400,700');
<?php
// sanitize font names
$fp = str_replace( "+", " ", $fp );
$fs = str_replace( "+", " ", $fs );
?>

body {
  font-family: "<?php echo $fp; ?>", sans-serif;
  font-size: <?php echo $fz; ?>; }

a {
  color: <?php echo $pd; ?>;}
  a:hover, a:focus {
    color: <?php echo $pl; ?>; }
  a:visited {
    color: <?php echo $sd; ?>; }

h1, h2, h5 {
  font-family: "<?php echo $fs; ?>", serif; }

hr, input, textarea, .gfield input, .gfield textarea {
  border-color: <?php echo $pl; ?>;}

* {outline-color: <?php echo $pl; ?>!important;}

button, html input[type=button], input[type=reset], input[type=submit] {
  border-color: <?php echo $pd; ?>;
  color: <?php echo $pd; ?>;}
  button:hover, button:focus, html input[type=button]:hover, html input[type=button]:focus, input[type=reset]:hover, input[type=reset]:focus, input[type=submit]:hover, input[type=submit]:focus {
    background-color: <?php echo $pd; ?>; }
  button.alt, html input[type=button].alt, input[type=reset].alt, input[type=submit].alt {
    background-color: <?php echo $pd; ?>; }
    button.alt:hover, button.alt:focus, html input[type=button].alt:hover, html input[type=button].alt:focus, input[type=reset].alt:hover, input[type=reset].alt:focus, input[type=submit].alt:hover, input[type=submit].alt:focus {
      border-color: <?php echo $pd; ?>;
      color: <?php echo $pd; ?>;}

  .general-section.alt {
    background-color: <?php echo $pd; ?>; }
    .general-section.alt a {
      color: <?php echo $pl; ?>; }

  border-color: <?php echo $pl; ?>; }
  .scroll-menu a {
    background: <?php echo $ds; ?>; }
  .scroll-menu a:hover, .scroll-menu a.active {
    background: <?php echo $pl; ?>; }
	
</style>