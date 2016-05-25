# Wavedrom plugin for mediawiki

This is a quick&dirty extension for mediawiki to add [wavedrom](http://wavedrom.com/) syntax.

## Install

To install the plugin :

1. In mediawiki directory named `extensions`, create a subdirectory named `wavedrom`
2. Copy the file `wavedrom.php` under the freshly cleated directory `extensions/wavedrom`
3. Add the following lines in your file `LocalSettings.php`

```php
// WaveDrom extension
require_once "$IP/extensions/wavedrom/wavedrom.php";
```

## Use it in mediawiki

To use it in mediawiki simply add the tag `<wavedrom>`:
```html
<wavedrom>
{ signal: [
  { name: "clk",  wave: "p......" },
  { name: "bus",  wave: "x.34.5x",   data: "head body tail" },
  { name: "wire", wave: "0.1..0." },
]}
</wavedrom>
```
