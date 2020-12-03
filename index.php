<?php
include 'navbar.html';?>


<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="The HTML5 Herald">
  <meta name="" content="SitePoint">
  <link rel="stylesheet" href="index.css">

</head>

<body id=body-main>

    <section id="hide-on-mobile">
        <div id="intro" class="flex-container-vertical">
            <div><h1 id=h1-main>Good day.</h1></div>


            <div class="flex-container-horizontal small-size-vertical">
                <div><img id="img-main" src="cute.jpg" title="Mike and Mocha"></div>

                <div>
                <p ><br><br><a class="intro-passage">Have you take your breakfast?</a><br><a class="intro-passage">Are you ready for today?</a><br>*Image cited from "Milk and Mocha Bear"</p>
                </div>
            </div>


            <div>
                <!-- <div><img src="profile.webp" title="Mike and Mocha"></div> -->

            </div>
        </div>
    </section>


    <section id="hide-on-pc">
        <div id="intro" class="flex-container-vertical">
            <div><h1 id=h1-main>Good day.</h1></div>


            <div class="flex-container-horizontal small-size-vertical">
                <div><img id="img-main" src="cute.jpg" title="Mike and Mocha"></div>

                <div>
                <p ><br><a class="intro-passage">Have you take your breakfast?</a><br><a class="intro-passage">Are you ready for today?</a><br>*Image cited from "Milk and Mocha Bear"</p>
                </div>
            </div>


            <div>
                <!-- <div><img src="profile.webp" title="Mike and Mocha"></div> -->

            </div>
        </div>
    </section>

</body>

<script type="text/javascript">
    document.getElementByClassName("big-screen").onclick = function() {

        document.getElementById("circle").style.display = "none";

    }

    document.getElementById("rounded").onclick = function() {

        document.getElementById("rounded").style.display = "none";

    }

    document.getElementById("square").onclick = function() {

        document.getElementById("square").style.display = "none";

    }
</script>


</html>
