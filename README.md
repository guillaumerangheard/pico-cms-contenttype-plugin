# Pico CMS (2.1.1+) Content-Type Plugin

This is a little plugin I put together because I needed it for my own website, and thought some might find it handy.
What it does is that it basically allows one to serve any (MIME) type of file based on its extension or YAML header (see below), while at the same time still being able to use templates. In order to use it, just create a `ContentType` folder containing `ContentType.php` in your `plugins` folder, set `ContentType.enabled` to `true` in your `config.yml`, and *voilà*.

There are a couple of ways you can use this plugin:

Let's say you have a JSON file called `database.json` and want it delivered as JSON. All you have to do is to rename it `database.json.md`, so it would be rendered by Pico, and upload it to your `content` folder, or any subfolder thereof.
