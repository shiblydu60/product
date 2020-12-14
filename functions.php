<?php
function pre_change_banner()
{
    ?>
<style type="text/css">
div.cl_div_banner {
	width: 100%;
	height: 225px;
    background: url(<?php echo get_theme_mod('settings_banner'); ?>);
	background-repeat: no-repeat;
	/*background-size: cover;*/
	background-size: 100% 100% !important;
}
</style>
<?php
}

add_action("wp_footer", "pre_change_banner");
?>