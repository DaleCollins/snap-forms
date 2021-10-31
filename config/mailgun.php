<?php

return [
    'key' => env('MAILGUN_SECRET'),
    'domain' => env('MAILGUN_DOMAIN'),
    'endpoint' => env('MAILGUN_ENDPOINT'),
    'from' => env('MAIL_FROM_ADDRESS'),
    'name' => env('MAIL_FROM_NAME')

];
