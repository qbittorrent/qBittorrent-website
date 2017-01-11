<?php
  //session_start();
  ob_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="qBittorrent Official Website"/>
    <meta name="keywords" content="qBittorrent, torrent client, BitTorrent protocol, cross-platform, free and open-source software, GNU GPL, libtorrent-rasterbar, Qt, C++"/>
    <meta name="author" content="qBittorrent Development Team: https://github.com/qbittorrent"/>

    <title>qBittorrent official website</title>

    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
    <![endif]-->

    <link rel="prefetch" href="download.php">
    <link rel="preconnect" href="http://git.qbittorrent.org">
    <link rel="preconnect" href="http://bugs.qbittorrent.org">
    <link rel="preconnect" href="http://wiki.qbittorrent.org">
    <link rel="dns-prefetch" href="http://forum.qbittorrent.org">
  </head>
  <body>
    <div>
      <a href="download.php" id="topleft"></a>
    </div>

    <div id="MainBox">
      <div id="LogoChris">
        <img src="img/qb_newbanner.jpg" alt="qBittorrent" style="margin: 0; padding: 0;"/>
      </div>

      <div class="menu">
        <ul>
          <li class="first"><a href="index.php">Home</a></li>
          <li><a href="news.php">News</a></li>
          <li><a href="http://git.qbittorrent.org">Develop</a></li>
          <li><a href="download.php">Download</a></li>
          <li><a href="https://sourceforge.net/projects/qbittorrent/#screenshots">Screenshots</a></li>
          <li><a href="http://bugs.qbittorrent.org">Bugs</a></li>
          <li><a href="http://wiki.qbittorrent.org">Wiki</a></li>
          <li><a href="http://forum.qbittorrent.org">Forum</a></li>
        </ul>
      </div>

      <div class="wrapper">
        <div class="wrapper-top">
          <div class="wrapper-bottom">
            <div id="content">
              <div class="stretcher" id="StretchHome">
