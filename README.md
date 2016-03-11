# Wavedrom plugin for mediawiki
Try to add wavedrom in mediawiki


## Install

To install the plugin :
1. In mediawiki directory named extensions, create a subdirectory named wavedrom
2. Copy the file wavedrom.php under the freshly cleated directory extensions/wavedrom
3. Add the following lines in your file LocalSettings.php
```php
// mw.v 1.24.x or less
require_once "$IP/extensions/wavedrom/wavedrom.php";
// mw.v 1.25.x or above
wfLoadExtension( '<wavedrom>' );
```
