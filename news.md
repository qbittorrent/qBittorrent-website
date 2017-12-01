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
- BUGFIX: Change default settings for tracker/tier announces to mimick μTorrent behavior. (sledgehammer999)
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
macOS packges might follow.<br>
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
- FEATURE: Seperate seeds from peers for DHT, PeX and LSD (thalieht)
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
- BUGFIX: Use case-insensitive comparsion for torrent content window. Closes #6327. (Chocobo1)
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
