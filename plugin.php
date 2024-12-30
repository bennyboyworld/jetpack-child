<?php
/*
 * Plugin Name:       Jetpack &#8211; WP Security, Backup, Speed, &amp; Growth Child Plugin
 * Plugin URI:        https://www.wordpressdeveloperlondon.com/jetpack-wp-security-backup-speed-growth/
 * Description:       Customised  Jetpack &#8211; WP Security, Backup, Speed, &amp; Growth WordPress plugin code (dependancy on Jetpack &#8211; WP Security, Backup, Speed, &amp; Growth plugin)
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            wordpressdeveloperlondon
 * Author URI:        https://www.wordpressdeveloperlondon.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       jetpack-child
 * Domain Path:       /languages
 * Requires Plugins:  jetpack
 */
 
 
/*
 * -----------------------------------------------------------------------------------------------------
 * Customised Jetpack &#8211; WP Security, Backup, Speed, &amp; Growth WordPress plugin code (dependancy on Jetpack &#8211; WP Security, Backup, Speed, &amp; Growth plugin)
 * -----------------------------------------------------------------------------------------------------
 */
  
 
/* 
 * WP plugin .css and .js files to enqueue AND WP plugin options page. If form option: 2 is set = respond
 */

if((get_option("wordpressdeveloperlondon_settingjetpack_child_95060")) != 1) 
{
	function wordpressdeveloperlondon_files_jetpack_child_95060()
	{
		$plugin_url = plugin_dir_url(__FILE__);

		wp_enqueue_style("jetpack_child_95060-stylesheet", $plugin_url . "css/style.css");
		wp_enqueue_script("jetpack_child_95060-script", $plugin_url . "js/scripts.js", array("jquery"), "1.0.0", true);
	}
	add_action("wp_enqueue_scripts", "wordpressdeveloperlondon_files_jetpack_child_95060", 80);
}


/* 
 * WP plugin options page. If form option: 2 is set = respond
 */

if(get_option("wordpressdeveloperlondon_setting_htmljetpack_child_95060") != 1)
{
	function plugin_sourcejetpack_child_95060()
	{
		if(is_home())
		{
			?>
			<div style="text-align:center;"><a href="https://www.wordpressdeveloperlondon.com">wordpressdeveloperlondon.com</a></div>
			<?php
		}
	}
	add_action("wp_footer", "plugin_sourcejetpack_child_95060", 9);
}


/* 
 * WP plugin options page settings
 */

function wordpressdeveloperlondon_register_settingsjetpack_child_95060() 
{ 
	register_setting("wordpressdeveloperlondon_options_pagejetpack_child_95060", "wordpressdeveloperlondon_settingjetpack_child_95060", "wdl_callbackjetpack_child_95060");
    register_setting("wordpressdeveloperlondon_options_pagejetpack_child_95060", "wordpressdeveloperlondon_setting_htmljetpack_child_95060", "wdl_callbackjetpack_child_95060");
}
add_action("admin_init", "wordpressdeveloperlondon_register_settingsjetpack_child_95060");


/* 
 * WP plugin options page menu 
 */

function wordpressdeveloperlondon_register_options_pagejetpack_child_95060() 
{
	add_options_page("Jetpack &#8211; WP Security, Backup, Speed, &amp; Growth Child Plugin Settings", "Jetpack &#8211; WP Security, Backup, Speed, &amp; Growth Child Plugin Settings", "manage_options", "wordpressdeveloperlondonjetpack_child_95060", "wordpressdeveloperlondon_register_options_page_formjetpack_child_95060");
}
add_action("admin_menu", "wordpressdeveloperlondon_register_options_pagejetpack_child_95060");


/*
 * WP Dashboard plugin settings page html
 */

function wordpressdeveloperlondon_register_options_page_formjetpack_child_95060()
{ 
?>
<div>
	<h1>Jetpack &#8211; WP Security, Backup, Speed, &amp; Growth Child Plugin Options</h1>
	<form method="post" action="options.php">
		<?php settings_fields("wordpressdeveloperlondon_options_pagejetpack_child_95060"); ?>
		<p><label><input size="10" type="checkbox" name="wordpressdeveloperlondon_settingjetpack_child_95060" value="1" <?php if((get_option("wordpressdeveloperlondon_settingjetpack_child_95060") == 1)) { echo " checked "; } ?> > Tick to disable the .css and .js plugin files<label></p>
        <p><label><input size="10" type="checkbox" name="wordpressdeveloperlondon_setting_htmljetpack_child_95060" value="1" <?php if((get_option("wordpressdeveloperlondon_setting_htmljetpack_child_95060") == 1)) { echo " checked "; } ?> > Tick to disable the author footer link</p>
		<?php submit_button(); ?>
	</form>
</div>
<?php
}

