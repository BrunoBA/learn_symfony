# COMMANDS

## Init the project
Change the _APP_NAME_ to the __name for your project__.

```
composer create-project symfony/skeleton APP_NAME "^4.2"
composer create-project symfony/skeleton consultorio "^4.2"
```
## Enter on Container
```
docker exec -it php_web /bin/sh
```
## Initialize the server
```
php -S 0.0.0.0:8080 -t public
```