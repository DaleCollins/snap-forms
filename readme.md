## Installation
Clone the repository
```shell
git clone https://github.com/DaleCollins/snap-forms.git
```
### Import dependencies
```shell
composer install && npm install
```
### Set .env values
```shell
MAILGUN_DOMAIN=<ydomain>
MAILGUN_SECRET=<api key>
MAILGUN_ENDPOINT=<endpoint>
MAIL_FROM_ADDRESS=<from email address>
MAIL_FROM_NAME=<from name>
```

### Set Database values
```shell
DB_CONNECTION=
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
### Add required tables to database
```shell
php artisan migrate
```
### Running tests
```shell
./vendor/bin/phpunit --filter SnapFormsTest
```
