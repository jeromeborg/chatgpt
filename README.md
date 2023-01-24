## Chatgpt

This is a simple integration of openai.
Go to openAi site, register
https://beta.openai.com/signup

install openai-php/laravel
composer require openai-php/laravel
php artisan vendor:publish --provider="OpenAI\Laravel\ServiceProvider"

setup env keys :
OPENAI_API_KEY=
OPENAI_ORGANIZATION=

it's done

php artisan serve
http://127.0.0.1:8000/writebot

start to chat

## Contribute

[JeromeB](https://www.jeromeb.org).
