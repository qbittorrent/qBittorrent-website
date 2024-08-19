/*
 * Atom Generator - Parse HTML file and generate Atom feed
 * Copyright (C) 2024  Mike Tzou (Chocobo1)
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation, either version 3
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

import * as Cheerio from 'cheerio';
import * as Commander from 'commander';
import * as Fs from 'node:fs';
import * as Xmlbuilder2 from 'xmlbuilder2';

function generateAtom(path: string): string {
    /* Example:
    <?xml version="1.0" encoding="utf-8"?>
    <feed xmlns="http://www.w3.org/2005/Atom">
        <title>qBittorrent News</title>
        <id>https://www.qbittorrent.org/news_feed.atom</id>
        <contributor>
            <name>The qBittorrent project</name>
        </contributor>
        <link href="https://www.qbittorrent.org/news_feed.atom" rel="self" />
        <link href="https://www.qbittorrent.org/news" />
        <updated>2024-07-01T01:02:03Z</updated>
        <entry>
            <title>qBittorrent v4.6.4 and v5.0.0beta1 releases</title>
            <id>https://www.qbittorrent.org/news#sun-mar-24th-2024---qbittorrent-v4.6.4-and-v5.0.0beta1-releases</id>
            <link href="https://www.qbittorrent.org/news#sun-mar-24th-2024---qbittorrent-v4.6.4-and-v5.0.0beta1-releases" />
            <updated>2024-03-23T00:00:00.000Z</updated>
            <published>2024-03-23T00:00:00.000Z</published>
            <author>
                <name>The qBittorrent project</name>
            </author>
            <content type="html">
                qBittorrent v4.6.4 and v5.0.0beta1 were released...
                ...Full changes
            </content>
        </entry>
    </feed>
    */

    // helpers
    const resetTimezone = (date: Date): Date => {
        date.setUTCHours(0, 0, 0, 0);
        return date;
    };

    const toDate = (dateStr: string): Date => {
        dateStr = dateStr
            .replaceAll(/(\d)nd/g, '$1')
            .replaceAll(/(\d)rd/g, '$1')
            .replaceAll(/(\d)st/g, '$1')
            .replaceAll(/(\d)th/g, '$1');
        return new Date(dateStr);
    };

    // build feed
    const docOptions = {
        encoding: 'UTF-8'
    };
    const doc = Xmlbuilder2.create(docOptions)
        .ele('feed', { xmlns: 'http://www.w3.org/2005/Atom' })
            .ele('title').txt('qBittorrent News').up()
            .ele('id').txt('https://www.qbittorrent.org/news_feed.atom').up()
            .ele('contributor')
                .ele('name').txt('The qBittorrent project').up().up()
            .ele('link', { href: 'https://www.qbittorrent.org/news_feed.atom', rel: 'self' }).up()
            .ele('link', { href: 'https://www.qbittorrent.org/news'}).up()
            .ele('updated').txt(new Date().toISOString()).up()
        .doc();
    const feedElement = doc.first();

    // process html
    const html: string = Fs.readFileSync(path, { encoding: 'utf8' });

    for (let startIdx = html.indexOf('<h3 '); startIdx >= 0; ) {
        const endIdx = html.indexOf('<h3 ', (startIdx + 4));
        const postEndIdx = ((endIdx >= 0)
            ? endIdx
            : html.indexOf('</div>', (startIdx + 4))); // don't include footer in the last post
        const post = html.slice(startIdx, postEndIdx);
        startIdx = endIdx;

        // parse
        const $ = Cheerio.load(post, undefined, false);
        const h3Element = $('h3');
        const [postDate, entryTitle] = h3Element.text().split('-').map(s => s.trim());

        // generate feed entry
        const entryLink = `https://www.qbittorrent.org/news#${h3Element.attr('id')}`;
        const entryDate = resetTimezone(toDate(postDate)).toISOString();
        const entryContent = post.split('</h3>')[1].trim();
        const entry = Xmlbuilder2.fragment(docOptions)
            .ele('entry')
                .ele('title').txt(entryTitle).up()
                .ele('id').txt(entryLink).up()
                .ele('link', { href: entryLink}).up()
                .ele('updated').txt(entryDate).up()
                .ele('published').txt(entryDate).up()
                .ele('author')
                    .ele('name').txt('The qBittorrent project').up().up()
                .ele('content', { type: 'html' }).txt(entryContent).up()
            .doc();
        feedElement.import(entry);
    }

    const xmlString = doc.end({ prettyPrint: true });
    return xmlString;
}

function main() {
    Commander.program
        .description("Parse HTML file and generate ATOM feed")
        .requiredOption('-i <path...>', "News.html file path")
        .requiredOption('-o <path>', "Atom feed output file path")
        .parse();

    const options = Commander.program.opts();
    const inputPath = options.i[0];
    const outputPath = options.o;

    const atomData = generateAtom(inputPath);
    Fs.writeFileSync(outputPath, atomData);
}
main();
