# LineBreaks

This is a MediaWiki extension which allows you to use Markdown line breaks.

Specifically it converts `\s\s\n` and `\\\n` to `<br />\n` during the parsing stage.

## Installation

* Clone this repo to your extension folder.
```
git clone https://github.com/dli7319/mediawiki-linebreaks-extension.git LineBreaks
```
* Add `wfLoadExtension( 'LineBreaks' );` to your `LocalSettings.php`.

## Options
| Setting              | Default value                 | Description                                   |
| -------------------- | ----------------------------- | --------------------------------------------- |
| `$wgLbUseBackslashs` | `false`                       | Allow `\\\n` linebreaks. Note this may conflict code blocks.|
