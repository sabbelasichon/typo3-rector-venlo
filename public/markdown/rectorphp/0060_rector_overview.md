# RectorPHP

Note:
- Who has heart about RectorPHP before?


### Automatic code upgrades and refactoring
<!-- .slide: data-transition="convex" -->
![Scared](https://media.giphy.com/media/hLUiXoGKNIVb2/giphy.gif)

Note:
- Based on rules, so called rectors
- Based on Abstract Syntax Tree


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


### Custom configuration
```yaml
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


## Create your own Rector  
<!-- .slide: data-transition="convex" -->

Note:
- It is library you can built upon


## Abstract Syntax Tree

Note: 
- First time i heart about AST i thought: Yeah, so what 


