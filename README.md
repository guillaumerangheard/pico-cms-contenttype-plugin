# Pico CMS (2.1.1+) Content-Type Plugin

This is a little plugin I put together because I needed it for my own website, and thought some might find it useful. What it does is that it basically allows one to serve any (MIME-)type of file based on the file's extension or its YAML header (see below), while at the same time still being able to use templates. In order to use it, just create a `ContentType` folder containing `ContentType.php` in your `plugins` folder, set `ContentType.enabled` to `true` in your `config.yml`, and *voilà*.

The plugin is first triggered on the `onRequestUrl` event, during which it stores the file extension, if any. Then it is triggered on the `onMetaParsed` event, during which it searches for a `ContentType` entry in the page's YAML header, whose value is a file extension. If it finds one, it stores it, eventually replacing the value feched when the page's URL was parsed. If the page does not have an explicit `Template` entry in its header, the plugin assumes that the page has to be delivered as is, minus the header.
