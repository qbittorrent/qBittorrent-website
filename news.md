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
- BUGFIX: Work around crash when procesing recursive download. Closes #9086 (Chocobo1)
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
`A`, `B`, `C` and `D` are numbers indicating `VERSION_MAJOR`, `VERSION_MINOR`, `VERSION_BUGFIX` and `VERSION_BUILD` respectively.  
If `D` is zero it will be omitted. The 3rd dot(`.`) will be omitted in this case.  
`A`, `B` and `C` will always be present.  
`E` is a string and possible values of it are `alpha`, `beta` and `rc`. They might not appear in all lowercase. Also they might appear numbered eg `alpha2`.  
If `E` is empty it will be omitted. This indicates a stable release.  
There is no connection between `D` and `E`. One might be present even if the other isn't.
To sum up and give an example, the user agent that v3.3.12 will use is `qBittorrent/3.3.12`.

### Monday March 6th 2017 - "qBittorrent is the best BitTorrent client": a guide by TurboLab.it

The Italian techzine *TurboLab.it* published a new long-form BitTorrent tutorial titled [La Grande Guida a BitTorrent](https://turbolab.it/bittorrent-973/grande-guida-bittorrent-669) (literally: *The big guide to BitTorrent*). **The author recommends *qBittorrent* as "the best BitTorrent client for Windows"**, citing the lightweight footprint, the no-crapware bundled installer and the clean interface among the top reasons for his choice.  
Those who understand Italian can read the full guide here: [La Grande Guida a BitTorrent](https://turbolab.it/bittorrent-973/grande-guida-bittorrent-669).  
TurboLab.it team welcomes hints, tips and tricks to make the guide even better: comments can be left using the guide own commenting system (free registration required).

### Friday March 3rd 2017 - qBittorrent v3.3.11 release

qBittorrent v3.3.11 was released. There are a few WebUI security fixes.  
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

### Saturday December 17th 2016 - qBittorrent v3.3.10 release

qBittorrent v3.3.10 was released containing hotfixes. Windows users: There is an installer for 64-bit qbittorrent. However, you **might** experience increased memory usage due to this.<br>
**NOTICE TO PACKAGERS:** Read 3.3.8 news and changelog too.

- BUGFIX: Fix share ratio limiting. Broken by commit 259b5e51c49b744. Closes #6039 #6048. (sledgehammer999)
- BUGFIX: Case insensitive sort for client column. Closes #6054. (Oke Atime)
- BUGFIX: Make resume/pause menu items clickable. Closes #6040. (Oke Atime)
- WINDOWS: Make the updater to look for the x64 installer if running x64 version. (sledgehammer999)

### Wednesday December 14th 2016 - qBittorrent v3.3.9 release

qBittorrent v3.3.9 was released containing hotfixes.<br>
**NOTICE TO PACKAGERS:** Read 3.3.8 news and changelog too.

- BUGFIX: Fix slider for per torrent speed limits when no global speed limit has been set. Closes #6046. (sledgehammer999)
- BUGFIX: Fix GUI for proxy settings. Closes #6045. (sledgehammer999)
- OSX: Correctly migrate settings/rss/usage stats in macOS. Closes #6041. (sledgehammer999)

### Wednesday December 14th 2016 - qBittorrent v3.3.8 release

qBittorrent v3.3.8 was released.<br>
**NOTICE TO PACKAGERS:** Libtorrent 1.1.x series isn't officially supported yet. This qBittorent release uses API of 1.1.x that hasn't been released yet. It is in their git branch for now. Wait for 1.1.2 release, or build from RC_1_1 branch, or build against the 1.0.x series.

- FEATURE: Start using new libtorrent 1.1.x APIs (needs at least 1.1.2). Still unofficial support. (glassez, sledgehammer999)
- FEATURE: Add a new DHT bootstrap node run by libtorrent author arvidn. (sledgehammer999)
- FEATURE: Option to disable tracker's favicon download. (sledgehammer999)
- FEATURE: Shift + scroll = horizontal scroll. Closes #5980. Only for TransferListWidget, PeerListWidget. (Chocobo1)
- BUGFIX: Actually set new path as default when checkBox is enabled in Add New Torrent dialog. (erikssm)
- BUGFIX: Properly fix the handling of default save path store/load. (sledgehammer999)
- BUGFIX: Fix crash when restoring from tray. Closes #5854. (Chocobo1)
- BUGFIX: Export torrents added only after the setting was enabled. (sledgehammer999)
- BUGFIX: Delete old rss favicon before assigning new one. (sledgehammer999)
- BUGFIX: Don't revert save path value in the Dialog when metadata are received. Closes #5482. (sledgehammer999)
- BUGFIX: Don't ever stop seeding forced torrents. Closes #5784. (sledgehammer999)
- BUGFIX: Fix potential crash in TransferList widget. Closes #5873. (Chocobo1)
- BUGFIX: Sort torrent names case insensitively. (Yez Ezey)
- BUGFIX: Fix mistake in getting values for sorting in TransferList widget. (Anton Lashkov)
- BUGFIX: Fix memory leaks. (dzmat, Chocobo1)
- WEBUI: Fix webui port overflow. (thalieht)
- WEBUI: Changed meaning of the value of the 'dl_limit', 'up_limit', 'alt_dl_limit' and 'alt_up_limit' tokens. The value is expressed in bytes and not in KiB. (sledgehammer999)
- WEBUI: Don't request client SSL certificate. Closes #3883. (borouhin)
- WEBUI: Bump API_VERSION and API_VERSION_MIN to 11.
- SEARCH: Fixed extratorrent search not working Closes #5736 #5753. (Yez Ezey)
- SEARCH: Update Demonoid plugin. (ngosang)
- SEARCH: Remove TorrentReactor plugin. (ngosang)
- SEARCH: Fix python auto install, deletion of installer and use 3.5.x series for Vista+. Closes #5871. (sledgehammer999)
- SEARCH: Set /usr/local/bin before default PATH on macOS. closes #5639 #5571. This enables finding newer python installs. (Yez Ezey)
- COSMETIC: Log: set embedded Tracker [OFF] msg type as info. (thalieht)
- COSMETIC: Remove (mostly) useless log warnings about tracker's favicon. (sledgehammer999)
- COSMETIC: Change RSS view layout to horizontal. Closes #5920. (Chocobo1)
- OSX: Fix crash on exit using Qt4. (Yez Ezey)
- OSX: Change QSettings to IniFormat on macOS. Closes #5770 #5808. (Yez Ezey)
- LINUX: Workaround a Qt5 bug which results in a flood of network interface change singals. (Eugene Shalygin)
- OTHER: Turkish translation for installer. (Burak Yavuz)
- OTHER: Update portugueseBR for installer. (DaRKSoM)
- OTHER: Update portuguese for installer. (EdwardLinux)
- OTHER: Add --disable-qt-dbus to configure if $host_os is macOS. (Yez Ezey)
- OTHER: New translations: Icelandic, Latvian, Malay, Occitan, Uzbek.
- OTHER: A whole lot of code refactoring by various people.

### Sunday September 11th 2016 - qBittorrent v3.3.7 release

qBittorrent v3.3.7 was released. Minor bugfixes of v3.3.6. Mac OS X builds will be delayed a little bit because Qt 5.6.1 doesn't play nice and I'll need to rebuild 5.6.0.

- FEATURE: Delete torrent+files with Shift+Delete (pieniacy)
- BUGFIX: Fix 6-hour speedplot point push rate. Close #5545 (Daniel Segesdi)
- BUGFIX: Avoid spawning a new explorer.exe process when selecting "Open containing folder". Closes #5564. (Chocobo1)
- BUGFIX: Fix loading of new geoip db due to an artificial size limit. (SagePtr)
- BUGFIX: Better error handling and logging with smtp communication. (Brian Kendall)
- SEARCH: Remove KickassTorrents search engine (ngosang)
- SEARCH: Remove BTDigg search engine (ngosang)
- SEARCH: Update Torrentz search engine (ngosang)

### Wednesday July 20th 2016 - qBittorrent v3.3.6 release

qBittorrent v3.3.6 was released. Minor bugfixes of v3.3.5. It also fixes crashes on launch for some Windows setups. It is a libtorrent problem. On Windows it uses libtorrent 1.0.9+git f716aef5 with commit 45cff5837f7b4af reverted as this one is causing the crashes. Investigation is ongoing. Mac OS X builds are ready too. Ubuntu PPA will follow.

- BUGFIX: Do not create save folder in advance (glassez)
- BUGFIX: Fix upper-bound limit of command line for "Run External Program" in Windows. Closes #5399. (Chocobo1)
- BUGFIX: Invoke system's cmd.exe directly. (Chocobo1)
- BUGFIX: Workaround space issues in file path for running external program on Windows. (Chocobo1)
- BUGFIX: Fix icons are missing when using RTL languages in Options dialog. Closes #5398. (Chocobo1)

### Monday June 20th 2016 - qBittorrent v3.3.5 release

qBittorrent v3.3.5 was released.

- FEATURE: Implement Torrent Management Mode(TMM) (glassez)
- FEATURE: New cookies management dialog and various related fixes (glassez)
- FEATURE: Use unique temp directories (temp_path/&lt;truncated_torrent_hash&gt;). Closes #5154. (glassez)
- FEATURE: Display notifications when a torrent is added. Closes #334 and #915. (sledgehammer999)
- FEATURE: Sort labels with natural sort algorithm in the right-click menu. Closes #3919. (Chocobo1)
- FEATURE: Add option to automatically remove .torrent files upon adding (Eugene Shalygin)
- FEATURE: Add option to bind directly to an IP instead of using a network Interface (Sjoerd van der Berg, sledgehammer999)
- FEATURE: Detailed tooltips on the progress and availability bars in the General button of each torrent. (Eugene Shalygin)
- FEATURE: Let user able to specify a filter when choosing an IP filter file (Chocobo1)
- FEATURE: Improve usability of "Run External Program". Users can write (platform dependent) shell scripts now. (Chocobo1)
- PERFORMANCE: Optimize drawing in speed graph (Anton Lashkov, Chocobo1)
- BUGFIX: Fix memory leak. (sledgehammer999)
- BUGFIX: Fix resizing bug in "add torrent dialog". Closes #5036. (Chocobo1)
- BUGFIX: Fix qBittorrent doesn't exit immediately when "all downloads are done -> exit" option enabled. (glassez, Chocobo1)
- BUGFIX: Display the filepath when a torrent fails to load. Closes #100 and #805. (sledgehammer999)
- BUGFIX: Fix Add tracker dialog empty trackers (ngosang)
- BUGFIX: Fix Add tracker dialog URL download (ngosang)
- BUGFIX: Fix torrent adding with existing data (glassez)
- BUGFIX: Try to find incomplete files for new torrent (glassez)
- BUGFIX: Fix rechecking after torrent is finished (glassez)
- BUGFIX: Fix duplicate network interfaces. Closes #5131 (ngosang)
- BUGFIX: Fix .!qB extension is added when disabled (glassez)
- BUGFIX: Fix "IP Filtering - Apply to trackers" wasn't being applied. Closes #5217. (Chocobo1)
- BUGFIX: Don't resize the Country column needlessly (thalieht)
- BUGFIX: Fix crashing when exiting the program while the Options window was showing. Closes #4871, #5049. (Chocobo1)
- BUGFIX: Fix parsing of eMule .DAT filters. Closes #5281. (thalieht, sledgehammer999)
- WEBUI: Implement in setting/removing/showing categories. (buinsky)
- WEBUI: Add 'Added on' column in Webui. Closes #5145,#1092,#738 (Ibrahim Tachijian)
- WEBUI: Add command to get the logs (pmzqla)
- WEBUI: Expose Add trackers feature (pmzqla)
- WEBUI: Bump API_VERSION and API_VERSION_MIN to 10. (sledgehammer999)
- SEARCH: Implement search filters in the proxy model. (Eugene Shalygin)
- SEARCH: Optimize widgets inside of the search tab (Eugene Shalygin)
- SEARCH: Remove duplicated code from search tab and widget (Eugene Shalygin)
- SEARCH: Use nova2dl.py script instead of DownloadManager. Closes #5026. (glassez)
- SEARCH: Various UI cleanups and optimizations. (Chocobo1, ngosang)
- SEARCH: Fix Torrentz, Mininova, LegitTorrents, PirateBay plugins (ngosang)
- SEARCH: Fix toolbar resizing when m_searchFilter appears/disappears. Closes #5120. (Chocobo1)
- SEARCH: Use QPalette::LinkVisited color for downloaded items in search results (Eugene Shalygin)
- SEARCH: Update Python version requirements (min 2.7.9 / 3.3.0) (ngosang)
- SEARCH: Remove filters from Torrentreactor, BTDigg and Demonoid. It is done in the GUI now. (ngosang)
- RSS: default refresh interval to 30 mins (botmtl)
- COSMETIC: Improve TransferListDelegate::sizeHint (Chocobo1)
- COSMETIC: Fix long text clipping. Closes #5091. (Chocobo1)
- COSMETIC: Minor change in Stats dialog (ngosang)
- COSMETIC: Fix Update all button height in RSS tab (ngosang)
- COSMETIC: Disable `comboHideZero` when `checkHideZero` is unchecked. (Chocobo1)
- COSMETIC: Disable `checkLimituTPConnections` when `checkuTP` is unchecked. (Chocobo1)
- COSMETIC: Enable word wrap for "Run external program" help text (Chocobo1)
- COSMETIC: Fix mutually exclusive radio buttons can be unselected. (Chocobo1)
- COSMETIC: Set About tab font-size to default (zywo)
- COSMETIC: Improve wordings in "Auto download torrent" section (Chocobo1)
- COSMETIC: Change "Auto download torrent" default save path to "default location". (Chocobo1)
- COSMETIC: Change ambiguous text "Copy selected" to "Copy IP:port" (Chocobo1)
- COSMETIC: Improve error messages for "Auto download torrents" (Chocobo1)
- COSMETIC: Slim down 'Downloads' page of options window. (sledgehammer999)
- COSMETIC: Cleanup Connection page in Option dialog. Closes #845. (Chocobo1)
- COSMETIC: Fix reload button size is not the same size as "..." button in options dialog. (Chocobo1)
- WINDOWS: Let Windows handle all widgets scaling. (Chocobo1)
- WINDOWS: Improve stack trace for windows by including source filenames and line numbers (SeigneurSerpent)
- OSX: Fix qt5 bundle on OSX. Closes #4014. (sledgehammer999)
- OTHER: Make AddNewTorrentDialog behavior uniform (glassez)
- OTHER: Optimize the shutdown dialog (Chocobo1)
- OTHER: Enable access to shutdown functions when configured with `--disable-gui` option (Chocobo1)
- OTHER: Delete Import Torrent Dialog. Just use the "add new torrent" dialog. (glassez)
- OTHER: Optimize code for natural sorting (Chocobo1)
- OTHER: Use new alert dispatching API for libtorrent 1.1.x (glassez)
- OTHER: Fix gcc 6 compilation with qmake. See #5237. (sledgehammer999)

### Tuesday March 29th 2016 - qBittorrent v3.3.4 release

qBittorrent v3.3.4 was released after a long time with huge changelog.<br/>The Windows binary is compiled using Qt 5.6. You'll see a graphic glitch when hovering over the "plus" sign in the content tree. It is a known problem but Qt 5.6 brings fixes that justify using it despite the graphic glitch.

- FEATURE: Download more pieces in "Download first and last pieces first" feature (ngosang)
- FEATURE: Unlock first column in peerlist too (thalieht)
- FEATURE: Add "Hide zero values" option. Closes #3543. (Chocobo1)
- FEATURE: Add a "remaining" column to the torrent content model (Ben Lau)
- FEATURE: Allow to toggle columns in peerlist (thalieht)
- FEATURE: Add ability to filter log messages by type. (sledgehammer999)
- FEATURE: Add ability to write the log to file. (sledgehammer999)
- FEATURE: Add 'never show again' checkbox/pref to auto-exit confirm dialog (d3fault, sledgehammer999, Chocobo1)
- PERFORMANCE: Perform fastresume data saving in separate thread (glassez)
- PERFORMANCE: Optimize session startup (glassez)
- BUGFIX: Save resume data using QSaveFile (Qt5 only). This reduces chances of corrupt files. (glassez)
- BUGFIX: Check torrent file permissions before opening (birdie-github)
- BUGFIX: Always update native session's announce_ip setting (Jesse Connop)
- BUGFIX: Fix loading *.magnet files from watched folders. Closes #4701. (sledgehammer999)
- BUGFIX: Fix upgrade corrupted fastresume file (glassez)
- BUGFIX: Fix total values for "Seeds" & "Peers" (Chocobo1)
- BUGFIX: Fix potential race condition. Closes #4742. (Chocobo1)
- BUGFIX: Don't merge trackers for private torrents. Closes #2928. (sledgehammer999)
- BUGFIX: Fix double buttons in "Add New Torrent" dialog. (Chocobo1)
- BUGFIX: Fix malformed date header in email. Closes #4828. (Chocobo1)
- BUGFIX: Save "Run external program" input as is. Closes #4830. (Chocobo1)
- BUGFIX: Enable "filename" column in peers list again. Crash is fixed now. (Eugene Shalygin)
- BUGFIX: Don't display warning when folder name stayed the same after rename. (sledgehammer999)
- BUGFIX: Fix selection of Portuguese translation files. (sledgehammer999)
- BUGFIX: Fix selection of Esperanto locale. Closes #4999. (sledgehammer999)
- BUGFIX: Fix "caja" file manager opens the file instead of opens the directory. Closes #5003. (Chocobo1)
- BUGFIX: Fix periodic latency spikes on Windows with WiFi connections. Closes #4209. (sledgehammer999)
- BUGFIX: Potentially fix a random crash coming from the sidepanel (sledgehammer999, ngosang)
- WEBUI: Fix max_ratio precision. Closes #4707 (ngosang)
- WEBUI: Fix JavaScript exception on WebUI load (buinsky)
- WEBUI: Fix translation (buinsky)
- WEBUI: Submit the label in the new label dialog on pressing enter key (buinsky)
- WEBUI: Check WebUI username and password length. Closes #4191 (ngosang)
- WEBUI: Minor changes in CSS styles (ngosang)
- WEBUI: Add "Added on" and "Completion on" fields to query/torrents query response (buinsky)
- WEBUI: Do not try to parse request message when content-length is 0 (Dan Seminara)
- WEBUI: Support SSL certificate bundles. Issue #4896. (UnDifferential)
- WEBUI: Change the order of the values of speed labels (buinsky)
- WEBUI: Bump WebUI API_VERSION
- SEARCH: Update PirateBay plugin. (ngosang)
- SEARCH: Added TorLock search engine (ngosang)
- COSMETIC: Fix splash screen staying on top of all windows. Closes #1391. (sledgehammer999)
- COSMETIC: Rearrange advanced settings (Chocobo1)
- COSMETIC: Cleanup "about" dialog (Chocobo1)
- COSMETIC: Cleanup "Add New Torrent" dialog (Chocobo1)
- COSMETIC: Use short date in addnewtorrentdialog (Chocobo1)
- COSMETIC: Change "Free disk space" to "Free space on disk" (Chocobo1)
- COSMETIC: Let OS handle DPI scaling for now. Should let Qt do the work when it's more mature. (Chocobo1)
- COSMETIC: Put comment_lbl in QScrollArea. Closes #4881. (Chocobo1)
- COSMETIC: Change the order of the values of speed labels (buinsky)
- COSMETIC: Cleanup the Log tab (Chocobo1)
- COSMETIC: Cleanup the RSS tab (Chocobo1)
- OTHER: Set "Show splash screen on start up" option default to off (Chocobo1)
- OTHER: Support for cross-compilation with MXE (Boris Nagaev)
- OTHER: Add basic (and unofficial) cmake support (Eugene Shalygin)
- OTHER: Move some URLs overs to https (funkydude)
- OTHER: Add appveyor support (Chocobo1)
- OTHER: TravisCI: switch to Trusty image. Closes #4953. (Chocobo1)
- OTHER: Many other internal code restructuring, cleaning and fixing.

### <a id="forum_restored">Saturday February 13th 2016 - The forum is restored</a>

As mentioned [earlier](#forum_compromise), there were reports that the forums from a bunch of bittorrent related sites were hacked. As a result we switched off our forum to investigate. To the best of our knowledge we weren't hacked. We didn't discover any evidence of unauthorized entry. We highly suspect that the self-proclaimed "hacker" was a fraud instead. Just so you know the passwords are saved hashed and salted in the database. It is very difficult to reverse this and obtain the real password. In any case, we reset all the passwords and switched on the forum. You already should have received an email about your new password.

### Thursday January 21th 2016 - qBittorrent v3.3.3 release

qBittorrent v3.3.3 was released. See changelog. This build also fixes a problem that requested "G:" drive on Windows.

- BUGFIX: Temporarily disable "filename" column of peers view. It has a bug that causes frequent crashes. See issue #4597.
- WEBUI: Move style of dynamic table header to CSS (buinsky)
- WEBUI: Fix unnecessary updates of torrent peers table (buinsky)

### Tuesday January 19th 2016 - qBittorrent v3.3.2 release

qBittorrent v3.3.2 was released. It fixes a few regressions. If you use watch folders you'll need to reconfigure them.<br/>The Windows binary is compiled using MSVC 2015 now.

- FEATURE: Add a new column to peers list that shows list of files which are downloaded right now from a peer. (evsh)
- FEATURE: Improve the "Watch folders" UI. Closes #4300. You'll need to redo your watch folders settings. (sledgehammer999, glassez)
- FEATURE: Support loading multiple magnets/hashes/urls per .magnet file in the watched folder(one per line). Closes #217. (sledgehammer999)
- BUGFIX: Fix resolution of peer host names. Closes #4307. (sledgehammer999)
- BUGFIX: Don't recheck twice after 'Force Recheck' with 'Recheck torrents on completion' enabled. Closes #4274. (sledgehammer999)
- BUGFIX: Don't apply some settings again if they weren't changed. Closes #4278. (sledgehammer999)
- BUGFIX: Update ISO 3166 country codes. Closes #3942. (Chocobo1)
- BUGFIX: Fix moving torrents to Temp after app restart. Closes #4434. (glassez)
- BUGFIX: Fix crash in favicon code due to null pointer dereference. (glassez)
- BUGFIX: Move the 'qBittorrent-resume' file even when no magnets were recovered. Also make sure to rename it with a unique name. Closes #4334. (sledgehammer999)
- BUGFIX: Don't add the watch folder before the user closes the Preferences window. (sledgehammer999)
- BUGFIX: Remove watch folders permanently only if the user accepts the Preferences dialog. (sledgehammer999)
- BUGFIX: Better handling of cookies in the download manager (glassez)
- BUGFIX: Use the download manager for RSS, the program updater and the dns updater. (glassez)
- BUGFIX: Fix reconfigure additional trackers (glassez)
- BUGFIX: Fix loading corrupted .fastresume file (glassez)
- WEBUI: Show filtered torrents number (buinsky)
- WEBUI: Fix paused, active and inactive filters (buinsky)
- WEBUI: Fixed bug when uploading several files and only the last one was considered. (naikel)
- WEBUI: Implemented WebUI interface for the new Watched Folders feature (naikel)
- WEBUI: Fix possible showing "qBittorrent client is not reachable" message on deleting torrents. (buinsky)
- WEBUI: Don't show "Limit download speed" menu item for downloaded torrents. (buinsky)
- WEBUI: Update webui run program parameters (buinsky)
- WEBUI: Allow to remove the label assigned to a torrent (pmzqla)
- WEBUI: Repair translation (buinsky)
- WEBUI: Remember last opened tab (buinsky)
- WEBUI: Bump WebUI API_VERSION and API_VERSION_MIN.
- COSMETIC: Update native names for Chinese locales. Closes #4381. (sledgehammer999)
- COSMETIC: Rename column header in Content view. (Chocobo1)
- COSMETIC: Edit speed limits and upload ratio icons (buinsky)
- SEARCH: Code refactoring. (glassez)
- SEARCH: Fix PirateBay plugin implementation for Python 3 (ngosang)
- SEARCH: Update PirateBay URL. Closes #4470 (ngosang)
- RSS: Code refactoring. (glassez)
- LINUX: Fix build. (sledgehammer999)
- OSX: Set qBittorrent as default torrent app in  Mac OS (dmitry.viktorov)
- OTHER: Fix lrelease version due to the default Qt5 build (Fabio Alessandro Locati)
- OTHER: Indicate to the user that he's going to download the new version. Indicate from the installer that the old version was detected and no settings will be deleted. Closes #4320. (sledgehammer999)
- OTHER: Don't require GUI libs for qt4 nox build. Closes #4404. (sledgehammer999)
- OTHER: Fix cross-compilation (bnagaev)
- OTHER: Allow GeoIP in nox builds (glassez)

### <a id="forum_compromise">Tuesday December 22nd 2015 - Forum compromise</a>

It has come to our attention that the forum database containing user info **might** have been compromised by a third unauthorized party. <u>We aren't able to tell if this is true from our logs</u>. And we aren't sure if the hack was real. See more info in this [SMF](https://torrentfreak.com/hackers-grab-deluge-and-qbittorrent-user-databases-151221/), which is the latest stable. As a precaution we have taken down the forums. The passwords weren't saved as plaintext, but as salted hashes. It will make it very difficult for the hackers to recover the real passwords. However, we strongly recommend you to change your password to any other site on which you used the same password. We are sorry for the inconvenience.

### Tuesday December 8th 2015 - qBittorrent v3.3.1 release

qBittorrent v3.3.1 was released. It fixes a few regressions. Mac OS X builds will be provided at a later time.

- FEATURE: FEATURE: New "Set as default label" option in Add torrent dialog. (takiz)
- FEATURE: Support wildcards for filtering torrent list and torrent content (vlakoff)
- BUGFIX: Fix -1 is displayed instead of the infinity symbol (Chocobo1)
- BUGFIX: Fix scan dirs settings saving. Closes #4254, #4239, #4187. (glassez)
- BUGFIX: Exported torrents now use name instead of hash. Closes #4205. (glassez)
- BUGFIX: Improve upgrade to v3.3.0. Now undownloaded magnets will be migrated too. Fixes #4195. (glassez)
- BUGFIX: Fix wrong encoding for listen failed error message. (glassez)
- BUGFIX: Fix RSS not automarking articles as read. (glassez)
- BUGFIX: Fix possible deadlock during application exit. (sledgehammer999)
- WEBUI: Cookies support on WebUI when downloading torrent from a URL. (Naikel Aparicio)
- WEBUI: Modified download and upload windows to allow autocompletion of browsers. (Naikel Aparicio)
- WEBUI: Fixed the spinner in the WebUI upload page. (Naikel Aparicio)
- WEBUI: Modified height of the WebUI download page. (Naikel Aparicio)
- WEBUI: Fixed all the JavaScript functions for download and upload pages. (Naikel Aparicio)
- WEBUI: Add seeds tab to WebUI (buinsky)
- WEBUI: Bump WebUI API_VERSION.
- COSMETIC: Cleanup "Trackers", "Peers", "HTTP Sources", "Speed" and "Content" page layout (Chocobo1)
- COSMETIC: Reduce mainwindow border width (Chocobo1)
- COSMETIC: Use QLineEdit built-in ClearButton (Qt5 only) (Chocobo1)
- COSMETIC: Change text description for half-open connection (Chocobo1)
- OTHER: Change update URL to FossHub. Closes #4188. (sledgehammer999)

### Sunday November 29th 2015 - qBittorrent v3.3.0 release

qBittorrent v3.3.0 was released. A lot has happened to it. And as you may have noticed from the v3.2.x series, we now have a healthy amount of devs contributing to it.<br/> This series have switched to Qt5 but Qt4 is still supported. Temporarily OS X builds will use Qt4.

- FEATURE: Huge core code refactoring. Problems with labels, temp folders etc should be eliminated. Smoother UI should be observed too. (glassez)
- FEATURE: Speed graph (Anton Lashkov)
- FEATURE: Add multiple peers in Peers addition dialog. Closes #1563, #2245, #3133, #1419, #3287, #1419 (ngosang)
- FEATURE: Allow to copy all peers with a keyboard shortcut (ngosang)
- FEATURE: Use GeoIP2 database, allows for country resolution of IPv6 peers. It is no longer embedded in the program but downloaded and updated monthly. (glassez)
- FEATURE: Add more "Run External Program" parameters, closes #3053, #238, #1291, #1522. (Chocobo1, glassez)
- FEATURE: Add an option to allow the use of proxies only for torrents. Closes #2701. (pmzqla)
- FEATURE: Detect network interface state changes. It should detect VPN connection resets. (Pawel Polewicz)
- FEATURE: Switch to using c++11 (glassez)
- FEATURE: Automatically add trackers to new downloads. (ngosang)
- FEATURE: You can now choose the path to download for watched folders. (dsimakov, sledgehammer999)
- FEATURE: Switch to Qt5 by default.
- BUGFIX: Fix progress calculation in Content tab. Closes #2639 Closes #2752 (ngosang)
- BUGFIX: Fix label filter. Closes #3429. (glassez)
- BUGFIX: Fix "Run External Program Launches too Early" issue, closes #2107. (Chocobo1)
- BUGFIX: Don't remove torrent contents parent folder, even it is empty. Closes #2244. (Chocobo1)
- BUGFIX: Always apply filter for manually banned IPs. Related #3988. (sledgehammer999)
- BUGFIX: Fix reporting of tracker status. Closes #3101. (sledgehammer999)
- BUGFIX: Don't connect to "any interface" when the configured network interface is missing. Closes #3943, #2741, #1159, #844 and #143. (sledgehammer999)
- BUGFIX: Fix reordering of first column with Qt5. Closes #2835. (sledgehammer999)
- COSMETIC: Add back "qBittorrent" in program updater title, closes #3549. (Chocobo1)
- COSMETIC: Use infinity symbol rather than -1 for nb_connections (pmzqla)
- COSMETIC: Move uTP options to it's own section (Chocobo1)
- COSMETIC: Fix availability bar & progress bar height being too small on high DPI displays (Chocobo1)
- COSMETIC: Fix availability label & progress label clipped on high DPI displays, closes #3237. (Chocobo1)
- COSMETIC: Add tooltips/legend for availability bar & progress bar (Chocobo1)
- COSMETIC: Use theme color for background in PropertiesWidget (Chocobo1)
- COSMETIC: Replace horizontal line with border in bottom panel (Chocobo1)
- COSMETIC: Various visual changes in the side panel. (Chocobo1)
- COSMETIC: Use thin border for transfer list (Chocobo1)
- COSMETIC: Make URL in "Add Torrent File..." clickable. Closes #3928. (Chocobo1)
- COSMETIC: New view for errored torrents. (sledgehammer999)
- WEBUI: Add information in General tab (ngosang)
- WEBUI: Reorder "Super seeding mode" option in right click menu (ngosang)
- WEBUI: Clean up JavaScript code (ngosang)
- WEBUI: Added labels support. #648 (Felipe Barriga Richards, ngosnag)
- WEBUI: Fix accessing the WebUI through IPv6 (ngosang)
- WEBUI: Bump WebUI API_VERSION to 6.
- WEBUI: Change selected color to differentiate from the progressbar. (Daniel Peukert, ngosang)
- SEARCH: Add "Copy description page URL" button in search tab. Closes #2371. (pmzqla)
- SEARCH: Add https_proxy env variable. This forces Python to use the HTTP proxy for HTTPS connections. (pmzqla)
- SEARCH: Detect new plugin URL from clipboard (ngosang)
- SEARCH: Update Torrentz trackers (ngosang)
- WINDOWS: Fix german translation of the installer (netswap)
- NOX: Don't ask the user questions in nox build when in non-interactive mode. Closes #3875. (sledgehammer999)
- OTHER: Fixed typos, spelling correction (dartraiden)
- OTHER: Fix need for restart to enable/disable peer countries resolution. (glassez)
- OTHER: Unload the GeoIP db when disabled. (sledgehammer999)
- OTHER: Reduce max value of "Disk cache size" to 1536MB for 32bit. Closes to #4028. (Chocobo1)
- OTHER: Make "Download in sequential order" and "Download first and last piece first" options independent. (glassez)

### Saturday October 10th 2015 - qBittorrent v3.2.4 release

qBittorrent v3.2.4 was released. This release finally fixes an obscure "hit-and-run" bug with trackers.
It is actually a libtorrent bug which is fixed in their source. But for fixing builds that will use older versions of
libtorrent (eg on Linux) I made a change in the v3.2.4 code that will circumvent the bug anyway.<br>
This version should be the last in the v3.2.x series. The upcoming v3.3.x is pretty stable and we'll focus to streamline it for release.<br>
PS: Ubuntu and OS X builds will be available in a few hours.

- FEATURE: Select the file of single file torrents when opening destination folder (pmzqla)
- BUGFIX: Fix crash with invalid favicon. Closes #3632. (glassez)
- BUGFIX: Try to download favicon.png when the download of favicon.ico fails (pmzqla)
- BUGFIX: Try to avoid loading a corrupted configuration file. Also log errors encountered while saving/loading the configuration. Closes #3503. (sledgehammer999)
- BUGFIX: Allow adding torrent link from Torcache (jsayol)
- BUGFIX: Don't limit the number of torrents that can be announced to the tracker/dht/lsd. Closes #3473. (sledgehammer999)
- BUGFIX: Fix potential crash when memory allocation failed. Closes #3877. (Chocobo1)
- COSMETIC: Change Queue buttons order in the Toolbar (GUI & Web UI) (ngosang)
- COSMETIC: Move option "Ignore transfer limits on local network" to Speed page (Chocobo1)
- COSMETIC: Move option "Confirm torrent deletion" to Behavior page (Chocobo1)
- COSMETIC: Fix typos. Make `μTP` untranslatable. Use American variation of words. Closes #3654. (sledgehammer999)
- COSMETIC: Optimize text color for dark themes. Closes #3633 and #3815. (sledgehammer999)
- COSMETIC: Show current label in the torrent context menu. Closes #3776. (sledgehammer999)
- WEBUI: Add save_path to /query/torrents (Casey Bodley)
- WEBUI: Bump API_VERSION to 5
- SEARCH: Fix python detection when the 'Anaconda' software is installed. Closes #3731. (sledgehammer999)
- RSS: Handle magnet links as torrents instead of news URLs. Closes #3560 (ngosang)
- RSS: Trim elements text in RSS articles (ngosang)
- RSS: Fix contextual menu in RSS torrents list (ngosang)
- RSS: Improve error handling when a RSS feed doesn't contain torrents (ngosang)
- RSS: More precise message and code simplification in RSS feeds deletion (ngosang)
- RSS: Don't hide the elements in Unread list when clicked (ngosang)
- RSS: Allow multiple selection in RSS torrents list (ngosang)
- RSS: Simplify string translation (ngosang)
- RSS: Handle more types of RSS feeds (ngosang)
- RSS: Fix RSS panel position not saved (ngosang)
- RSS: Fix forgetting label changes to first item in RSS rule list. (Gelmir)
- RSS: Add label to UI when a new one is creating during rule addition. (Gelmir)
- RSS: Removes refresh message when adding a new feed (ngosang)
- RSS: Fix RSS crash when deleting RSS feeds. Closes #997, #2152, #2461, #3718, #3747, #3766, #3806, #3814, #3829 and #3846. (ngosang)
- RSS: Sort labels in RSS Downloader dialog, closes #3140. (Chocobo1)
- WINDOWS: Correctly show german letters in the installer. Closes #3574, #3566. (sledgehammer999)
- WINDOWS: Fix file selection on Explorer when the filename contains weird characters. Closes #3185. (sledgehammer999)
- WINDOWS: Fix wrong default download directory in Windows. Closes #2625. (Chocobo1)
- WINDOWS: Fix German translation of the installer. (netswap)
- LINUX: Fix broken .desktop file icon for some locales. See #3905. (sledgehammer999)
- OTHER: Fix ppc64le detection during configure (sledgehammer999)
- OTHER: Don't use sed in configure. Closes #3169. (pmzqla)
- OTHER: Fix broken donation link. Closes #3771. (sledgehammer999)
- OTHER: Add forum link in README. Closes #3853. (sledgehammer999)
- OTHER: New translation: Esperanto
- OTHER: Fix Qt5 nox build on non-Windows. (sledgehammer999)

### Sunday October 04th 2015 - Paypal issue resolved

Dear users and supporters!

We had a minor issue with our Paypal account, which has now been resolved.<br>
Donation is now possible again - through Paypal.<br>
This does not mean that Paypal is preferred, the other methods work just fine too.
(you may need to force refresh the main page to make your browser discard the old cached one)<br>
Again, I would like to thank everyone for the continued support and donations.

### Sunday August 02nd 2015 - qBittorrent v3.2.3 release

qBittorrent v3.2.3 was released.

- BUGFIX: Fix crash when closing a search tab while search is running (pmzqla)
- SEARCH: Other minor search fixes and improvements (pmzqla)

### Saturday August 01st 2015 - qBittorrent v3.2.2 release

qBittorrent v3.2.2 was released.

- FEATURE: Allow to force reannounce DHT too (Chocobo1)
- FEATURE: Implement an option to disable confirmation of torrent recheck (blaxspirit)
- FEATURE: Allow to copy all the trackers with a keyboard shortcut (pmzqla)
- BUGFIX: Fix torrent renaming. Closes #3398 (ngosang)
- BUGFIX: Fix localhost address (::ffff:127.0.0.1) is not recognized when connecting to WebUI (Chocobo1)
- BUGFIX: Fix '&' character in label name becomes accelerator key, closes #3454. (Chocobo1)
- BUGFIX: Fix HTTP header parsing when torrent filename contains a semicolon. Closes #3511.
- BUGFIX: Fix installing search plugin from local file. (sledgehammer999)
- BUGFIX: Fix installing search plugin by drag-n-dropping file. (sledgehammer999)
- COSMETIC: Update color scheme of completed.png icon. (sledgehammer999)
- COSMETIC: Fix printing of the copyright symbol in the About dialog. (sledgehammer999)
- COSMETIC: Minor changes in Preview File dialog (ngosang)
- COSMETIC: Add Force Resume icon (ngosang)
- COSMETIC: Add count of unread items to RSS tab label (pmzqla)
- WEBUI: Ports between 1 and 65535 as in the GUI. Closes #1602 (ngosang)
- WEBUI: Fix an error in Content tab when the torrent doesn't have metadata (ngosang)
- WEBUI: New option Web UI port UPNP. Closes #3358 (ngosang)
- WEBUI: Fix API Content Types. Closes #3393 (ngosang)
- WEBUI: Fix empty trackers addition (ngosang)
- WEBUI: Torrent download from hash. Closes #1173 (ngosang)
- WEBUI: Fix sort by queue number (ngosang)
- WEBUI: Open external links in a new window/tab (ngosang)
- WEBUI: Massive increase in performance. (ngosang)
- SEARCH: Search status per tab (DoumanAsh)
- SEARCH: Remove the word 'torrent' in ExtraTorrent results (ngosang)
- SEARCH: Prefer python3 over python2 on Linux and OS X (pmzqla)
- SEARCH: Show notification if Python is not found and a search is started (pmzqla)
- SEARCH: Update link to the Windows Python installer (pmzqla)
- SEARCH: Improve checks for python. Print python version and path to log. (sledgehammer999)
- SEARCH: Improve Python detection (ngosang)
- OTHER: Improvements on the build system (Chocobo1)
- OTHER: Bump minimum libtorrent version required to 1.0.6/0.16.19. (sledgehammer999)
- OTHER: New translation: Slovenian

### Saturday July 11th 2015 - qBittorrent v3.2.1 release

qBittorrent v3.2.1 was released. The lag that some users experience when selecting a torrent or right-clicking it is fixed in v3.3.x series. However the code cannot be backported to v3.2.x series.

- FEATURE: Change default preferences (ngosang)
- FEATURE: Add "Add link to torrent" menu in TrayIconMenu. Closes #2918. (Chocobo1)
- FEATURE: Allow to Open files from the properties pane by pressing "Enter" (pmzqla)
- FEATURE: Add checkbox option for IpFilterTrackers. (Chocobo1)
- FEATURE: Download-from-URL textbox change focus on tab key (Mayank Asthana)
- FEATURE: Increase priority value of "High" (pmzqla)
- FEATURE: Add 16 KiB, 8 MiB and 16 MiB piece sizes in Torrent Creator (ngosang)
- BUGFIX: Disable Auto piece size when creating a new torrent (ngosang)
- BUGFIX: Set default focus to cancel button in delete confirm dlg, closes #3085 (Chocobo1)
- BUGFIX: Set default focus to ok button in add new torrent dlg (Chocobo1)
- BUGFIX: Set default focus to no button in exit confirm box (Chocobo1)
- BUGFIX: Fix Start Minimized checkbox in Options (ngosang)
- BUGFIX: Remove limits on alternative speeds setting (LazyBui)
- BUGFIX: Fix sorting torrents by ETA (pmzqla)
- BUGFIX: Improve ratio calculation formula. Closes #3096. (Chocobo1)
- BUGFIX: Clear missing files flag when resuming or force rechecking. Fixes issues in #2750. (sledgehammer999)
- BUGFIX: Delete tempfile when downloading favicon.ico. Closes #3257. (sledgehammer999)
- BUGFIX: Don't close downloadFromURL dialog when showing empty url warning (Chocobo1)
- BUGFIX: Minimize to tray only if the relevant option is enabled. (sledgehammer999)
- BUGFIX: Update disk space label after changing partition, closes #3309. (Chocobo1)
- BUGFIX: Don't use a default upload limit. Closes #3275. (sledgehammer999)
- BUGFIX: Fix Properties bar size when started minimized to tray. Closes #3206. (sledgehammer999)
- COSMETIC: Change option text "Confirmation on exit when torrents are active" (Chocobo1)
- COSMETIC: Enable to choose dark/light tray icons on all platforms. (Chocobo1)
- COSMETIC: Use AllUppercase for label text (Chocobo1)
- COSMETIC: changes in typography (ngosang)
- COSMETIC: Menu revamp (Chocobo1)
- COSMETIC: Revamp general tab info (Chocobo1)
- COSMETIC: Better update message for users (Chocobo1)
- COSMETIC: Fix ugly 'C++' wrapping in About dialog. (glassez)
- WEBUI: Fix login and logout relative URLs (ngosang)
- WEBUI: Fix resumeAll and pauseAll. Closes #3016 (ngosang)
- WEBUI: Changes in title bar (ngosang)
- WEBUI: Complete translatable strings (ngosang)
- WEBUI: Minor changes in style (ngosang)
- WEBUI: Fix Max connections and Time active in transfer information (ngosang)
- WEBUI: New config - Global maximum number of upload slots (ngosang)
- WEBUI: Display wasted data with friendly units. Closes #2994 (ngosang)
- WEBUI: add delay in shutdown command in order to send out response msg (Chocobo1)
- WEBUI: Option to hide Top Toolbar (ngosang)
- WEBUI: Reorder the tabs/groups in Options window (ngosang)
- WEBUI: Add new options (ngosang)
- WEBUI: Increase API_VERSION due to changes in #3279, #3197, #3226 and #3040 (ngosang)
- WEBUI: Add Web Seeds (HTTP Sources) tab (ngosang)
- WEBUI: Don't update the tabs if tab's panel is collapsed (ngosang)
- WEBUI: Fix alternative global rate limits. (ngosang)
- SEARCH: Fix thepiratebay. Closes #3012 (ngosang)
- SEARCH: Improve torrentz engine to return more results (ngosang)
- SEARCH: Change width of columns in search tab. Closes #764 (ngosang)
- SEARCH: Make strings translatable in search engine (ngosang)
- SEARCH: Aborting search engine process during closure. Close #2671 (DoumanAsh)
- SEARCH: Perform searches in parallel (DoumanAsh)
- SEARCH: Add Demonoid search engine (ngosang)
- SEARCH: Minor fixes in search engines (ngosang)
- SEARCH: Show the version of search engines (ngosang)
- SEARCH: Update Legit Torrent to remove sgmllib (DoumanAsh)
- SEARCH: Update KickassTorrents (ngosang)
- SEARCH: Update BTDigg (ngosang)
- SEARCH: Update Torrentz (ngosang)
- SEARCH: Update ExtraTorrent (ngosang)
- SEARCH: Update TorrentReactor (ngosang)
- SEARCH: Fix Python 2 implementation of Torrentz (ngosang)
- SEARCH: Cosmetic changes in search engine (ngosang)
- SEARCH: Fix column sort in search engine. Closes #2621 (ngosang)
- RSS: Update matching RSS articles while editing rules (pmzqla)
- WINDOWS: Fix python detection from registry when multiple versions are installed (sledgehammer999)
- LINUX: Fixes Linux issue for when the theme doesn't have a corresponding icon. (sledgehammer999)
- OTHER: Correctly detect FreeBSD when configuring. (sledgehammer999, yurivict)
- OTHER: Add translator to credits.
- OTHER: New translation: Indonesian.
- OTHER: Split Chinese locales into Chinese Simplified, Chinese Traditional(Taiwan), Chinese Traditional(Hong Kong). (sledgehammer999)

### Sunday May 10th 2015 - qBittorrent v3.2.0 release

qBittorrent v3.2.0 was released. After a long wait it is released. WebUI users will need to reset their passwords. Windows user with many torrents don't need to manually exit the application before system shutdown anymore.<br>
Thanks to all the contributors. Below follows the **HUGE** list of changes.

- FEATURE: Show actual protocol for listen success/failure in the log. Needs libtorrent v1.0.0 (Gelmir)
- FEATURE: Support per tracker re-announce. Needs libtorrent v1.0.0 (Gelmir)
- FEATURE: Support saving in network locations. (Gelmir)
- FEATURE: Support Qt5 (mostly Glassez)
- FEATURE: Code optimizations resulting in a more CPU efficient and snappier qBittorrent. (sorokin)
- FEATURE: WEBUI code rewritten, refactored and improved. (glassez, pmzqla, buinsky)
- FEATURE: Add option to hibernate computer in Auto-Shutdown menu (Bruno Barbieri)
- FEATURE: Cache preferences in memory. Minimize chance of settings corruption. Closes #1272, #1523, #1694. (sledgehammer999)
- FEATURE: Option to disable connections not supported by proxies. Closes #1894. (sledgehammer999)
- FEATURE: Haiku OS support (diger)
- FEATURE: Add a save resume data interval option(useful for SSD). (john-peterson)
- FEATURE: Add "Last Seen Complete" column (pmzqla)
- FEATURE: Add "Last Activity" column (pmzqla)
- FEATURE: Add "Total Size" column (pmzqla)
- FEATURE: Show current speed limits in the status bar (pmzqla)
- FEATURE: Episode filtering for RSS (Gelmir)
- FEATURE: Highlight files when opening containing folder on Windows and Linux(nautilus, dolphin, konqueror). (Gelmir, pmzqla)
- FEATURE: Setting to ignore RSS rule matches for X days (Gelmir)
- FEATURE: Add hotkeys and buttons for Top and Bottom priorities (alfrix)
- FEATURE: Implement peer relevance column. Closes #1630. (sledgehammer999)
- FEATURE: Show reason why a peer was blocked. Needs libtorrent 1.0.x. (sledgehammer999)
- FEATURE: Use the 'fastest_upload' setting as seed choking algorithm. (sledgehammer999)
- FEATURE: Allow to set text options for the toolbar icons (pmzqla)
- FEATURE: Add 'Resumed' torrent filter (john.s.peterson)
- FEATURE: 'Add New Torrent` dialog has a button for quickly choosing a location (sledgehammer999)
- FEATURE: Copy selected peers as IP:Port format. (ngosang)
- FEATURE: Show info hash in the torrent details in 'Add New Torrent' dialog. (sledgehammer999, chrishirst)
- FEATURE: New feature: Remove empty labels (ngosang)
- FEATURE: Add "Copy name" option in right-click menu of torrent list. Closes #2452 (chrishirst)
- FEATURE: Implement tracker list in the side panel. Closes #170. (sledgehammer999)
- FEATURE: Implement a 'Completed' status. Closes #2326 #2483 #939. (sledgehammer999)
- FEATURE: Columns for session-based download and upload statistics (LazyBui)
- BUGFIX: Use completed time from libtorrent directly. Closes #1726.
- BUGFIX: Speedup and fix a bug in torrent moving. (sorokin)
- BUGFIX: Scan Folder dialog now remembers last location (Bryan Roscoe)
- BUGFIX: Show input box to filter torrent list only when the list is shown (pmzqla)
- BUGFIX: Add placeholder text to the input to filter the torrent list (pmzqla)
- BUGFIX: Put directories first when sorting torrent content by name (pmzqla)
- BUGFIX: Fix missing icon for open action in file list (Gelmir)
- BUGFIX: Set placeholder text to torrent content filter. (sorokin)
- BUGFIX: Fix torrent creation when data is too large (sorokin)
- BUGFIX: Load torrents that have big metadata file. Closes #1889. (sledgehammer999)
- BUGFIX: Use correct separator for "OR" condition in RSS rules (pmzqla)
- BUGFIX: Don't waste UI space in 'Content' window. Closes #2159 (alfrix)
- BUGFIX: Fix the language selection in the combobox when the system locale only has a lang equivalent and not a lang_COUNTRY one. Closes #1786. (sledgehammer999)
- BUGFIX: Don't overwrite the 'Add Paused' setting from the Add New Torrent Dialog (Gelmir)
- BUGFIX: Fix file preview when .!qB extension is used (pmzqla)
- BUGFIX: Ensure that the priority column has enough width when queueing is enabled. Closes #2263. (sledgehammer999)
- BUGFIX: Don't put limits to the alternative speed limits (pmzqla)
- BUGFIX: Make space key change all selected files' checkboxes (sorokin)
- BUGFIX: Don't block peers that use privileged ports. (sledgehammer999)
- BUGFIX: Accept multiple files at once. Closes #2253 (buinsky)
- BUGFIX: Don't touch torrents whose files are missing. Closes #342 #2308 #2469. (sledgehammer999)
- BUGFIX: Save the new save path first in the history. Closes #2382. (sledgehammer999)
- BUGFIX: Fix default tracker in 'Create Torrent' dialog. (ngosang)
- BUGFIX: Let the OS decide the default interface regardless of IPv4/IPv6. Closes #2156. (Chocobo1)
- BUGFIX: Delete the correct selected torrents when the list is filtered. Closes #2729. (sledgehammer999)
- BUGFIX: Don't use HTML in tray icon pop-up on OSX. Closes #2830. (pmzqla)
- BUGFIX: Fix crash when trying to open destination folder on a torrent with no metadata. Closes #2522. (pmzqla)
- BUGFIX: Change torrent name when metadata is retrieved. (ngosang)
- COSMETIC: Removes white bar in the labels list. Closes #1151. (ngosang)
- COSMETIC: Fix speed printing in the tray icon and in the title bar. Closes #2737. (sledgehammer999)
- COSMETIC: Change the color scheme used (sledgehammer999)
- RSS: Display remote images in the preview (Mladen Milinkovic)
- RSS: Format html descriptions in the preview (Mladen Milinkovic)
- RSS: Support overriding global "Add paused" option on per rule basis (Gelmir)
- WINDOWS: Fix automatic python download. Closes #2076. (sledgehammer999)
- WINDOWS: Fix crash when searching the registry for installed python (glassez)
- WINDOWS: Tell Windows to wait during shutdown. (sledgehammer999, paolo-sz)
- OSX: Use the configure script to prepare the build in Mac OSX too. Closes #2295. (sledgehammer999)
- OSX: Fix the build (David Christenson)
- LINUX: Distribute systemd service file for the nox build (sledgehammer999, leigh123linux)
- LINUX: Create qBittorrent.appdata.xml (alxpl)
- SEARCH: Update KickassTorrents plugin (pmzqla)
- SEARCH: Remove vertor engine. Closes #2260. (DoumanAsh)
- SEARCH: Small fix of import in legittorrents engine (DoumanAsh)
- SEARCH: Add combo box for fast search engine switch (DoumanAsh)
- SEARCH: Fix error in mininova search engine (ngosang)
- SEARCH: Fix piratebay. Closes #2270 (DoumanAsh)
- SEARCH: Updated URL in kickasstorrents search engine (ngosang)
- SEARCH: Torrentz search engine added (ngosang)
- OTHER: Drop libtorrent 0.15.x support
- OTHER: Drop Qt &lt; 4.8.0 support
- OTHER: Migrate build system to autotools (sledgehammer999)
- OTHER: Remove deprecated feature of separate DHT port. (sledgehammer999)
- OTHER: Speedup compilation speed (sorokin)
- OTHER: Backtrace generation now works on MinGW. (Gelmir)
- OTHER: New translation: Hindi(India).

### Sunday February 22nd 2015 - qBittorrent v3.1.12 release

This is merely an excuse for a new and correct build for OSX users. The previous versions didn't work on older hardware. In the meantime I backported some important fixes for Windows which resulted in crashes too.

- OSX: Fix build to work with older machines. (sledgehammer999, Noctem)
- WINDOWS: Fix automatic Python download. (sledgehammer999)
- WINDOWS: Fix crashes due to memory corruption and improve Python registry searching. (glassez)

### Wednesday December 17th 2014 - qBittorrent v3.1.11.1 release

This is a Mac OS X release. This is the same source as v3.1.11. The difference is in the way it is compiled. Now it doesn't crash during launch due to incorrect dynamic library linking. Provided by user **DomT4** (github)

### Thursday November 27th 2014 - Ubuntu PPAs

As you may have noticed already our Ubuntu PPAs were broken for quite some time now. Chris Dumez, who maintained them, was unable to fix them. Today I managed to create new and working PPAs. Head over to the [download page](download.php) and find the new PPAs. You should remove the old ones to avoid conflicts.

### Wednesday October 22nd 2014 - qBittorrent v3.1.11 release

qBittorrent v3.1.11 was released. I know I said that v3.1.10 would be the last of the v3.1.x series. However there were 2-3 regressions that warranted a new release. In the meantime, more bugfixes and features were committed by others. So v3.1.11 **should be** the last unless we find some serious issues with it.<br>
Also some Windows 7 users experienced freezing of the GUI. We tracked it down to a specific commit in boost 1.56. So until boost fixes it, I am going to use boost 1.55 for Windows releases.

- FEATURE: Allow relative torrent paths when qBittorrent is already running (pmzqla)
- FEATURE: Make Windows icons suitable for high dpi screens (pmzqla)
- FEATURE: Increase maximum size of system icons (pmzqla)
- BUGFIX: Fix crash in the "Content" widget when user would right click in it without a torrent selected (Ivan Sorokin)
- BUGFIX: Don't show multiple unlock UI dialogs. Closes #2040. (sledgehammer999)
- SEARCH: Fix bug where python would falsely be detected and nothing worked (paolo-sz)
- SEARCH: Fix TorrentReactor search plugin (Bruno Barbieri)
- SEARCH: Fix search engine encoding issues with python3 on Windows (Bruno Barbieri)
- SEARCH: Pirate bay search engine update (DoumanAsh)
- SEARCH: Internal improvements in the python code (Bruno Barbieri)
- WINDOWS: Fix magnet link association. Closes #1952. (sledgehammer999)
- WINDOWS and OSX: Fix again the program updater. The url was changed by sourceforge.net. Closes #1954. (sledgehammer999)
- OSX: Fix compilation (sledgehammer999)
- WEBUI: Set correct HTTP Content-Type in case of forbidden access. (pmzqla)
- COSMETIC: Remove unneeded tooltip (pmzqla)
- COSMETIC: Don't stretch the last section in the transfer list (pmzqla)
- COSMETIC: Set minimum width of the left panel in the preferences (pmzqla)
- OTHER: Optimize sorting of rows. This should have less CPU impact when many torrents are present. (Ivan Sorokin)
- OTHER: Use the correct character encoding for exceptions coming from libtorrent. (sledgehammer999)
- OTHER: Use boost:bind() as the docs show. Allows compilation with older gcc versions. (sledgehammer999)

### Sunday September 21st 2014 - qBittorrent v3.1.10 release

qBittorrent v3.1.10 was released. This is the last release for the 3.1.x series

- FEATURE: Allow disabling of OS cache. This will prevent RAM increases on Windows when seeding many files. Closes #1699. (sledgehammer999)
- FEATURE: Add 'Completed' column. Closes #1241. (sledgehammer999)
- FEATURE: Added 'Ratio Limit' column. Closes #936. (sledgehammer999)
- FEATURE: Add 'Open' and 'Open Containing Folder' entries in the content's right-click menu. Closes #1143. (sledgehammer999)
- FEATURE: Don't listen on IPv6 address by default. Prevents network connectivity problems. Closes #1880. (sledgehammer999)
- FEATURE: Added 'Shutdown now' button in shutdown confirmation dialog. Closes #969. (sledgehammer999)
- FEATURE: Add peer port column to PeerListWidget. Closes #1650. (Ivanov Juriy)
- COSMETIC: Fix weird ratio values when torrent was imported or downloaded history was lost due to crash. (sledgehammer999)
- COSMETIC: Use 'μTP' instead of 'uTP'. (sledgehammer999)
- COSMETIC: Show the loaded torrents in the transferlist when qBT is launched with a torrent/magnet and the AddNewTorrentDialog is showing. Closes #1564. (sledgehammer999)
- COSMETIC: Don't mix finished/unifinished torrents when sorting by ETA. Closes #1688. (sledgehammer999)
- COSMETIC: Sort finished torrents by completed date when sorting by queue number. (sledgehammer999)
- COSMETIC: Right align numerical values in the transfer list. Partially revert 51a9a9aab. Closes #1903. (sledgehammer999)
- COSMETIC: Don't display the Search Engine tab by default. (sledgehammer999)
- WINDOWS: Correctly associate torrents and magnet links with qBittorrent under non-admin accounts. Closes #291 #527 #579 #614 #964. (glassez, sledgehammer999)
- WINDOWS: Check for python before creating the search engine tab. Prevents the creation of python specific files in the user's PC if no python is found. Closes #1370. (sledgehammer999)
- WINDOWS: Don't create keys in the registry if python isn't found. Closes #1370. (sledgehammer999)
- WINDOWS: Can now correctly detect 64bit and 32bit python installations on 64bit Windows. Closes #1148 #445 #795 #1708. (sledgehammer999)
- WINDOWS: Search first in PATH for python. Closes #956. (sledgehammer999)
- OSX: Enable system tray in MACOSX (Nick Korotysh).
- OSX: Fix headless (nox) build. (sledgehammer999)
- WEBUI: Correctly save/load settings and other improvements (glassez)
- WEBUI: Removed broken 'Report a bug' iframe. Closes #1343 (Benjamin Hutchins)
- WEBUI: Removed broken 'Documentation'. Improves fix for #1343 (Benjamin Hutchins)
- WEBUI: Removed essentially useless 'Visit website' iframe and changed it to a regular link. Improves fix for #1343 (Benjamin Hutchins)
- BUGFIX: Fix RSS feed icon. The tmp file gets deleted in the feed destructor. Closes #1639 (sledgehammer999)
- BUGFIX: fix issue #1674: AddNewTorrentDialog is shown again and again even if checkbox "don't ask me again" is set (Ivan Sorokin)
- BUGFIX: Don't show availability bar for magnet links (Ivan Sorokin)
- BUGFIX: Fix crash when the selected torrent disappears from the transfer list. Closes #1661 (sledgehammer999)
- BUGFIX: Fix tracker announcing problem(hit-and-run) when many torrents are being active. Closes #1571 (sledgehammer999)
- BUGFIX: Count magnet links in the 'downloading' filter and make them prevent system inhibition. Closes #1558 (sledgehammer999)
- BUGFIX: Pick up updated plugins. Closes #1745. (sledgehammer999)
- BUGFIX: Bring mainwindow in front when notification is clicked and other windows are in front. (sledgehammer999)
- BUGFIX: Speedup torrent moving (Ivan Sorokin)
- BUGFIX: Fix bug when moving a torrent before the previous move is completed (Ivan Sorokin)
- BUGFIX: Add option to hibernate computer in Auto-Shutdown menu (Bruno Barbieri)
- BUGFIX: Fix column resizing issues (Bryan Roscoe)
- BUGFIX: Fix possible crashes. Closes #1814. (sledgehammer999)
- BUGFIX: Limit max cache to 1800MiB for 32bits compiled binaries and to 4GiB for other. Closes #1698. (sledgehammer999)
- BUGFIX: Don't localize double numbers in the webui. Closes #1525. (sledgehammer999)
- BUGFIX: Don't shrink transferlist rows when scrolling horizontally. Closes #1613. (sledgehammer999)
- BUGFIX: When qBT is launched with a magnet don't show it in the transferlist while the metadata are being loaded in the background. (sledgehammer999)
- BUGFIX: Show disk space while retrieving metadata. Closes #1693. (sledgehammer999)
- BUGFIX: Don't disable DHT/LSD/UPnP in the GUI when anonymous mode is enabled. (sledgehammer999)
- BUGFIX: Possible fix for crash in RSS code. Closes #1901. (sledgehammer999)
- BUGFIX: Fixed SMTP emailing code (Ivanov Juriy, sledgehammer999)
- BUGFIX: Don't display the context menu in 'Content' and 'HTTP Sources' buttons when no torrent is selected. It prevents crashes. Closes #1906, #1900. (sledgehammer999)
- BUGFIX: Don't translate file extensions. Closes #1907. (sledgehammer999)
- BUGFIX: Fix available disk space label on single file torrents. (sledgehammer999)
- BUGFIX: Show stalled downloads that are uploading under the 'Active' filter. Closes #1654." (sledgehammer999)
- BUGFIX: fix import torrent with "Keep incomplete torrents in:" enabled (lojack5)
- BUGFIX: Send a spoofed user agent for the search engines(fixes some of them) (Martin Janco)
- BUGFIX: Support URLs that redirect to magnet links (Gelmir)
- BUGFIX: Consider queued items before deciding to 'auto-shutdown on downloads completion'. Closes #1942. (sledgehammer999)

### Sunday August 10th 2014 - Bitcoin and Litecoin

There are two new donations methods added. Now you can send money in Bitcoins and Litecoins too. PayPal donations will continue, but Bitcoins are preferred. Find the addresses in the main page.

I am really busy for the last few months in real life. Work towards 3.1.10 continues though. If you take a look at the git repo you will see what the new commits fix. 3.1.10 will be the last of the 3.1.x series. Some work has been done for the 3.2.x series, but serious development will begin after 3.1.10 has been released.

### Tuesday April 29th 2014 - qBittorrent v3.1.9.2 release

qBittorrent v3.1.9.2 was released.

- OTHER: The v3.1.9.1 Windows build was broken

### Monday April 28th 2014 - qBittorrent v3.1.9.1 release

qBittorrent v3.1.9.1 was released.

- OTHER: This is an excuse to produce new builds with an OpenSSL version that isn't affected by the heartbleed bug for Windows and Mac. This bug should only affect the WebUI and only if HTTPS/SSL authentication was enabled.

### Saturday March 1st 2014 - qBittorrent v3.1.9 release

qBittorrent v3.1.9 was released.

- BUGFIX: Fix nox build. Closes #1368 (bob23450)
- BUGFIX: Fix build with libtorrent 0.15.x (sledgehammer999)
- BUGFIX: Fix missing percentage signs. Closes #1392. (sledgehammer999)
- BUGFIX: Fix queue sorting order. (alfrix)
- BUGFIX: Fix build using qt &lt; 4.7 Closes #1385. (Evgeny Lensky)
- BUGFIX: Fix autoupdater. Send our user-agent to sourceforge.net (sledgehammer999)
- FEATURE: Add button for links in toolbar (alfrix)

### Sunday February 2nd 2014 - qBittorrent v3.1.8 release

qBittorrent v3.1.8 was released.

- BUGFIX: Really fix build of v3.1.6

### Sunday February 2nd 2014 - qBittorrent v3.1.7 release

qBittorrent v3.1.7 was released.

- BUGFIX: Fix build of v3.1.6

### Sunday February 2nd 2014 - qBittorrent v3.1.6 release

qBittorrent v3.1.6 was released.

- BUGFIX: Fix 'preview file' regression. Closes #1285. (sledgehammer999)
- BUGFIX: Fix peers and seeds sorting in transfer list. (Angel Alonso)
- BUGFIX: Fix btdigg search engine. (BTDigg research team)
- BUGFIX: Save statistics every 15min and only if there was new traffic. Fixes #1288 and partially #1272. (sledgehammer999)
- BUGFIX: Fix share ratio text in the 'general' tab. (sledgehammer999)
- BUGFIX: Output a more generic message when blocking IPs and don't use italics in the log. (sledgehammer999)
- BUGFIX: Allow 2 decimals when setting the share ratio. Closes #1303. (sledgehammer999)
- BUGFIX: Fix extratorrents search plugin. (sledgehammer999)
- BUGFIX: Use shorter names for amount columns in main UI (Gelmir)
- BUGFIX: Fix overstretched options dialog. Closes #1293. (sledgehammer999)
- BUGFIX: Don't show a popup menu when no torrent is selected. (sledgehammer999)
- BUGFIX: Launch external programs async and don't block. Closes #1252. (sledgehammer999)
- BUGFIX: Don't re-announce to trackers when torrent is paused. Closes #1310. (sledgehammer999)
- BUGFIX: Bring dialog boxes in the front when qbt doesn't have focus. (sledgehammer999)
- BUGFIX: Correctly resize 'name' column of the content tab. Closes #1360. (sledgehammer999)
- BUGFIX: Correctly restore 'name' column width when loading magnet links in the 'Add new torrent dialog'. Closes #1334. (sledgehammer999)
- WEBUI: Fix sorting by size in WebUI when non-default locale used. (Vladimir Golovnev)
- UI: Reposition statistics menu item. (sledgehammer999)
- UI: Convert more accurately decimal numbers to text. (sledgehammer999)
- WINDOWS/OSX: Improvements on the behavior of the program updater(closes #1282) (sledgehammer999)
- LINUX: Explicitle tell that we don't support freedesktop's startup notify standard. Fixes GNOME issues. Closes #1217. (sledgehammer999)
- LINUX: Add our WM_CLASS in the .desktop file so window managers know how to group our windows. (sledgehammer999)
- OTHER: Sync translations from Transifex.

### Thursday January 17th 2014 - qBittorrent v3.1.5 release

qBittorrent v3.1.5 was released.

- BUGFIX: Fix compilation with Qt 4.7. Closes #1215. (sledgehammer999)
- BUGFIX: Third attempt at fixing saving settings on OS shutdown. (sledgehammer999)
- BUGFIX: Preview now correctly uses the selected file. Closes #1222 #1182. (sledgehammer999)
- BUGFIX: Allow to resize the columns in Add New Torrent dialog. Closes #1207 #676 (sledgehammer999)
- BUGFIX: Ensure that at least one column in the tranferlist is always visible. Closes #1165. (sledgehammer999)
- BUGFIX: Ensure that the options window will always be placed onscreen. Closes #1226. (sledgehammer999)
- BUGFIX: Delete temporary files after they aren't needed. Closes #1188. (sledgehammer999)
- BUGFIX: Correctly detect libtorrent version. (sledgehammer999)
- BUGFIX: Various code cppcheck fixes (Konstantin Goncharik)
- BUGFIX: Remove isohunt search engine and update thepiratebay url (sledgehammer999)
- BUGFIX: Fix rss settings corruption when checking regexp and going to other rule. (Gelmir)
- BUGFIX: Don't count paused torrents for the autoshutdown. Closes #1280. (sledgehammer999)
- LINUX: Fix notifications with xfce4-notifyd.
- OSX: Added basic retina support. Closes #1251. (Sébastien Lavoie)
- OTHER: Sync translations from Transifex.

### Sunday December 29th 2013 - qBittorrent v3.1.4 release

qBittorrent v3.1.4 was released.

- FEATURE: Statistics dialog (Gelmir)
- FEATURE: Tooltips explaining each peer's connection flags (sledgehammer999)
- FEATURE: Win/Mac Check for program updates every 15min and allow the user to manually check for updates through the help menu. (sledgehammer999)
- BUGFIX: Better dialog message for torrent delete confirmation (sledgehammer999)
- BUGFIX: Fix resizing grip location. Closes #1146. (sledgehammer999)
- BUGFIX: Lock toolbar in place. Closes #1144. (sledgehammer999)
- BUGFIX: Second attempt at fixing saving settings on shutdown. (sledgehammer999)
- BUGFIX: Sort labels in 'Add new torrent' dialog. Closes #1150 #411. (sledgehammer999)
- LINUX: Fix build under Ubuntu 13.10 (sledgehammer999)
- LINUX: Make sleep and shutdown functions work on systemd's logind (Faheem Pervez)

### Monday November 20th 2013 - qBittorrent v3.1.3 release

qBittorrent v3.1.3 was released.

- FEATURE: Add a key shortcut to "Add link to torrent..." (Angel Alonso)
- BUGFIX: Make all columns and headers use the same text alignment in the transferlist. (sledgehammer999)
- BUGFIX: Fix build system for Unix/Linux. (sledgehammer999)
- BUGFIX: Case insensitive sort in Peers list. Closes #1066. (sledgehammer999)
- BUGFIX: Small optimization of WebUI responses when there isn't a data payload. (sledgehammer999)
- BUGFIX: Hide empty folders after filtering. Closes #74. (sledgehammer999)
- BUGFIX: Expand folders when filtering files. Closes #1076. (sledgehammer999)
- BUGFIX: Updated search plugin's URL (wowzaman12)
- BUGFIX: Strip some png to fix incorrect sRGB profiles. (Angel Alonso)
- BUGFIX: Fixed font issues on OSX Mavericks (wowzaman12)
- BUGFIX: Improve text in the About dialog (Artem S. Tashkinov)
- BUGFIX: Always show a peer IP address as a tool tip (Artem S. Tashkinov)
- BUGFIX: Fix inhibit system functionality. Closes #766. (sledgehammer999)
- BUGFIX: WebUI: Don't gzip too small payloads. (sledgehammer999)
- BUGFIX: Correctly detect if the browser supports gzip compression. (sledgehammer999)
- BUGFIX: Fix WebUI link to 'Anonymous mode' explanation. Closes #1093. (sledgehammer999)
- BUGFIX: Correctly update tracker tier number in the trackers tab. Closes #1075. (sledgehammer999)
- BUGFIX: Speed improvements.(sledgehammer999)
- OTHER: Updated translations.

### Tuesday November 5th 2013 - qBittorrent v3.1.2 release

qBittorrent v3.1.2 was released. It contains critical fixes.

- BUGFIX: Fix WebUI gzip compression. Closes #1037. (sledgehammer999)
- BUGFIX: Fix compilation with qt &lt; 4.8.0. Closes #1043. (sledgehammer999)
- OTHER: Updated translations.

### Monday October 28th 2013 - qBittorrent v3.1.1.1 release

qBittorrent v3.1.1.1 was released. This affects Windows only. It's the same as v3.1.1. It uses 0.16.12 which isn't broken. It is marked as 3.1.1.1 so the auto-update mechanism can work.

### Monday October 28th 2013 - Windows build is broken

The v3.1.1 Windows build is broken. Don't download it from Sourceforge.net

### Monday October 28th 2013 - qBittorrent v3.1.1 release

qBittorrent v3.1.1 was released.

- FEATURE: Show external IP in the log. Closes #968. (sledgehammer999)
- FEATURE: Enable gzip compression in the webui. It should be faster now. (sledgehammer999)
- FEATURE: Torrents show more states(queued for checking, downloading metadata, allocating, checking resume). (sledgehammer999)
- FEATURE: Re-enable "force reannounce" to all trackers. (sledgehammer999)
- FEATURE: Allow to clear the UI lock password. Closes #973. (sledgehammer999)
- FEATURE: New translations: English(Australia) and English(United Kingdom)
- BUGFIX: Expose all available translation in the WebUI. Closes #976. (sledgehammer999)
- BUGFIX: Copy IP copied wrong data. Closes #970 (sledgehammer999)
- BUGFIX: "Preview file..." didn't work on single file torrents. (sledgehammer999)
- BUGFIX: Fix and improve the scheduler (Gelmir and sledgehammer999)
- BUGFIX: RSS fixes. Closes #960, #998 (Gelmir)
- BUGFIX: Fix 'append label to save path' with magnet links. (sledgehammer999)
- BUGFIX: Can download up to 10MB .torrent file when a link is provided. Closes #879 (sledgehammer999)
- OTHER: Updated translations.
- LINUX: Fix missing conf.pri error (leigh123linux)
- WINDOWS: Don't remove file associations if they aren't our own. (sledgehammer999)

### Saturday October 12th 2013 - qBittorrent v3.1.0 release

qBittorrent v3.1.0 was released today with a huge changelog. Enjoy!

- FEATURE: Add command line option to daemonize qbittorrent-nox (ngaro)
- FEATURE: Add "Shutdown qBittorrent" button to Web UI (ngaro)
- FEATURE: Add setting to copy .torrent files for finished downloads (Driim)
- FEATURE: Add option to start qBittorrent on Windows startup (sledgehammer999)
- FEATURE: Add context menu to Web seed list (Gelmir)
- FEATURE: Add support for tracker tiers / groups to creator (Gelmir)
- FEATURE: Allow clearing execution and ban logs (Gelmir)
- FEATURE: Add option to use random port on each startup (ireallylikeher)
- FEATURE: Expose the cache expiry to the user (Gelmir)
- FEATURE: Support Atom feeds (Gelmir)
- FEATURE: Add "save path" column (John Peterson)
- FEATURE: Add μTorrent-compatible "Flags" column in the peer tab(sledgehammer999)
- FEATURE: Load magnet metadata in the background while the "Add New Torrent" Dialog is showing (Gelmir)
- FEATURE: Allow to enter only an info-hash for download(sledgehammer999)
- FEATURE: Bring the "Add New Torrent" Dialog to the front(glassez)
- BUGFIX: Add confirmation dialog for "Force recheck" action (closes #131)
- BUGFIX: Greatly improve RSS manager performance (closes #34)
- BUGFIX: Ensure that all columns in the tranferlist have a size > 0.
- BUGFIX: Don't mark RSS item as read when it failed to download (Gelmir)
- BUGFIX: Fix ETA calculation when some files are downloaded and marked afterwards as 'do not download'(sledgehammer999)
- BUGFIX: Make the UI show that PEX/DHT/LSD are actually disabled on private torrents(sledgehammer999)
- BUGFIX: Scheduler should be much more robust and correct now(sledgehammer999)
- BUGFIX: Now qBt won't forget torrent settings after an unclean shutdown(sledgehammer999)
- BUGFIX: Text boxes in edit dialogs will fit to text width(Gelmir)
- BUGFIX: Enable edit/rename via F2 or double click in various places(Gelmir)
- BUGFIX: Allow to edit trackers and copy their urls(Gelmir and Driim)
- BUGFIX: Add Uploaded column to main view(Gelmir)
- BUGFIX: Calculate ETA for seeding torrents(Gelmir)
- BUGFIX: Add option to ignore global share ratio limits for created torrents(Gelmir)
- OTHER: Many RSS bugfixes and improvements all over the place(Gelmir)
- OTHER: Generate translations at configure time to reduce tarball size
- OTHER: Make peer tab sortable by ip too (Gelmir)
- OTHER: Translations moved to Transifex(https://www.transifex.com/projects/p/qbittorrent/)
- OTHER: New Translation - Vietnamese (Anh Phan)
- PERFORMANCE: Improve drawing speed of tranferlist when there are many torrents(>100)
- PERFORMANCE: Improve drawing speed of peers list when there are many peers

### Monday July 29th 2013 - qBittorrent v3.0.11 release

qBittorrent v3.0.11 was released today and fixes several bugs.

- FEATURE: Allow more fine tuning of upload slots. It should improve speed (sledgehammer999)
- FEATURE: Enable edit/rename via F2 or double click in various places (Gelmir)
- BUGFIX: Fix Spanish and Basque translations being messed up on Windows (sledgehammer999)
- BUGFIX: Don't allow newlines in rename dialog (Gelmir)
- BUGFIX: Treat unfinished dates as the newest ones when sorting (sledgehammer999)
- BUGFIX: Fix text size problem on Windows with custom DPI (sledgehammer999)
- BUGFIX: Respect UI lock when clicking on tray notification (sledgehammer999)
- BUGFIX: Fix kickass torrents search plugin (Gelmir)
- BUGFIX: Use system language as default language. Closes #780 (sledgehammer999)
- BUGFIX: Move completed files to .unwanted folder when they are unselected by the user (constantined)
- BUGFIX: Show delete action when multiple feeds are selected (Gelmir)
- BUGFIX: Use Unicode for libtorrent alert messages (Gelmir)
- OTHER: Update translations
- WINDOWS: Shave off ~4MB from the binary size (sledgehammer999)
- WINDOWS: Remove wrong dependency on msvc2008 runtime (sledgehammer999)
- WINDOWS: Disable stacktrace when building with mingw (Gelmir)
- WINDOWS: Updated NSIS script to include/delete .pdb file. (sledgehammer999)

### July 10th 2013 - qBittorrent v3.0.10 release

qBittorrent v3.0.10 was released today and fixes several bugs.

- BUGFIX: Fix LegitTorrents search plugin
- BUGFIX: Improve peer host name resolution (closes #360)
- BUGFIX: Context menu fix in the Web UI
- BUGFIX: Respect 'don't show' torrent dialog in Search (sledgehammer999)
- BUGFIX: Torrent creator can now use files/folders from disk root (Gelmir)
- BUGFIX: Update free disk space when changing drives in the add new torrent dialog (sledgehammer999)
- BUGFIX: Various fixes relating to RSS drag and drop (Gelmir)
- BUGFIX: Properly rename torrent which changes position in filter model (Gelmir)
- BUGFIX: Actually show tray notifications when a torrent finishes downloading (sledgehammer999)
- BUGFIX: Don't download RSS items based on rules still being edited (Gelmir)
- COSMETIC: Native look for the search boxes (Hyperz)
- IMPROVEMENT: Use natural sorting where possible (Gelmir and sledgehammer999)
- LINUX: Drop Boost.Thread dependency from configure script
- OTHER: Update translations.
- OTHER: Drop obsolete Boost.Thread dependency from configure script on linux (Dumez)
- LIBTORRENT: SOCKS5 fixes (0.16.10)
- LIBTORRENT: Fix hanging issue on Windows when closing files (0.16.10)
- LIBTORRENT: Cache can now be returned to the OS (0.16.10)
- PERFORMANCE: Improve drawing speed of tranferlist when there are many torrents(>100) (sledgehammer999)
- PERFORMANCE: Improve drawing speed of peers list when there are many peers (sledgehammer999)

### July 7th 2013 - New qBittorrent maintainer

qBittorrent from June 23rd 2013 has a new maintainer. Christophe Dumez, the original author, has stepped down and transferred the project maintenance to sledgehammer999. Read more [here](http://qbforums.shiki.hu/index.php/topic,2009.0.html).

### April 7th 2013 - New qBittorrent Ubuntu PPAs

qBittorrent now has new Ubuntu PPA repositories with daily builds of qBittorrent, for both stable branch and trunk (development branch).

- Stable: [qBittorrent-stable](http://launchpad.net/~hydr0g3n/+archive/qbittorrent-stable/)
- Unstable: [qBittorrent-trunk](http://launchpad.net/~hydr0g3n/+archive/qbittorrent-trunk/)

### March 16th 2013 - qBittorrent v3.0.9 release

qBittorrent v3.0.9 was released today and fixes several outstanding issues. Kuddos to everyone who helped squashing bugs!

- BUGFIX: Raise qBittorrent windows when another instance is launched
- BUGFIX: Show human readable names for network interfaces in preferences (Windows)
- BUGFIX: Fix torrent creator bug when saving non-latin path (Windows)
- BUGFIX: Enable 'copy magnet uri' for torrents without metadata too
- BUGFIX: Fix a few JSON parser issues (Gelmir)
- BUGFIX: Add support for gzipped encoded HTTP responses (daimor)
- BUGFIX: Fix possibly missing "Add torrent" icon (Driim)
- OTHER: Add search plugin for Legit Torrents

### January 20th 2013 - qBittorrent v3.0.8 release

qBittorrent v3.0.8 was released today with several bug fixes.

- BUGFIX: Fix support for --no-splash command line argument
- BUGFIX: Fix compilation error with libtorrent v0.15
- BUGFIX: Fix search issues with Python3
- BUGFIX: Fix dead link about certificates in program preferences

### January 19th 2013 - qBittorrent v3.0.7 release

qBittorrent v3.0.7 was released today with several bug fixes.

- BUGFIX: Update max write cache size to 2048MB and set it to automatic by default (closes #148)
- BUGFIX: Add m4v to the list of previewable file extensions (closes #216)
- BUGFIX: Fix "Couldn't set environment variable..." message on start up (closes #245)
- BUGFIX: Use right path separator in torrent addition dialog on Windows
- BUGFIX: Fix "Set as default save path" setting (closes #254)
- BUGFIX: Re-enable disk cache on Windows since the memory issue seems to be gone
- BUGFIX: Fixed several search engine plugins and removed the dead ones
- BUGFIX: Use https links in search plugins when possible
- BUGFIX: Bump Mootools to v1.4.5 (Web UI)
- BUGFIX: Require password to exit qBittorrent from tray icon when locked (closes #311)
- BUGFIX: Fix possible crash in loadPeers() (closes #222)

### October 29th 2012 - FindMySoft Review

FindMySoft created a quick look video showcasing of qBittorrent v3.0.5 and wrote a nice review.

[<img src="img/review2_5_qBittorrent_award.png" alt="FindMySoft review">](http://qbittorrent.findmysoft.com)

### October 7th 2012 - qBittorrent v3.0.6 release

qBittorrent v3.0.6 was released today with several bug fixes.

- BUGFIX: Fix unicode support for command-line arguments on Windows (closes #139)
- BUGFIX: Do not store created torrent in memory before writing it to a file (closes #133)
- BUGFIX: No longer fallback to ANY interface if the user-selected interface cannot be found (closes #143)
- BUGFIX: Fix timezone parsing in RSS (closes #136)
- BUGFIX: Fix cookie support for RSS feeds (closes #119)

### September 30th 2012 - qBittorrent v3.0.5 release

qBittorrent v3.0.5 was released today with several bug fixes.

- BUGFIX: Disabling systray icon no longer disables file association settings (closes #114)
- BUGFIX: Import new trackers from magnet link in case of duplicate torrent (closes #111)
- BUGFIX: Fix "Skip hash check" feature in torrent import dialog (closes #128)
- BUGFIX: Several Web UI connection fixes
- BUGFIX: Add Basque locale to Web UI

### September 16th 2012 - qBittorrent v3.0.3 release

qBittorrent v3.0.3 was released today with several bug fixes and a new translation (Hebrew).

- BUGFIX: Fix issue with temporary directory not being taken into consideration (closes #94)
- BUGFIX: Address encoding issues when using search engine on Windows (closes #29)
- BUGFIX: Bypass cache when uploading a torrent file in Web UI (closes #68)
- BUGFIX: "Completed On" column is not updated until restart (closes #84)
- BUGFIX: Fix possible build error on some systems
- I18N: Add hebrew translation

### September 1st 2012 - qBittorrent v3.0.2 release

qBittorrent v3.0.2 was released today to address a few issues that people experienced.

- FEATURE: Add "clear" functionality to search field (closes #59)
- BUGFIX: Attempt to use qBittorrent icon from theme if available (closes #49)
- BUGFIX: Fix crash when a fastresume file is empty (closes #52)
- BUGFIX: Fix encoding problem for detected XDG Download folder (closes #53)
- BUGFIX: Improve performance when showing torrent content panel (Improves #24)
- BUGFIX: Fix label-based filtering of torrents whose label contains special characters
- BUGFIX: Fix possible crash due to labels (closes #64)

### August 21st 2012 - qBittorrent v3.0.1 release

A first bugfix release in the v3.0.x series was just uploaded in order
to address a few issues that were reported after the v3.0.0 release.

- BUGFIX: Fix possible crash when adding a tracker to a magnet torrent without metadata (Closes #1034254)
- BUGFIX: Remember queue position for torrents without metadata (closes #17)
- BUGFIX: Fix crash when using unauthorized characters in label names (closes #19)
- BUGFIX: Fix search plugins updating (closes #25)
- BUGFIX: Make uTP connections rate limited by default

### August 9th 2012 - qBittorrent v3.0.0 final release

qBittorrent v3.0.0 was finally released as stable today thanks to our team's hard work.

- FEATURE: Brand new torrent addition dialog
- FEATURE: Add the ability to choose the save path when using magnet links (mutoso)
- FEATURE: Add support for adding multiple local torrents at once (Web UI)
- COSMETIC: Improve style of left panel
- BUGFIX: Lower panels no longer gets disabled
- BUGFIX: Major code refactoring and various optimizations
- BUGFIX: No longer strip root folder from torrent files
- OTHER: Drop support for libtorrent v0.14.x
- OTHER: Drop support for Qt 4.5

### July 1st 2012 - qBittorrent v3.0.0 release candidate

I'm glad to announce that I uploaded today the first release candidate for
qBittorrent v3.0.0, the next major release of qBittorrent.<br>
We encourage people to start testing this release candidate and help us iron out
the issues so that we can make a final release as soon as possible.

### July 1st 2012 - qBittorrent v2.9.11 release

qBittorrent v2.9.11 was released today to bring a few bug fixes.

- BUGFIX: Fix unreversible "Minimize to tray" on some window managers
- BUGFIX: Fix torrent availability computation (closes #988869)
- BUGFIX: Bring window to front after restoring from systray
- BUGFIX: Fix keyboard focus problems on main window (closes #1019563)
- BUGFIX: Fix ThePirateBay search plugin

### June 24th 2012 - qBittorrent v2.9.10 release

qBittorrent v2.9.10 has been released to address several issues that have been reported recently.

- BUGFIX: Fix possible crash when showing torrent content (closes #1002586)
- BUGFIX: Add support for RSS feeds using magnet links (closes #1016379)
- BUGFIX: Remove 100kb limit for torrent file size in Web UI
- BUGFIX: Fix ratio limiting bug (closes #835217)
- BUGFIX: Do not display .!qB file extensions in Web UI
- BUGFIX: Stop using absolute URLs in Web UI ajax requests (closes #1011226)
- BUGFIX: Fix torrent association and loading on Mac OS X (closes #1011229)
- BUGFIX: Fix unreversible "Minimize to tray" on some window managers (closes #917825)

### May 5th 2012 - qBittorrent v2.9.8 release

qBittorrent v2.9.8 was released to address a few compilation issues in several environments and polish the user interface a bit.

- BUGFIX: Various UI style fixes
- BUGFIX: Fix compilation with gcc 4.7
- BUGFIX: Fix possible compilation error with msvc (Windows)
- BUGFIX: Fix compilation on OS/2
- I18N: Update Italian translation

### March 18th 2012 - qBittorrent v2.9.7 release

qBittorrent v2.9.7 was released today in order to fix a few issues that have been
reported in the past weeks.

- BUGFIX: Fix download first/last pieces state reporting
- BUGFIX: Fix name of progress column in torrent content panel
- BUGFIX: Disable system tray icon on Mac OS X
- BUGFIX: RSS downloader should not ignore "Do not start automatically" rule (closes #946910)
- BUGFIX: Fix DHT port setting in Web UI (Closes #952182)
- BUGFIX: Fix possible Web UI authentication problem when using SSL (closes #941343)
- BUGFIX: Fix possible issues with folder removal when removing a torrent
- I18N: Add Basque translation

### February 18th 2012 - qBittorrent v2.9.5 release

qBittorrent v2.9.5 was released today to fix a few issues that have been reported
recently.
Also note that the project source code has moved from Gitorious to [Github](http://git.qbittorrent.org).

- BUGFIX: qBittorrent does not handle redirection to relative URLs correctly (Closes #919905)
- BUGFIX: Cmd+M minimizes main window on Mac OS X (Closes #928216)
- BUGFIX: Cmd+Del removes torrents on Mac OS X (Closes #928852)
- BUGFIX: Fix potential bug when moving single file torrents to tmp folder (closes #932861)
- BUGFIX: Fix torrent import dialog layout (Closes #930932)
- BUGFIX: Prevent log window buffer from filling up (Closes #929673)
- BUGFIX: Fix crash when disabling then reenabling RSS
- BUGFIX: Fix duplicate torrent detection when adding a magnet link
- BUGFIX: Fix import of new trackers when adding a torrent with same hash (Closes #747000)
- BUGFIX: Fix possible redownload of torrents marked as read (Closes #927495)
- BUGFIX: Properly remove RSS feed settings/history upon feed removal
- I18N: Add Belarusian translation

### December 29th 2011 - qBittorrent v2.9.3 release

qBittorrent v2.9.3 has been released today after a "short" break in development.

Changelog:

- BUGFIX: Fix btdigg plugin (Python3 support + torrent name in magnet links)
- BUGFIX: Fix banning of IPv6 peers (Closes #885021)
- BUGFIX: Fix torrent addition dialog layout problem (Closes #84650522)
- BUGFIX: Do not report any progress for disabled files (Closes #56731485)
- BUGFIX: Make torrent sorting case insensitive (Closes #857154)
- BUGFIX: Improve Web UI usability of small devices
- BUGFIX: Program updater: More reliable version detection / comparison
- I18N: Add Georgian translation

### October 29th 2011 - qBittorrent v2.9.2 release

qBittorrent v2.9.2 has just been uploaded to fix an annoying issue with the torrent addition dialog dimensions and to reduce the number of dependencies.

Changelog:

- BUGFIX: Fix minimum dimensions for torrent addition dialog
- BUGFIX: Remove dependency on boost-datetime
- BUGFIX: Remove dependency on boost-filesystem (libtorrent v0.16.x)

### October 23rd 2011 - qBittorrent v2.9.1 release

Here comes the first bugfix release in the v2.9.x series. Although very stable, we did find
a few regressions that needed fixing.

Changelog:

- BUGFIX: Add support for speed limits scheduling (Web UI)
- BUGFIX: Fix ratio calculation for purely seeded torrents
- I18N: Update Russian translation
- COSMETIC: Torrent addition dialog layout fixes

### October 8th 2011 - qBittorrent v2.9.0 release

qBittorrent v2.9.0 was released today with nice new features and a lot of polishing, enjoy!<br>
Thanks a lot to the people who helped make this release come to life.

Changelog:

- FEATURE: Add file association settings to program preferences (Windows)
- FEATURE: Add setting to ignore slow torrents in queueing system
- FEATURE: Add advanced setting to announce to all trackers
- FEATURE: Add support for anonymous mode (libtorrent >= v0.16)
- FEATURE: Add quick "set as default save path" checkbox to torrent addition dialog (sledgehammer999)
- BUGFIX: Add tray menu entry for toggling window visibility
- BUGFIX: Fix execution log lines selection and copying
- BUGFIX: Reduce CPU usage when running Web UI
- BUGFIX: Save RSS items to disk regularly for safety
- BUGFIX: Fix ratio calculation (use all_time_download)
- BUGFIX: Fix torrent upload issues (Web UI)
- BUGFIX: Fix some IE incompatibilities (Web UI)
- COSMETIC: Display speed at the beginning of the Window title
- COSMETIC: Several cosmetic fixes to the Web UI
- COSMETIC: Make top toolbar follow system style
- OTHER: Display libraries versions in about dialog (sledgehammer999)
- OTHER: Display qBittorrent version in Web UI about dialog

### September 12th 2011 - qBittorrent v2.8.5 release

qBittorrent v2.8.5 was released today to address a few issues that were reported over the holidays.<br>
ArchLinux users will be happy to know that this version finally supports Python 3.x, making the search engine available to them too.

Changelog:

- BUGFIX: Fix encryption setting saving in Web UI
- BUGFIX: Fix "Copy torrents to" setting saving in Web UI
- BUGFIX: Announce to all trackers in a tier to avoid stalling issues
- BUGFIX: Make search engine work with Python 3.x
- BUGFIX: Fix search engine plugins update tool
- BUGFIX: Fix KickAssTorrents search plugin

### August 9th 2011 - qBittorrent v2.8.4 release

qBittorrent v2.8.4 was released today with some additional bug fixes and improvements.<br>
qBittorrent v2.8.x seems pretty stable now so I'll start working on the next major release: v2.9.0.

Changelog:

- BUGFIX: Added back ability to reorder trackers
- BUGFIX: Do not announce to all trackers in the same tier to comply with the multi-tracker specification
- BUGFIX: Fix torrent addition dialog geometry saving

### August 2nd 2011 - qBittorrent v2.8.3 release

qBittorrent v2.8.3 was just released with a few bug fixes. Libtorrent-rasterbar v0.15.7 was also recently released.

Changelog:

- BUGFIX: Fix memory usage problem in log tab
- BUGFIX: Make sure the main window is not hidden on startup if no system tray icon is available

### June 19th 2011 - qBittorrent on Gitorious

We have decided to move qBittorrent source code to [Gitorious](https://gitorious.org/qbittorrent) and to use GIT instead of SVN. We are hoping this will facilitate code contributions through merge requests and GIT patches.

We need more people contributing code, the development team is way too small at the moment.

The bug tracker is still on [Launchpad](http://bugs.qbittorrent.org), and the file releases will stay on [Sourceforge](https://sourceforge.net/projects/qbittorrent/files/) for now.

I would also like to move the Website to use an engine such as Wordpress or Drupal to facilitate editing. I - however - do not have the spare time to take on this task right now. If anybody is interested in working on this, please contact [me](mailto:chris@qbittorrent.org).

### June 18th 2011 - qBittorrent v2.8.2 release

We have just uploaded qBittorrent v2.8.2 to fix a few minor issues.

qBittorrent v2.8.1 to v2.8.2 changelog:

- BUGFIX: Fix tracker exchange advanced setting
- BUGFIX: Fix Proxy authentication settings
- BUGFIX: Fix possible status filters widget height problem
- FEATURE: Show tracker tier (order) in tracker list

### June 5th 2011 - qBittorrent v2.8.1 release

We have just release qBittorrent v2.8.1 to fix an annoying bug in v2.8.0. Users were unable to change the Web UI username / password from the Web UI which represents a security risk, especially for nox users.

qBittorrent v2.8.0 to v2.8.1 changelog:

- BUGFIX: Fix Web UI username/password change (Web UI)

### June 2nd 2011 - qBittorrent v2.8.0 release

A new major release of qBittorrent was released today: v2.8.0. The first version of qBittorrent which support the next libtorrent v0.16 (with uTP support).<br>
qBittorrent v2.7.x to v2.8.0 changelog:

- FEATURE: Added full libtorrent v0.16 support (uTP, ...)
- FEATURE: Proxy can be disabled for peer connections
- FEATURE: Added support for secure SMTP connection (SSL)
- FEATURE: Added support for SMTP authentication
- FEATURE: Added UPnP/NAT-PMP port forward for the Web UI port
- FEATURE: qBittorrent can update dynamic DNS services (DynDNS, no-ip)
- FEATURE: Display peer connection type in peer list (BT, uTP, Web)
- FEATURE: Added full regex support to RSS downloader
- FEATURE: Added regex help and validation in RSS downloader
- FEATURE: Added HTTPS support to Web UI (Ishan Arora)
- BUGFIX: Change systray icon on the fly (no restart needed)
- BUGFIX: Remember peer-level rate limits (requires libtorrent v0.16)
- BUGFIX: Stop annoncing to trackers an all tiers (more respectful)
- BUGFIX: Stop sharing private trackers with other peers
- BUGFIX: Tracker exchange extension can be disabled
- BUGFIX: Cleaner program exit on system log out
- BUGFIX: Fix possible magnet link parsing problems
- BUGFIX: Fix possible RSS URL parsing problems
- COSMETIC: Added monochrome icon for light themes

### April 16th 2011 - qBittorrent v2.7.3 and v2.8.0beta3 uploads

I have just uploaded qBittorrent v2.7.3. It fixes a few bugs (including one potentially important) and improves performance.

Development is also progressing on v2.8.0 with a new beta release.

qBittorrent v2.7.2 to v2.7.3 changelog:

- FEATURE: Added search plugin for btdigg.org (From BTDigg research team)
- BUGFIX: Do not delete unwanted files that were already present when adding the torrent
- BUGFIX: Fix URL decoding in search engine
- BUGFIX: Trackers can now be added to torrents without metadata
- BUGFIX: Fix initialization problem with some private trackers
- BUGFIX: Fix crash in RSS downloader
- BUGFIX: Make sure assertions are disabled in release mode

### April 5th 2011 - qBittorrent v2.7.2 release

qBittorrent v2.7.2 has just been uploaded. It brings a few important bug fixes.

qBittorrent v2.7.1 to v2.7.2 changelog:

- BUGFIX: Uninhibit system sleep on exit (Vladimir Golovnev)
- BUGFIX: Fix error on Windows when qBittorrent is shutdown by session manager (Vladimir Golovnev)
- BUGFIX: Fix alternative speeds tooltip
- BUGFIX: Parse URLs in torrent description
- BUGFIX: Make sure python is not required on startup (Windows)
- BUGFIX: Use ConsoleKit to shutdown the system instead of HAL (deprecated)
- BUGFIX: use UPower to suspend the system instead of HAL (deprecated)
- BUGFIX: Rewrote computer shutdown/suspend code to avoid data loss
- OTHER: Get rid of libnotify dependency (Use DBus instead)

### March 26th 2011 - qBittorrent v2.7.1 release

qBittorrent v2.7.1 was released today. It ships a few bug fixes and a lot of translations updates.<br>
qBittorrent v2.7.0 to v2.7.1 changelog:

- BUGFIX: Limit file names to 255 bytes to avoid issues on Linux FS
- BUGFIX: Fix possible crash when changing the priority of a file
- BUGFIX: Magnet link association fix on Win32 (sledgehammer999)
- BUGFIX: Easier compilation on Win32 using MinGW (sledgehammer999)
- BUGFIX: Sync program preferences before computer shutdown to avoid loss
- OTHER: Get rid of QtSVG dependency
- I18N: Updated German, Italian, Hungarian, Portuguese, Brazilian, Spanish and Catalan translations

### March 20th 2011 - qBittorrent v2.7.0 release

qBittorrent v2.7.0 was released with a few interesting new features and some more polishing.<br>
As you can see from the changelog, the project is attracting some new developers, which is excellent news.
A big thanks to Vladimir Golovnev, Christian Kandeler and Ville Kiiskinen for their contribution.

qBittorrent v2.6.9 to v2.7.0 changelog:

- FEATURE: Added search field for torrent content
- FEATURE: Added auto-shutdown confirmation dialog
- FEATURE: Added option to skip torrent deletion confirmation (Ville Kiiskinen)
- FEATURE: IP address reported to trackers is now customizable
- FEATURE: Inhibit system sleep when torrents are active (Vladimir Golovnev)
- FEATURE: Added option to bypass Web UI authentication for localhost
- FEATURE: Added option to disable program exit confirmation
- FEATURE: Added per-torrent ratio limiting (Christian Kandeler)
- FEATURE: Torrent content list is now sortable
- BUGFIX: Fix compilation with namespaced Qt (Christian Kandeler)
- BUGFIX: Added length restriction on UI lock password
- COSMETIC: Added monochrome tray icon
- COSMETIC: Improved status bar's style
- OTHER: Make QtDBus dependency optional (X11)

### March 13th 2011 - qBittorrent v2.6.9 release

qBittorrent v2.6.9 has been released today with a few more bug fixes. We are also making good progress on v2.7.0
and it should be ready soon.

qBittorrent v2.6.7 to v2.6.9 changelog:

- BUGFIX: Fix compilation with libtorrent v0.14.x
- BUGFIX: Fix issues when writing on NTFS (Linux, Mac)
- BUGFIX: Fix root folder being cut off if the torrent comes from a scanned folder (Christian Kandeler)
- BUGFIX: Improve folder removal behavior
- BUGFIX: Make sure the .unwanted folder is deleted on soft torrent removal
- BUGFIX: Indicate support for Magnet links in desktop file (Fisiu)
- BUGFIX: Do not report torrent being checked as queued
- BUGFIX: Improve lists columns state saving

### February 26th 2011 - qBittorrent v2.6.7 release

qBittorrent v2.6.7 was just released to fix a few bugs (most of them on Windows).

qBittorrent v2.6.6 to v2.6.7 changelog:

- BUGFIX: Encoding fixes (Windows)
- BUGFIX: Fix "append label to save path" (Windows)
- BUGFIX: Disable OS cache for aligned files to reduce memory consumption
- BUGFIX: Fix torrent upload from Web UI (Windows)
- BUGFIX: Fix cursor problem in torrent addition dialog
- BUGFIX: Fix crash when additing an empty tracker URL
- BUGFIX: Share ratio can now go over 100
- BUGFIX: Fix compilation with boost >= v1.46

### February 8th 2011 - qBittorrent v2.6.6 release

qBittorrent v2.6.6 was just released. It brings a few bug fixes including some important ones for Windows. It also features a few cosmetic improvements.

qBittorrent v2.6.5 to v2.6.6 changelog:

- FEATURE: IP address reported to trackers is now customizable
- BUGFIX: Use slashes instead of antislashes in URLs (Windows)
- BUGFIX: Fix articles read state reset problem in RSS
- BUGFIX: Fix possible path encoding issues on Windows
- BUGFIX: Fix downloads from URLs on Windows
- I18N: Added Lithuanian translation
- COSMETIC: Improve main window layout
- COSMETIC: Improve properties buttons style
- COSMETIC: Display pieces being downloaded in green instead of yellow
- COSMETIC: Improve piece availability bar appearance

### February 3rd 2011 - qBittorrent v2.6.5 release

qBittorrent v2.6.5 was released today, a bit late due to the recent problems experienced by SourceForge. Exceptionally, this bugfix release includes a major code rewrite of the RSS functionality. Indeed, this part of the code was less than optimal and was becoming very difficult to improve or even maintain. This rewrite results, according to initial reports, in a more stable experience and less CPU / memory usage when using RSS in qBittorrent.<br>
Special thanks to Vladimir Golovnev who helped again to improve system integration and bug fixing. We are also glad to announce that Tomaso is joining the team as Norwegian translator, replacing Lars-Erik Labori who left quite a long time ago.

qBittorrent v2.6.4 to v2.6.5 changelog:

- BUGFIX: Make sure the progress is not 100% unless the file is complete
- BUGFIX: Fix memory leak in HTTP torrent downloader
- BUGFIX: Use native file dialogs (by Vladimir Golovnev)
- BUGFIX: Fix encoding problem in torrent moving code (by Vladimir Golovnev)
- BUGFIX: Performance improvement on ARM
- BUGFIX: RSS code rewrite (more cpu/memory efficient)
- I18N: Updated Norwegian translation (Tomaso)

### January 23rd 2011 - qBittorrent v2.6.4 release

qBittorrent v2.6.4 was released today. It brings quite a few fixes and improvements.<br>
Special thanks to Vladimir Golovnev who helped fix bugs for this release.

qBittorrent v2.6.3 to v2.6.4 changelog:

- BUGFIX: Added unicode support to email notification
- BUGFIX: Improved compatibility with various SMTP servers
- BUGFIX: Fix Labeling in RSS downloader
- BUGFIX: Avoid main window flashing on startup (closes #703984)
- BUGFIX: Improved hostname resolution code
- BUGFIX: Dropped dependency on libboost-thread
- BUGFIX: Display legal notice on screen center
- BUGFIX: Fix renaming of single-file torrents (by Vladimir Golovnev)
- I18N: More dialog buttons are now translated (by Vladimir Golovnev)
- I18N: Fix translation of size units (by Vladimir Golovnev)

### January 15th 2011 - qBittorrent v2.6.3 release

qBittorrent v2.6.3 was just released. It is recommended to update since it fixes potential crashes and brings further polishing

qBittorrent v2.6.2 to v2.6.3 changelog:

- BUGFIX: Fix possible crashes in full allocation mode
- BUGFIX: Fix icon size issues (Linux, icon theme)
- BUGFIX: Fixed file priority context menu
- BUGFIX: Remove dbus dependency in nox mode
- BUGFIX: Fix compilation on FreeBSD
- I18N: Improve Web UI translation
- I18N: Updated Polish translation

### January 12th 2011 - qBittorrent v2.6.2 release

I have just uploaded qBittorrent v2.6.2 which brings a few important bug fixes as well as translation update/fixes.

qBittorrent v2.6.1 to v2.6.2 changelog:

- BUGFIX: Do not report PeX as being disabled when DHT is
- BUGFIX: Fix possible crash on adding magnet links
- BUGFIX: Fix torrent import (was not working)
- I18N: Updated Greek, Croatian, Russian, Unkrainian and Bulgarian translations
- I18N: Added Armenian translation (New)
- I18N: Remove country flags from program preferences (language selection)
- I18N: Translate locale names (language selection)

### January 10th 2011 - qBittorrent v2.6.1 release

Here comes a first bugfix release for qBittorrent v2.6. It brings some more polishing to the UI as well as a few minor fixes.

qBittorrent v2.6.0 to v2.6.1 changelog:

- BUGFIX: Really disable torrent addition dialog by default
- BUGFIX: Fix some missing icons in the Web UI
- BUGFIX: Fix magnet torrent name update problem
- COSMETIC: Use 24px size for toolbar icons and reduce spacing
- COSMETIC: Move transfer list filter on the right side of the toolbar

### January 9th 2011 - qBittorrent v2.6.0 final release

I'm pleased to announce the final release of qBittorrent v2.6.0. This new major release brings a few new interesting features, more polishing and fixes some long-standing limitations.

qBittorrent v2.5.5 to v2.6.0 changelog:

- FEATURE: Use system icons (Linux, Qt >= 4.6)
- FEATURE: Improved ETA calculation
- FEATURE: Simplify program preferences
- FEATURE: Software update check can now be disabled (Mac OS X / Windows)
- FEATURE: Display pieces size in torrent properties
- FEATURE: Added "Time Active/Seeded" column to transfer list
- FEATURE: Give feedback regarding the IP filter parsing
- FEATURE: Added a button to reload the IP filter
- FEATURE: Search engine results can now be opened in a Web browser
- FEATURE: Added a search engine plugin to extratorrent.com
- FEATURE: Added a search engine plugin for kickasstorrents.com
- FEATURE: Added auto-suspend upon downloads completion feature
- BUGFIX: Hide unwanted files that have to be partly downloaded
- BUGFIX: Do not allocate space for unwanted files (preallocation mode)
- I18N: Added Galician translation
- COSMETIC: Same deletion confirmation dialog in the GUI and Web UI
- COSMETIC: Simplified the top toolbar
- COSMETIC: Display execution log as a tab instead of a modal window

### January 6th 2011 - qBittorrent v2.5.5 and v2.6.0rc1 release

I have just uploaded both v2.5.5 to fix a few outstanding issues and a first release candidate for v2.6.0.

qBittorrent v2.5.3 to v2.5.5 changelog:

- BUGFIX: Added --enable-debug parameter to the configure script
- BUGFIX: Prioritize first and last pieces when sequential download is enabled
- BUGFIX: Some encoding fixes (Windows)
- BUGFIX: Display default password on stdout when using nox
- BUGFIX: Fix issues when search engines results contain a '|'
- BUGFIX: Avoid possible crash on exit when the IP filter is enabled (closes #695945)

### January 1st 2011 - qBittorrent v2.5.3 release

Happy new year to you all! I have just uploaded qBittorrent v2.5.3 with a few bug fixes.

qBittorrent v2.5.2 to v2.5.3 changelog:

- BUGFIX: Fix priority up/down for multiple torrents at the same time (closes #692184)
- BUGFIX: Make sure the number of torrents is properly set on startup (closes #694135)
- BUGFIX: Fix scan directories saving (closes #694768)
- BUGFIX: Remove empty folders on torrent soft deletion (closes #695174)
- BUGFIX: Make sure the main window has focus on startup
- BUGFIX: Fix ampersand display in search tabs (closes #695715)

### December 19th 2010 - qBittorrent v2.5.2 release

qBittorrent v2.5.2 was just uploaded, as well as a first beta for v2.6.0. v2.6.0beta1 finally brings support for the system theme icons and also uses an improved ETA calculation algorithm.

qBittorrent v2.5.1 to v2.5.2 changelog:

- BUGFIX: Fix alternative speed icon staying pressed when disabled
- BUGFIX: Fix slot warning on startup
- BUGFIX: Fix alignment issues in program preferences
- BUGFIX: Make sure we don't move completed torrent to the temp directory for checking (closes #602938)
- BUGFIX: Fix some 'File Not found' warning in the Web UI
- BUGFIX: Fix dangerous usage of vector iterator
- BUGFIX: No longer expand the first folder in the torrent content list
- BUGFIX: Fixes possible crash in the RSS Downloader dialog (closes #691426)

### December 5th 2010 - qBittorrent v2.5.1 release

After a long period of code refactoring and testing, we are glad to announce the release of qBittorrent v2.5.0. This major release brings a lot of new features as well as important performance improvements.

qBittorrent v2.4.11 to v2.5.1 changelog:

- FEATURE: qBittorrent can now act as a tracker
- FEATURE: New and improved RSS feed automated downloader
- FEATURE: Added feature to shutdown qbittorrent on torrents completion
- FEATURE: Added a torrent import assistant to seed or keep downloading outside torrents
- FEATURE: qBittorrent can update itself from Sourceforge (Windows/Mac OS X only)
- FEATURE: Added a transfer list column to display the current tracker
- FEATURE: Remember the last trackers used in the torrent creation tool
- FEATURE: The optimal piece size is now automatically computed in the torrent creation tool
- FEATURE: Bring up the connection settings when clicking on the connection status icon
- FEATURE: Major code refactoring and optimization
- FEATURE: Added "Amount downloaded/left" columns to transfer list
- FEATURE: Simplified proxy settings
- FEATURE: Optimized and improved the peer country resolution code
- FEATURE: Download first/last pieces first when sequential download is enabled (Thanks Ahmad)
- FEATURE: Download first/last pieces first now applies to all media files in the torrent (Thanks Ahmad)
- BUGFIX: Fix SOCKS5 proxy authentication in search engine(closes #680072)
- BUGFIX: Fix two advanced settings (ignore limits on LAN and protocol overhead inclusion in rate limiter)
- BUGFIX: Fix strict super seeding (was not working)
- BUGFIX: Improve magnet save path handling (closes #683395)
- BUGFIX: Disable overwrite confirmation in torrent addition dialog (closes # 685269)
- COSMETIC: Replaced message box by on-screen notification for download errors
- COSMETIC: Improved the torrent creation tool appearance
- COSMETIC: Use country flags by Mark James (Thanks to Dmytro Pukha)
- COSMETIC: Use bigger alternative speed icon
- OTHERS: Dropped support for Qt &lt;= 4.4

### November 21st 2010 - qBittorrent v2.4.11 and v2.5.0beta6 releases

qBittorrent v2.4.11 has just been released. It will be the last bugfix release for the v2.4.x series as v2.5.0 is almost ready.
Regarding the next major release - v2.4.5 - it is now in feature freeze and I have uploaded today a sixth beta release.<br>
I hope some users will have a chance to test this beta and report issues to help us stabilize.
A big part of qBittorrent has been rewritten for v2.5.0 with the objectives to bring important performance improvements and to reduce the risk of introducing bugs.</p>

qBittorrent v2.4.10 to v2.4.11 changelog:

- BUGFIX: Do not report a progress of 100% in the Web UI unless the torrent is really complete (closes #674349)
- BUGFIX: Fix possible incorrect behavior with queueing
- BUGFIX: Fix RSS refresh interval saving
- BUGFIX: Fix possible crash when setting RSS proxy (closes #676288)
- BUGFIX: Fix HTTP redirect issue that would cause the torrent addition to show up for automated RSS downloads (Closes #677565)

### November 10th 2010 - qBittorrent v2.4.10 release

I have just uploaded qBittorrent v2.4.10 to fix remaining outstanding issues. I am also working really hard to get v2.5.0 ready but I very little free time unfortunately.

qBittorrent v2.4.9 to v2.4.10 changelog:

- BUGFIX: Fix possible crash when selecting a RSS item (really closes #575624)
- BUGFIX: Improved IPv6 support (IP filter and Peer list)
- BUGFIX: Make IP filter more tolerant towards strangely formatted IPs
- BUGFIX: More reliable folder scanning
- BUGFIX: Do not create the torrent root folder at final destination if torrent is in the temp dir (closes #673271)
- BUGFIX: Fix compilation with libnotify v0.7.0 (closes #671769)
- BUGFIX: Use a pointing cursor over status bar buttons

### October 31st 2010 - qBittorrent v2.4.9 release

I hope all of you are enjoying Halloween! I - personally - have been very busy preparing a new bugfix release for the v2.4.x series ;)

Once again, it brings a lot of new bug fixes. The activity on the bug tracker has remained very high this week. Hopefully it will calm down next week :P

qBittorrent v2.4.8 to v2.4.9 changelog:

- BUGFIX: Fix crash when pressing enter in save path field in torrent addition dialog
- BUGFIX: Fix crash when deleting a torrent with no metadata (closes #667528)
- BUGFIX: Fix possible crash on clicking a RSS article (closes #575624)
- BUGFIX: Correctly update total number of torrents when a torrent is automatically removed (closes #668726)
- BUGFIX: Correctly display the hash of torrents with no metadata
- BUGFIX: Elide status bar text if it is too wide
- BUGFIX: Make sure the splash screen is displayed for 2 seconds
- BUGFIX: Make listening on a particular interface more reliable
- BUGFIX: Fix torrent size update in torrent addition dialog
- BUGFIX: Fix possible crash on qBittorrent shutdown
- BUGFIX: Fix and improve file priorities editing (closes #669084)
- I18N: Updated Arabic, Italian and Croatian translations

### October 24th 2010 - qBittorrent v2.4.8 release

We have just uploaded another bugfix release for the qBittorrent v2.4.x series. It fixes quite a lot of issues. There are a lot of people taking to time to write bug reports and helping us make qBittorrent as bug-free as possible: this is great.

Development on qBittorrent v2.5.0 is also progressing fast and we have uploaded a second beta for people to test.

qBittorrent v2.4.7 to v2.4.8 changelog:

- BUGFIX: Fix possible crash on manual peer ban
- BUGFIX: Improved hostname resolution code
- BUGFIX: Several search plugins fixed
- BUGFIX: Auto-disable the shutdown feature
- BUGFIX: Remember the current property tab on startup
- BUGFIX: Fix status list widget height issue on style change
- BUGFIX: Fix rounding issue in torrent progress display
- BUGFIX: Fix issue when altering files priorities of a seeding torrent
- BUGFIX: Better fix for save path editing issues in torrent addition dialog
- BUGFIX: Peers can now be sorted by country

### October 19th 2010 - qBittorrent v2.4.7 release

qBittorrent v2.4.7 was just uploaded to fix a few issues that were reported recently.

qBittorrent v2.4.6 to v2.4.7 changelog:

- BUGFIX: Display the priority column when the queueing system gets enabled
- BUGFIX: Fix encoding problem in file renaming
- BUGFIX: Delete unneeded files on torrent "soft" deletion
- BUGFIX: Fix issues when marking a file as 'not downloaded' causes the torrent to complete
- BUGFIX: Improved "Set Location" and "Change save path" dialogs
- BUGFIX: Fix display of queued seeding torrents

### October 17th 2010 - qBittorrent v2.4.6 release

qBittorrent v2.4.6 was just uploaded in order to release a few new bug fixes. We have also uploaded qBittorrent v2.5.0beta1 which includes
the new embedded tracker and qBittorrent shutdown upon torrent completion.

qBittorrent v2.4.5 to v2.4.6 changelog:

- BUGFIX: Fix "torrent seeding after creation" feature
- BUGFIX: The properties panel data would sometimes not match the selected torrent
- BUGFIX: Fix detection of files at final destination when temp dir is used
- BUGFIX: Fix moving of a torrent to an unexisting directory

### September 26th 2010 - qBittorrent v2.4.2 release

After a short pause in development, we have finally uploaded a bugfix release for qBittorrent v2.4. It brings quite a few fixes including some important ones for Windows platform.

qBittorrent v2.4.0 to v2.4.2 changelog:

- I18N: Updated Arabic translation
- I18N: Fixes to German translation
- BUGFIX: Save path can now be edited in torrent addition dialog
- BUGFIX: Fix save path encoding on non-utf8 systems
- BUGFIX: Fix saving to drive root on Windows
- BUGFIX: OGV can now be previewed
- BUGFIX: Maximum download limit is now 10MB/s
- BUGFIX: Fix 'download in scan dir' persistence
- BUGFIX: Add .torrent extension only when missing (torrent creator)
- BUGFIX: Fix possible issue with temporary download path persistence
- BUGFIX: Added support for | (OR) operator in RSS feed downloader
- BUGFIX: Fix Web UI for spanish users
- BUGFIX: Fix locale switching from Web UI
- BUGFIX: Use AND operator for torrentdownloads.net searches
- BUGFIX: Limit torrent addition dialog width to fit the screen
- COSMETIC: Fix progress bars style on Windows

### August 24th 2010 - qBittorrent v2.4.0 release

I have just uploaded qBittorrent v2.4.0. It brings quite a few features and some of them were awaited by users for quite some time.

There may be a short pause in development now because I will defend my PhD thesis soon and then relocate to Finland.

qBittorrent v2.3.1 to v2.4.0 changelog:

- FEATURE: Added actions to "Move to top/bottom" of priority queue
- FEATURE: Auto-Shutdown on downloads completion
- FEATURE: Email notification on download completion
- FEATURE: Added button to password-lock the UI
- FEATURE: Added label-level Pause/Resume/Delete actions
- FEATURE: Torrents can now be filtered by name
- FEATURE: Run external program on torrent completion
- FEATURE: Detect executable updates in order to advise the user to restart

### July 27th 2010 - qBittorrent v2.3.0 release

qBittorrent v2.3.0 was just released. It ships quite a few new features and we hope you will all like it.

Note that I will be leaving on vacation tomorrow and I will not be back until August 13th.

qBittorrent v2.2.11 to v2.3.0 changelog:

- FEATURE: Simplified torrent root folder renaming/truncating (&lt; v2.3.0 is no longer forward compatible)
- FEATURE: Remember previous save paths in torrent addition dialog
- FEATURE: Max number of half-open connections can now be edited
- FEATURE: Added support for strict super seeding
- FEATURE: The user can force listening on a particular network interface
- FEATURE: Added cookie support for RSS feeds
- FEATURE: User can force tracker reannounce
- FEATURE: Added "No action" setting for double-click action
- FEATURE: Several torrents can be moved at once
- FEATURE: Added error state for torrents (error is displayed in a tooltip)
- FEATURE: Added filter for paused/error torrents
- FEATURE: Add Check/Uncheck all feature in Web UI
- FEATURE: Search engine can now be disabled
- FEATURE: Torrents can be automatically paused once they reach a given ratio
- FEATURE: Several files can now be disabled at once
- FEATURE: Added "Select All/None" buttons to files list
- FEATURE: Added support for BitComet links (bc://bt/...)
- BUGFIX: Hide seeding torrents files priorities in Web UI
- BUGFIX: The user can disable permanently recursive torrent download
- BUGFIX: Peer Exchange status is now correctly reported
- BUGFIX: Use an INI file instead of the registry on Windows (More reliable)
- BUGFIX: Removed client spoofing feature to avoid tracker blacklisting
- COSMETIC: Display peers country name in tooltip
- COSMETIC: Display number of torrents in transfers tab label
- COSMETIC: Simplified program preferences
- COSMETIC: Fix naming of actions opening new dialogs (use Name...)

### June 23rd 2010 - qBittorrent v2.2.10 and v2.3.0beta3 release

We have released another bugfix release for qBittorrent v2.2.x series. This will probably be the last one as development on v2.3.0 is going well. We would expect to release v2.3.0 final before the end of July.

qBittorrent v2.2.9 to v2.2.10 changelog:

- BUGFIX: Fix Web UI in qBittorrent nox version
- BUGFIX: Improved ETA display (more user friendly)
- BUGFIX: Fix possible compilation errors with libtorrent v0.15
- BUGFIX: Fix minor issues in torrent creation tool
- BUGFIX: Use checkable actions to avoid issues on systems hiding menu icons (e.g. recent Gnome)
- BUGFIX: Use busy cursor for search plugin updates
- BUGFIX: Free disk space calculation now works if destination folder does not exist
- BUGFIX: Fix "append .!qB extension to incomplete files" feature
- BUGFIX: Several OS/2 fixes by Silvan Scherrer
- COSMETIC: Display "Alternative speed limits" button as pressed when enabled

### June 13th 2010 - qBittorrent v2.2.9 release

We have just uploaded qBittorrent v2.2.9 on Sourceforge. This new release includes bug fixes but also official support for Windows operating system.

The Windows build should be available today or tomorrow. However, the Mac build will be delayed because it is the exams period for our maintainers.

qBittorrent v2.2.8 to v2.2.9 changelog:

- FEATURE: Official support for Win32 platform
- FEATURE: Better integration with Mac OS
- BUGFIX: Fix torrent availability computation (closes #587337)
- BUGFIX: Disable torrent addition dialog as a default
- BUGFIX: Fix Web UI authentication with Opera Browser
- BUGFIX: Fix Javascript error in Web UI when using IE
- BUGFIX: Fix a lot of encoding problems on non UTF-8 systems
- BUGFIX: Fix race condition allowing to run multiple instances (closes #286968)
- BUGFIX: Fix window hiding problem when having a modal window (closes #589070)

### June 6th 2010 - qBittorrent available for testing on Windows

Today represents an important milestone for qBittorrent. We have uploaded today on Sourceforge our first [Windows installer for qBittorrent v2.2.8+](http://sourceforge.net/projects/qbittorrent/files/qbittorrent-win32/qbittorrent-2.2.9/qbittorrent_2.2.9.1_setup.exe/download). This installer should be regarded as a public beta as we are looking for feedback before making an official stable release (v2.2.9).

Please visit our download page to grab and install qBittorrent on Windows. If you find bugs, please report them via our [bug tracker](http://bugs.qbittorrent.org). We thank you in advance for your helpful feedback!

### June 4th 2010 - qBittorrent back on Mac OS X and making its debut on Windows

qBittorrent had been unmaintained on Mac platform for a while because our package maintainer was temporarily unavailable. We have excellent news: he is back! Furthermore, we welcome an additional Mac maintainer in our team: Mirco Chinelli. Both worked really hard and uploaded today qBittorrent v2.2.8 dmg for Snow Leopard. Please find it on our download page.

Another great news is that I am currently working very actively on the Windows port with a new member: Mohammad Dib. As a consequence, qBittorrent v2.2.9 will be released and supported on all three major platforms: Linux, Mac and Windows. We are currently working hard on Windows bug fixing, in collaboration with beta testers (Please contact [me](mailto:chris@qbittorrent.org) if you wish to help with the testing), in order to make a polished and stable release really soon! Stay put :)

### March 14th 2010 - qBittorrent v2.2.0

qBittorrent v2.2.0 final has been released today. This new major release brings a few interesting features such as a bandwidth scheduler and more advanced feature settings. There was also a great deal of code cleanup and optimization.

qBittorrent v2.1.x to v2.2.0 changelog:

- FEATURE: User can set alternative speed limits for fast toggling
- FEATURE: Bandwidth scheduler (automatically use alternative speed limits for a given period)
- FEATURE: Added "Added/Completed On" columns to transfer list
- FEATURE: Added "Upload/Download limit" columns to transfer list
- FEATURE: Torrent files can be exported to a given directory
- FEATURE: Outgoing ports range can be customized (for QoS)
- FEATURE: User can choose to apply transfer limits on LAN too
- FEATURE: User can choose to include the protocol overhead in transfer limits
- FEATURE: Torrents can be automatically rechecked on completion
- FEATURE: If 2 torrents have the same hash, add new trackers/URL seeds to the existing torrent
- FEATURE: Trackers can be added from Web UI
- FEATURE: Global transfer information are displayed in the new Web UI status bar
- FEATURE: Allow to change the priority of several files at once
- FEATURE: Support for multiple scan folders (Patch by Christian Kandeler)
- BUGFIX: Only one log window can be opened at a time
- BUGFIX: Optimized RSS module memory usage
- BUGFIX: Consider HTTP downloads >1MB as invalid .torrent files and abort
- BUGFIX: Fix Web UI authentication with some browsers
- BUGFIX: Set Web UI ban period to 1 hour
- COSMETIC: Improved style management

### January 24th 2010 - qBittorrent v2.1.2 and v2.2.0beta1

We have just uploaded v2.1.2. This bugfix release adds further polishing and should be very stable. Exceptionally, a feature was also added because it seems users were missing this one from earlier releases: File prioritizing in a torrent.

We have also tagged v2.2.0beta1 for testing purpose. It introduces alternative speed limits and a bandwidth scheduler. More changes to v2.2.0 will arrive soon as its development is just starting.

qBittorrent v2.1.1 to v2.1.2 changelog:

- FEATURE: Added back file prioritizing in a torrent
- BUGFIX: Fix issue causing torrents not to be displayed in the list
- BUGFIX: Make sure invalid torrent are removed from the transfer list
- BUGFIX: Fix overwrite check when renaming a folder in a torrent
- BUGFIX: Force a recheck after renaming files to avoid overwriting
- BUGFIX: Improve "Open destination folder" behavior
- BUGFIX: Fix race condition in RSS that could cause a crash on startup
- BUGFIX: Improved user friendlyness of size units
- BUGFIX: Optimized transfer list repainting
- COSMETIC: Improved transfer speed display in peers list

### January 20th 2010 - qBittorrent v2.1.1 bugfix release

Several bugs were reported just after v2.1.0 release. We have thus decided to make a bugfix release. It is recommended to update due to the number of bugs fixed.

qBittorrent v2.1.0 to v2.1.1 changelog:

- BUGFIX: Fix compilation with Qt4.4
- BUGFIX: Save torrent metadata so that it does not have to be re-downloaded on restart (Magnet links)
- BUGFIX: Fix folder renaming in a torrent (would rename children under certain conditions)
- BUGFIX: Nox version no longer requires libQtXml
- BUGFIX: Configure file now checks for pkg-config executable which is required
- BUGFIX: Torrents added from magnet links were not remembered on restart
- BUGFIX: "Add in pause" setting can be ignored from torrent addition dialog
- BUGFIX: Fix renaming of files with unicode characters in their name
- BUGFIX: Fix typo in legal notice (startup)
- BUGFIX: Can listen on ports &lt; 1024 (must be root)
- BUGFIX: Paused torrents can now be rechecked
- BUGFIX: Fix "open torrent destination" feature when path contains spaces
- I18N: Updated translations (Hungarian, Chinese, Russian)

### January 18th 2010 - qBittorrent v2.1.0 final release

We uploaded today qBittorrent v2.1.0 final, a little earlier than anticipated. Once again, this new major release brings a lot of changes.

The most important new features are torrent categorizing/labeling to better organize big torrent lists, headless running for people who want to run qBittorrent on a server without X server and control it remotely, new search engine plugins, better proxy support, a more secure and complete Web UI.

A lot of polishing and bug fixing has been made since qBittorrent v2.0.0, it is strongly advised to update.

qBittorrent v2.0.7 to v2.1.0 changelog:

- FEATURE: Graphical User Interface can be disabled at compilation time (headless running)
- FEATURE: Torrents can be labeled/categorized
- FEATURE: Labeled torrent can be downloaded corresponding subfolders
- FEATURE: Disk cache size can be set from preferences
- FEATURE: Peer Exchange (PeX) can be disabled from preferences
- FEATURE: Append !.qB extension to incomplete files option (libtorrent >= v0.15 only)
- FEATURE: Torrent files/folders can be renamed (torrent addition dialog or files properties)
- FEATURE: uTorrent compatible tracker list support (use torrentz.com url as a default)
- FEATURE: Better proxy support and preferences remodeling
- FEATURE: qBittorrent can identify itself as uTorrent, Vuze or KTorrent (Any stable version)
- FEATURE: Torrents can be renamed in transfer list
- FEATURE: Display torrent addition dialog for magnet links too
- FEATURE: Files contained in a torrent are opened on double click (files panel)
- FEATURE: Added support for magnet links in search engine
- FEATURE: Added vertor.com and torrentdownloads.net search plugins
- FEATURE: Search engine can now use a SOCKS5 proxy
- FEATURE: HTTP proxy support for peer communication
- BUGFIX: Search engine loads new proxy settings without program restart
- BUGFIX: Use XDG folders (.cache, .local) instead of .qbittorrent
- BUGFIX: Added legal notice on startup that the user must accept
- BUGFIX: Protect Web UI authentication against brute forcing
- BUGFIX: Use HTTP digest mode for Web UI authentication (instead of Basic)
- BUGFIX: Properly display torrents with one file in subfolder(s)
- COSMETIC: Use checkboxes to filter torrent content instead of comboboxes
- COSMETIC: Use alternating row colors in transfer list (set in program preferences)
- COSMETIC: Added a spin box to speed limiting dialog for manual input

### January 3rd 2010 - qBittorrent v2.1.0rc1

First of all, we would like to wish you all a happy new year. To enjoy this new year even more, I'm planning to release qBittorrent v2.1.0 really soon and We uploaded a first release candidate today. We are hoping that people will test this release candidate and report issues as soon as possible so that we can make a stable release before the end of this month.

v2.1.0 brings some long-waited features such as headless running (GUI can be disabled at compilation time by passing --disable-gui flag) and torrent categorizing/labeling. Renaming of torrents and their content is now also supported.

qBittorrent v2.0.5 to v2.1.0rc1 changelog:

- FEATURE: Graphical User Interface can be disabled at compilation time (headless running)
- FEATURE: Torrents can be labeled/categorized
- FEATURE: Labeled torrent can be downloaded corresponding subfolders
- FEATURE: Disk cache size can be set from preferences
- FEATURE: Peer Exchange (PeX) can be disabled from preferences
- FEATURE: Append !.qB extension to incomplete files option (libtorrent >= v0.15 only)
- FEATURE: Torrent files/folders can be renamed (torrent addition dialog or files properties)
- FEATURE: uTorrent compatible tracker list support (use torrentz.com url as a default)
- FEATURE: Better proxy support and preferences remodeling
- FEATURE: qBittorrent can identify itself as uTorrent, Vuze or KTorrent (Any stable version)
- FEATURE: Torrents can be renamed in transfer list
- BUGFIX: Use XDG folders (.cache, .local) instead of .qbittorrent
- COSMETIC: Use checkboxes to filter torrent content instead of comboboxes
- COSMETIC: Use alternating row colors in transfer list (set in program preferences)
- COSMETIC: Added a spin box to speed limiting dialog for manual input

### December 13th 2009 - qBittorrent v2.0.1

We have just uploaded a first bugfix release for qBittorrent v2.0. This version brings support for Hex Magnet Links which are used by some web sites such as [The Pirate Bay](http://thepiratebay.org/).

Another good news is that qBittorrent project won [Les étoiles du libre](http://www.etoiles-du-libre.org) Free Software competition, in desktop applications.

qBittorrent v2.0.0 to v2.0.1 changelog:

- BUGFIX: µTorrent user-agent is now spoofed correctly
- BUGFIX: Fix column hiding behavior when queueing system is disabled
- BUGFIX: Fix link to plugins.qbittorrent.org in plugins dialog
- BUGFIX: ~/qBT_dir is created only when it is actually used
- BUGFIX: Fix possible missing slot message (toggleSelectedTorrentsSuperSeeding)
- BUGFIX: Fix possible crash in torrent properties (files)
- BUGFIX: Added Hex Magnet Links support (Thanks Haypo)

### December 10th 2009 - qBittorrent v2.0.0 final release

As planned, qBittorrent v2.0.0 final was released today after a rather long period of test, which was necessary due to the large number of features/changes introduced. We really received a lot of feedback regarding v2.0.0 betas and release candidates and we would like to thank the brave people who tested it.<br>
qBittorrent v2.0.0 changelog is available [here](http://qbittorrent.svn.sourceforge.net/viewvc/qbittorrent/trunk/Changelog?revision=3083&amp;view=markup).

### December 2nd 2009 - qBittorrent v2.0.0rc4 and competition finalist

Just a short article to announce that qBittorrent v2.0.0rc4 was released. It is stable and the UI will not change. I am now simply waiting for late translation updates so that I can make a final release (probably on December 10th)<br>
Another good news is that qBittorrent project is now a finalist in "desktop applications" category in ["Les Etoiles Du Libre"](http://etoiles-du-libre.org) Free Software competition. The winning projects will be selected on December 12th so let's keep our fingers crossed!

### November 28th 2009 - qBittorrent v2.0.0rc2 and more search engine plugins

We have released today a second release candidate for qBittorrent v2.0.0. A lot of users decided to give v2.0.0 a try as soon as they saw the screenshots and we thank them for their useful feedback. Thanks to their effort, qBittorrent v2.0.0 final will be released sooner than expected.

We also recently moved our wiki to Sourceforge and we wrote a [new documentation](http://doc.qbittorrent.org) for qBittorrent v2.0. The documentation is complete already.

Another recent news was that [Mininova](http://www.mininova.org) engine disabled access to over a million torrent files when it partly shut down its website due to legal issues. After this news, TorrentFreak published a list of [10 alternatives to Mininova](http://torrentfreak.com/10-alternatives-to-mininova-091126/). We decided it would be useful to support these 10 search engines in qBittorrent. As a result, we are currently publishing new plugins on [Plugins.qbittorrent.org](http://plugins.qbittorrent.org). 4 new plugins are available at the time I'm writing this news while qBittorrent already supported 3 engines listed in the Top 10. This means that only 3 more plugins are missing to support the whole Top 10.

### November 17th 2009 - qBittorrent v1.5.6 release and qBittorrent v2.0.0 news

Here is another bugfix release for qBittorrent v1.5.x while waiting for the next major release: qBittorrent v2.0.0. Development on v2.0.0 is going really well and we are hoping it will be ready in a month or so. qBittorrent v2.0 brings a lot of new features and UI changes. The list of changes is available [here](http://qbittorrent.svn.sourceforge.net/viewvc/qbittorrent/trunk/Changelog?view=markup) but to summarize it should be a very close equivalent to the official Bittorrent client: µTorrent, in all levels: features, UI, lightness.

qBittorrent v1.5.5 to v1.5.6 changelog:

- BUGFIX: RSS feed articles can now be displayed using keyboard arrows
- BUGFIX: RSS feed downloader can only process unread articles now
- BUGFIX: Fixed memory leak in RSS parser
- BUGFIX: Fixed possible crash in search autocompletion
- BUGFIX: Improved ETA calculation for big torrents
- BUGFIX: Fixed per-torrent speed limiting
