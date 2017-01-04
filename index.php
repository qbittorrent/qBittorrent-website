<?php require_once('header.inc.php'); ?>

<!--<h2>qBittorrent: An Advanced BitTorrent Client</h2>-->
<h3>About qBittorrent</h3>
<a href="download.php"><img src="img/QBt-download-150.png" alt="qBittorrent" style="float: left; margin-right: 10px; height: 115px;"/></a><p>The qBittorrent project aims to provide a Free Software alternative to µTorrent. Additionally, qBittorrent runs and provides the same features on all major platforms (Linux, Mac OS X, Windows, OS/2, FreeBSD).</p>
<p>qBittorrent is based on the Qt toolkit and <a href="http://www.libtorrent.org">libtorrent-rasterbar</a>.</p>
<br/>
<h3>Help qBittorrent</h3>
<p>qBittorrent is developed by <a href="team.php">volunteers</a> on their spare time. If you like this piece of software, please make a donation and help it survive.</p>
<p>Donation info <a href="donate">here</a>.</p>

<h3>Recommend qBittorrent</h3>
<!-- Facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="https://www.qbittorrent.org/" data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>
<br/><br/>
<!-- Google + -->
<script src="https://apis.google.com/js/platform.js" async defer></script>
<div class="g-plusone" data-annotation="inline"></div>
<br/><br/>
<!-- Twitter -->
<a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

<h3>qBittorrent Features</h3>
<ul>
  <li><b>Polished µTorrent-like User Interface</b></li>
  <li><b>Well-integrated and extensible Search Engine</b>
    <ul>
      <li>Simultaneous search in most famous BitTorrent search sites</li>
      <li>Per-category-specific search requests (e.g. Books, Music, Movies)</li>
    </ul>
  </li>
  <li><b>All Bittorrent extensions</b>
    <ul>
      <li>DHT, Peer Exchange, Full encryption, Magnet/BitComet URIs, ...</li>
    </ul>
  </li>
  <li><b>Remote control through a Web user interface</b>
    <ul>
      <li>Nearly identical to the regular UI, all in Ajax</li>
    </ul>
  </li>
  <li><b>Advanced control over trackers, peers and torrents</b>
    <ul>
      <li>Torrents queueing and prioritizing</li>
      <li>Torrent content selection and prioritizing</li>
    </ul>
  </li>
  <li><b>UPnP / NAT-PMP port forwarding support</b></li>
  <!--<li><b>Available in <a href="localization.php">~25 languages</a> (Unicode support)</b></li>-->
  <li><b>Available in <a href="https://www.transifex.com/projects/p/qbittorrent/">~49 languages</a> (Unicode support)</b></li>
  <li><b>Torrent creation tool</b></li>
  <li><b>Advanced RSS support with download filters (inc. regex)</b></li>
  <li><b>Bandwidth scheduler</b></li>
  <li><b>IP Filtering (eMule and PeerGuardian compatible)</b></li>
  <li><b>IPv6 compliant</b></li>
  <li><b>Sequential downloading (aka "Download in order")</b></li>
  <li><b>Available on most platforms: Linux, Mac OS X, Windows, OS/2, FreeBSD</b></li>
</ul>

<p>Go ahead and try qBittorrent, you won't regret it!</p>

<?php require_once('footer.inc.php');
