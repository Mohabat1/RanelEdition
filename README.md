RanelEdition

Проект в разработке, предназначен для создания платформы для публикации контента с возможностью управления пользователями и данными. Вдохновление для этого проекта взято из других аналогичных решений с целью создания универсального и функционального продукта. На данный момент проект не завершен, и многие функции находятся в стадии разработки.
Статус проекта

 В процессе разработки.

Некоторые функции могут быть неполными или требовать доработки.

 Пожалуйста, имейте это в виду при использовании.

Установка и запуск

 Клонируйте репозиторий

Сначала клонируйте проект на свой компьютер:

git clone https://github.com/Mohabat1/RanelEdition.git
cd RanelEdition

Установка зависимостей

Убедитесь, что у вас установлен PHP и Composer. Затем установите все зависимости:

composer install

Настройка .env

Скопируйте файл .env.example в .env:

cp .env.example .env

Откройте файл .env и настройте параметры базы данных:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

Убедитесь, что база данных существует, и параметры подключения правильные.

Создание ключа приложения

Сгенерируйте ключ для приложения:

php artisan key:generate

Миграции базы данных

Если база данных еще не настроена, выполните миграции:

php artisan migrate

Запуск сервера

Для запуска локального сервера используйте команду:

 php artisan serve

 После этого вы сможете получить доступ к проекту по адресу http://127.0.0.1:8000.

Примечания

Проект еще не завершен, функциональность может быть ограничена.

 Вы можете столкнуться с багами или недоработками, так как проект в активной фазе разработки.

 Внесение изменений и Pull Requests приветствуются.
