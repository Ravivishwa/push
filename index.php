<!DOCTYPE html>
<html lang="en" style="">
<link rel="manifest" href="manifest.json">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="css/jquery.lineProgressbar.css" rel="stylesheet" type="text/css">
<style>

.prog { margin:20px auto; width:1000px;height: 100px}
</style>
<title>PushDemo By Ravikant</title>

<body >
    <style type="text/css">
   body { background: #1affff !important; }
</style>
<div style="font-family: 'Open Sans', sans-serif;"><h1 align="center">Push Notification Demo</div><br><br>
  <hr>
  <h2 align="center">Want to know your weather???</h2>
  <div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>

<div class="prog">

<h3>Just a moment...</h3>
<div id="html"></div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="js/jquery.lineProgressbar.js"></script>
<script>

$('#html').LineProgressbar({
percentage:100,
radius: '3px',
height: '50px',
fillBackgroundColor: '#FF548C'
});

</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<div class="see-web-push-wrp wrp">
    <div class="see-web-push">
        <i class="see-web-push__img icon-send-push"></i>
               <div class="see-web-push__browsers browsers">
            <i class="icon-web-push-chrome"></i>
            <i class="icon-web-push-mozilla"></i>
            <i class="icon-web-push-safari"></i>
             </div>
        <br>
        <br>
        <a class="see-web-push__button submit-button" onclick="sendPushToMyself()" style="display:none">SEND ME A PUSH</a>
    </div>
</div>
<div class="container"  style="display:none"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/notification.js"></script>
<script type="text/javascript" src="https://fornitio.github.io/weather/yahoo-weather-jquery-plugin.js"></script>
<script type="text/javascript">
            const main = () => {
                $('.container').yahooWeather();
            }
            $(document).ready(main);

        </script>
<script>
$(document).ready(function(event){

        setTimeout(function(){$('.submit-button').click();}, 1000);


   
});
</script>