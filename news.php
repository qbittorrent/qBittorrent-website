<?php require_once('header.inc.php'); ?>

<h2>News</h2>
<!-- Quick navigation menu -->
<h4><center>Quick Jump</center></h4>
<div id="paginationdiv" class="pagination">
        <a href="#v4.0.0">v4.0.0</a>
        <a href="#v3.3.16">v3.3.16</a>
        <a href="#v3.0.0">v3.0.0</a>
        <a href="#v2.9.11">v2.9.11</a>
        <a href="#v2.0.0">v2.0.0</a>
</div>
<button onclick="topFunction()" id="TopBtn" title="Go to top">^</button> 

<script>
//Get the button:
mybutton = document.getElementById("TopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
<?php
// starting at 2016/12/27, news are written in markdown format
require_once('lib/helpers.php');
readMarkdown('news.md');

// earlier news still retain its original format
require_once('old_news.inc'); ?>


<?php
require_once('footer.inc.php');
