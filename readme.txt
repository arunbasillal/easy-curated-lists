=== Easy Curated Lists ===
Contributors: arunbasillal
Donate link: http://millionclues.com/donate/
Tags: knowledgebase, popular-posts, recent-posts, curated-list
Requires at least: 2.7
Tested up to: 6.7.1
Requires PHP: 5.5
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Display a curated list of posts, pages, products, or any post type using a shortcode. 

== Description ==

Easy Curated Lists plugin lets you easily display a hand-selected list of posts, pages, products or any post type using a shortcode. 

To create a curated list, simply grab the ID's of the posts, pages or products and then use the shortcode **[easycuratedlists]** in the following format.

`[easycuratedlists id='1,12,25']`

You can also optionally specify `h2` or `h3` title for your list by adding it to the shortcode. 

`[easycuratedlists id='1,12,25' h2='My Curated List']`

## Use cases for Easy Curated Lists

* Create a list of posts, pages or products.
* Add related posts in between articles.
* Create a knowledge base / documentation.
* Create an article series that is meant to be read in order.
* Create a getting started page with links to popular articles for new readers of your website.
* Create a list of articles to display in a widget on the sidebar or footer.

### Easy Curated Lists Features

* Effortless to use with zero configuration. Just provide the list of ID's and optional heading. 
* Minimal overhead for your server. 
* Does not write to the database. Clean install and uninstall. 
* Should be compatible with most page builders and themes. 
* Mix and match posts, pages, products or any other post type in a single list. 

I am excited to know how you are using Easy Curated Lists. Please let me know through the forums. 

### Dev Notes

* The generated list is an unordered HTML list bounded by `ul` tag.
* A class `easycuratedlists` is added to the list. You can use this to style your curated lists. 
* GitHub repository: [arunbasillal/easy-curated-lists](https://github.com/arunbasillal/easy-curated-lists)

== Installation ==

To install this plugin:

1. Install the plugin through the WordPress admin interface, or upload the plugin folder to /wp-content/plugins/ using ftp.
2. Activate the plugin through the 'Plugins' screen in WordPress. On a Multisite you can either network activate it or let users activate it individually. 
3. Add the shortcode in the format `[easycuratedlists id='1,12,25']` to a post, page or a text widget. 


== Frequently Asked Questions ==

= How to find ID of a post, page or product? =

You can find post, page and product ID from within WordPress admin. Please refer this article for screenshots and more info: [Easily Find ID of Post, Page or Product In WordPress](https://millionclues.com/wordpress-tips/find-post-page-product-id/)

== Screenshots ==

1. A curated list in a post
2. Curated list displayed as a widget

== Changelog ==

= 1.0 =
* Date: 15.June.2021
* First release of the plugin.

== Upgrade Notice ==

= 1.0 =
* First release of the plugin.