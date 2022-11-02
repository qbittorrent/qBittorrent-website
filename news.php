<?php require_once 'header.inc.php'; ?>

<h2>News</h2>

<?php
// starting at 2016/12/27, news are written in markdown format
require_once 'lib/helpers.php';
readMarkdown('news.md');

// earlier news still retain its original format
require_once 'old_news.inc';

require_once 'footer.inc.php';
