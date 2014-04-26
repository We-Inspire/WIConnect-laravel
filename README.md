# Welcome to WIConnect for Laravel!

## Introduction
WIConnect is a product of three students, who are very interested in web-technologies. This project is an interface for Laravel to send data to a Node.JS server.

## Installation

- Laravel 4.1
	- add ``` "we-inspire/wiconnect": "4.1.*" ``` to your composer.json of your laravel project
- Laravel 4.0
	- add ``` "we-inspire/wiconnect": "4.0.*" ``` to your composer.json of your laravel project
- run ``` composer install ``` or ``` composer update ```
- add Service Provider ``` 'WeInspire\WeInspire\WeInspireServiceProvider' ``` to your conf/app.php
- copy ```vendor/we-inspire/wiconnect/assets/start.weinspire.php``` to ```/path/to/laravel/app/bootstrap/```
- copy ```vendor/we-inspire/wiconnect/assets/index.server.php``` to ```/path/to/laravel/public/```

## Usage

### send Data from Laravel to Node.js-Server:

```
use WeInspire\Helpers\;
```

``` php
WIHelpers::sendToNode($data, $functionname);
```

### receive Data from Node.js-Server:
- requires npm package [WIConnect-node](https://github.com/We-Inspire/WIConnect-node) on your node.js server.
- start php server ``` php /path/to/laravel/public/index.server.php ```

## Documentation and API
You can explore the documentation and API [here](http://www.we-inspire.net).

## Development
This project is currently under development. If you want to improve this project, please feel free to contact us, fork or send pull requests.

## Issues
Please provide us information about issues you find.

## License
WIconnect is open-source software licensed under the [MIT License](http://opensource.org/licenses/MIT).

## Used Technologies

[dnode-php](https://github.com/bergie/dnode-php)

[DNode](https://github.com/substack/dnode)

[Laravel](https://github.com/laravel/laravel)

[Laravel-Framework](https://github.com/laravel/framework/)
