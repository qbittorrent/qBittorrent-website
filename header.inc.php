<?php
  //session_start();
  ob_start();

  $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="qBittorrent Official Website">
  <meta name="keywords" content="qBittorrent, torrent client, BitTorrent protocol, cross-platform, free and open-source software, GNU GPL, libtorrent-rasterbar, Qt, C++">
  <meta name="author" content="qBittorrent Development Team: https://github.com/qbittorrent">
  <meta name="robots" content="NOODP">
  <meta name="google-site-verification" content="2P14de1zV_NTk03Ebnc0wpPKWaeJoj7B9Tc_HtRkOfE">

  <title>qBittorrent Official Website</title>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" sizes="16x16 32x32 64x64">

  <!-- Main CSS -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

  <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
    <![endif]-->

  <link rel="dns-prefetch" href="http://git.qbittorrent.org">
  <link rel="dns-prefetch" href="http://bugs.qbittorrent.org">
  <link rel="dns-prefetch" href="http://wiki.qbittorrent.org">
  <link rel="dns-prefetch" href="http://forum.qbittorrent.org">
</head>

<body>
  <div id="main">
    <div id="header">
      <div class="container">
        <div id="brand">
          <div id="logo">
            <img src="img/qb_logo.png" alt="qBittorrent" style="margin: 0; padding: 0;" />
          </div>
          <div class="description">
            <h1><span>q</span>Bittorrent</h1>
            <p>Free & reliable P2P Bittorrent client</p>
          </div>
        </div>

        <div class="menu">
          <ul>
            <li><a class="<?php if ($activePage=="index") {echo "active" ; } ?>" href="/">Home</a></li>
            <li><a class="<?php if ($activePage=="news") {echo "active" ; } ?>" href="news.php">News</a></li>
            <li><a href="http://forum.qbittorrent.org">Forum</a></li>
            <li><a href="https://sourceforge.net/projects/qbittorrent/#screenshots">Screenshots</a></li>
            <li><a href="http://wiki.qbittorrent.org">Wiki</a></li>
            <li><a href="http://git.qbittorrent.org">Development</a></li>
            <li><a href="http://bugs.qbittorrent.org">Bugs</a></li>
            <li id="download-menu-button"><a href="download.php"><img class="download-icon" src="./img/download.svg"
                  alt="Download"><span> Download</span></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">
      <div id="content">
        <div class="stretcher" id="StretchHome">