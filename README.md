# Youtube parser for Xenforo Custom BB Code Manager Add-on

Custom Youtube parser for XenForo Custom BB Code Manager add-on.

Instead of finding all instances of `[youtube]xxx[/youtube]` in your database and replacing them with `[media=youtube]xxx[/media]`, use this parser in conjunction with the [Custom BB Code Manager](http://xenforo.com/community/resources/custom-bb-code-manager.173/) and it'll just work.

## Installation

Copy everything under `library/` to your XenForo `library/` directory.

Create a new YouTube custom tag in the XenForo Custom BB Codes admin area. Set the PHP Callback to `Sidane_BbCodeManager_BbCode_Formatter_Youtube::parseYoutube`

## Future Improvements

Add support for custom sizes of embedded video player.
