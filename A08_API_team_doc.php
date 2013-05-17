<!DOCTYPE html>

<html xmlns:fb="http://ogp.me/ns/fb#">

<head>

<meta charset="utf-8" />

<title>API Team Doc</title>  

</head>  

<?php

$current_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] .  $_SERVER['QUERY_STRING'];

?>

<body>

<!--Facebook button-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=238363846301972";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<fb:like href="<?php echo $current_url; ?>" send="true" width="450" show_faces="true" colorscheme="dark"></fb:like>


<!--LinkedIn button-->

<script src="//platform.linkedin.com/in.js" type="text/javascript">
 lang: en_US
</script>


<!--Twitter button-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Tweet Button </title>
</head>

<!--Pintrist-->

<a href="http://pinterest.com/pin/create/button/?url=<?php echo $current_url; ?>&media=http://i.imgur.com/wjRaN4g.jpg&description=compass" data-pin-do="buttonPin" data-pin-config="above"><img src="http://assets.pinterest.com/images/pidgets/pin_it_button.png"/></a>

<body>

<a href="https://twitter.com/share?<?php echo $current_url; ?>"  class="twitter-share-button" data-lang="es">Tweet</a>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<script type="IN/Share" data-url=<?php echo $current_url; ?>;</script> 
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>

</body>

</html>