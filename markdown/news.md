### Saturday June 26th 2021 - qBittorrent v4.3.6 and v4.4.0beta1 release

qBittorrent v4.3.6 and v4.4.0beta1 were released.<br>
The v4.3.x releases will continue strictly with important fixes only and until the v4.4.0 is properly tested to be released as stable.
In the meantime there will be a few beta releases of v4.4.0 until it hits stable status. If you use the betas then keep checking back for new betas
because you won't get a program notification for them. Check once per week.<br>
The v4.4.0beta1 uses the libtorrent 2.0.x series. A more detailed changelog may be filled later.

v4.3.6 changelog:
- FEATURE: New languages: Mongolian, Persian, Thai
- BUGFIX: Provide correct error description in "upload mode" (glassez)
- BUGFIX: Allow adding torrents with relative save path (glassez)
- BUGFIX: Fix main window turns blank after restoring from tray (#15031) (Chocobo1)
- BUGFIX: Remove the lockfile on exit (#14997) (brvphoenix)
- BUGFIX: Improve "Watched folders" feature (glassez)
- BUGFIX: Keep sub-sorting order (#15074) (Dmitry Khlestkov)
- BUGFIX: Properly add torrent with new tags (glassez)
- WINDOWS: NSIS: Update Japanese, Turkish, Hungarian, Swedish translation (maboroshin, Burak Yavuz, xkrstudio, nonew-star)

### Sunday May 2nd 2021 - qBittorrent v4.3.5 release

qBittorrent v4.3.5 was released.<br>
This is the last release in the 4.3.x series. The next series will probably drop support for Ubuntu 20.04 (Focal Fossa) because the Qt5 version is too old now.

v4.3.5 changelog:
- BUGFIX: Move cursor to the end when autofilling URL/hash in "Download from URLs" dialog (Chocobo1)
- BUGFIX: Sort invalid QDateTime values after valid values (Chocobo1)
- BUGFIX: Fix tabChangesFocus attribute in "Edit trackers" dialog (Christoph Rackwitz)
- BUGFIX: Update DynDNS register url (zhuangzi926)
- BUGFIX: Handle "not enough disk space" error more graciously (glassez)
- BUGFIX: Correctly draw progress background with stylesheet (jagannatharjun)
- WEBUI: Fix magnet url from the search facility (Chocobo1)
- WEBUI: Revise folder monitoring functions (Chocobo1)
- WEBUI: Fix magnet url from the browser (brvphoenix)
- WEBUI: Allow to specify file indexes in torrents/files API (glassez)
- WINDOWS: NSIS: Allow more strings to translated (bovirus, Chocobo1)
- WINDOWS: NSIS: Update Italian, German, Estonian, Russian, PortugueseBR translations (bovirus, Henry Water, PriitUring, Долматов Алексей, Felipe)
- LINUX: Fix D-Bus Notification `desktop-entry` field (Chocobo1)
- MACOS: Don't use executable name as CFBundleName value (Nick Korotysh)
- OTHER: Lower Qt requirement to 5.11 (sledgehammer999)
- OTHER: Clarify that the license is GPLv2+ (sledgehammer999)

### Wednesday March 24th 2021 - qBittorrent v4.3.4.1 release

qBittorrent v4.3.4.1 was released.<br>
**WINDOWS:** Windows Defender is being incredibly annoying lately marking us as unwanted software/malicious/trojan/virus. If you experience problems with the installer not starting or not finishing, check that Defender hasn't silenty deleted it or the files it extracts. See [this](https://github.com/qbittorrent/qBittorrent/issues/10045), [this](https://github.com/qbittorrent/qBittorrent/issues/14603) and [this](https://github.com/qbittorrent/qBittorrent/issues/14601).<br>
Read the v4.3.4 changelog too because this is a hotfix release.

v4.3.4.1 changelog:
- BUGFIX: Correctly draw progress bar (glassez)
- WEBUI: Fix javascript code which broke the UI (Chocobo1)

### Wednesday March 24th 2021 - qBittorrent v4.3.4 release

qBittorrent v4.3.4 was released.<br>
**WEBUI: It is accidentally broken in this release. Use v4.3.4.1 instead.**<br>
The sorting logic has been reworked. To get the old sorting order for the "queue number" column, first sort on the "Completed On" column and then sort on the "#"(queue number) column.<br>
Support for Ubuntu 18.04 (Bionic Beaver) has been dropped.

v4.3.4 changelog:
- FEATURE: Add ability to prioritize selected items by shown file order (Chocobo1)
- FEATURE: Allow tab to escape the text box in "Edit trackers" dialog (Christoph Rackwitz)
- FEATURE: Support sub-sorting in Transferlist (jagannatharjun)
- FEATURE: Expose ToS setting from libtorrent (Chocobo1)
- FEATURE: Improve tracker entries handling (glassez)
- BUGFIX: Drop extension from generated content folder name (glassez)
- BUGFIX: Change qBittorrent Updater window title (xavier2k6)
- BUGFIX: Validate HTTPS Tracker Certificate by default (an0n666)
- BUGFIX: Don't let "program update" dialog steal focus (Chocobo1)
- BUGFIX: Disable expand on double click in TorrentContentTreeView (jagannatharjun)
- BUGFIX: Add hyperlink to Transifex on translator list (Si Yong Kim)
- BUGFIX: Enlarge "speed limit" icon slightly (Chocobo1)
- BUGFIX: Don't prevent system sleep due to errored torrents (dyumin)
- BUGFIX: Use stable sorting in transfer list (Chocobo1)
- BUGFIX: Allow "missing files" torrents to save more resume data (glassez)
- BUGFIX: Restart "missing files" torrents after changing location (glassez)
- BUGFIX: Show proper string when torrent availability is not available (Chocobo1)
- BUGFIX: Apply "Hide zero/infinity values" to "Time Active", "Down/Up Limit" and ETA columns (Chocobo1)
- BUGFIX: Fix potential out-of-bounds access (Chocobo1)
- BUGFIX: Make SpeedPlotView averager time aware (jagannatharjun)
- BUGFIX: Add a 3-Hour graph (jagannatharjun)
- BUGFIX: Add an option to disable icons in menus (always disabled on MacOS) (Michał Kopeć)
- BUGFIX: Improve detection of filename extension of audio/video files (Chocobo1)
- BUGFIX: Various drawing improvements of progress bar (Chocobo1)
- BUGFIX: Properly stop torrent creation if aborted (Chocobo1)
- BUGFIX: Replace external program parameters in one step (Chocobo1)
- BUGFIX: Improve "save resume data" handling (glassez)
- BUGFIX: Fix bad IPv6 address format for outgoingInterfaces (treysis)
- WEBUI: Properly decode strings (brvphoenix)
- WEBUI: Accept "share limits" when adding torrent using WebAPI (glassez)
- WEBUI: Add seeding time to the active time column (thalieht)
- WEBUI: Fix incorrect seeding time string in General tab (thalieht)
- WEBUI: Allow >100 days in WebUI function "friendlyDuration" (thalieht)
- WEBUI: Avoid decoding strings repeatedly (brvphoenix)
- RSS: Add category button on AutomatedRSSDownloader on GUI (Si Yong Kim)
- WINDOWS: NSIS: Update Czech translation (slrslr)
- WINDOWS: NSIS: Update Portuguese BR translation (Alex)
- WINDOWS: NSIS: Add Estonian translation (PriitUring)
- WINDOWS: Allow change-case-only file renaming (glassez)
- LINUX: Systemd: wait for mounting of local filesystems (Juraj Oršulić)
- OTHER: Raise minimum libtorrent version to 1.2.12 (glassez)
- OTHER: Raise minimum Qt version to 5.12 (glassez)

### Thursday January 19th 2021 - qBittorrent v4.3.3 release

qBittorrent v4.3.3 was released.<br>
Support for macOS 10.13 (High Sierra) was dropped because Xcode doesn't support C++17 for that version.<br>
For the same reason it is highly likely that support for Ubuntu 18.04 (Bionic Beaver) will be dropped in the next releases.

v4.3.3 changelog:
- FEATURE: New languages: Azerbaijani, Estonian
- BUGFIX: Unify global speed dialogs for normal/alternative speeds (thalieht)
- BUGFIX: Increase maximum global speed limits ~2 GiB/s (thalieht)
- BUGFIX: Save fastresume when setting torrent speed limits (thalieht)
- BUGFIX: Group several torrent options into one dialog (thalieht)
- BUGFIX: Capitalize locale names (Chocobo1)
- BUGFIX: Improve content file/folder names handling (glassez)
- BUGFIX: Drop notification about move storage finished or failed (glassez)
- BUGFIX: Reload "missing files" torrent instead of re-checking (glassez)
- BUGFIX: Remember dialog sizes (Chocobo1)
- BUGFIX: Improve detection of file extension string (Chocobo1)
- WEBUI: Don't call non-existent elements (glassez)
- WEBUI: Update "Keep top-level folder" in WebUI options (thalieht)
- MACOS: QMake: Raise minimal macOS target version to 10.14 (glassez)
- LINUX: Use legacy 'data' directory only as a fallback (lbilli)
- OTHER: Bump project requirement to C++17 (Chocobo1)

### Sunday December 27th 2020 - qBittorrent v4.3.2 release

qBittorrent v4.3.2 was released.<br>

v4.3.2 changelog:
- FEATURE: Allow to add root folder to torrent content (glassez)
- FEATURE: "HTTPS tracker validation" option is available on all platforms with latest libtorrent (Chocobo1)
- FEATURE: Option for supporting internationalized domain names (IDNs) (Chocobo1)
- BUGFIX: Fix broken sorting on some columns (Chocobo1)
- BUGFIX: Fix availability per file value (Chocobo1)
- BUGFIX: Fix status of torrents without metadata (sledgehammer999)
- BUGFIX: Don't try to remove folders for a torrent without metadata (sledgehammer999)
- BUGFIX: Lift upper limit of "Max concurrent HTTP announces" option (Chocobo1)
- BUGFIX: Add links to libtorrent documentation (Chocobo1)
- BUGFIX: Move "embedded tracker" options to qbt section (Chocobo1)
- BUGFIX: Properly handle "Append extension" option changing (glassez)
- BUGFIX: Correctly save paused torrent state (glassez)
- BUGFIX: Fix bug of "move storage job" can be performed multiple times (glassez)
- WEBUI: Add ability to use 'shift+delete' to delete torrents (Chocobo1)
- WEBUI: Allow to attach tags while adding torrents (Jesse Chan)
- WEBUI: Bump version to 2.6.2 (Jesse Chan)
- WEBUI: Remove unnecessary restriction on input length (Chocobo1)
- WINDOWS: NSIS: Update Russian translation (Andrei Stepanov)
- WINDOWS:  NSIS: Update Italian translation (Alessandro Simonelli)
- OTHER: Drop support for building with libtorrent < 1.2.11 (Vladimir Golovnev)

### Wednesday November 25th 2020 - qBittorrent v4.3.1 release

qBittorrent v4.3.1 was released.<br>
Also take note of the previous `news` entry regarding updated donation info.

v4.3.1 changelog:
- FEATURE: Allow progress bar styling from custom themes (jagannatharjun)
- FEATURE: Allow adding torrents using "Paste" key sequence (Chocobo1)
- FEATURE: Add Latgalian translation (sledgehammer999)
- BUGFIX: Prevent resume data to be saved for removed torrent (glassez)
- BUGFIX: Clarify connection protocol choice label (FranciscoPombal)
- BUGFIX: Fix crash when clicked outside the table of torrent content view (jagannatharjun)
- BUGFIX: Don't resume "paused" torrents when put into "checking" state by libtorrent (glassez)
- BUGFIX: Fix torrent state calculation (glassez)
- BUGFIX: Align integer data to right in torrent content view (jagannatharjun)
- WEBUI: Place WebUI RSS description in sandboxed iframe (Sepro)
- WEBUI: Avoid settings being reset via WebAPI (Chocobo1)
- WEBUI: Fix toggling advanced option in WebUI (thalieht)
- WEBUI: Expose contentPath in WebAPI torrents/info (FranciscoPombal)
- WEBUI: Fix the issue that IPv6 address can't be banned (brvphoenix)
- RSS: Fix confusion in date format description (Thomas De Rocker)
- WINDOWS: Update dutch.nsi (Thomas De Rocker)
- LINUX: Update .desktop file translations (sledgehammer999)

### Monday November 16th 2020 - Donation info updates

The donation info has been updated to better reflect the expectations of donating to the project. Donations are made as a "Thank You" and with no expectation of any kind of obligation by us, eg having to implement feature X or Y.<br>
The development of qbittorrent is done by volunteers and we don't employ programmers or other people to work on the project. There are a few lead programmers that coordinate most things on github and also contribute code.<br>
Donations are appreciated as a "Thank You". You can choose to help with the server costs (website, forum, domain) and/or donate to lead programmers.

Because the development is volunteer driven, we can't set very specific goals. At the end of the day a volunteer will fix/implement whatever pleases him/her. We can't dictate to volunteers to work on specific things if they don't want to. The same applies to lead programmers. We are volunteers too.<br>
However, if you want specific features implemented or issues solved you may look at our [Bountysource page](https://www.bountysource.com/teams/qbittorrent/issues). There you can post a monetary bounty for an issue/feature and **maybe** someone is incentivized enough to fix/implement it.

For details, see [donation page](/donate).

PS: The old cryptocoin addresses have been retired. Please don't continue sending funds there. Accumulated funds will be used as reserves mostly for covering server costs in the future.

### Thursday October 22nd 2020 - qBittorrent v4.3.0.1 release

qBittorrent v4.3.0.1 was released.<br>
This is a minor release to address crashes on Windows related to torrents with URL seeds (`HTTP Sources` in the qbittorrent window). These crashes were exposed due to boost 1.74. Boost 1.73 doesn't have this problem. However, libtorrent also fixed the issue on their end so the Windows installers use the newer libtorrent code.<br>
The rest of the release is almost the same as v4.3.0 (see changelog). Since other platforms weren't affected only Windows builds will be made available for this version.<br>

v4.3.0.1 changelog:
- WINDOWS: NSIS: Update Italian translation (bovirus)

### Sunday October 18th 2020 - qBittorrent v4.3.0 release

qBittorrent v4.3.0 was released.<br>
This is a major version release due to the high number of accumulated changes and due to the long time since the last release.<br>
Some notes:
* Theming support has been enhanced but previous theme bundles will not work properly with this release. Please contact the theme provider for a fix. The new format is described [here](https://github.com/qbittorrent/qBittorrent/wiki/How-to-use-custom-UI-themes).
* If you want faster tracker announce rate or are having a slower client exit(compared to 4.2.x) then you may try increasing the `Max concurrent HTTP announce` limit from advanced settings.
* The latest version of libtorrent used contains many important fixes compared to the last one, including memory leaks and speed issues due to wrong caching logic on Windows.
* Qt 5.15.1 is used which offers far better HiDPI support. However, the torrent context menu will close after each tag selection.
* Brave users can download experimental builds from "Actions CI" on github.

v4.3.0 changelog:
- FEATURE: Many UI elements colors are themeable now (jagannatharjun)
- FEATURE: Allow changing GUI icons from theme bundles (jagannatharjun)
- FEATURE: Notify user when torrent moving finished (glassez)
- FEATURE: Shortcut CTRL + I opens Statistics window (LoopsGod
- FEATURE: Add RSS functionality in Web UI (Sepro)
- FEATURE: Drop ".unwanted folder" feature (glassez)
- FEATURE: Expose libtorrent peer_turnover, max_concurrent_http_announces, no_connect_privileged_ports settings (Sophist, an0n666, NotTsunami)
- BUGFIX: Fix typo in Options dialog (Andrei Stepanov)
- BUGFIX: Remove "requires restart" from network interface settings (an0n666)
- BUGFIX: Rename "Create subfolder" to "Keep top-level folder" (thalieht)
- BUGFIX: Show tooltip for some properties in transfer list (Nick Korotysh)
- BUGFIX: Fix calculation of torrent current state (glassez)
- BUGFIX: Improve detecting completed files when adding, rechecking or moving a torrent (glassez)
- BUGFIX: Fixed broken announce logic in embedded tracker causing failures in some cases (FranciscoPombal)
- BUGFIX: Disable checkbox if torrent doesn't have root folder (thalieht)
- BUGFIX: Update country flag icons with upstream (Chocobo1)
- BUGFIX: Private torrent: If tracker entry is edited clear old peer list. Also don't allow user to manually add peers. (an0n666)
- BUGFIX: Fix large strings not visible in log widget (jagannatharjun)
- BUGFIX: Disable edit action in Peer list widget (Chocobo1)
- BUGFIX: Add a scroll area to torrent creator dialog (Ernesto Castellotti)
- BUGFIX: Content tab: Open double-clicked folder regardless on which column the click happens (Chocobo1)
- BUGFIX: "Open containing folder" on a folder now opens it in its parent folder (Chocobo1)
- BUGFIX: Fix GeoDB download in systems with non-C locales (FranciscoPombal)
- BUGFIX: Fix peer blocked message (FranciscoPombal)
- BUGFIX: Make more robust the banning of selected peers from the list (NotTsunami)
- BUGFIX: Use toned green color for downloading pieces in Pieces bar (jagannatharjun)
- BUGFIX: Correctly fill whole width of speed graph (jagannatharjun)
- BUGFIX: Fix impossible speed in speed graph (jagannatharjun)
- WEBUI: Hide additional search filters on small screens (Thomas Piccirello)
- WEBUI: Shrink search bar on small screens (Thomas Piccirello)
- WEBUI: Fix search categories only working in English (Thomas Piccirello)
- WEBUI: Add Trackers section to sidebar (Thomas Piccirello)
- WEBUI: Fix Enter button behavior in textarea (Tom Piccirello)
- WEBUI: Fix wrong file renaming selection range (MR)
- WEBUI: Preselect "Default save path" in watched folders (thalieht)
- WEBUI: Fix banning peers (brvphoenix)
- WEBUI: Fix seeding time checkbox placement (Chocobo1)
- WEBUI: Bump Web API version (Thomas Piccirello)
- RSS: Fix renaming RSS autodownload rule (glassez)
- RSS: Fix RSS article is not marked as "read" when torrent is downloaded (glassez)
- SEARCH: Update minimum Python version to 3.5.0 (ngosang)
- SEARCH: Make middle-click close search tabs (Will Da Silva)
- WINDOWS: NSIS: Update Dutch translation (Thomas De Rocker)
- WINDOWS: NSIS: Change the installers uninstallation question to clear confusion (an0n666)
- LINUX: Fix typo in systemd service file (Shane Allgeier)
- LINUX: Don't use HTML in tray tooltip (thalieht)
- LINUX: Don't create 'data' subdirectory in XDG_DATA_HOME (lbilli)
- LINUX/MACOS: Add HTTPS tracker certificate validation option (NotTsunami)
- OTHER: Many CMake improvements (FranciscoPombal)
- OTHER: Support for libtorrent 1.1.x is dropped (Chocobo1)
- OTHER: Many code cleanups and improvements (FranciscoPombal, Chocobo1, glassez)

### Saturday April 25th 2020 - qBittorrent v4.2.5 release

qBittorrent v4.2.5 was released.<br>
It contains fixes for two crashes.<br>
**ATTENTION WINDOWS USERS:** There's a "qBittorrent" app on the Windows Store which costs money. It isn't an official release nor it is coming from us. The person publicizing it doesn't have permission to use the qBittorrent name/logo.<br>
v4.2.5 changelog:
- BUGFIX: Fix crash when torrent is deleted on limit reached (glassez)
- BUGFIX: Register datatype properly (Chocobo1)
- WEBUI: Add ability to send custom HTTP headers (Chocobo1)
- WEBUI: Expand RSS related API (Sepro)
- WINDOWS: Installer: Update german translation (schnurlos)

### Wednesday April 22nd 2020 - qBittorrent v4.2.4 release

qBittorrent v4.2.4 was released.<br>
It contains various qbittorrent and libtorrent networking fixes. Now most issues with VPNs and SOCKS5 proxies should be fixed.<br>
**ATTENTION WINDOWS USERS:** There's a "qBittorrent" app on the Windows Store which costs money. It isn't an official release nor it is coming from us. The person publicizing it doesn't have permission to use the qBittorrent name/logo.<br>
v4.2.4 changelog:
- BUGFIX: Fix sub-sorting of Transfer list (glassez)
- BUGFIX: Fix wrong logic that disables "prevent sleeping" timer (Chocobo1)
- BUGFIX: Set disk cache size for older libtorrent versions (NotTsunami)
- BUGFIX: Sort locale language list (Chocobo1)
- BUGFIX: Remove white outline around mascot.png (adem)
- BUGFIX: Various fixes in configuring the chosen network interface and not leaking the IP (Raif Atef, an0n666)
- BUGFIX: Save "resume data" when torrent storage is moved (glassez)
- BUGFIX: Avoid holding encoded resume data in memory (Chocobo1)
- BUGFIX: Fix date format for "Last seen complete" (Chocobo1)
- BUGFIX: Remove deprecated strict super seeding mode from advanced settings (an0n666)
- BUGFIX: Change default stop_tracker_timeout settings (an0n666)
- BUGFIX: Convert the Log widget to use custom View/Model (jagannatharjun)
- BUGFIX: Change default upload slot choking limits (an0n666)
- BUGFIX: Don't uncheck Authentication checkbox when changing proxy type (thalieht)
- BUGFIX: Reduce ambiguity for selecting tray icons (Chocobo1)
- WEBUI: Fix unable to add multiple peers in WebUI (Sepro)
- WEBUI: Fix UPnP lease duration get/set (NotTsunami)
- SEARCH: Detect python3 executable on Windows (József Sallai)

### Wednesday April 1st 2020 - qBittorrent v4.2.3 release

qBittorrent v4.2.3 was released.<br>
It contains various fixes from v4.2.2 regarding scaling on HiDPI monitors, some VPN issues and UNC path handling. Torrents with broken UNC paths will be fixed when you run this release.<br>
On Windows, Qt 5.13.2 is used because of a regression regarding VPNs that affects RSS and Search functionality. Due to this, the scaling behavior on HiDPI monitors will be the same as in v4.2.1 too.<br>
**ATTENTION WINDOWS USERS:** There's a "qBittorrent" app on the Windows Store which costs money. It isn't an official release nor it is coming from us. The person publicizing it doesn't have permission to use the qBittorrent name/logo.<br>
v4.2.3 changelog:
- FEATURE: Add logging for SOCKS5 proxy errors (Chocobo1)
- FEATURE: Add UPnP lease duration advanced option (NotTsunami)
- BUGFIX: Allow to translate error messages (Chocobo1)
- BUGFIX: Don't round scaling factor (Nick Korotysh)
- BUGFIX: Save log file in UTF-8 encoding (Chocobo1)
- BUGFIX: Avoid log file excessive flushing (Chocobo1)
- BUGFIX: Fix regression when fastresume contains network path (Tester798)
- BUGFIX: Fix broken UNC paths in fastresumes on Windows (sledgehammer999)
- BUGFIX: Prevent multiple instances for the same app config (glassez)
- BUGFIX: Fix unexpected torrent resume after app restart with libtorrent 1.1.x (glassez)
- WEBUI: Add alt and title tags for WebUI footer (LameLemon)
- WINDOWS: Installer: Update Finnish translation (Roope Jukkara)
- WINDOWS: Installer: Update Japanese translation (maboroshin)
- WINDOWS: Installer: Update Turkish translation (Burak Yavuz)
- WINDOWS: Installer: Update Russian translation (Andrei Stepanov)

### Tuesday March 24th 2020 - qBittorrent v4.2.2 release

qBittorrent v4.2.2 was released.<br>
**ATTENTION WINDOWS USERS:** There's a "qBittorrent" app on the Windows Store which costs money. It isn't an official release nor it is coming from us. The person publicizing it doesn't have permission to use the qBittorrent name/logo.<br>
v4.2.2 changelog:
- FEATURE: Allow transfer list text color changes through QSS (Prince Gupta)
- FEATURE: Option to show console when external program is run (sledgehammer999)
- FEATURE: Rename Country column to "Country / Region" (Thomas Piccirello)
- FEATURE: Change the defaults of some settings (FranciscoPombal)
- FEATURE: Refactored Transfer List code to allow theming. As a sideffect the row height has more padding. (glassez)
- FEATURE: Allow double-click in preview dialog (thalieht)
- FEATURE: Expose stop_tracker_timeout in advanced settings (an0n666)
- FEATURE: Add piece_extent_affinity to AdvancedSettings (FranciscoPombal)
- FEATURE: Reorganize UI theme selection (Prince Gupta)
- FEATURE: Show any multiple connections from the same IP in peer list (thalieht)
- FEATURE: Add stalled filters to GUI and Web API/UI (FranciscoPombal)
- FEATURE: Use IP geolocation database by DB-IP instead of MaxMind (sledgehammer999)
- FEATURE: Allow to save downloaded metadata as torrent file (glassez)
- FEATURE: Allow single app instance per configuration (glassez)
- PERFORMANCE: Move multiple torrents one by one (glassez)
- BUGFIX: Disable Torrent Queue by default for new users (an0n666)
- BUGFIX: Update free disk space label on Category change in Auto Mode (Medvedishce)
- BUGFIX: Save resume data after recheck (glassez)
- BUGFIX: Tracker is errored only if all local endpoints fail (sledgehammer999)
- BUGFIX: Change placement of stop tracker timeout setting (An0n)
- BUGFIX: Redesign torrent startup handling (glassez)
- BUGFIX: Show "∞" instead of " -1" in Preferences (Sakib-Abrar)
- BUGFIX: Improve code efficiency for reverse resolution of peers (Chocobo1)
- BUGFIX: Handle HTTP redirection to magnet URI (glassez)
- BUGFIX: Various fixes for portable mode (Tester798)
- BUGFIX: Include resume folder path in exception message (Chocobo1)
- BUGFIX: Change placeholder text in torrent list's filter (djt3)
- BUGFIX: Improvements in the embedded tracker to be more spec compliant (FranciscoPombal)
- BUGFIX: Improve the options tooltips (NotTsunami)
- BUGFIX: Check if file exists in seed mode (an0n666)
- BUGFIX: Delegate GUI scaling work to Qt (Nick Korotysh)
- BUGFIX: Fix crash when renaming torrent contents (Chocobo1)
- BUGFIX: Fix total connected peers count calculation (FranciscoPombal)
- BUGFIX: Allow other keypresses in LogListWidget (NotTsunami)
- BUGFIX: Disable Auto TMM when not using default savepath from monitored folder (thalieht)
- WEBUI: Fix first row renaming in files tab (Denis)
- WEBUI: Use SVG image for WebUI favicon (Nick Korotysh)
- WEBUI: Inherit text color for filter list elements (Nick Korotysh)
- WEBUI: Expose WebUI ban counter to users (Chocobo1)
- WEBUI: Expose WebUI ban duration to users (Chocobo1)
- WEBUI: Implement "Secure" flag for session cookie (FranciscoPombal)
- WEBUI: Remove unused/deprecated option (FranciscoPombal)
- WEBUI: Prevent excessive sync requests (FranciscoPombal)
- WEBUI: Fix populating statistics window (FranciscoPombal)
- WEBUI: Fix matching uncategorized torrents (FranciscoPombal)
- WEBUI: Always allow whitespace in category names (FranciscoPombal)
- SEARCH: Bump python version for new installation (Chocobo1)
- SEARCH: Fix missing string (Chocobo1)
- SEARCH: Drop python2 support (Chocobo1)
- WINDOWS: Installer: Option to start qBittorrent on Windows start up (An0n)
- WINDOWS: Installer: Improve Czech translation (slrslr)
- WINDOWS: Installer: Update French translation (zywo)
- WINDOWS: Installer: Update German translation (schnurlos)
- WINDOWS: Installer: Update Japanese translation (maboroshin)
- WINDOWS: Path length limitation is removed on Windows 10 1607 onwards (an0n666)

### Wednesday December 18th 2019 - qBittorrent v4.2.1 release

qBittorrent v4.2.1 was released.<br>
Due to libtorrent fixes, UDP through proxies should work again. In some cases it also caused crashes.<br>
**ATTENTION:** There's a slight change in the way network interfaces are configured. If you have a specific network interface/local address set in the Advanced Settings, go and make sure that your settings have stayed the same. The extra setting for `Listen on IPv6 address` has been removed.<br>
v4.2.1 changelog:
- FEATURE: Enable portable mode if "profile" directory exists (Tester798)
- FEATURE: Enable "Apply rate limit to peers on LAN" option by default (Chocobo1)
- BUGFIX: Sync translations from Transifex and run lupdate (sledgehammer999)
- BUGFIX: Don't unnecessarily delete OS files in folders (sledgehammer999)
- BUGFIX: Use the incomplete folder where appropriate (sledgehammer999)
- BUGFIX: Align Properties tab bar correctly on window resize (Prince Gupta)
- BUGFIX: Rework the listening IP/interface selection code (sledgehammer999)
- BUGFIX: Fix inconsistent icon for deleting torrent (Chocobo1)
- BUGFIX: Show torrent error message in transfer list (Chocobo1)
- BUGFIX: Fix stuck in wrong torrent state (Chocobo1)
- BUGFIX: Expand single-item folders in torrent content (warren)
- WEBUI: Bump Web API version (sledgehammer999)
- WEBUI: Add ability to rename torrent files from the WebUI (Thomas Piccirello)
- WEBUI: Mention lack of HTTPS in WebUI magnet link warning (nl6720)
- WEBUI: Fix HTML elements size in search tab (Chocobo1)
- SEARCH: Fix incorrect translation displayed after language change (Chocobo1)
- SEARCH: Fix missing translations in search plugins dialog (Chocobo1)
- WINDOWS: Update russian translation of the installer (Andrei Stepanov)

### Tuesday December 3rd 2019 - qBittorrent v4.2.0 release

qBittorrent v4.2.0 was released.<br>
There were no significant user facing changes since the previous RC release. The full v4.2.0 changelog follows.<br>
**ATTENTION:** This release uses the libtorrent 1.2.x series. It saves fastresumes a bit differently than the 1.1.x series, which are used so far in the previous versions. If you run it and then downgrade to a previous qBittorrent version then your torrents will probably start rechecking.<br>
- FEATURE: Libtorrent 1.2.x series are supported now (glassez)
- FEATURE: Add OpenSSL version to GUI and stackdump (Chocobo1)
- FEATURE: Add zlib version to GUI & stackdump (silverqx)
- FEATURE: Use PBKDF2 for storing GUI lock password. You will need to set your password again. (Chocobo1)
- FEATURE: Rename "#" column to "Tier" in the tracker list (thalieht)
- FEATURE: Allow setting larger checking memory usage in GUI (airium)
- FEATURE: Converted remaining icons to svg (Bert Verhelst)
- FEATURE: Replace CheckBox with Arrow in the side panel (Prince Gupta)
- FEATURE: Log performance alerts from libtorrent (Chocobo1)
- FEATURE: Use native folder icon in content tree (Chocobo1)
- FEATURE: Move copy actions under a submenu (Chocobo1)
- FEATURE: Add "Socket backlog size" option (Chocobo1)
- FEATURE: Add "File pool size" option (Chocobo1)
- FEATURE: Allow styling with QSS stylesheets (Prince Gupta)
- FEATURE: Add "Tracker entries" dialog (Chocobo1)
- FEATURE: Add availability column (Chocobo1)
- FEATURE: Use a randomized port number for the first run (Chocobo1)
- FEATURE: Enable Super Seeding mode once ratio/time limit is reached (thalieht)
- FEATURE: Improve embedded tracker. Now it conforms to BEPs more closely. (Chocobo1)
- FEATURE: Add option to align file to piece boundary when creating new torrent (Chocobo1)
- FEATURE: Ability to open file or trigger torrect action via keypad Enter (Chocobo1)
- FEATURE: Add "Remove torrent and its files" option to share ratio limiting (thalieht)
- FEATURE: Allow to select multiple entries in "banned IP" dialog (Chocobo1)
- FEATURE: Reallow to pause checking torrents (thalieht)
- FEATURE: Reallow to force recheck torrents that aren't fully started (thalieht)
- FEATURE: Add "Preview file" double-click action (warren)
- BUGFIX: Avoid performance penalty when logger is full (Chocobo1)
- BUGFIX: Remove the max half-open connections option (thalieht)
- BUGFIX: Center align the section labels in advanced settings (thalieht)
- BUGFIX: Add documentation links to some advanced settings (thalieht)
- BUGFIX: Improve DownloadManager code (glassez)
- BUGFIX: Limit DownloadHandler max redirection to 20 (Chocobo1)
- BUGFIX: Log DownloadManager SSL errors (Chocobo1)
- BUGFIX: Force recheck multiple torrents one by one (glassez)
- BUGFIX: Close context menu when content model is reset (glassez)
- BUGFIX: Improve Properties widget (glassez)
- BUGFIX: Prevent flickering preview dialog (silver)
- BUGFIX: Rename "Prefer encryption" to "Allow encryption" (thalieht)
- BUGFIX: Fix search icon placement when using RTL languages (Chocobo1)
- BUGFIX: Avoid combo boxes extending to the right in Options dialog (Chocobo1)
- BUGFIX: Fix speed limit not applying to IPv6 peers (Chocobo1)
- BUGFIX: Log failed file rename errors (Chocobo1)
- BUGFIX: Fix wrong "Time Active" value displayed (Chocobo1)
- BUGFIX: Rename priority to queue in the context of torrents (thalieht)
- BUGFIX: Update remaining size of ignored files to 0 (Thomas Piccirello)
- BUGFIX: Move "Check for program updates" checkbox to the Behavior settings (Chocobo1)
- BUGFIX: Improve error messages for URL seed (Chocobo1)
- BUGFIX: Rename share ratio limiting options (thalieht)
- BUGFIX: Fix country name misspelling (horgan)
- PERFORMANCE: Faster/efficient way of handling updates in the Transfer list (Chocobo1)
- WEBUI: Bump Web API version
- WEBUI: Use PBKDF2 for storing WebUI password. You will need to set your password again. (Chocobo1)
- WEBUI: Use Javascript strict mode (Chocobo1)
- WEBUI: Remove autocorrect/autocapitalise from filepaths on WebUI (AceLewis)
- WEBUI: Display warning when Javascript is disabled (Chocobo1)
- WEBUI: Remove mootools lib from login page (Chocobo1)
- WEBUI: Prevent login credential appearing in URL (Chocobo1)
- WEBUI: Load WebUI certificate & key from file path (Chocobo1)
- WEBUI: Add migration code for WebUI https related change (Chocobo1)
- WEBUI: Fix wrong element id being used (Thomas Piccirello)
- WEBUI: Fix direction of Web UI sorted column icon (Thomas Piccirello)
- WEBUI: Match WebUI About page to GUI (Thomas Piccirello)
- WEBUI: Simplify tab logic (Thomas Piccirello)
- WEBUI: Separate URL components before percent-decoding (glassez)
- WEBUI: Capitalize event name (Thomas Piccirello)
- WEBUI: Fix bug where input wouldn't always be focused (Thomas Piccirello)
- WEBUI: Add Web UI support for escape key (Thomas Piccirello)
- WEBUI: Fix broken image link (Tom Piccirello)
- WEBUI: Include application version in css/js url for cache busting (Thomas Piccirello)
- WEBUI: Update WebUI img to use svg images (Chocobo1)
- WEBUI: Fix speed limit icon too large on WebUI (Chocobo1)
- WEBUI: Fix misaligned icons in STATUS list in GUI (Chocobo1)
- WEBUI: Drop legacy WebAPI support (glassez)
- WEBUI: Allow WebUI Content tab to be sorted (Thomas Piccirello)
- WEBUI: Encode torrent name before passing in URL (Thomas Piccirello)
- WEBUI: Move WebUI Peers code to separate file (Thomas Piccirello)
- WEBUI: Prevent WebUI tables from being highlighted (Thomas Piccirello)
- WEBUI: Allow WebUI Trackers table to be manipulated (Thomas Piccirello)
- WEBUI: Fix only the first newline char is replaced (Chocobo1)
- WEBUI: Fix missing semicolon in WebUI (Chocobo1)
- WEBUI: Add autocomplete attribute to WebUI (Chocobo1)
- WEBUI: Always use index.html as default page (CzBiX)
- WEBUI: Set title attribute for all WebUI table cells (Thomas Piccirello)
- WEBUI: Align WebUI login button to the right (Chocobo1)
- WEBUI: Use force refresh on WebUI logout (Chocobo1)
- WEBUI: Use a random number for WebUI cache busting (Chocobo1)
- WEBUI: Register protocol handler in WebUI for magnet links (Cory)
- WEBUI: Add WebAPI session timeout settings (Chocobo1)
- WEBUI: Fix encoding of special characters (Tom Piccirello)
- WEBUI: Avoid word wrap in webui footer (airium)
- WEBUI: Add advanced options in WebUI (Zhaoyu Gan)
- WEBUI: Move WebUI copy actions under a submenu (Thomas Piccirello)
- WEBUI: Add WebUI support for triggering context menus on mobile (Thomas Piccirello)
- WEBUI: Implement tag management for WebUI (Vasiliy Halimonchuk)
- WEBUI: Fix WebUI removing parameters from magnet links (Thomas Piccirello)
- WEBUI: Enable by default the search tab (Thomas Piccirello)
- WEBUI: Add context menu to Web UI search table (Thomas Piccirello)
- WEBUI: Display files hierarchically in Web UI content tab (Thomas Piccirello)
- WEBUI: Add ability to add and ban a peer from the Web UI (Thomas Piccirello)
- WEBUI: Increase WebUI window heights (Thomas Piccirello)
- WEBUI: Sort torrent names case-insensitively in webui (airium)
- WEBUI: Support exclusions in WebUI table filters (Thomas Piccirello)
- WEBUI: Don't save preferences until all options are processed (Tom Piccirello)
- WEBUI: Disable port selection when "Use different port on each startup" is selected (Chocobo1)
- WEBUI: Remove max character limit of location path (Clément Pera)
- RSS: Better widget for choosing file path in automated downloader (thalieht)
- RSS: Allow to cancel/retry the fetching of feeds (glassez)
- RSS: Add create subfolder option to RSS auto-download rules (Xegor)
- RSS: Log "RSS Feed successfully downloaded" event (glassez)
- SEARCH: Add default tooltip "Searching..." on tab creation. (paolo-sz)
- SEARCH: Avoid crashes on torrent search (paolo-sz)
- SEARCH: Add right click menu to SearchJobWidget (Chocobo1)
- SEARCH: Rename label in search widget (Chocobo1)
- SEARCH: Add more copy field actions to search widget (Chocobo1)
- SEARCH: Remove buttons from search widget (Chocobo1)
- SEARCH: Update python installer URL (Chocobo1)
- WINDOWS: Drop support for < Windows 7
- WINDOWS: Allow headless builds on Windows (knackebrot)
- WINDOWS: Add option to control qBittorrent process memory priority (Chocobo1)
- LINUX: Add content_rating, release tags to appdata (Peter Eszlari)
- LINUX: Update .appdata descriptions (Chocobo1)
- LINUX: Use reverse DNS convention for metadata files naming (Chocobo1)
- LINUX: Adjust open file descriptor limit on startup to max (Chocobo1)
- MACOS: Drop support for < macOS 10.10 (Yosemite)
- MACOS: Replace deprecated `qt_mac_set_dock_menu()` (Chocobo1)
- MACOS: Add some padding to macOS app icon (Nick Korotysh)
- OTHER: Raise minimum C++ version to C++14 (Chocobo1)
- OTHER: Raise minimum Qt version to 5.9.0 (sledgehammer999)
- OTHER: Drop support of libtorrent < 1.1.10 (glassez)
- OTHER: Drop upgrade code from older saving systems (sledgehammer999)
- OTHER: Update INSTALL dependencies (Chocobo1)
- OTHER: Optimize PNG images losslessly with zopflipng (Peter Dave Hello)
- OTHER: Optimize svg files using SVGO (sledgehammer999)
- OTHER: QMake: Compile translations at build time (glassez)
- OTHER: Drop support for "BC Link" format (Chocobo1)
- OTHER: Lots of code refactorings, cleanups, improvements and optimizations (Chocobo1, glassez, thalieht)

### Thursday November 21st 2019 - qBittorrent v4.2.0RC_20191121_9c1617b9778 release

qBittorrent v4.2.0RC_20191121_9c1617b9778 release was released.<br>
For Windows only the 64-bit build is available for the RC release. Changes included in the stable series aren't mentioned below.<br>
The macOS build will follow.<br>
The final version of 4.2.0 will be released at the end of the month.<br>
**ATTENTION:** This RC release uses the libtorrent 1.2.x series. It saves fastresumes a bit differently than the 1.1.x series, which are used so far in the stable versions (and alpha releases). If you run it and then downgrade to a previous qBittorrent version then your torrents will probably start rechecking.<br>
**Changes in v4.2.0RC_20191121_9c1617b9778 after the previous beta:**
- FEATURE: Allow to select multiple entries in "banned IP" dialog (Chocobo1)
- FEATURE: Reallow to pause checking torrents (thalieht)
- FEATURE: Reallow to force recheck torrents that aren't fully started (thalieht)
- FEATURE: Add "Preview file" double-click action (warren)
- BUGFIX: Fix country name misspelling (horgan)
- RSS: Add create subfolder option to RSS auto-download rules (Xegor)
- WINDOWS: Add option to control qBittorrent process memory priority (Chocobo1)

### Thursday October 31st 2019 - qBittorrent v4.1.9.1 release

qBittorrent v4.1.9.1 was released to fix a Windows only regression. Builds for other OSes won't be made.<br>
- WINDOWS: Fix a problem with bigger dialogs due to wrong DPI reported by the system (Chocobo1)

### Sunday October 27th 2019 - qBittorrent v4.1.9 and v_4.2.0beta1_20191027_9c466d84ec0 release

qBittorrent v4.1.9 and v_4.2.0beta1_20191027_9c466d84ec0 release were released.<br>
For Windows only the 64-bit build is available for the beta release. Changes included in the stable series aren't mentioned below.<br>
**ATTENTION:** This beta release uses the libtorrent 1.2.x series. It saves fastresumes a bit differently than the 1.1.x series, which are used so far in the stable versions (and alpha releases). If you run it and then downgrade to a previous qBittorrent version then your torrents will probably start rechecking.<br>
**Changes in v4.1.9:**
- BUGFIX: Preserve relative order when moving to top/bottom in queue (Chocobo1)
- WINDOWS: Use real physical screen DPI (Chocobo1)
- WEBUI: Bump Web API version

**Changes in v_4.2.0beta1_20191027_9c466d84ec0 after the previous alpha:**
- FEATURE: Ability to open file or trigger torrect action via keypad Enter (Chocobo1)
- FEATURE: Add "Remove torrent and its files" option to share ratio limiting (thalieht)
- BUGFIX: Rename share ratio limiting options (thalieht)

### Thursday September 26th 2019 - qBittorrent v4.1.8 and v4.2.0alpha2_20190923_918ccefdc4a release

qBittorrent v4.1.8 and v4.2.0alpha2_20190923_918ccefdc4a release were released.<br>
For Windows only the 64-bit build is available for the alpha release. Changes included in the stable series aren't mentioned below.<br>
After about ~2 weeks another release of the v4.2.x series will be made. Stay tuned to download and test. But remember to read the `News` section before testing. Known incompatibilities will be mentioned.<br>
**Changes in v4.1.8:**
- BUGFIX: Fix filename validation on non-Windows OS (Chocobo1)
- BUGFIX: ScanFolders/FileSystemWatcher now detect magnet files with case insensitivity in filename (Chocobo1)
- BUGFIX: Fix failed seeding after creating a torrent and auto-adding it to the session (Chocobo1)

**Changes in v4.2.0alpha2_20190923_918ccefdc4a after the previous alpha:**
- FEATURE: Add option to align file to piece boundary when creating new torrent (Chocobo1)
- BUGFIX: Move "Check for program updates" checkbox to the Behavior settings (Chocobo1)
- BUGFIX: Improve error messages for URL seed (Chocobo1)
- PERFORMANCE: Faster/efficient way of handling updates in the Transfer list (Chocobo1)
- WEBUI: Disable port selection when "Use different port on each startup" is selected (Chocobo1)
- WEBUI: Remove max character limit of location path (Clément Pera)
- RSS: Allow to cancel/retry the fetching of feeds (glassez)

### Saturday August 24th 2019 - qBittorrent v4.2.0alpha1_20190824_69f665ed016 release

qBittorrent v4.2.0alpha1_20190824_69f665ed016 was released.<br>
For Windows only the 64-bit build is available for the alpha release. Changes included in the stable series aren't mentioned below.
- FEATURE: Libtorrent 1.2.x series are supported now (glassez)
- FEATURE: Add OpenSSL version to GUI and stackdump (Chocobo1)
- FEATURE: Add zlib version to GUI & stackdump (silverqx)
- FEATURE: Use PBKDF2 for storing GUI lock password. You will need to set your password again. (Chocobo1)
- FEATURE: Rename "#" column to "Tier" in the tracker list (thalieht)
- FEATURE: Allow setting larger checking memory usage in GUI (airium)
- FEATURE: Converted remaining icons to svg (Bert Verhelst)
- FEATURE: Replace CheckBox with Arrow in the side panel (Prince Gupta)
- FEATURE: Log performance alerts from libtorrent (Chocobo1)
- FEATURE: Use native folder icon in content tree (Chocobo1)
- FEATURE: Move copy actions under a submenu (Chocobo1)
- FEATURE: Add "Socket backlog size" option (Chocobo1)
- FEATURE: Add "File pool size" option (Chocobo1)
- FEATURE: Allow styling with QSS stylesheets (Prince Gupta)
- FEATURE: Add "Tracker entries" dialog (Chocobo1)
- FEATURE: Add availability column (Chocobo1)
- FEATURE: Use a randomized port number for the first run (Chocobo1)
- FEATURE: Enable Super Seeding mode once ratio/time limit is reached (thalieht)
- FEATURE: Improve embedded tracker. Now it conforms to BEPs more closely. (Chocobo1)
- BUGFIX: Avoid performance penalty when logger is full (Chocobo1)
- BUGFIX: Remove the max half-open connections option (thalieht)
- BUGFIX: Center align the section labels in advanced settings (thalieht)
- BUGFIX: Add documentation links to some advanced settings (thalieht)
- BUGFIX: Improve DownloadManager code (glassez)
- BUGFIX: Limit DownloadHandler max redirection to 20 (Chocobo1)
- BUGFIX: Log DownloadManager SSL errors (Chocobo1)
- BUGFIX: Force recheck multiple torrents one by one (glassez)
- BUGFIX: Close context menu when content model is reset (glassez)
- BUGFIX: Improve Properties widget (glassez)
- BUGFIX: Prevent flickering preview dialog (silver)
- BUGFIX: Rename "Prefer encryption" to "Allow encryption" (thalieht)
- BUGFIX: Fix search icon placement when using RTL languages (Chocobo1)
- BUGFIX: Avoid combo boxes extending to the right in Options dialog (Chocobo1)
- BUGFIX: Fix speed limit not applying to IPv6 peers (Chocobo1)
- BUGFIX: Log failed file rename errors (Chocobo1)
- BUGFIX: Fix wrong "Time Active" value displayed (Chocobo1)
- BUGFIX: Rename priority to queue in the context of torrents (thalieht)
- BUGFIX: Update remaining size of ignored files to 0 (Thomas Piccirello)
- WEBUI: Use PBKDF2 for storing WebUI password. You will need to set your password again. (Chocobo1)
- WEBUI: Use Javascript strict mode (Chocobo1)
- WEBUI: Remove autocorrect/autocapitalise from filepaths on WebUI (AceLewis)
- WEBUI: Display warning when Javascript is disabled (Chocobo1)
- WEBUI: Remove mootools lib from login page (Chocobo1)
- WEBUI: Prevent login credential appearing in URL (Chocobo1)
- WEBUI: Load WebUI certificate & key from file path (Chocobo1)
- WEBUI: Add migration code for WebUI https related change (Chocobo1)
- WEBUI: Fix wrong element id being used (Thomas Piccirello)
- WEBUI: Fix direction of Web UI sorted column icon (Thomas Piccirello)
- WEBUI: Match WebUI About page to GUI (Thomas Piccirello)
- WEBUI: Simplify tab logic (Thomas Piccirello)
- WEBUI: Separate URL components before percent-decoding (glassez)
- WEBUI: Capitalize event name (Thomas Piccirello)
- WEBUI: Fix bug where input wouldn't always be focused (Thomas Piccirello)
- WEBUI: Add Web UI support for escape key (Thomas Piccirello)
- WEBUI: Fix broken image link (Tom Piccirello)
- WEBUI: Include application version in css/js url for cache busting (Thomas Piccirello)
- WEBUI: Update WebUI img to use svg images (Chocobo1)
- WEBUI: Fix speed limit icon too large on WebUI (Chocobo1)
- WEBUI: Fix misaligned icons in STATUS list in GUI (Chocobo1)
- WEBUI: Drop legacy WebAPI support (glassez)
- WEBUI: Allow WebUI Content tab to be sorted (Thomas Piccirello)
- WEBUI: Encode torrent name before passing in URL (Thomas Piccirello)
- WEBUI: Move WebUI Peers code to separate file (Thomas Piccirello)
- WEBUI: Prevent WebUI tables from being highlighted (Thomas Piccirello)
- WEBUI: Allow WebUI Trackers table to be manipulated (Thomas Piccirello)
- WEBUI: Fix only the first newline char is replaced (Chocobo1)
- WEBUI: Fix missing semicolon in WebUI (Chocobo1)
- WEBUI: Add autocomplete attribute to WebUI (Chocobo1)
- WEBUI: Always use index.html as default page (CzBiX)
- WEBUI: Set title attribute for all WebUI table cells (Thomas Piccirello)
- WEBUI: Align WebUI login button to the right (Chocobo1)
- WEBUI: Use force refresh on WebUI logout (Chocobo1)
- WEBUI: Use a random number for WebUI cache busting (Chocobo1)
- WEBUI: Register protocol handler in WebUI for magnet links (Cory)
- WEBUI: Add WebAPI session timeout settings (Chocobo1)
- WEBUI: Fix encoding of special characters (Tom Piccirello)
- WEBUI: Avoid word wrap in webui footer (airium)
- WEBUI: Add advanced options in WebUI (Zhaoyu Gan)
- WEBUI: Move WebUI copy actions under a submenu (Thomas Piccirello)
- WEBUI: Add WebUI support for triggering context menus on mobile (Thomas Piccirello)
- WEBUI: Implement tag management for WebUI (Vasiliy Halimonchuk)
- WEBUI: Fix WebUI removing parameters from magnet links (Thomas Piccirello)
- WEBUI: Enable by default the search tab (Thomas Piccirello)
- WEBUI: Add context menu to Web UI search table (Thomas Piccirello)
- WEBUI: Display files hierarchically in Web UI content tab (Thomas Piccirello)
- WEBUI: Add ability to add and ban a peer from the Web UI (Thomas Piccirello)
- WEBUI: Increase WebUI window heights (Thomas Piccirello)
- WEBUI: Sort torrent names case-insensitively in webui (airium)
- WEBUI: Support exclusions in WebUI table filters (Thomas Piccirello)
- WEBUI: Don't save preferences until all options are processed (Tom Piccirello)
- RSS: Better widget for choosing file path in automated downloader (thalieht)
- SEARCH: Add default tooltip "Searching..." on tab creation. (paolo-sz)
- SEARCH: Avoid crashes on torrent search (paolo-sz)
- SEARCH: Add right click menu to SearchJobWidget (Chocobo1)
- SEARCH: Rename label in search widget (Chocobo1)
- SEARCH: Add more copy field actions to search widget (Chocobo1)
- SEARCH: Remove buttons from search widget (Chocobo1)
- SEARCH: Update python installer URL (Chocobo1)
- WINDOWS: Drop support for < Windows 7
- WINDOWS: Allow headless builds on Windows (knackebrot)
- LINUX: Add content_rating, release tags to appdata (Peter Eszlari)
- LINUX: Update .appdata descriptions (Chocobo1)
- LINUX: Use reverse DNS convention for metadata files naming (Chocobo1)
- LINUX: Adjust open file descriptor limit on startup to max (Chocobo1)
- MACOS: Drop support for < macOS 10.10 (Yosemite)
- MACOS: Replace deprecated `qt_mac_set_dock_menu()` (Chocobo1)
- MACOS: Add some padding to macOS app icon (Nick Korotysh)
- OTHER: Raise minimum C++ version to C++14 (Chocobo1)
- OTHER: Raise minimum Qt version to 5.9.0 (sledgehammer999)
- OTHER: Drop support of libtorrent < 1.1.10 (glassez)
- OTHER: Drop upgrade code from older saving systems (sledgehammer999)
- OTHER: Update INSTALL dependencies (Chocobo1)
- OTHER: Optimize PNG images losslessly with zopflipng (Peter Dave Hello)
- OTHER: Optimize svg files using SVGO (sledgehammer999)
- OTHER: QMake: Compile translations at build time (glassez)
- OTHER: Drop support for "BC Link" format (Chocobo1)
- OTHER: Lots of code refactorings, cleanups, improvements and optimizations (Chocobo1, glassez, thalieht)

### Sunday August 4th 2019 - qBittorrent v4.1.7 release

qBittorrent v4.1.7 was released.<br>
The macOS build supports Sierra as minimum version. If you use an older macOS version then you should compile qBittorrent with an older Qt version that has support for your OS version.
- FEATURE: Add 12 hour and 24 hour speed graphs (dzmat)
- FEATURE: Change "Add new torrent" dialog to horizontal layout (Evgeny Lensky)
- BUGFIX: Fix messed up symbols in log (Chocobo1)
- BUGFIX: Fix incomplete file extension not applied for new torrents (Chocobo1)
- BUGFIX: Save updated resume data for completed torrents (Vladimir Golovnev (Glassez))
- BUGFIX: Fix requested torrent resume data handling (Vladimir Golovnev (Glassez))
- BUGFIX: Prevent command injection via "Run external program" function (Chocobo1)
- BUGFIX: Avoid race conditions when adding torrent (Vladimir Golovnev (Glassez))
- BUGFIX: Fix torrent checking issues (Vladimir Golovnev (Glassez))
- BUGFIX: Use proper log message when there are no error (Chocobo1)
- BUGFIX: Fix torrent properties not saved for paused torrents (Chocobo1)
- BUGFIX: Some improvements on qtsingleapplication code (Chocobo1)
- BUGFIX: Remove limits of "Disk cache expiry interval" setting (Chocobo1)
- BUGFIX: Remove upper limit of "Disk cache" setting (Chocobo1)
- BUGFIX: Fix crash when removing phantom tags (Chocobo1)
- BUGFIX: Improve handleFileErrorAlert error message (Chocobo1)
- BUGFIX: Fix updated save path not saved for paused torrents (Chocobo1)
- BUGFIX: Log save_resume_data_failed_alert (Chocobo1)
- BUGFIX: Don't remove parent directories (Chocobo1)
- BUGFIX: Properly remove empty leftover folders after rename (Chocobo1)
- BUGFIX: Focus behavior row in Options dialog (silverqx)
- BUGFIX: Fix unable to rename folder on Windows when same is used in different case(Chocobo1)
- BUGFIX: Fix unable to control add torrent dialogs when opened simultaneously (Chocobo1)
- BUGFIX: Disable "Upload mode" when start preloaded torrent (Vladimir Golovnev (Glassez))
- BUGFIX: Fix wrong comparison result when sorting items(Chocobo1)
- BUGFIX: Fix sequential downloading when redirected (Vladimir Golovnev (Glassez))
- BUGFIX: Fix typos (Chocobo1)
- BUGFIX: Fix assertion fail (Chocobo1)
- BUGFIX: Change number of time axis divisions from 5 to 6 for convenience (dzmat)
- BUGFIX: Don't turn window blank when closed to system tray (Ekin Dursun)
- WEBUI: Fix WebUI encoding of special characters (Thomas Piccirello)
- WEBUI: Change the speed unit from Bytes/s to KiB/s for the rate limiter(jerrymakesjelly)
- WEBUI: Fix '+' char not decoded to space correctly (Chocobo1)
- RSS: Ignore RSS articles with non-unique identifiers (Vladimir Golovnev (Glassez))
- RSS: Perform more RSS parsing in working thread (Vladimir Golovnev (Glassez))
- RSS: Download RSS enclosure element if no proper MIME type is found (Matan Bareket)

### Sunday May 5th 2019 - qBittorrent v4.1.6 release

qBittorrent v4.1.6 was released.<br>
- BUGFIX: Force recheck multiple torrents one by one in all possible cases. Closes #9120 (glassez)
- BUGFIX: Don't query Google for tracker favicons, for privacy reasons (sledgehammer999)
- BUGFIX: Work around the crash occurred in QTimer. Closes #9985 (Chocobo1)
- BUGFIX: Increase the .torrent file download size limit to 100 MiB (thalieht)
- BUGFIX: Disable downloading tracker favicons by default. Works around reported crashes in Linux. Closes #9667 (Chocobo1)
- WEBUI: Separate URL components before percent-decoding. Allow special characters in query string parameters. Closes #9116 (glassez)
- WEBUI: Prevent login credential appearing in URL. Closes #10221 (Chocobo1)
- WEBUI: Display warning when Javascript is disabled (Chocobo1)
- WEBUI: Fix translatable strings (Chocobo1)
- WEBUI: Correctly handle '+' sign in x-www-form-urlencoded data. Closes #10451 (Chocobo1)
- WEBUI: Remove closed connections immediately. Closes #10487 (Chocobo1)
- WEBUI: Fix "Create subfolder" option is not working. Closes ##10392 (Chocobo1)
- SEARCH: Make num enter key work the same as return in searchjobwidget (thalieht)
- LINUX: Make window title bar icon work in Wayland (Peter Eszlari)
- LINUX: Update appdata.xml file (Chocobo1)
- MACOS: Fix progress bar drawing by using different style than native (Nick Korotysh)
- MACOS: Updated and cleaned up fields in Info.plist (Nick Korotysh)
- OTHER: Mention more translators in the about tab. Closes #10043 (sledgehammer999)

### Monday December 24th 2018 - qBittorrent v4.1.5 release

qBittorrent v4.1.5 was released.<br>
macOS: Support for Mavericks (10.9) was dropped due to usage of Qt 5.9. qBittorrent v4.1.5 should be able to work if you compile it with Qt 5.8.<br>
- FEATURE: Add checking_mem_usage option to AdvancedSettings (FranciscoPombal)
- FEATURE: Save torrents queue in separate file. Now a new file named 'queue' is created, saving on each line the infohash of each queued torrent in sorted order. (glassez)
- BUGFIX: Fix regression on resuming torrents without metadata (thalieht)
- BUGFIX: Reorder and rename Tracker list context menu option (Thomas Piccirello)
- BUGFIX: Rename Tracker List columns (Thomas Piccirello)
- BUGFIX: Show error message when Session failed to start (glassez)
- BUGFIX: Embedded tracker: Use ip parameter from tracker request if provided (Chocobo1)
- BUGFIX: Fix weekday names translations (Chocobo1)
- BUGFIX: Fix strings not translated (Chocobo1)
- WEBUI: Change qBittorrent exit message to HTML5 (Chocobo1)
- WEBUI: Revise CSP header (Chocobo1)
- WEBUI: Enforce referrer-policy in WebUI (Chocobo1)
- WEBUI: Add torrent name filtering to WebUI (Thomas Piccirello)
- WEBUI: Send numeric status without translation (Thomas Piccirello)
- WEBUI: Add WebUI Trackers context menu (Thomas Piccirello)
- WEBUI: Add DHT, PeX, and LSD to WebUI Tracker list (Thomas Piccirello)
- WEBUI: Add additional Tracker columns to WebUI (Thomas Piccirello)
- WEBUI: Bump Web API version
- WEBUI: Fix display bugs in WebUI Files tab. Remove <IE9 support (Thomas Piccirello)
- WEBUI: Fix incorrect priority value sent from WebUI (Thomas Piccirello)
- WEBUI: Set priority for multiple files in one WebAPI request (Thomas Piccirello)
- WEBUI: Match WebUI Peers table column order to GUI (Thomas Piccirello)
- WEBUI: Fetch data less frequently when torrents tab isn't visible (Thomas Piccirello)
- WEBUI: Add Search tab to WebUI (Thomas Piccirello)
- WEBUI: Add ability to pass urls to the webui download page (Thomas Piccirello)
- WEBUI: Fix JavaScript error (Tom Piccirello)
- WEBUI: Disallow setting a blank alternative WebUI location (Thomas Piccirello)
- WEBUI: Add slow torrent options (Thomas Piccirello)
- WEBUI: Add "Use alternative Web UI" option (Thomas Piccirello)
- WEBUI: Add "Apply rate limit to peers on LAN" option (Thomas Piccirello)
- WEBUI: Add email "From" option (Thomas Piccirello)
- WEBUI: Set WebUI download options using set preferences (Thomas Piccirello)
- WEBUI: Show list of categories on WebUI download page (Thomas Piccirello)
- WEBUI: Hide WebUI text input for custom monitor save locations (Thomas Piccirello)
- WEBUI: Add "When adding a torrent" options (Thomas Piccirello)
- WEBUI: Add WebUI Auto TMM options (Thomas Piccirello)
- WEBUI: Add speed limit icons to WebUI Speed options (Thomas Piccirello)
- WEBUI: Add WebUI Random port button and proxy unencrypted password notice (Thomas Piccirello)
- WEBUI: Replace WebUI Options fixed-width labels (Thomas Piccirello)
- WEBUI: Reorder WebUI options to match GUI (Thomas Piccirello)
- WEBUI: Allow WebUI sidebar to be collapsed (Thomas Piccirello)
- WEBUI: Show ellipsis when WebUI sidebar is too narrow (Thomas Piccirello)
- WEBUI: Fix WebUI bug on override of Start Download option.Closes #9855. (Tom Piccirello)
- WEBUI: Fix missing words in WebUI (Chocobo1)
- WEBUI: Add SameSite attribute to WebUI session cookie (Thomas Piccirello)
- WEBUI: Put WebUI security related options into a groupbox (Chocobo1)
- WEBUI: Add option for WebUI Host header validation (Chocobo1)
- WEBUI: Show icon in WebUI sorted column (Thomas Piccirello)
- RSS: Keep track of REPACK/PROPER downloads. Closes #9898. (Stephen Dawkins)
- SEARCH: Only instantiate SearchPluginManager as needed (Thomas Piccirello)
- MACOS: Make file icon look like other macOS icons (Nick Korotysh)
- MACOS: Save option to start minimized in Mac (thalieht)

### Monday November 19th 2018 - qBittorrent v4.1.4 release

qBittorrent v4.1.4 was released.<br>
The macOS builds will follow in a couple of days.<br>
There will be 1-2 more releases in the 4.1.x series. After that we will switch to 4.2.x. The 4.2.x series will drop support for versions of Windows before Windows 7.<br>
**EDIT(2018-11-20):** The installers for 4.1.4 were deleted almost immediately after release. Crashes were reported on Windows 10 for the 64bit installer. See bug [#9865](https://github.com/qbittorrent/qBittorrent/issues/9865). New installers will be uploaded when the problem is fixed.<br>
**EDIT(2018-11-22):** The crash issue has been resolved. The installers are available now.
- FEATURE: Recognize *.ts files as previewable (silver)
- FEATURE: Allow to disable speed graphs (dzmat)
- FEATURE: Clear LineEdit on ESC (silverqx)
- BUGFIX: Fix divide-by-zero crash (Chocobo1)
- BUGFIX: Remove speed limit checkbox in Options dialog (Chocobo1)
- BUGFIX: Fix speed graph "high speeds" bug (dzmat)
- BUGFIX: Don't update torrent status unnecessarily (glassez)
- BUGFIX: Improve force recheck of paused torrent (glassez)
- BUGFIX: Restore torrent in two steps (glassez)
- BUGFIX: Improve scaling of speed graphs (dzmat)
- BUGFIX: Add isNetworkFileSystem() detection on Windows. This allows network mounts to be monitored correctly by polling timer. (Chocobo1)
- BUGFIX: Reduce horizontal graphs resolution. Improves performance. (dzmat)
- BUGFIX: Don't recheck just checked torrent (mj-p, glassez)
- BUGFIX: Add SMB2 magic number (Chocobo1)
- BUGFIX: Restore startup performance to v4.1.2 times. Needs at least libtorrent 1.1.10 (sledgehammer999)
- BUGFIX: Make strings actually translatable (sledgehammer999)
- WEBUI: Handle downloading .torrent file as success (Tom Piccirello)
- WEBUI: Fix Alternative Web UI to be available (glassez)
- WEBUI: Consider empty locale setting as not set (glassez)
- WEBUI: Add free disk space to WebUI status bar (Thomas Piccirello)
- WEBUI: Add WebUI search API controller (Thomas Piccirello)
- WEBUI: Fix WebUI Auto TMM context menu bug (Thomas Piccirello)
- WEBUI: Use independent translation for WebUI (glassez)
- WEBUI: Add categories WebAPI (Thomas Piccirello)
- WEBUI: Fix minor JavaScript defects (Thomas Piccirello)
- WEBUI: Add locale to js file path (Thomas Piccirello)
- WEBUI: Translate WebUI torrents Status column (Thomas Piccirello)
- WEBUI: Bump Web API version
- RSS: Allow to disable downloading REPACK/PROPER matches (Stephen Dawkins)
- RSS: Improve RSS Feed updating (glassez)
- SEARCH: Allow resizing search filter in search job (thalieht)
- SEARCH: Improve parser for search engine versions.txt (Chocobo1)
- SEARCH: Update Python URLs (Chocobo1)
- SEARCH: Fix asking to install Python (Chocobo1)
- SEARCH: Reformat python code to be compliant with PEP8 (Chocobo1)
- OTHER: cmake: restore out-of-source build (Eugene Shalygin)
- OTHER: cmake: cmake: use C++14 when available (Eugene Shalygin)

### Tuesday September 18th 2018 - qBittorrent v4.1.3 release

qBittorrent v4.1.3 was released.<br>
- FEATURE: Preselect name without extension when renaming files (thalieht)
- FEATURE: Allow setting seq & first/last from context menu without metadata (thalieht)
- BUGFIX: Show "N/A" if there is no scrape (thalieht)
- BUGFIX: Save option about tracker favicons under correct key (sledgehammer999)
- BUGFIX: When file data are unreachable pause torrent and show "Missing Files" status (temporary fix) (sledgehammer999)
- BUGFIX: Don't disable DHT when using force proxy (Thomas Piccirello)
- BUGFIX: Correctly save torrent queue position/state/priority changes in fastresume (glassez, thalieht, sledgehammer999)
- BUGFIX: Fix icon height/width ratio (Chocobo1)
- BUGFIX: Fix values sorted wrong in "Last Activity" column (Chocobo1)
- BUGFIX: Replace png icons with svg (Chocobo1)
- WEBUI: Allow WebUI sidebar filters to be hidden (Thomas Piccirello)
- WEBUI: Increase WebUI Options initial height (Thomas Piccirello)
- WEBUI: Adjust WebUI Options form alignment (Thomas Piccirello)
- WEBUI: Fix WebUI unreachable issue (Chocobo1)
- WEBUI: Require torrent category creation to be explicit (Thomas Piccirello)
- WEBUI: Include category save path in web api sync data (Thomas Piccirello)
- WEBUI: Add save path and editing to WebUI new category dialog (Thomas Piccirello)
- WEBUI: Bump Web API version
- SEARCH: Refactor in searchjob to always color visited entries (thalieht)
- SEARCH: Set "enter" as shortcut to download the selected torrents in search job (thalieht)
- SEARCH: Add regex option in the search filter's context menu (thalieht)
- LINUX: Fix GUI scaling issue on Linux (Chocobo1)
- LINUX: Fix regression that broke installing desktop file (Eli Schwartz)
- OPENBSD: Better filesystem support for filewatcher (Elias M. Mariani)

### Sunday August 12th 2018 - qBittorrent v4.1.2 release

qBittorrent v4.1.2 was released.<br>
- FEATURE: New options for "inhibit sleep" (Lukas Greib)
- FEATURE: Add option for regexps in the transferlist search filter's context menu (thalieht)
- FEATURE: Add async io threads option to AdvancedSettings (tjjh89017)
- FEATURE: Allow save resume interval to be disabled (Chocobo1)
- FEATURE: Add checkbox for recursive download dialog (Chocobo1)
- FEATURE: Add changelog link in program updater (Chocobo1)
- BUGFIX: Avoid allocating large memory when loading a .torrent file (Couchy)
- BUGFIX: Notify users on 1st time close/minimize to tray (sledgehammer999)
- BUGFIX: Fix I/O error after fetching magnet metadata (Chocobo1)
- BUGFIX: Never save resume data for already paused torrents (glassez)
- BUGFIX: Make ProgramUpdater upgrade to 64-bit qbt when running on 64-bit Windows (Chocobo1)
- BUGFIX: Put temporary files in qbt own temp folder (Chocobo1)
- BUGFIX: Avoid potentially setting the wrong piece priorities (Chocobo1)
- BUGFIX: Various code refactorings/improvements (Chocobo1, thalieht, glassez)
- BUGFIX: Add options "Download in sequential order" and "Download first and last pieces first" in AddNewTorrentDialog (Chocobo1)
- BUGFIX: Download favicon using appropriate protocol (glassez)
- BUGFIX: Apply proxy settings on DownloadManager creation (glassez)
- BUGFIX: Improve torrent initialization (glassez)
- BUGFIX: Save resume data on torrent change events (glassez)
- BUGFIX: Increase default resume data save interval (Chocobo1)
- BUGFIX: Work around crash when processing recursive download. Closes #9086 (Chocobo1)
- BUGFIX: Reduce queries to python version (Chocobo1)
- BUGFIX: Disable certain mouse wheel events in Options dialog (Chocobo1)
- WEBUI: Send all rechecks in one request (Thomas Piccirello)
- WEBUI: Add WebUI Force Reannounce option (Thomas Piccirello)
- WEBUI: Create non-existing path in setLocationAction() (Goshik)
- WEBUI: Add WebUI support for Mac ⌘ (Command) key (Thomas Piccirello)
- WEBUI: Show current save path in 'Set location' window (Goshik)
- WEBUI: Fix WebUI cache behavior for css files (Chocobo1)
- WEBUI: Send Cache-Control header in WebUI responses (Chocobo1)
- WEBUI: Add form-action to CSP (Thomas Piccirello)
- WEBUI: Add upgrade-insecure-requests to CSP when HTTPS is enabled (Thomas Piccirello)
- WEBUI: Reset WebUI ban counter on login success (Chocobo1)
- WEBUI: Add logging messages in WebUI login action (Chocobo1)
- WEBUI: Add option to control CSRF protection (Chocobo1)
- WEBUI: Add option to control WebUI clickjacking protection (Chocobo1)
- RSS: Implement "Sequential downloading" feature. Closes #6835 (glassez)
- RSS: Don't use RSS feed URLs as base for file names. Closes #8399 (glassez)
- SEARCH: Add a name filter for search results (thalieht)
- SEARCH: Fix python version detection (Chocobo1)
- SEARCH: Clear python cache conditionally (Chocobo1)
- SEARCH: Properly normalize version string before parsing it (hannsen)
- WINDOWS: Turn on Control Flow Guard for MSVC builds (Chocobo1)
- MACOS: Replace deprecated function IOPMAssertionCreate() on macOS (Chocobo1)
- OTHER: Fix CMake build with QtSingleApplication. Fixes #9196 (Eugene Shalygin)

### Sunday May 27th 2018 - qBittorrent v4.1.1 release

qBittorrent v4.1.1 was released.<br>
Important fixes are in the version of libtorrent used. It fixes SOCKS5 issues and and tracker announces about downloaded/uploaded data.
- FEATURE: Add 'Moving' state for torrents being relocated/moved (sledgehammer999)
- FEATURE: Show rechecking progress (sledgehammer999)
- FEATURE: Add option to remember last used save path (glassez)
- FEATURE: Torrent name is also renamed if the content was renamed in the "Add New Torrent" dialog (glassez)
- FEATURE: Relax behavior of "Download first and last piece first". It applies to all files and not only to the previewable. (Chocobo1)
- BUGFIX: Fix issues with translatable strings (Chocobo1)
- BUGFIX: Fix displayed tracker messages (Chocobo1)
- BUGFIX: Make settings file recovery more robust (Chocobo1)
- BUGFIX: Retry saving settings when operation failed (Chocobo1)
- BUGFIX: Log successful torrent move (sledgehammer999)
- BUGFIX: Fix deletion of old logs (sledgehammer999)
- BUGFIX: Delete non-commited fastresume files (sledgehammer999)
- BUGFIX: Don't migrate torrents that have newer fastresumes (sledgehammer999)
- BUGFIX: Fix adding multiple torrents at once from WebUI (glassez)
- BUGFIX: Improve "Run External Program" behavior. On Windows, a backslash isn't appended to paths from path variables (Chocobo1)
- BUGFIX: Suppress multiple I/O errors for the same torrent (sledgehammer999)
- BUGFIX: Replace raster qbt logo with vector version (Chocobo1)
- WEBUI: Fix wrong API method names (glassez)
- WEBUI: Filter torrent info endpoint by hashes (Marcel Petersen)
- WEBUI: Fix invalid API calls in WebUI (glassez)
- WEBUI: Improve legacy API params handling (glassez)
- WEBUI: Fix params handling for some legacy API methods (glassez)
- WEBUI: Apply locale changes immediately in WebUI (Chocobo1)
- WEBUI: Use 32px icons for favicon (Chocobo1)
- WEBUI/RSS: Properly set RSS settings via API (glassez)
- RSS: Fix auto-downloading rule when Smart filter with regular Episode filter are used (glassez)
- RSS: Make "Ignoring days" to behave like other filters (glassez)
- RSS: Place "Use Smart Episode Filter" more correctly (glassez)
- RSS: Use RSS feed update time as a fallback (glassez)
- COSMETIC: Fix Stats dialog size (sledgehammer999)
- MACOS: Fix GUI scaling factor on macOS (Chocobo1)
- WINDOWS: Update icons (adem4ik)
- LINUX: Fix open destination folder with Nautilus > 3.28 (Evgeny Lensky)
- OTHER: Code improvements and refactoring (thalieht, Nick Korotysh, Chocobo1)

### Friday May 5th 2018 - qBittorrent v4.1.0 release

qBittorrent v4.1.0 was released.<br>
This is a major version bump purely because there was a ton of code commits from the last one.<br>
There a new v2 WebAPI now, but v1 is still supported too.<br>
The Windows **32-bit** installer now uses Qt 5.6.3 instead of 5.7.1. The 5.6.3 version is an LTS release and newer than the 5.7.1 version. The 5.7.x series don't offer something useful for our usage.
- FEATURE: Add "Coalesce reads & writes" checkbox in advanced options (Chocobo1)
- FEATURE: Smart Filter for RSS (Stephen Dawkins)
- FEATURE: Possibility to configure at which speed a torrent is considered slow (thalieht)
- FEATURE: When creating a torrent you can choose to preserve the file order (toster, Chocobo1)
- FEATURE: A new, redesigned and refactored WebAPI (glassez)
- BUGFIX: Redefine CacheStatus.readRatio field. (Chocobo1)
- BUGFIX: Clarify some terms in stats dialog (Chocobo1)
- BUGFIX: Fix possible crash when using both share limits (thalieht)
- BUGFIX: Disable options when `Disable connections not supported by proxies` is enabled (Thomas Piccirello)
- BUGFIX: Add link to an explanation of `Disable connections not supported by proxies` (Thomas Piccirello)
- BUGFIX: Fix typo in a log message (Andrei Stepanov)
- BUGFIX: Fix loading very large torrents. Closes #8449. (Chocobo1)
- BUGFIX: Fix reverting backslashes to slashes in run external program. Closes #7800 (Chocobo1)
- BUGFIX: Use https for documentation links (Chocobo1)
- BUGFIX: Use original scheme when downloading favicons (Chocobo1)
- BUGFIX: Parse URL query string at application level (glassez)
- BUGFIX: Properly reply to announce request (embedded tracker) (glassez)
- BUGFIX: Add `Tags` parameter to "Run External Program" (Chocobo1)
- BUGFIX: Fix various typos (Chocobo1)
- BUGFIX: Refactor filesystem watcher. Delay before processing new files. (Chocobo1)
- BUGFIX: Don't strip empty arguments passed to external program. Closes #8454. (Chocobo1)
- BUGFIX: Stop creating Download folder on start (Chocobo1)
- BUGFIX: Avoid data corruption when rechecking paused torrents (sledgehammer999)
- BUGFIX: Fix crashes due to invalid iterator use (Luís Pereira)
- BUGFIX: Fix renaming completed files (Chocobo1)
- BUGFIX: Fix path separator in log messages (Chocobo1)
- WEBUI: Switch built-in Web UI html to HTML5 (glassez)
- WEBUI: WebUI Save user's resized window sizes (Thomas Piccirello)
- WEBUI: Make download + upload windows resizable (Thomas Piccirello)
- WEBUI: Add option to show/hide webui status bar (Thomas Piccirello)
- WEBUI: Add "Use proxy only for torrents" option to webui (Thomas Piccirello)
- WEBUI: Various fixes in the html code (Thomas Piccirello)
- WEBUI: Don't unselect selected torrents after a few seconds (Thomas Piccirello)
- WEBUI: Enable Http/1.1 persistence connection (Chocobo1)
- WEBUI: Format Read cache hits as percentage (Thomas Piccirello)
- WEBUI: Re-order and rename stats (Thomas Piccirello)
- WEBUI: Right align stat values (Thomas Piccirello)
- WEBUI: Enable Statistics window to be scrolled and resized (Tom Piccirello)
- WEBUI: Save WebUI Statistics window size (Thomas Piccirello)
- WEBUI: Make WebUI iframe windows scrollable on iOS (Thomas Piccirello)
- WEBUI: Remove unused CSS from WebUI login page (Thomas Piccirello)
- WEBUI: Consolidate CSS into style.css (Thomas Piccirello)
- WEBUI: Resolve JavaScript errors (Thomas Piccirello)
- WEBUI: Fix spacing in login form(Thomas Piccirello)
- WEBUI: Update WebUI to be more compliant with HTML5 standard (Chocobo1)
- WEBUI: Update clipboard.js to v2.0.0 (Chocobo1)
- WEBUI: Remove unused JavaScript library (Chocobo1)
- WEBUI: Fix setting preferences via WebAPI (glassez)
- WEBUI: Rename property to match its definition (Thomas Piccirello)
- WEBUI: Add Limit Share Ratio context menu option (Thomas Piccirello)
- RSS: Disable Auto TMM when RSS rule has save path (glassez)
- RSS: Process loaded RSS articles in case of error (glassez)
- RSS: Resolve (X)HTML entities in RSS content (glassez)
- SEARCH: Improve Search handling (glassez)
- SEARCH: Calculate supported categories based on selected plugin (Thomas Piccirello)
- SEARCH: Fix memory leak (Chocobo1)
- COSMETIC: Use spinbox suffix to display rate/time units (thalieht)
- COSMETIC: Avoid showing an empty row in AdvancedSettings (Chocobo1)
- OTHER: Various code optimizations and fixes (Luís Pereira, Chocobo1)
- OTHER: Fix build when using Clang under CMake (Luís Pereira)
- OTHER: Allow to disable Stacktrace support (Nick Korotysh)
- OTHER: Use RNG provided by OS (Chocobo1)

### Friday February 16th 2018 - qBittorrent v4.0.4 release

qBittorrent v4.0.4 was released.
- FEATURE: Add source field in Torrent creator. Closes #7965. (Chocobo1)
- FEATURE: Torrent creator: raise maximum piece size to 32 MiB (Chocobo1)
- FEATURE: Add a force reannounce option in the transfer list context menu. Closes #6448. (Jesse Bryan)
- BUGFIX: Fix sorting of country flags column in Peers tab. (sledgehammer999)
- BUGFIX: Fix natural sorting when the common part of 2 strings ends partially in a number which continues in the uncommon part. Closes #8080 #6732. (sledgehammer999)
- BUGFIX: Fix application of speed limits on LAN and μTP connections. Closes #7745. (sledgehammer999)
- BUGFIX: Make peer information flags in peerlist more readable. (thalieht)
- BUGFIX: Fix gui issues on high DPI monitor. (Chocobo1)
- BUGFIX: Fix dialog and column size on high DPI monitors. (Chocobo1)
- BUGFIX: Fix constant status of '[F] Downloading'. Closes #7628. (sledgehammer999)
- BUGFIX: Fix translation context. Closes #8211. (sledgehammer999)
- BUGFIX: Separate subnet whitelist options into two lines. (Thomas Piccirello)
- BUGFIX: Don't set application name twice. (Luís Pereira)
- BUGFIX: Set default file log size to 65 KiB and delete backup logs older than 1 month. (sledgehammer999)
- WEBUI: Only prepend scheme when it is not present. Closes #8057. (Chocobo1)
- WEBUI: Add "Remaining" and "Availability" columns to webui Content tab. (Thomas Piccirello)
- WEBUI: Make value formatting consistent with GUI (Thomas Piccirello)
- WEBUI: Reposition Total Size column to match gui (Thomas Piccirello)
- WEBUI: Add Tags and Time Active columns (Thomas Piccirello)
- WEBUI: Use https for www.qbittorrent.org (Thomas Piccirello)
- WEBUI: Match webui statuses to gui, closes #7516 (Thomas Piccirello)
- WEBUI: Right-align stat values (Thomas Piccirello)
- WEBUI: Add missing units. (Thomas Piccirello)
- RSS: Fix crash when deleting rule because it tries to update. Closes #8094 (glassez)
- RSS: Don't process new/updated RSS rules when disabled (glassez)
- RSS: Remove legacy and corrupted RSS settings (glassez)
- SEARCH: Search only when category is supported by plugin. Closes #8053. (jan.karberg)
- SEARCH: Only add search separators as needed. (Thomas Piccirello)
- COSMETIC: Tweak spacing in torrent properties widget and speed widget. (Chocobo1)
- WINDOWS: Use standard folder icon for open file behavior on Windows. Closes #7880. (Chocobo1)
- WINDOWS: Revert "Run external program" function. Now you will not be able to directly run batch scripts. (Chocobo1)
- MACOS: Fix torrent file selection in Finder on mac (vit9696)
- MACOS: Fix Finder reveal in preview and torrent contents (vit9696)
- MACOS: Fix cmd+w not closing the main window on macOS (vit9696)
- OTHER: Fix splitting of compiler flags in configure. Autoconf removes a set of [] during script translation, resulting in a wrong sed command. (sledgehammer999)
- OTHER: configure: Parse all compiler related flags together. (sledgehammer999)
- OTHER: Update copyright year. (sledgehammer999)

### Sunday December 17th 2017 - qBittorrent v4.0.3 release

Some more bugs fixed.<br>
macOS builds are available now too. Check the **4.0.0** changelog for the macOS specific new features.<br>
v4.0.3 changelog:
- BUGFIX: Add height padding to the transfer list icons. Closes #7951. (sledgehammer999)
- BUGFIX: Allow to drag-n-drop URLs into mainwindow to initiate download. (Chocobo1)
- BUGFIX: Fix crash when fitlering search results. Stable sorting is removed. Closes #7952.(Chocobo1)
- WEBUI: Fix missing qbt logo on login page in webUI. Closes #7953. (Chocobo1)
- WEBUI: Add check to avoid type error after logout. (Chocobo1)
- WEBUI: Use POST for logout command. This is to avoid browser being smart to prefetch the link then logging out the user. (Chocobo1)
- WEBUI: Fix WebUI is not reachable via IPv6. (glassez)
- WINDOWS: Disable the "?" help button in all dialogs on Windows. Closes #7365. Requires Qt 5.10. (Chocobo1)

### Friday December 1st 2017 - qBittorrent v4.0.2 release

This is a hotfix release too. It addresses some important RSS issues. macOS builds will follow.<br>
**NOTICE:** If you find your torrents being paused instead of seeding, then right click on your torrent, choose `Limit shario ratio...` and adjust the setting.<br>
v4.0.2 changelog:
- BUGFIX: Fix crash on some systems when creating address object for 255.255.255.255. Closes #7735. (sledgehammer999)
- PERFORMANCE: Change MixedModeAlgorithm default to TCP. This was the v3_3_x default and should sustain higher speeds. Closes #7779. (Chocobo1)
- PERFORMANCE: Stop logging IP filter parsing errors after a while, otherwise the GUI freezes or qBittorrent doesn't start. (sledgehammer999)
- GUI: Implement stable sort. Rows in transfer list shouldn't flicker anymore. (Chocobo1)
- WEBUI: Fix build when webui is disabled. (Heiko Becker)
- RSS: Fix build because of missing header. Closes #7805. (thoradia)
- RSS: Fix RSS parser. (glassez)
- RSS: Implement Import/Export RSS rules in legacy(aka v3_3_x) format. (glassez)
- RSS: Implement Import/Export RSS rules in JSON format. (glassez)
- WINDOWS: Fixed blurry text under Windows by setting DPI awareness to default. (TheNicker)
- LINUX: Fix i386 build. (Evgeny Lensky)

### Wednesday November 22nd 2017 - qBittorrent v4.0.1 release

This is a hotfix release. It is also build against newer libtorrent code that fixes connectivity issues with proxies.<br>
v4.0.1 changelog:
- BUGFIX: Fix crash on opening torrent/magnet (uninitialized pointer). Closes #7739 #7723. (sledgehammer999)
- BUGFIX: Enable preferences Apply button when ip banlist is modified (Thomas Piccirello)
- BUGFIX: Allow drag-n-drop magnet links to mainwindow. Closes #7742. (Chocobo1)
- BUGFIX: Fix crash when aborting a torrent creation process. Closes #7783. (Chocobo1)
- BUGFIX: Correctly check if torrent passed during application start already exists. (sledgehammer999)
- WEBUI: Add ip subnet whitelist for bypassing webui auth (Thomas Piccirello)
- WEBUI: Fix logo missing in login page (Chocobo1)
- COSMETIC: Fix english typo. (sledgehammer999)
- OTHER: cmake: qtsingleapplication should always be built statically (luigino)

### Monday November 20th 2017 - qBittorrent v4.0.0 release

This is a major new release with a huge changelog. Enjoy!<br>
v4.0.0 changelog:
- FEATURE: Change qbittorrent logo. Issue #6467. (HVS, Atif Afzal, sledgehammer999)
- FEATURE: New icon theme with SVG source, so we can scale it appropriately in the future. (Bert Verhelst)
- FEATURE: Drop Qt 4 support. Raise minimum Qt version to 5.5.1 (evsh)
- FEATURE: UI for managing locally banned IP list (dzmat)
- FEATURE: Support for specifying where to save/load config files. Support for portable mode. (evsh)
- FEATURE: It is now possible to pass options via ENV variables instead of cmd options. (evsh)
- FEATURE: Allow to strip subfolder in multifile torrents. (glassez, sledgehammer999)
- FEATURE: Allow cmd args to specify options when adding torrents. (Brian Kendall)
- FEATURE: Widget for showing filesystem paths while typing. Used in the Add New Torrent and Options dialogs. (evsh)
- FEATURE: Trackerlist: Allow to toggle columns (thalieht)
- FEATURE: Add availability column to torrent content model and torrent properties window (evsh)
- FEATURE: Implemented share limit by seeding time (naikel)
- FEATURE: Revamp Torrent creator (Chocobo1)
- FEATURE: Enable drag n drop to create torrent on mainwindow (Chocobo1)
- FEATURE: Add show/hide statusbar option (takiz)
- FEATURE: Show number of pieces. Closes #6774. (Chocobo1)
- FEATURE: Allow to select & delete multiple entries in "Manage Cookies" dialog (Chocobo1)
- FEATURE: Fetch Favicons via google as a final fallback (KingLucius)
- FEATURE: Add a Tags (multi-label) feature to the GUI. Closes #13. (tgregerson)
- FEATURE: Use the system icons for each file type in the Content tab (evsh)
- FEATURE: Use SVG files for monochrome tray icons. Closes #6085. (evsh)
- FEATURE: Prefill torrent name when creating a new torrent. Closes #7229. (Chocobo1)
- FEATURE: Expose more libtorrent options in advanced settings (Chocobo1)
- FEATURE: Add comboBox for selecting BitTorrent protocol. Closes #6316. (Chocobo1)
- FEATURE: Allow SMTP sender to be set. Closes #7575. (Chocobo1)
- FEATURE: Allow to specify if announcing to all tiers is desired. (sledgehammer999)
- FEATURE: Configurable number of history of paths in Add New Torrent dialog. (evsh)
- BUGFIX: Adjust icons names to better fit FDO scheme (evsh)
- BUGFIX: Optimized IP filter parsing, making blazingly fast (sledgehammer999, evsh)
- BUGFIX: Fix dialogs didn't position on the correct screen which qBittorrent window is on. Closes #1690, #2474, #3538. (Chocobo1)
- BUGFIX: Refactor and improve StatusBar (glassez)
- BUGFIX: Set expiration date for newly added cookie to +2 years from now, instead of +99 years. (Chocobo1)
- BUGFIX: Don't create subfolder inside temp folder (glassez)
- BUGFIX: Don't replace existing files when relocating torrent (glassez)
- BUGFIX: Fix explicit Torrent Management Mode in Add New Torrent dialog. Closes #5602. (sledgehammer999)
- BUGFIX: Fix calculation of 'Average time in queue' stat under libtorrent 1.1.x (sledgehammer999)
- BUGFIX: Don't disable bandwidth scheduler when manually switching speed limits. Closes #7306. (glassez)
- BUGFIX: Fix dereferencing freed pointer. Closes #7420. (Chocobo1)
- BUGFIX: Change the default cache size to 64MiB. (Chocobo1)
- BUGFIX: The previous "Disk write cache size" is not accurate since it is also being used for read cache, so rename it to "Disk cache". (Chocobo1)
- BUGFIX: Replace dialog ok-cancel buttons with QDialogButtonBox, which follows the platform specific button order. (Chocobo1)
- BUGFIX: Better reporting of success/failure of torrent and file deletion. (sledgehammer999)
- BUGFIX: Fix last activity calculation. Closes #7461. (Chocobo1)
- BUGFIX: Save state of options windows on cancel too. (silverqx)
- BUGFIX: Persist size and treeview header state in preview dialog. (silverqx)
- BUGFIX: Show torrent name in "add new torrent" dialog on merging trackers (Chocobo1)
- BUGFIX: Properly pre-select the selected torrent's current ratio limiting options in  UpDownRatioDlg dialogs. Fixes #7352 (thalieht)
- BUGFIX: Optimize code for SpeedWidget. (dzmat)
- BUGFIX: Disable processing events when adding torrents(prevents crashes). Closes #7436. (Chocobo1)
- BUGFIX: Open links in browser. Closes #7651. (Chocobo1)
- BUGFIX: Change default settings for tracker/tier announces to mimic μTorrent behavior. (sledgehammer999)
- BUGFIX: Explicitly set UPnP state on start-up. Closes #7338. (Chocobo1)
- BUGFIX: Include/print caught signal in stackdump (Chocobo1)
- COSMETIC: Trackerlist: Set text alignment of columns with numbers to the right (thalieht)
- COSMETIC: Enable alternatingRowColors for "Manage Cookie" dialog (Chocobo1)
- COSMETIC: Remove indentation for category/tag filter widgets in all platforms (thalieht)
- COSMETIC: Add space between widgets in left side panel. Closes #7224. (Chocobo1, glassez)
- COSMETIC: Unify preference window borders across the tabs (vit9696)
- COSMETIC: Center Options dialog when showed. (silverqx)
- COSMETIC: Show delete accelerator key in menu. closes #7508 (Nick Korotysh)
- COSMETIC: Set QTextOption::NoWrap property in "Download from URLs" dialog (Chocobo1)
- COSMETIC: Use SVG icons for the country flags. Closes #6223. (sledgehammer999)
- WEBUI: Allow to load/use ECDSA certificate in webUI. (Chocobo1)
- WEBUI: Add copy options to webui context menu (addresses #6815) (#7036) (Tom Piccirello)
- WEBUI: Set torrent location from webui context menu (addresses #6815) (#7062) (Tom Piccirello)
- WEBUI: Add option to rename torrent from WebUI (Thomas Piccirello)
- WEBUI: Add auto torrent management to webui context menu (addresses #6815) (Thomas Piccirello)
- WEBUI: Option for "Create subfolder" when adding new torrent. (thalieht)
- WEBUI: Fix addPaused wrong default behavior. (Chocobo1)
- WEBUI: Reposition "Priority" menu option in WebUI to match gui. Closes #7072. (Thomas Piccirello)
- WEBUI: Report TCPServer errorString() if webui fails to listen to port. (Matthew Fioravante)
- WEBUI: Exit gracefully when failed to initialize web server with qbt-nox (Chocobo1)
- WEBUI: Add file-to-piece-index mappings in /query/propertiesFiles command (Chocobo1)
- WEBUI: Add optional parameters for /command/download & /command/upload (Chocobo1)
- WEBUI: Print error messages upon receiving invalid header fields. (Chocobo1)
- WEBUI: Add WebUi\Address config option. (Matthew Fioravante)
- WEBUI: Reinitialize webUI server when "IP address" setting changed. An app restart won't be necessary from now on. (Chocobo1)
- WEBUI: Improve log and error messages (Chocobo1)
- SEARCH: Use explicit class for search plugin versions (evsh)
- SEARCH: Remove all search plugins from repo. There is another repo named 'search-plugins'. (sledgehammer999)
- SEARCH: Update the backend when a new plugin favicon is downloaded. (sledgehammer999)
- SEARCH: Allow search plugins sorting. Closes #7526. (Nick Korotysh)
- RSS: Redesigned RSS subsystem (glassez)
- RSS: Do not use hardcoded colors in RSS feed view (evsh)
- RSS: Improve RSS events logging (glassez)
- WINDOWS: Use dpiawareness=1 on Windows. Closes #5393. (sledgehammer999)
- WINDOWS: Reformat Windows build configuration files. (glassez)
- LINUX: Allow custom tray icons when system icon theme is used. Closes #7403. (evsh)
- MACOS: Various macOS UI improvements (vit9696)
- MACOS: Fix main menu item location on macOS (vit9696)
- MACOS: Fix macOS window restoration after using hide icon (vit9696)
- MACOS: Fix notification display on macOS (vit9696)
- OTHER: Use new classes/methods from libtorrent and stop using deprecate ones. (glassez)
- OTHER: Various string fixes (Allan Nordhøy, sledgehammer999)
- OTHER: cmake: do not use Qt5Widgets when locating QtSingleApplication. Closes #7551. (evsh)
- OTHER: Update BOOST m4 macros and simplify AX_BOOST_BASE usage (Chocobo1)
- OTHER: Drop OS/2 support. (sledgehammer999)
- OTHER: Optimize file size of PNG and SVG files. (sledgehammer999)
- OTHER: Add new translators in the About page.

### Thursday September 7th 2017 - qBittorrent v3.3.16 and 3.4.0beta2_20170709_cbfbae14090 release

Since it was a month since the last stable and v3.4.0 seems to be delayed just a bit, it was a good time to backport critical fixes and do another v3.3.x release.<br>
Alongside v3.3.16 there is beta2 of v3.4.0. It contains various fixes for the things mentioned in the first beta plus a few new additions. See changelog. This beta works on Windows XP (32-bit) too. macOS packages are ready too.<br>
Finally, the future stable version will be **v4.0.0 not v3.4.0**<br>
v3.3.16 changelog:
- BUGFIX: Better memory footprint when using libtorrent 1.1.x. The cache is turned off by default(`0 (disabled)` value in the settings). The value `-1 (auto)` makes it use 1/8 of your RAM. (sledgehammer999)
- BUGFIX: Skip user input events when adding torrent. Closes #7327. (glassez)
- BUGFIX: Avoid memory leak in the speed graph. (Chocobo1)
- WEBUI: Fix validating wrong header field. X-Forwarded-Host is a foreign proxy setting, it isn't the same as qbt's local setting and thus it makes no sense to verify it. Closes #7311. (Chocobo1)
- WINDOWS: Fix connection problems when a specific interface/ip is configured. (sledgehammer999)
- WINDOWS: Disable skipping of loopback interfaces. This fixes the absence of VPN tunnel interfaces under Windows and works around the QTBUG-32349. Fixes #7291. (Evengard)
- WINDOWS: The installer detects the 64bit running process too. (vlakoff)

3.4.0beta2_20170709_cbfbae14090 changelog:
- FEATURE: Prefill torrent name when creating a new torrent. Closes #7229. (Chocobo1)
- FEATURE: Expose more libtorrent options in advanced settings (Chocobo1)
- BUGFIX: Fix explicit Torrent Management Mode in Add New Torrent dialog. Closes #5602. (sledgehammer999)
- BUGFIX: Fix calculation of 'Average time in queue' stat under libtorrent 1.1.x (sledgehammer999)
- BUGFIX: Don't disable bandwidth scheduler when manually switching speed limits. Closes #7306. (glassez)
- COSMETIC: Remove indentation for category/tag filter widgets in all platforms (thalieht)
- COSMETIC: Add space between widgets in left side panel. Closes #7224. (Chocobo1, glassez)
- COSMETIC: Unify preference window borders across the tabs (vit9696)
- WEBUI: Add option to rename torrent from WebUI (Thomas Piccirello)
- WEBUI: Add auto torrent management to webui context menu (addresses #6815) (Thomas Piccirello)
- WINDOWS: Use dpiawareness=1 on Windows. Closes #5393. (sledgehammer999)
- MACOS: Fix macOS window restoration after using hide icon (vit9696)
- MACOS: Fix notification display on macOS (vit9696)

### Monday August 7th 2017 - qBittorrent v3.4.0beta_20170807_0320f9d5b5e release

Windows packages for v3.4.0beta_20170807_0320f9d5b5e are released.<br>
macOS packages might follow.<br>
**CAVEAT:** The 32bit build doesn't work on Windows XP. Apparently the libtorrent 1.1.x series have dropped the support for that OS.<br>
Here is the current changelog:
- FEATURE: New icon theme with SVG source, so we can scale it appropriately in the future. (Bert Verhelst)
- FEATURE: Drop Qt 4 support. Raise minimum Qt version to 5.5.1 (evsh)
- FEATURE: UI for managing locally banned IP list (dzmat)
- FEATURE: Support for specifying where to save/load config files. Support for portable mode. (evsh)
- FEATURE: It is now possible to pass options via ENV variables instead of cmd options. (evsh)
- FEATURE: Allow to strip subfolder in multifile torrents. (glassez, sledgehammer999)
- FEATURE: Allow cmd args to specify options when adding torrents. (Brian Kendall)
- FEATURE: Widget for showing filesystem paths while typing. Used in the Add New Torrent and Options dialogs. (evsh)
- FEATURE: Trackerlist: Allow to toggle columns (thalieht)
- FEATURE: Add availability column to torrent content model and torrent properties window (evsh)
- FEATURE: Implemented share limit by seeding time (naikel)
- FEATURE: Revamp Torrent creator (Chocobo1)
- FEATURE: Enable drag n drop to create torrent on mainwindow (Chocobo1)
- FEATURE: Add show/hide statusbar option (takiz)
- FEATURE: Show number of pieces. Closes #6774. (Chocobo1)
- FEATURE: Allow to select & delete multiple entries in "Manage Cookies" dialog (Chocobo1)
- FEATURE: Fetch Favicons via google as a final fallback (KingLucius)
- FEATURE: Add a Tags (multi-label) feature to the GUI. Closes #13. (tgregerson)
- FEATURE: Use the system icons for each file type in the Content tab (evsh)
- FEATURE: Use SVG files for monochrome tray icons. Closes #6085. (evsh)
- BUGFIX: Adjust icons names to better fit FDO scheme (evsh)
- BUGFIX: Optimized IP filter parsing, making blazingly fast (sledgehammer999, evsh)
- BUGFIX: Fix dialogs didn't position on the correct screen which qBittorrent window is on. Closes #1690, #2474, #3538. (Chocobo1)
- BUGFIX: Refactor and improve StatusBar (glassez)
- BUGFIX: Set expiration date for newly added cookie to +2 years from now, instead of +99 years. (Chocobo1)
- BUGFIX: Don't create subfolder inside temp folder (glassez)
- BUGFIX: Don't replace existing files when relocating torrent (glassez)
- COSMETIC: Trackerlist: Set text alignment of columns with numbers to the right (thalieht)
- COSMETIC: Enable alternatingRowColors for "Manage Cookie" dialog (Chocobo1)
- WEBUI: Allow to load/use ECDSA certificate in webUI. (Chocobo1)
- WEBUI: Add copy options to webui context menu (addresses #6815) (#7036) (Tom Piccirello)
- WEBUI: Set torrent location from webui context menu (addresses #6815) (#7062) (Tom Piccirello)
- SEARCH: Use explicit class for search plugin versions (evsh)
- SEARCH: Remove all search plugins from repo. There is another repo named 'search-plugins'. (sledgehammer999)
- SEARCH: Update the backend when a new plugin favicon is downloaded. (sledgehammer999)
- RSS: Redesigned RSS subsystem (glassez)
- RSS: Do not use hardcoded colors in RSS feed view (evsh)
- WINDOWS: Installer detects running process when it is 64-bit (vlakoff)
- MACOS: Various macOS UI improvements (vit9696)
- MACOS: Fix main menu item location on macOS (vit9696)
- OTHER: Use new classes/methods from libtorrent and stop using deprecate ones. (glassez)
- OTHER: Various string fixes (Allan Nordhøy, sledgehammer999)

### Thursday August 3rd 2017 - qBittorrent v3.3.15 release

qBittorrent v3.3.15 was released. Very minor release to fix a possibly annoying problem.
3.4.0beta is being prepped and will be released this weekend. Stay tuned.
- BUGFIX: Temporary subfolder wasn't being deleted. (glassez)

### Thursday July 20th 2017 - qBittorrent v3.3.14 release

qBittorrent v3.3.14 was released.
1. This release is made mainly to fix the previous problematic fix for Cross-Site Request Forgery attacks via the webui.
2. It also contains another Webui fix for a DNS rebinding attack. For all WebUI users, if your qBittorrent server is assigned with a domain name, it is recommended to enter the domain name in `GUI: Options -> WebUI tab -> Server domains textbox` or in `config: Preferences section -> WebUI/ServerDomains` in order to defend against DNS rebinding attacks.
3. For macOS users: This is my first attempt to have a shortcut to `Applications` folder in the dmg. I hope that I didn't screw up the presentation.
4. Google has decided that qBittorrent is a persona non-grata. Read [this](https://www.reddit.com/r/torrents/comments/6obxsa/google_bans_bittorrent/) reddit post for more info.
5. Either this weekend or the next one you will get a beta for v3.4.0. It has A LOT of new features so help in finding grave bugs. Keep checking back to see if it is posted.

- BUGFIX: Set interface for outgoing traffic(libtorrent 1.1.x series). (evsh)
- WEBUI: Fix KEEP_ALIVE_DURATION value (Chocobo1)
- WEBUI: Relax CSRF defense. Closes #6882. Allow HTTP request which has neither Origin nor Referer header included. (Chocobo1)
- WEBUI: Skip username/password check for active sessions (closes #6860) (Thomas Piccirello)
- WEBUI: Fix javascript errors and follow best practices (Thomas Piccirello)
- WEBUI: Fix value comparison. Closes #7081. (Chocobo1)
- WEBUI: Avoid modifying request headers (Chocobo1)
- WEBUI: Implement HTTP host header filtering. This filtering is required to defend against DNS rebinding attack. Fixes security issues reported by @beardog108 privately. (Chocobo1)
- WEBUI: Add Status column to webui (addresses #6815) (#7032) (Tom Piccirello)
- WEBUI: Bump API_VERSION and API_VERSION_MIN to 15.
- SEARCH: Pad shorter python versions. Closes #6877. (sledgehammer999)
- WINDOWS: Updated Arabic, Turkish, Greek, Russian, Danish languages of the installer. (KingLucius, BouRock, thalieht, Andrei Stepanov, scootergrisen)
- WINDOWS: Raise total stack size on Windows to 8 MB. Closes #7021. (Chocobo1)
- LINUX: Systemd service with user switch and other fixes/optimizations. (anton.latukha)

### Thursday June 1st 2017 - qBittorrent v3.3.13 release

qBittorrent v3.3.13 was released. This release is made mainly to fix possible Cross-Site Request Forgery attacks via the webui reported by OpenGG and fixed by Chocobo1.
- BUGFIX: Fixed UI glitch about torrent numbers in the sidepanel. Fixes #6454. (evsh)
- BUGFIX: Fix downloaded/uploaded columns were not highlighted properly when selected. (Chocobo1)
- BUGFIX: Always draw background in files list and search result list (Chocobo1)
- BUGFIX: Remove torrent temp folder if it becomes unneeded (glassez)
- BUGFIX: Remove torrent temp folder when torrent is deleted (glassez)
- BUGFIX: Setup DPI at startup (Chocobo1)
- BUGFIX: Do not attempt to show detailed tooltips without torrent metadata. Closes #6768. (evsh)
- BUGFIX: Better detection of already present files when adding a torrent. (fbriere)
- BUGFIX: Fix double click on system tray icon causing program to open and minimize immediately. Closes #5826. (Chocobo1)
- BUGIFX: Fix categories sorting in AddNewTorrentDialog. Partially fixes #6708. (fbriere)
- BUGFIX: Set "category" column as case-insensitive in transfer list. (fbriere)
- BUGFIX: Properly sort categories case-insensitively in filter widget. Closes #6708. (fbriere)
- BUGFIX: Fix renaming files is not case sensitive on Windows platform. Closes #5128. (Chocobo1)
- BUGFIX: Fix crash in download piece bar (evsh)
- BUGFIX: Fix focusing on the previously opened dialog didn't work (Chocobo1)
- WEBUI: Bugfix: `RequestParser::splitMultipartData` drop extra trailing newline. (OpenGG)
- WEBUI: Add `skip_checking` and `paused` to `/command/download` and `/command/upload` (OpenGG)
- WEBUI: Fix checkbox hidden. Closes #6642. (Chocobo1)
- WEBUI: Implement http persistence connection. Max simultaneous connection limit set to 500. This also release allocated memory of Connection instances at runtime instead of at program shutdown. (Chocobo1)
- WEBUI: Always send Content-Length header. (Chocobo1)
- WEBUI: Send Date http header (Chocobo1)
- WEBUI: Fix "Content-Encoding" header is always created. (Chocobo1)
- WEBUI: Implement robust checking for gzip encoding and revise gzip compressing/decompressing code. (Chocobo1)
- WEBUI: Make the context obligatory for translatable strings. Also delete duplicate strings from extra translations. (sledgehammer999)
- WEBUI: Use translatable strings in Statistics dialog. (sledgehammer999)
- WEBUI: Add missing unit sizes in misc.js (sledgehammer999)
- WEBUI: Use the same layout in the Speed tab in preferences as the GUI. (sledgehammer999)
- WEBUI: Return status indicating if at least one torrent was successfully added (Thomas Piccirello)
- WEBUI: Increase the number of digits after the decimal point (thalieht)
- WEBUI: Use less permissive Content Security Policy (Thomas Piccirello)
- WEBUI: Fix connection status icon too large. Closes #6804. (Chocobo1)
- WEBUI: Cosmetic fixes for WebUI upload and download windows (naikel)
- WEBUI: Fix slow filtering in WebUI. (naikel)
- WEBUI: Make cookie parsing robust (Chocobo1)
- WEBUI: New API for getting torrent piece info (Chocobo1)
- WEBUI: Implement Cross-Site Request Forgery defense. Due to this the HTTP `referer` header is now expected in (almost) all HTTP requests. qBittorrent will drop the request sent without the `referer` header. That's why we bump the `API_VERSION_MIN` too. (reported by OpenGG, fixed by Chocobo1)
- SEARCH: Update demonoid, legittorrents plugins (ngosang)
- SEARCH: Remove mininova, ExtraTorrent plugins (ngosang, KingLucius)
- SEARCH: Add btdb plugin (ngosang)
- WINDOWS: Updated Spanish, Ukrainian, German, Chinese languages of the installer. (ngosang, evsh, schnurlos, wevsty)
- LINUX: Rename .desktop and appdata files to match executable name. Fixes #6625. (evsh)
- MACOS: Fix UI responsiveness after AddNewTorrentDialog received metadata. (Brian Kendall)

### Thursday April 6th 2017 - qBittorrent v3.3.12 release

qBittorrent v3.3.12 was released. This a bugfix release not a major one.
- FEATURE: Indicate bitness in stackstrace and about dialog. Closes #6172. (sledgehammer999)
- BUGFIX: Fix incomplete type compile error with Qt4 (Chocobo1)
- BUGFIX: Fix compile error: ‘escape’ is not a member of ‘Qt’ (Chocobo1)
- BUGFIX: Use system locale to format dates/time/etc (sledgehammer999)
- BUGFIX: Follow http user-agent format (Chocobo1)
- BUGFIX: Fix cancel "Set location" causes files move to installation dir. (Chocobo1)
- WEBUI: Improve performance of updating 'progress' column (buinsky)
- WEBUI: Implement statistics window in web UI (FranciscoPombal)
- WEBUI: fixed "remaining" column in WebUI (FranciscoPombal)
- WEBUI: Set HttpOnly attribute to SID cookie (Chocobo1)
- WEBUI: Fire up the timer to clean inactive sessions (Chocobo1)
- WEBUI: Set cookie SID value to empty on logout (Chocobo1)
- WINDOWS: Make the installer DPI aware (regs01)
- WINDOWS: Set exit code to 0 on install/uninstall success. Fixes problem with silent installations. (Chocobo1)
- WINDOWS: The 64-bit installer refuses to install on 32-bit systems. (sledgehammer999)
- WINDOWS: The 64-bit installer uses the correct "Program Files" now. Detection will not work if you install on top of previous installer. (sledgehammer999)
- WINDOWS: Fix running the uninstaller if the user chose a different path in the installer. Closes #6080. (sledgehammer999)
- LINUX: Add keywords to the .desktop file. (sledgehammer999)
- LINUX: Update stuff in appdata.xml and run 'appstream-utl upgrade' on it. (sledgehammer999)
- OTHER: Replace rand() by a true uniform distribution generator (Chocobo1)
- OTHER: Change our user-agent format as indicated earlier in the news section (Chocobo1)
- OTHER: cmake: fix OSX bundle creation (evsh)

### Tuesday March 7th 2017 - NOTICE to tracker operators: User agent change

Starting from the next version (v3.3.12) qBittorrent will use the following user-agent format:
```
qBittorrent/A.B.C.DE
```
`A`, `B`, `C` and `D` are numbers indicating `VERSION_MAJOR`, `VERSION_MINOR`, `VERSION_BUGFIX` and `VERSION_BUILD` respectively.<br/>
If `D` is zero it will be omitted. The 3rd dot(`.`) will be omitted in this case.<br/>
`A`, `B` and `C` will always be present.<br/>
`E` is a string and possible values of it are `alpha`, `beta` and `rc`. They might not appear in all lowercase. Also they might appear numbered eg `alpha2`.<br/>
If `E` is empty it will be omitted. This indicates a stable release.<br/>
There is no connection between `D` and `E`. One might be present even if the other isn't.
To sum up and give an example, the user agent that v3.3.12 will use is `qBittorrent/3.3.12`.

### Monday March 6th 2017 - "qBittorrent is the best BitTorrent client": a guide by TurboLab.it

The Italian techzine *TurboLab.it* published a new long-form BitTorrent tutorial titled [La Grande Guida a BitTorrent](https://turbolab.it/bittorrent-973/grande-guida-bittorrent-669) (literally: *The big guide to BitTorrent*). **The author recommends *qBittorrent* as "the best BitTorrent client for Windows"**, citing the lightweight footprint, the no-crapware bundled installer and the clean interface among the top reasons for his choice.<br/>
Those who understand Italian can read the full guide here: [La Grande Guida a BitTorrent](https://turbolab.it/bittorrent-973/grande-guida-bittorrent-669).<br/>
TurboLab.it team welcomes hints, tips and tricks to make the guide even better: comments can be left using the guide own commenting system (free registration required).

### Friday March 3rd 2017 - qBittorrent v3.3.11 release

qBittorrent v3.3.11 was released. There are a few WebUI security fixes.<br/>
This will be the last release in the v3.3.x series. Next release will have a new icon theme(at least) and will drop Qt4 support. Also Qt 5.7.1 seems to be the last release supporting Windows XP. It is unknown how long I am going to still support it.
- FEATURE: Always show progress and remaining bytes for unselected files. (sledgehammer999)
- FEATURE: Allow to change priority for unselected files through the combobox like it is done via the context menu. (sledgehammer999)
- FEATURE: Remove settings to exchange trackers. It wasn't used by non-libtorrent clients. Also it has a privacy risk and you might be DDoSing someone. (sledgehammer999)
- FEATURE: Put temp files in .qBittorrent directory. Closes #4462. (Chocobo1)
- FEATURE: Use the numbers from tracker scrape response. Closes #5048, #6117. (Chocobo1)
- FEATURE: Implement category filter widget. Show categories in tree mode when subcategories are enabled. (glassez)
- FEATURE: Allow to toggle columns in searchtab (thalieht)
- FEATURE: PeerList: allow to hide zero values for the "uploaded" and "downloaded" columns (thalieht)
- FEATURE: Display more information in tracker tab (ngosang)
- FEATURE: Use Ctrl+F to search torrents. Closes #5797. (Tim Delaney)
- FEATURE: Transferlist: add hotkeys for double click and recheck selected torrents (thalieht)
- FEATURE: Add hotkey for execution log tab, Trackerlist, Peerlist etc (thalieht)
- FEATURE: Separate seeds from peers for DHT, PeX and LSD (thalieht)
- BUGFIX: Do not remove added files unconditionally. Closes #6248 (Eugene Shalygin)
- BUGFIX: Ignore mouse wheel events in Advanced Settings. Closes #866. (Chocobo1)
- BUGFIX: Add queue repair code. It should fix missing torrents after restarting. (Eugene Shalygin, nxd4)
- BUGFIX: Fetch torrent status when generating final fastresume data. It should fix missing torrents after restarting. (Eugene Shalygin)
- BUGFIX: Fix queue overload for add torrent at session start. It should fix missing torrents after restarting. (falco)
- BUGFIX: After files relocate, don't remove the old folder even if it is empty. (Chocobo1)
- BUGFIX: Fix finding 'English' item in language dropdown menu when an unrecognized locale is requested. Closes #6109. (sledgehammer999)
- BUGIFX: Speedlimitdlg: raise slider default value to 10000. Closes #6150. (Chocobo1)
- BUGFIX: TransferListWidget: keep columns width even if they are hidden on qBittorrent startup (unless something goes wrong) (thalieht)
- BUGFIX: fix index overflow for torrents with invalid meta data or empty progress (Falco)
- BUGFIX: Immediately update torrent_status after manipulating super seeding mode. Partially fixes #6072. (sledgehammer999)
- BUGFIX: Use case-insensitive comparison for torrent content window. Closes #6327. (Chocobo1)
- BUGFIX: Fixed sort order for datetime columns with empty values (closes #2988) (Vladimir Sinenko)
- BUGFIX: Disable proxy in WebUI HTTP server. Closes #6349. (Eugene Shalygin)
- COSMETIC: Use a disabled progressbar's palette for unselected files. (sledgehammer999)
- COSMETIC: Support fallback when selecting theme icons (Eugene Shalygin)
- COSMETIC: Do not resize SVG icons (Eugene Shalygin)
- COSMETIC: Align text to the right in columns that handle numbers for PeerList and SearchTab (thalieht)
- COSMETIC: Increased number of digits after the decimal point for Gibibytes and above (thalieht)
- COSMETIC: Use non-breaking spaces between numbers and units (thalieht)
- WEBUI: Fix proxy type bug (Oke Atime)
- WEBUI: Use the correct value for KEY_TORRENT_NUM_COMPLETE/KEY_TORRENT_NUM_INCOMPLETE (Chocobo1)
- WEBUI: Make torrents table scrollable horizontally (buinsky)
- WEBUI: Make torrent peers table scrollable horizontally (buinsky)
- WEBUI: Add tooltips to dynamic table header (buinsky)
- WEBUI: Implement dynamic table columns resizing, reordering and hiding (buinsky)
- WEBUI: Add some missing columns to dynamic tables (buinsky)
- WEBUI: Make too tall menus scrollable (buinksy)
- WEBUI: Prevent text wrapping in menus (buinsky)
- WEBUI: Add a vertical separator between columns (buinsky)
- WEBUI: Implement resizable progress bar in "Done" column (buinsky)
- WEBUI: Fix scrollbar covers menu item with long text (buinsky)
- WEBUI: Remove 300px limit of column width (buinsky)
- WEBUI: Avoid lags in firefox on resizing progress column (buinsky)
- WEBUI: Fix category in torrent upload. Closes #6260 (ngosang)
- WEBUI: Turn off port forwarding of WebUI by default for GUI users (Chocobo1)
- WEBUI: Exclude insecure ciphers. Fixes security issues reported by @beardog108 privately. (Chocobo1)
- WEBUI: Avoid clickjacking attacks. Fixes security issues reported by @beardog108 privately. (ngosang)
- WEBUI: Add X-XSS-Protection, X-Content-Type-Options, CSP header. Fixes security issues reported by @beardog108 privately. (Chocobo1)
- WEBUI: Escape various values that might contain injected html. Fixes security issues reported by @beardog108 privately. (Chocobo1)
- WEBUI: Bump API_VERSION to 12.
- SEARCH: Update extratorrent plugin. Closes #6261 (ngosang)
- SEARCH: SearchTab: can now save sorting column changes (thalieht)
- SEARCH: Use case-insensitive sort for Name column in Search tab. Closes #407. (Chocobo1)
- RSS: Fix tab order in RSS downloader. Closes #6164. (Tim Delaney)
- RSS: Move old RSS items to separate config file. Closes #6167. (Tim Delaney)
- RSS: Episode filter code refactoring (Tim Delaney)
- RSS: Allow resetting rule to no category. Closes #5539. (Tim Delaney)
- RSS: Save rule on enable/disable even if not selected. Closes #6163. (Tim Delaney)
- RSS: Allow | in RSS must contain. Closes #6171. (Tim Delaney)
- RSS: RSS use red text to indicate invalid filter. Closes #6165. (Tim Delaney)
- RSS: Allow episode zero (special) and leading zeroes in RSS episode filter. (Tim Delaney)
- RSS: RSS parse torrent episodes like 1x01 as well as S01E01. Closes #2749. (Tim Delaney)
- RSS: RSS allow infinite range to extend beyond current season. Closes #800, #3876, #6170. (Tim Delaney)
- RSS: Improve UI responsiveness during RSS downloading. Closes #873, #1089, #1235, #5423. (Tim Delaney)
- RSS: Show name of feed list and sort rules in editor. Closes #3782, #6281. (Tim Delaney)
- RSS: Fix regex matching. Closes #6337. (Tim Delaney)
- MACOS: Fix qbittorrent-nox build (Oke Atime)
- LINUX: fixes default indicator name (Bilal Elmoussaoui)
- OTHER: Workaround problem with moc from Qt4 and #if (Eugene Shalygin)
- OTHER: Print warning to the user if stacktrace contains no function names (Eugene Shalygin)
- OTHER: Various cmake fixes (Eugene Shalygin)
- OTHER: Fix finding qmake in configure when cross-compiling (Zach Bacon)

### Tuesday December 27th 2016 - SSL support

Now the mainsite is served over HTTPS. Thanks to [Let's Encrypt](https://letsencrypt.org/) and to shiki (forum admin).<br>
Also the mainsite is available as a git repo now for (almost) anyone to hack, fix bugs and maybe [redesign](https://github.com/qbittorrent/qBittorrrent-website/issues/5). Look [here](https://github.com/qbittorrent/qBittorrrent-website).
