# Hide WordPress Post Title

This simple plugin came from a blog post I wrote on [how to hide WordPress post titles](https://www.nutt.net/hide-post-titles-wordpress/). I needed a way to hide the title on posts, but only on a few. And it needed to be something quick and easy. Oddly, Google didn't bring anything up that worked the way I was looking.

### Installation
Drop the `hide-title.php` in a folder under your `wp-content/plugins` folder, or even directly in the `plugins` folder. Then activate it just like any other WP plugin.

### Usage
The plugin looks for a custom field named `hide_title` when displaying a post. So when you want to hide the title, add that custom field. The value doesn't matter. The field just needs to be there.

When a post has the `hide_title` custom field and is in a single view a small bit of CSS will be added to the `<head>` section using the `wp_head` action to hide the post title. The plugin does assume that your post title has a CSS class of `page-title`. Fortunately, most themes use this class name. If your theme uses something different you'll need to change the class name in the php script. 
