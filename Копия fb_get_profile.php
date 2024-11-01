<?
$wp_load = realpath("../../../wp-load.php");
if(!file_exists($wp_load)) {
  $wp_config = realpath("../../../wp-config.php");
  if (!file_exists($wp_config)) {
      exit("Can't find wp-config.php or wp-load.php!!");
  } else {
      require_once($wp_config);
  }
} else {
  require_once($wp_load);
}
?>
<?

/*echo '<div class="app_img" id="show_'.$_GET[id].'" >
<img id="imgshow_'.$_GET[id].'" style="float:left; width:200px;" src="https://graph.facebook.com/'.$_GET[id].'/picture?type=large" />

</div> <!-- #show_-->

';*/

echo '
<img id="imgshow_'.$_GET[id].'" style=" width:200px;" src="https://graph.facebook.com/'.$_GET[id].'/picture?type=large" />



';

?>