# Shorten

Provides additional truncation functions in PHP.

```php
<?php
require_once('Shorten.php');
$shorten = new Shorten;
$shorten->truncateMarkup('<a href="https://example.com/">Go to example site</a>', 10);
?>
```

Output:

```html
<a href="https://example.com/">Go to exam</a>…
```

## Functions

	truncateMarkup($markup, $length = 400, $appendix = '…', $appendixInside = FALSE, $wordsafe = FALSE)

 * String `$markup`: Text containing markup
 * Integer `$length`: Maximum length of truncated text (default: 400)
 * String `$appendix`: Text added after truncated text (default: '…')
 * Boolean `$appendixInside`: Add appendix to last content in tags, increases $length by 1 (default: false)
 * Boolean `$wordsafe`: Wordsafe truncation (default: false)
 * String `$delimiter`: Delimiter for wordsafe truncation (default: ' ')

## License

MIT © [Marc Görtz](https://marcgoertz.de/)
