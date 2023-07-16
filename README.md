# Oleez-Shop

Запуск проекта

Клонируем себе репозиторий:    
```git clone https://github.com/Santoryu7/Oleez-Shop.git ```   
и переходим в папку с проектом    
```cd Oleez-Shop ```


| **Запуск проекта**                                                                                                                                         |
|------------------------------------------------------------------------------------------------------------------------------------------------------------|
| **1** Подгружаем зависимости : <br>```composer install ```                                                                                                 |
| **2** Копируем настройки env :  <br> Windows ```cp .\.env.example .env  ``` <br> Linux  ```cp -r .env.example .env ```                                     |
| **3** Создаём файл с раширением .sqlite в папке database : <br>  ```cd database``` <br> ```NUL> database.sqlite```                                         |
| **4** Загружаем миграции для базы данных : <br>  ```cd..```  <br>  ```php artisan migrate```                                                               |
| **5** Создаём link для storage    <br>```php artisan storage:link``` <br> ```cd public\storage```  <br>     ```mkdir images```                             |
| **6** Наполняем базу тестовыми данными : <br>  ```cd..``` <br>  ```cd..``` <br>  ```php artisan db:seed```                                                 |
| **7** Генерируем ключ для нашего приложения :  <br> ```php artisan key:gen```                                                                              |
| **8** Запускаем сервер : <br>  ```php artisan serve```                                                                                                     |

После проект будет доступен тут: <br> ```http://127.0.0.1:8000/```
