# <span class="highlight">Rector</span>PHP
### Automatic code upgrades and refactoring <!-- .element: class="fragment" -->

Note:
- Who has heart about RectorPHP before?


<!-- .slide: data-transition="zoom-in" -->
![Fear](https://media.giphy.com/media/hLUiXoGKNIVb2/giphy.gif)

Note:
- Often the reaction is FEAR


<!-- .slide: data-transition="zoom-in" -->
![Wow](https://media.giphy.com/media/ccosx2jCejdew/source.gif)

Note:
- Or something like WOW


### Installation
<!-- .slide: data-transition="convex" -->
```php
composer require rector/rector --dev
```

Note:
- Command line tool


### RectorPHP ships with a bunch of Rectors

Note:
- Single rectors
- Predefined Sets (CodeQuality, DeadCode etc.)
- 450 Rectors exists for the time being


Code before
```php
final class Execute
{
    public function execute()
    {
        return 'foo';
        
        return 'bar';
    }
}
```


### Processing
```bash
vendor/bin/rector process src --set=dead-code --dry-run
```


Code after
```php
final class Execute
{
    public function execute()
    {
        return 'foo';
    }
}
```


### Custom configuration
```yaml
# File called rector.yaml
parameters:
  auto_import_names: true
  paths:
      - 'src'
  php_version_features: '7.4'
services:
    Rector\Php74\Rector\Function_\ReservedFnFunctionRector: 
```


### Processing custom configuration
```bash
vendor/bin/rector process --dry-run
```


## Create your own Rector(s) 
<!-- .slide: data-transition="convex" -->

Note:
- It is library you can built upon


## How does it work?
* Parses PHP code into an abstract syntax tree (AST)
* Runs  a set of upgrade rules
* Saves all changes back to a PHP file


## <span class="highlight">A</span>bstract <span class="highlight">S</span>yntax <span class="highlight">T</span>ree

Note:
- Rector is heavily based on the Abstract Syntax Tree and PHPStan (itself based on the AST)  
- First time i heart about AST when i have a presentation about PHP7 i thought: Yeah, so what... but it changed PHP, really
- AST is not unique to PHP