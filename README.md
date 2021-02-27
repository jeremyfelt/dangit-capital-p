# Dangit Capital P

A WordPress plugin that removes `capital_P_dangit()` as a filter (where it can).

Every once in a while you find yourself [needing to write something](https://jeremyfelt.com/2020/06/03/publishing-to-wordpress-with-rstudio/) that requires a (gasp!) `Wordpress` as part of an example. If the `p` is autocapitalized, the instructions you wrote end up being incorrect!

This plugin puts the responsibility of of writing "WordPress" correctly in your hands. 😀

## Where it can

This plugin removes `capital_P_dangit()` as a filter on these hooks:

* `the_title`
* `wp_title`
* `the_content`
* `comment_text`
* `widget_text_content`

## Where it can't

* `capital_P_dangit()` is applied directly to `wp_document_title()` before it returns. See https://core.trac.wordpress.org/ticket/51643
