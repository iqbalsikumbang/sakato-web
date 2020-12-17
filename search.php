<?php
    include 'dbh.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Search Page</title>
      <link rel="shortcut icon" href="sw.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.6.3/js/all.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#
property=5da3faeac90a76001276127f&product=inline-share-buttons" async="async"></script>
  <link rel="stylesheet" href="style3.css" />
  <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $(".menu-toggle").click(function () {
        $("nav").toggleClass("active");
      });
    });
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145825245-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-145825245-1");
  </script>
  <style>
    @media (max-width-700px) {
        .thumbnail {
            width: 250;!important
            height:200;!important
        }
    }
      
  </style>
</head>
<body>
<div class="big-logo">
        <img class="sakato-logo" src="img/sakato.png" alt="sakato-logo" />
    </div>
  <header>
    <nav class="active">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="News.html">News</a></li>
        <li class="sub-menu">
          <a href="boy-groups.html">Boy Group</a>
        </li>
        <li class="menu-item">
          <a href="girl-groups.html">Girl Group</a>
        </li>
        <li><a href="#connect">Contact</a></li>
        <li>
            <form style="margin:5px auto;" class="menu-item" action="search.php" method="POST">
                <input type="text" style="width:150px;" name="search">
                <button type="submit" name="submit-search">Search</button>
            </form>
        </li>
      </ul>
    </nav>
    <div class="menu-toggle"><i class="fas fa-bars"></i></div>
  </header>
<h2 class="well text-center">Search Page</h2>
<div class="container">    
<div class="row">
    <?php
        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);

            if ($queryResult > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='col-md-6 col-sm-12 col-lg-4' style='background:#83de28;border:2px dotted #0fba37;margin:10px auto;padding:10px auto;'><div class='well'><a href=".$row['a_link'].">
                    <img class='thumbnail' style='margin:10px auto;' width='304' height='236' src=".$row['a_img']." />
                        <h1>".$row['a_title']."</h1>
                        <p>".$row['a_text']."</p>
                        </a>
                    </div></div>";
                }
            } else {
                echo "<h1 style='display:block;margin:20px auto;'>There are no results matching your search!</h1>";
            }
        }
    ?>
</div>
</div>

<div class="z2 slider">
    <div class="sharethis-inline-reaction-buttons"></div>
    <div class="sharethis-inline-share-buttons"></div>
    <div class="fb-comments" data-href="http://www.sakato.xyz/B.Idrug.html" data-width="device-width" data-numposts="5"></div>
    <a class="ads" href="//ofgogoatan.com/afu.php?zoneid=3192993" target="_blank"><img style="width:200px;height:75px;display:block;margin:auto;" src="misc/download.gif"></a>
<div id="SC_TBlock_739593" class="SC_TBlock">loading...</div> </div>

<footer>
    <div class="container-fluid padding" id="connect">
      <div class="row text-center padding">
        <div class="col-12">
          <h2>Connect</h2>
        </div>
        <div class="col-12 social padding">
          <a href="https://www.facebook.com/sakato.web.1"><i class="fab fa-facebook"></i></a>
          <a href="https://twitter.com/sakatoweb"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/sakatoweb/"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <div class="container-fluid padding">
      <div class="row text-center">
        <div class="col-12">
          <h3>Our Social Media</h3>
          <p></p>
        </div>
        <hr class="light-100" />
        <div class="col-12">
          <marquee class="es">&copy; Sakato.xyz </marquee>
        </div>
      </div>
    </div>
  </footer>
  <script type="text/javascript">
    var infolinks_pid = 3211214;
    var infolinks_wsid = 0;
  </script>
  <script type="text/javascript" src="//resources.infolinks.com/js/infolinks_main.js"></script>
  <script type="text/javascript" id="cookieinfo" src="//cookieinfoscript.com/js/cookieinfo.min.js"></script>
  <script>
var els = document.querySelectorAll(".ads");
var smart_link = "//ofgogoatan.com/afu.php?zoneid=3192993";
for (var i = 0; i < els.length; i++) {
    els[i].onclick = function() { window.open(smart_link, "ad"); };
}
</script>
<script type="text/javascript">
    (sc_adv_out = window.sc_adv_out || []).push({
        id : "739593",
        domain : "n.pclicc1.com"
    });
</script>
<script type="text/javascript" src="//st-n.pclicc1.com/js/a.js"></script>
<script type="text/javascript" src="//ofgogoatan.com/apu.php?zoneid=3193040" async data-cfasync="false"></script>
</body>
</html>