## Stationeers Utility Web Application

A simple web application to provide administrative utilities for Stationeers world management.

Right now, it provides a basic world check function and a statistics function. Will be expanded later to integrate with
dedicated servers via rcon.

### Basic setup:
- Make a copy of .env.example to .env
- Configure database and email connection
- Run composer install
```bash
php composer.phar install
```
- Run database migrations
```bash
php artisan migrate
```
- Install required NPM packages and compile css/javascript
```bash
npm ci && npm run prod
```
- If necessary, update your server config to increase the upload limit size to an appropriate value - on large worlds,
you will want to set this to around 100 MiB
