# Laravel_auth
Чтобы развернуть проект, нужно выполнить следующие команды <br />
git clone https://github.com/AlexanderRadko-php/Laravel_auth.git <br />
cd Laravel_auth - переходим в проект <br />
composer install или composer update (если composer уже установлен) - создает папку vendor <br />
Скопировать .env.example и создать в корне проекта файл .env, указать в этом файле название базы данных, порт, логин и пароль для подключения <br/>
php artisan migrate - создает базу данных с таблицами  <br />
php artisan serve - запускает локальный сервер с проектом <br />

Форма авторизации и регистрации в системе с хэшированием пароля перед записью в базу данных <br />
