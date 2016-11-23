<!-- Yeah, it's exactly what it looks like.  -->

<?php
function ie_stopper()
{
    if (isset($_SERVER['HTTP_USER_AGENT']) &&
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        return true;
    else
        return false;
}
?>

<?php  if (ie_stopper()) {  ?>
Hi there friend! It seems you are using Internet Explorer. Tell Windows ME that we miss it. Also, how about you use a real <a href="https://www.mozilla.org/en-US/firefox/new/">browser?</a>? Internext Exlorer is a terrible proprietary browser! Join us here in the free software world! <br/>
<?php }  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Credits</title>
  <link rel="stylesheet" property="stylesheet" href="css/styles.css" type="text/css" />
</head>
  <body>
    <div id="pageContainer">
      <header>
        <h1>Credits</h1>
      </header>

      <section class="content">
        <h2>Some Thank Yous...</h2>
        <p>I would like to thank Starbucks for giving me some great coffee all these years (and wifi, how I still have't been blacklisted at locations for data usuage is beyond me)</p>
        <p>I also wanna thank <a href="https://github.com/svcastaneda">Saundra Castaneda👀 </a> for not being lame, being a pretty cool friend, and for actually teaching me some great CSS tips. I mentioned it before, I am not a front end dev. I'd rather spend time writing passive aggressive PHP scripts. </p>
        <p>Anyway, have a nice holiday.</p>
      </section>
    </div>

    <footer>
      <a href ="https://www.gnu.org/licenses/lgpl-3.0.en.html">Legal</a> | <a href="https://github.com/SubSeven57/semesterProjects">Github</a> | <a href="credits.html">Credits</a>
    </footer>

  </body>
</html>
