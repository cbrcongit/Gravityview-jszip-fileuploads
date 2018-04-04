# Gravityview-jszip-fileuploads

Allows you to select all/any links and then download multiple files as a zip.


![screenshot](Gravityview-jszip-fileuploads/gravity-zip.png)



## What?
1. Default GravityView entries display is a dot-point list of links.
2. This "plugin" (more like a 'gist) modifies the display template to be a list of checkbox link options.
3. Checkboxes can be (de)selected individually or all at once.
4. Selected checkbox options will compress into a ZIP archive when you click the button.

Presumably, it works for media uploaded to any wordpress directory, as long as your custom wordrepss media upload file directory works with Gravity Forms.

## Is it ready to use?
This plugin is fully functional; However...
it does not "install-and-activate" like a wp-admin plugin; This repo is organised to mimic your file directories - any `theme` or `theme_child` will work for you to add these `functions.php` changes.
(*Hot tip for beginners:* Add, [don't overwrite](https://image.slidesharecdn.com/git-weconnect-131201014055-phpapp01/95/git-concepts-commands-and-connectivity-26-638.jpg?cb=1385862414)).

...and...

the coding standards are low on this, please **be encouraged to use this to develop - copy it, adapt it, take over** and make something neater and better integrated for push to GravityView and GravityFlow cores. I am not able to do this at this time.

## How?
JSZip - [see JSZip Mini App, other dependencies](https://stuk.github.io/jszip/documentation/examples/downloader.html)
Gravity Forms, [about `fileupload` in docs](https://docs.gravityforms.com/?s=fileupload)
GravityView [about `fileupload` in docs](https://docs.gravityview.co/search?collectionId=566dfabbc6979143615564bf&query=fileupload)

## Why?
1. I noticed that "multi-file" download features are sorely lacking in the Wordpress Plugins **everywhere** - only large cumbersome plugins with a whole new admin interface and database tables etc etc etc seem to be available - basically, they are crap and their development is not as effective or continuous as the Gravity core series.
2. I did not want to add a whole bundle of "e-commerce" fluff; 
3. I need other people to be empowered by simple tools that make their work easy to manage... They need to share files, and they need to control who can get them through information gathering processes/workflows.
4. Obviously, most people need very simple and quick, so bolting onto [GravityFlow](https://docs.gravityflow.io/article/175-flowchart) / [GravityView](https://docs.gravityview.co/article/67-configuring-the-edit-entry-screen) / GravityForms made sense...



