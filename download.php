<?php require_once('header.inc.php'); ?>

<script type="text/javascript">
  var displayed = null;
  var showSelectedSystem = function(selectElem) {
    if(displayed) {
       $(displayed).addClass("invisible");
       displayed = null;
    }
    var cur_os = selectElem.get("value");
    if(selectElem.get("id") == "OSSelect") {
       if(cur_os == "emptyOS") {
          $("distroDiv").addClass("invisible");
          return;
       }
       if(cur_os == "linux") {
           $("distroDiv").set("value", "emptyDist");
          $("distroDiv").removeClass("invisible");
          return;
       }
       displayed = cur_os+"Div";
       $("distroDiv").addClass("invisible");
       $(displayed).removeClass("invisible");
       return;
    }
    if(selectElem.get("id") == "distroSelect") {
      if(cur_os != "emptyDist") {
         displayed = cur_os+"Div";
         $(displayed).removeClass("invisible");
      }
      return;
    }
  }
</script>

<h2>Downloads</h2>
<h3>Public key for PGP signing</h3>
<p>Starting from v3.3.4 all source tarballs and binaries are signed.<br />
The key currently used is 4096R/<a href="https://pgp.mit.edu/pks/lookup?op=get&search=0x6E4A2D025B7CC9A2">5B7CC9A2</a> with fingerprint <code>D8F3DA77AAC6741053599C136E4A2D025B7CC9A2</code>.<br />
You can also download it from <a href="https://github.com/qbittorrent/qBittorrent/raw/master/5B7CC9A2.asc">here</a>.<br /></p>
<b>PREVIOUSLY</b> the following key was used to sign the v3.3.4 source tarballs and v3.3.4 Windows installer <b>only</b>: 4096R/<a href="https://pgp.mit.edu/pks/lookup?op=get&search=0xA1ACCAE4520EC6F6">520EC6F6</a> with fingerprint <code>F4A5FD201B117B1C2AB590E2A1ACCAE4520EC6F6</code>.<br />

<h3>Windows XP / Vista / 7 / 8 / 10</h3>
<img src="img/winlogo.png" alt="Windows" style="float: left; width: 100px; margin-right: 5px;"/><br/>
<p style="padding-left: 120px">Link: <a href="https://www.fosshub.com/qBittorrent.html">qBittorrent v3.3.10 32-bit and 64-bit installers and PGP signature</a> (Stable - FossHub)</p>
<p style="padding-left: 120px;font-size:75%">Link: <a href="https://sourceforge.net/projects/qbittorrent/files/qbittorrent-win32/qbittorrent-3.3.10/qbittorrent_3.3.10_setup.exe/download">qBittorrent v3.3.10 32-bit installer</a> / <a href="https://sourceforge.net/projects/qbittorrent/files/qbittorrent-win32/qbittorrent-3.3.10/qbittorrent_3.3.10_setup.exe.asc/download">PGP signature</a> (Stable - SourceForge)</p>
<p style="padding-left: 120px;font-size:75%">Link: <a href="https://sourceforge.net/projects/qbittorrent/files/qbittorrent-win32/qbittorrent-3.3.10/qbittorrent_3.3.10_x64_setup.exe/download">qBittorrent v3.3.10 64-bit installer</a> / <a href="https://sourceforge.net/projects/qbittorrent/files/qbittorrent-win32/qbittorrent-3.3.10/qbittorrent_3.3.10_x64_setup.exe.asc/download">PGP signature</a> (Stable - SourceForge)</p>
<ul style="padding-left: 160px">
<li>Libtorrent: 1.0.10+gita166c3f70921</li>
<li>Qt: 5.7.1</li>
<li>Boost: 1.62.0</li>
<li>32-bit SHA-1 Checksum: 26eff6be73a1055e85eb1a09ebe488c5c60eb095</li>
<li>64-bit SHA-1 Checksum: 1a1a101a575af62c2d2c8b7ada23fc998b99d091</li>
</ul>
<p><b>64-bit NOTICE:</b> The 64-bit version is compatible with Windows Vista+. Also you <b>might</b> experience increased memory usage compared to the 32-bit version.</p>
<!--<p style="padding-left: 120px">Link: <a href="http://sourceforge.net/projects/qbittorrent/files/qbittorrent-unstable/qbittorrent_3.0.0rc5_setup.exe/download">qBittorrent v3.0.0rc5 installer</a> (Unstable)</p>
<ul style="padding-left: 160px">
<li>Based on libtorrent v0.16.1 (with uTP support)</li>
<li>SHA-1 Checksum: c462b48e4dc4646408e5cafcdd3eb762aecf77cb</li>
</ul>-->
<br/>

<h3>Mac OS X Lion / Mountain Lion / Mavericks / Yosemite / El Capitan / Sierra</h3>
<img src="img/macoslogo.png" alt="Mac OS" style="float: left; width: 100px; margin-right: 5px;"/><br/>
<p style="padding-left: 120px">Link: <a href="https://www.fosshub.com/qBittorrent.html">qBittorrent v3.3.10 (DMG and PGP signature)</a> (Stable - FossHub)</p>
<p style="padding-left: 120px;font-size:75%">Link: <a href="https://sourceforge.net/projects/qbittorrent/files/qbittorrent-mac/qbittorrent-3.3.10/qbittorrent-3.3.10.dmg/download">qBittorrent v3.3.10</a> / <a href="https://sourceforge.net/projects/qbittorrent/files/qbittorrent-mac/qbittorrent-3.3.10/qbittorrent-3.3.10.dmg.asc/download">PGP signature</a> (Stable - SourceForge)</p> (Stable - SourceForge)</p>
<ul style="padding-left: 160px">
    <li>Libtorrent: 1.0.10</li>
    <li>Qt: 5.7.0</li>
    <li>Boost: 1.62.0</li>
	<li>SHA-1 Checksum: 0c44069c998d1f70e889408c6da4aea1e6387fb5</li>
</ul>
<!--<ul style="padding-left: 160px">
<li>Based on libtorrent v0.16.12 (with uTP support) and Qt 4.8.5</li>
<li>SHA-1 Checksum: bc0421cf2481e3740d1522689bd90b0c626a8544</li>
</ul>-->
<!--<p style="padding-left: 120px">Link: <a href="http://sourceforge.net/projects/qbittorrent/files/qbittorrent-unstable/qbittorrent-3.0.0rc5.dmg/download">qBittorrent: v3.0.0rc5</a> (Unstable)</p>
<ul style="padding-left: 160px">
<li>Based on libtorrent v0.16.1+svn.r7135 (with uTP support) and Qt 4.8.1</li>
<li>SHA-1 Checksum: 31d2251c01db66daefced9282e9533bb6c373f0d</li>
</ul>-->
<br/>

<h3>Source Tarballs</h3>
<img src="img/tar-logo.jpg" alt="Source tarball" style="float: left; width: 100px; margin-right: 5px;"/><br/>
<p style="padding-left: 120px">
Link: qBittorrent v3.3.9
<a href="https://sourceforge.net/projects/qbittorrent/files/qbittorrent/qbittorrent-3.3.9/qbittorrent-3.3.9.tar.gz/download">TAR.GZ</a>(<a href="https://sourceforge.net/projects/qbittorrent/files/qbittorrent/qbittorrent-3.3.9/qbittorrent-3.3.9.tar.gz.asc/download">PGP signature</a>) 
/
<a href="https://sourceforge.net/projects/qbittorrent/files/qbittorrent/qbittorrent-3.3.9/qbittorrent-3.3.9.tar.xz/download">TAR.XZ</a>(<a href="https://sourceforge.net/projects/qbittorrent/files/qbittorrent/qbittorrent-3.3.9/qbittorrent-3.3.9.tar.xz.asc/download">PGP signature</a>)   
(Stable)</p>
<!--<p style="padding-left: 120px">Link: qBittorrent v3.0.0rc5 (unstable) 
<a href="http://downloads.sourceforge.net/project/qbittorrent/qbittorrent-unstable/qbittorrent-3.0.0rc5.tar.gz?use_mirror=master">TAR.GZ</a>
/
<a href="http://downloads.sourceforge.net/project/qbittorrent/qbittorrent-unstable/qbittorrent-3.0.0rc5.tar.xz?use_mirror=master">TAR.XZ</a>
</p>-->
<p style="padding-left: 120px">Link: <a href="https://github.com/arvidn/libtorrent/releases/download/libtorrent-1_0_10/libtorrent-rasterbar-1.0.10.tar.gz">libtorrent-rasterbar v1.0.10</a> (Stable)</p>
<br/>
<h3>Other Binary Packages</h3>
<p>Please select your operating system:
<select id="OSSelect" onchange="showSelectedSystem(this)">
  <option value="emptyOS" selected>Choose...</option>
  <option value="linux">Linux</option>
  <option value="freebsd">FreeBSD</option>
  <option value="os2">eComStation (OS/2)</option>
  <option value="haiku">Haiku</option>
</select> </p>
<script type="text/javascript">
  $("OSSelect").set("value", "emptyOS");
</script>
<div id="distroDiv" class="invisible">
  <p>Please select your Linux distribution:
  <select id="distroSelect" onchange="showSelectedSystem(this)">
    <option value="emptyDist" selected>Choose...</option>
    <option value="ubuntu">Ubuntu</option>
    <option value="debian">Debian</option>
    <option value="fedora">Fedora</option>
    <option value="opensuse">OpenSuse</option>
    <option value="gentoo">Gentoo</option>
    <option value="archlinux">ArchLinux</option>
    <option value="mandriva">Mandriva</option>
    <option value="mageia">Mageia</option>
    <option value="slackware">Slackware</option>
    <option value="altlinux">Alt Linux</option>
    <option value="agilialinux">AgiliaLinux</option>
    <option value="blackpanther">blackPanther OS</option>
    <option value="pardus">Pardus</option>
  </select></p>
</div>

<div id="ubuntuDiv" class="invisible">
<h4>Ubuntu packages</h4>
<img src="img/ubuntulogo.png" alt="Ubuntu" style="float: left; margin-right: 5px;"/><p>qBittorrent is now available in official Ubuntu repositories since v9.04 "Jaunty".
<p>More up-to-date packages are published on our <a href="https://launchpad.net/~qbittorrent-team/+archive/ubuntu/qbittorrent-stable">stable</a>
and <a href="https://launchpad.net/~qbittorrent-team/+archive/ubuntu/qbittorrent-unstable">unstable</a> PPAs.
<br>The <b>stable</b> PPA supports Ubuntu 12.04 LTS, 14.04 LTS, 14.10 and 15.04.
<br>The <b>unstable</b> PPA supports Ubuntu 14.04 LTS, 14.10 and 15.04.</p>
<h5>Quick instructions</h5>
<p>To use these PPAs please use the following command and make sure your version is supported:</p>
<div class="codePart" style="width: 500px;">
<b># qBittorrent Stable</b><br/>
sudo add-apt-repository ppa:qbittorrent-team/qbittorrent-stable<br/><br/>
<b># or qBittorrent Unstable</b><br/>
sudo add-apt-repository ppa:qbittorrent-team/qbittorrent-unstable
</div>
<p>Then install qBittorrent by doing this:</p>
<div class="codePart" style="width: 500px;">
sudo apt-get update &amp;&amp; sudo apt-get install qbittorrent
</div>
</div>

<div id="debianDiv" class="invisible">
<h4>Debian packages</h4>
<img src="img/debianlogo.png" alt="Debian" style="float: left; margin-right: 5px;"/><p>qBittorrent and libtorrent-rasterbar are now officially included in Debian. Packages are maintained by <a href="mailto:cristian.debian@gmail.com">Cristian Greco</a>. See this <a href="https://packages.debian.org/search?keywords=qbittorrent&searchon=names&suite=all&section=all">page</a> for more information.</p>
</div>

<div id="mandrivaDiv" class="invisible">
<h4>Mandriva Linux packages</h4>
<img src="img/mandrivalogo.png" alt="Mandriva" style="float: left; margin-right: 5px;"/><p>qBittorrent is currently officially included in Mandriva Cooker. You can find more information <a href="http://doc4.mandriva.org/bin/view/d4/component/qbittorrent?d=cooker">here</a>.
</p>
</div>

<div id="mageiaDiv" class="invisible">
<h4>Mageia packages</h4>
<img src="img/mageia.png" alt="Mageia" style="float: left; margin-right: 5px;"/><p>qBittorrent is currently packaged in the Mageia official repositories.
It is packaged by <a href="mailto:ahmad@mageia.org">Ahmad Samir</a>. To install it, make
sure the online repositories are configured correctly then install it
either:</p>
<ul>
<li>As root from terminal: 'urpmi qbittorrent' OR</li>
<li>Using rpmdrake (aka "Install &amp; remove software")</li>
</ul>
</div>

<div id="gentooDiv" class="invisible">
<h4>Gentoo ebuilds</h4>
<img src="img/gentoo.png" alt="Gentoo" style="float: left; margin-right: 5px;"/>qBittorrent is officially available in portage. You can install it easilly on your system using emerge command. These ebuilds are maintained by <a href="mailto:hwoarang@gentoo.org">Markos Chandras</a>. See <a href="https://packages.gentoo.org/packages/net-p2p/qbittorrent">this page</a> for more information.
</div>

<div id="opensuseDiv" class="invisible">
<h4>OpenSuse packages</h4>
<img src="img/opensuse.png" alt="openSUSE" style="float:left; margin-right:5px;"/><p>qBittorrent has been in the OpenSuse official repository since v11.3. <br/>
<br/>
One-click install <a href="https://software.opensuse.org/package/qbittorrent">here</a>.</p>
</div>

<div id="fedoraDiv" class="invisible">
<h4>Fedora packages</h4>
<img src="img/fedoralogo.gif" alt="Fedora" style="float: left; margin-right: 5px; width: 65px;"/><p>qBittorrent is officially packaged on Fedora. RPM packages are maintained by <a href="mailto:leigh123linux@googlemail.com">Leigh Scott</a>.</p>
<p>See this <a href="https://admin.fedoraproject.org/pkgdb/package/qbittorrent/">page</a> for more information.</p>
</div>

<div id="slackwareDiv" class="invisible">
<h4>Slackware scripts</h4>
<img src="img/slackware.png" alt="Slackware" style="float: left; margin-right: 5px; width: 65px;"/><p>qBittorrent is available for Slackware through <a href="https://slackbuilds.org/">slackbuilds.org</a>. The slackbuild script is maintained by <a href="mailto:info@davidwoodfall.co.uk">David Woodfall</a>. See this <a href="https://slackbuilds.org/repository/13.0/network/qbittorrent/">page</a> for more information.</p>
<p><a href="mailto:alien@slackware.com">Eric Hameleers</a> is also maintaining binary packages for slackware. Those are available <a href="http://slackware.com/~alien/slackbuilds/qbittorrent/">there</a>.</p>
</div>

<div id="archlinuxDiv" class="invisible">
<h4>ArchLinux packages</h4>
<img src="img/archlinux.png" alt="ArchLinux" style="float: left; margin-right: 5px; width: 65px;"/><p>qBittorrent is present in the unofficial Arch Linux User Repository(AUR).
These packages are maintained by community members.<br/>
You can find more information <a href="https://aur.archlinux.org/packages.php?K=qbittorrent">here</a>.</p>
</div>

<div id="altlinuxDiv" class="invisible">
<h4>Alt Linux packages</h4>
<img src="img/altlinux.gif" alt="Alt Linux" style="float: left; margin-right: 5px; width: 65px;"/>qBittorrent is officially packaged on <a href="http://www.altlinux.com">Alt Linux</a>. These packages are maintained by <a href="http://sisyphus.ru/en/packager/swi">Alexey Morsov</a>. Packages are available <a href="http://sisyphus.ru/en/srpm/Branch5/qbittorrent/">here</a>. To install, simply type the following commands:
<div class="codePart" style="width:540px; margin:10px 10px 10px 5px; padding:5px;">
sudo apt-get update &amp;&amp; sudo apt-get install qbittorrent
</div>
</div>

<div id="agilialinuxDiv" class="invisible">
<h4>AgiliaLinux packages</h4>
<img src="img/agilialinux.png" alt="AgiliaLinux" style="float: left; margin-right: 5px; width: 65px;"/>qBittorrent is officially packaged on <a href="http://www.agilialinux.ru/">AgiliaLinux</a>. Packages are available <a href="http://packages.agilialinux.ru/search.php?lname=qbittorrent&version=&arch=&build=&hasfile=&which=&desc=">here</a>. To install, simply type the following command:
<div class="codePart" style="width:540px; margin:10px 10px 10px 5px; padding:5px;">
mpkg-install qbittorrent
</div>
</div>

<div id="blackpantherDiv" class="invisible">
<h4>blackPanther OS packages</h4>
<img src="img/blackPanther-dark.png" alt="blackPanther OS" style="float: left; margin-right: 5px; width: 65px;"/><p>qBittorrent is officially shipped on <a href="http://www.blackpanther.hu">blackPanther OS</a> CD as the default Bittorrent client. RPM packages are available <a href="ftp://ftp.blackpanther.hu/blackPanther/OS/All/Seeker/qbittorrent/">here</a>.</p>
<p>These packages are maintained by <a href="mailto:kbarcza@blackpanther.hu">Charles Barcza</a>.</p>
</div>

<div id="freebsdDiv" class="invisible">
<h4>FreeBSD packages</h4>
<img src="img/freebsd.png" alt="FreeBSD" style="float: left; margin-right: 5px; width: 65px;"/><p>qBittorrent is officially packaged for FreeBSD. <br/>
More information about the port can he found <a href="http://www.freebsdsoftware.org/net-p2p/qbittorrent.html">here</a>.<br/><br/>
To install qBittorrent, you should issue the following commands:</p>
<div class="codePart" style="width:540px; margin:10px 10px 10px 5px; padding:5px;">
export PACKAGESITE="ftp://ftp.freebsd.org/pub/FreeBSD/ports/i386/packages-8.0-release/Latest/"<br/>
pkg_add -r qbittorrent
</div>
</div>

<div id="haikuDiv" class="invisible">
<h4>Haiku port</h4>
<p><img src="img/haiku.png" alt="Haiku" style="float: left; margin-right: 5px;"/>qBittorrent is available in HaikuDepot.</p>
<p>You can download it from <a href="https://depot.haiku-os.org/qbittorrent_x86">here</a>.</p>
</div>

<div id="pardusDiv" class="invisible">
<h4>Pardus packages</h4>
<img src="img/pardus.gif" alt="Pardus" style="float: left; margin-right: 5px; width: 100px;"/>qBittorrent is officially available on <a href="http://www.pardus.org.tr/eng/">Pardus</a> via the contrib repository. These packages are maintained by <a href="http://packages.pardus.org.tr/info/contrib/2009/stable/packager/H.%20%C4%B0brahim%20G%C3%BCng%C3%B6r.html">H. İbrahim Güngör</a>. Packages are available <a href="http://packages.pardus.org.tr/info/contrib/2009/stable/source/qbittorrent.html">here</a>. <br/>
<br/>To install, simply type the following command:
<div class="codePart" style="width:540px; margin:10px 10px 10px 5px; padding:5px;">
#Ensure the contrib repo is present on your system:<br/>
sudo pisi ar contrib http://packages.pardus.org.tr/contrib-2009/pisi-index.xml.bz2<br/>
<br/>
#Enable the contrib repo if present but disabled:<br/>
sudo pisi er contrib<br/>
<br/>
#Install qBittorrent:<br/>
sudo pisi it qbittorrent<br/>
</div>
</div>

<div id="os2Div" class="invisible">
<img src="img/ecs_logo.gif" alt="eComStation" style="float: left; margin-right: 5px; width: 100px;"/><br/>
<p>qBittorrent is available on <a href="http://www.ecomstation.com/">eComStation (OS/2)</a> via this <a href="https://svn.netlabs.org/qtapps/wiki/QT4%20Networking">download</a> page.</p>
<p>This package is maintained by <a href="mailto:silvan.scherrer@aroa.ch">Silvan Scherrer</a>.</p>
</div>

<hr class="invisible clear"/>
<br/><br/>
<?php require_once('footer.inc.php');
