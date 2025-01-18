qBittorrent-website
===
[![GitHub Actions CI Status](https://github.com/qbittorrent/qBittorrent-website/workflows/CI/badge.svg)](https://github.com/qbittorrent/qBittorrent-website/actions)

This repository contains the official qBittorrent website: https://www.qbittorrent.org/ \
A backup mirror is hosted at: https://qbittorrent.github.io/qBittorrent-website/

Anyone is welcome to submit PRs that fix problems and improve things.

You can also submit redesigns but first open a bug report informing us and maybe show some mockups. Otherwise, you run the risk of wasting your time in case we won't agree with the redesign.

### How to build
The site uses [11ty](https://www.11ty.dev/) as a static site generator.
In the git repo folder do:
```shell
npm install
npm run build
```
Then the site is generated under the `_site` subfolder.

Ensure changes to the news_feed.atom update time are not committed when making PRs

You can also run the following to start up a local development server:
```shell
npm run serve
```
