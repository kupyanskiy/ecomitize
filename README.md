
# Pre-conditions

In commands below need to replace {full-path-to-project} on real path of the cloned project.

# Installation

docker run -it --rm -v {full-path-to-project}/:/app composer install

```
Loading composer repositories with package information
Installing dependencies (including require-dev) from lock file
Package operations: 27 installs, 0 updates, 0 removals
  - Installing webmozart/assert (1.3.0): Downloading (100%)
  - Installing phpdocumentor/reflection-common (1.0.1): Downloading (100%)
  - Installing phpdocumentor/type-resolver (0.4.0): Downloading (100%)
  - Installing phpdocumentor/reflection-docblock (4.3.0): Downloading (100%)
  - Installing phpunit/php-token-stream (3.0.0): Downloading (100%)
  - Installing sebastian/version (2.0.1): Downloading (100%)
  - Installing sebastian/resource-operations (1.0.0): Downloading (100%)
  - Installing sebastian/recursion-context (3.0.0): Downloading (100%)
  - Installing sebastian/object-reflector (1.1.1): Downloading (100%)
  - Installing sebastian/object-enumerator (3.0.3): Downloading (100%)
  - Installing sebastian/global-state (2.0.0): Downloading (100%)
  - Installing sebastian/exporter (3.1.0): Downloading (100%)
  - Installing sebastian/environment (3.1.0): Downloading (100%)
  - Installing sebastian/diff (3.0.1): Downloading (100%)
  - Installing sebastian/comparator (3.0.1): Downloading (100%)
  - Installing phpunit/php-timer (2.0.0): Downloading (100%)
  - Installing phpunit/php-text-template (1.2.1): Downloading (100%)
  - Installing phpunit/php-file-iterator (2.0.1): Downloading (100%)
  - Installing theseer/tokenizer (1.1.0): Downloading (100%)
  - Installing sebastian/code-unit-reverse-lookup (1.0.1): Downloading (100%)
  - Installing phpunit/php-code-coverage (6.0.7): Downloading (100%)
  - Installing doctrine/instantiator (1.1.0): Downloading (100%)
  - Installing phpspec/prophecy (1.7.6): Downloading (100%)
  - Installing phar-io/version (1.0.1): Downloading (100%)
  - Installing phar-io/manifest (1.0.1): Downloading (100%)
  - Installing myclabs/deep-copy (1.8.1): Downloading (100%)
  - Installing phpunit/phpunit (7.2.6): Downloading (100%)
sebastian/global-state suggests installing ext-uopz (*)
phpunit/php-code-coverage suggests installing ext-xdebug (^2.6.0)
phpunit/phpunit suggests installing ext-soap (*)
phpunit/phpunit suggests installing ext-xdebug (*)
phpunit/phpunit suggests installing phpunit/php-invoker (^2.0)
Generating autoload files
```

# Run unit tests

docker run -it --rm -v {full-path-to-project}/:/app epcallan/php7-testing-phpunit:7.1-phpunit7 phpunit -c /app/phpunit.xml

```
   PHPUnit 7.2.6 by Sebastian Bergmann and contributors.
   
   Runtime:       PHP 7.1.18 with Xdebug 2.6.0
   Configuration: /app/phpunit.xml
   
   .......                                                             7 / 7 (100%)
   
   Time: 1.46 seconds, Memory: 6.00MB
   
   OK (7 tests, 7 assertions)
   
   Generating code coverage report in Clover XML format ... done
   
   Generating code coverage report in HTML format ... done
   
   
   Code Coverage Report:
     2018-07-08 21:48:43
   
    Summary:
     Classes: 75.00% (6/8)
     Methods: 90.48% (19/21)
     Lines:   90.91% (50/55)
   
   \Ecomitize\Services::Ecomitize\Services\VehicleFactory
     Methods:   0.00% ( 0/ 1)   Lines:  66.67% (  6/  9)
   \Ecomitize\Services\Fuel::Ecomitize\Services\Fuel\FuelService
     Methods: 100.00% ( 1/ 1)   Lines: 100.00% (  1/  1)
   \Ecomitize\Services\Vehicle::Ecomitize\Services\Vehicle\BoatService
     Methods: 100.00% ( 3/ 3)   Lines: 100.00% (  7/  7)
   \Ecomitize\Services\Vehicle::Ecomitize\Services\Vehicle\CarService
     Methods: 100.00% ( 3/ 3)   Lines: 100.00% (  7/  7)
   \Ecomitize\Services\Vehicle::Ecomitize\Services\Vehicle\PlaneService
     Methods: 100.00% ( 4/ 4)   Lines: 100.00% ( 10/ 10)
   \Ecomitize\Services\Vehicle::Ecomitize\Services\Vehicle\TruckService
     Methods: 100.00% ( 3/ 3)   Lines: 100.00% (  9/  9)
   \Ecomitize\Services\Vehicle::Ecomitize\Services\Vehicle\VehicleAbstractService
     Methods: 100.00% ( 5/ 5)   Lines: 100.00% ( 10/ 10)
```

# Run web server

docker run -p 80:80 -v {full-path-to-project}/src/:/var/www/ -v {full-path-to-project}/vendor/:/var/vendor/ cupper/ecomitize:latest

Load web page from localhost

```
   bmv moving
   bmv music switched on
   bmv stopping
   bmv refuel gasoline
   boat moving
   boat swimming
   boat stopping
   boat refuel diesel
   helicopter took off
   helicopter flying
   helicopter landing
   helicopter stopping
   helicopter refuel kerosene
   kamaz moving
   kamaz stopping
   kamaz empty loads
   kamaz moving
   kamaz stopping
   kamaz refuel diesel
```