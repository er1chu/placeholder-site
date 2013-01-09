<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Eric Hu — mail@erichu.info</title>
    <link rel="alternate" type="application/atom+xml" href="@root_path/?/feed/">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen"> 
    <!-- 
        Vomimage is open source, fork it at http://github.com/raphaelbastide/Vomimage/
    -->
  </head>
  <body id="vomimage">
    <div id="flyer">
       <a id="name" href="http://twitter.com/_erichu" target="_blank">Eric Hu</a> : <a href="mailto:erichu.info">mail@erichu.info</a><br/><br />

        New site coming soon.<br />
        <button id="feed">Click <u>here</u> for some random images.</button><br /><br />
        Or view an archived version of the <a href="http://cargocollective.com/hu">old site</a>.
    </div>

    <?php
    // Directory where images are
    $directory = "images/";
    
    $images = glob($directory."{*.jpg,*.jpeg,*.gif,*.png,*.svg}", GLOB_BRACE);
    
    // Sorting the array
    natsort($images);
    
    // Writing an img tag with respective height and width
    foreach ($images as $img) {
        echo "<img data-src='$img' width='$width' height='$height' /> \n";
    }
    ?>
    <p>
    <a href="https://github.com/er1chu/placeholder-site">Fork me on Github</a>
    </p>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="vomimage.js" type="text/javascript" charset="utf-8"></script>
    <meta name="google-site-verification" content="uzpYgIJ7i-Iy2YmC5AMaFmAI16e-_dth34JS6btmtx4" />
    <script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
  </body>
</html>