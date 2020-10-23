Project Chief - сайт о шеф поваре Froylan Rincón в котором будут:
- описание его лучших блюд
- фотогалерея
- контакты
- авторизация
- отзывы
- запись на мастер классы от шеф повара
С использованием базы данных, mySQL, phpAdmin, JS, PHP, AJAX.


Структура проэкта
- /configs
   - db.php - подключение к базе данных
 - /css
   -  login.css - стили для страничек login.php и registartion.php
   -  style.css - общие стили
   -  styleS - стили для страниц masterclas.php  и masterclasses.php
 - /img - фото, картинки , иконки
 - /masterclas - папка в которой находиться функционал для мастеркласов
   - /img - фото мастерклассов
   add_master_into_base.php - добавляем мастер класс в базу
   add_masterclass.php - блок с инпутами добавления мастер классов
   add_order.php - добавить заказ в базу
   masterclas.php - страница отдельного мастер класса
   masterclasses.php - страница всех мастер классов
   ordered_mc.php - заказанные мастер классы
   
- /parts_site
 - footer.php - подвал сайта
 - navbar.php - общее меню и логотип в шапке сайта 
- /script
 - animation.js - смена фото
 - script_feedback.js - ajax при добавлении отзыва
- about.php - страница  об мастер Шефе
- add_review.php - функционал добавления отзывов
- exit.php - Выход аторизированого пользователя со збросом куки
- feedback.php - функционал для отображения и добавления отзывов
- index.php - главная страница сайта
- login.php - страница авторизации на сайта
- registartion.php - страница регистрации на сайт
