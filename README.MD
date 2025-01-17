Base Theme:

## You can use install this theme using 
`
composer require silecust/base-theme
`
You do not have to add the template path specifically in the compiler pass, symfony automatically adds it to the paths 
use php bin/console debug:twig to confirm that

##
To install this theme and use locally use this script 
```
composer config repositories.base-theme '{"type": "path", "url": "your theme local path"}' --file composer.json
composer require silecust/base-theme

```
You can use the same script for creating your own theme too, if you have only copies created locally and not hosted on packagist
