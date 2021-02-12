<?php
include 'navbar.html'; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="web-dev.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>
<body>
  <div id="intro" class="flex-container-vertical">
    <div>
      <h1>Projects.</h1>
    </div>
    <div class="tooltip">
      <a class="project-passage animate__shakeX" href="https://syhue.com/progress-report">
        1) Progress Report 
      </a>
      <span class="tooltiptext">
        HTML, CSS, PHP, MySql Languages are used.
      </span>
    </div>

    <div class="tooltip">
      <a class="project-passage animate__shakeX" href="https://syhue.com/csv-database-convertor">
       2) CSV to Database Convertor 
      </a>
      <span class="tooltiptext"> 
        HTML, CSS, PHP, MySql Languages are used.
      </span>
    </div>    
    <div class="tooltip">
      <a class="project-passage animate__shakeX" href="https://syhue.com/angular-material-table">
        3) Mini Project involved Angular Framework 
      </a>
      <span class="tooltiptext">
        Basic usage of applying directives, services, angular materials. 
      </span>
    </div>
    <div class="tooltip">
      <a class="project-passage animate__shakeX" href="https://syhue.com/angular-learning-documentation">
        4) My Angular Learning Documentation
      </a>
    </div>
    <div class="tooltip">
      <a class="project-passage animate__shakeX" href="https://www.frontendmentor.io/solutions/rest-countries-api-A0I_Cg8bj">
        5) REST Countries API
      </a>
      <span class="tooltiptext">
        Frontend Mentors' Challenge.
      </span>
    </div>

  <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("images");
      if (n > x.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = x.length
      };
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      x[slideIndex - 1].style.display = "block";
    }
  </script>
</body>
</html>