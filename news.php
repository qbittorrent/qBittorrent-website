<?php require_once('header.inc.php'); ?>

<h2>News</h2>

<?php
require_once('lib/helpers.php');
readMarkdown('news.md');

require_once('news.inc');

require_once('footer.inc.php');
