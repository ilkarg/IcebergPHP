# IcebergPHP
IcebergPHP - это современный фреймворк для веб-приложений. IcebergPHP выделяется на фоне других фреймворков своей компактностью, простотой установки, а так же тем, что сделан в России.
## Требования
- PHP >= 7
- Подключенные зависимости из [php.ini](ini/php.ini)
## Установка
1) Скачиваем PHP, распаковываем в удобное место и добавляем путь в переменные системы, например: c:\php
2) Клонируем проект
3) Проверяем, чтобы в index.php были указаны правильные данные для подключения к бд
4) Для ОС Windows в папке проекта из папки ini копируем файл в корневую (главную) папку php, например: c:\php
5) Перезапускаем ```terminal``` или ```cmd```, если до этого был открыт
6) Открываем ```terminal``` или ```cmd``` и запускаем ```start.bat``` или ```start.sh```
7) После запуска сайт будет доступен на ip адресах: 127.0.0.1:8000, 192.168...:8000 и другие, кроме localhost:8000

1) Скачать или склонировать репозиторий в удобное место
2) Написать код
3) Запустить файл ```start.bat``` или ```start.sh```, зависимо от системы
4) Наслаждаться результатом
## Документация
- [PHPRouter](docs/PHPRouter.md)
- [PHPExceptionHandler](docs/PHPExceptionHandler.md)
- [PHPOrm](docs/PHPOrm.md)
- [PHPSystem](docs/PHPSystem.md)
- [PHPTemplater](docs/PHPTemplater.md)
- [PHPView](docs/PHPView.md)
- [PHPMailer](docs/PHPMailer.md)
- [PHPHash](docs/PHPHash.md)
- [PHPRequester](docs/PHPRequester.md)
## Структура
```
app/                  Системные библиотеки   
controllers/          Контроллеры
docs/                 Документация
models/               Модели
pages/                Страницы
routes/               Маршруты
ini/                  Файл php.ini
```
## Использование helper
**1. Создание контроллера**
Windows:
```sh
helper.exe create-controller TestController
```
Linux:
```sh
./helper create-controller TestController
```

**Описание:** Создает контроллер TestController в директории controllers. Если директория controllers отсутствует, то создает ее

<br>

**2. Создание модели**
Windows:
```sh
helper.exe create-model User
```
Linux:
```sh
./helper create-model User
```

**Описание:** Создает модель User в директории models. Если директория models отсутствует, то создает ее

Репозиторий helper - https://github.com/mrProger/Helper

## Участие в разработке
Здесь вы можете предложить свою идею для будущего обновления - [Предложить](https://github.com/mrProger/IcebergPHP/issues/1)

# Проекты разработанные на IcebergPHP
1. [Новостной портал Senstation](https://github.com/mrProger/NewsSite) (Дипломный проект)
2. [Сайт автосалона Mercedes](https://github.com/mrProger/CarsShop) (Дипломный проект)
3. [Сайт Строительно-монтажного управления Смурфик](https://github.com/mrProger/Smurfik2.0) (Дипломный проект)
