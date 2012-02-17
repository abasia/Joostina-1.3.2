<?php
/**
 * Украинский языковой пакет для Joostina CMS 1.3.0.4
 * Основан на коде оригинального языкового пакета от Joostina team
 * @package Joostina
 * @author Hnat Kubov
 * @authoremail hnatt88@gmail.com
 * @version 1.3.0.4-0.1
 * @copyright © 2011 Hnat Kubov
 * @license http://www.gnu.org/licenses/gpl-2.0.htm GNU/GPL
 */

// запрет прямого доступа
defined('_VALID_MOS') or die();

global $mosConfig_form_date,$mosConfig_form_date_full;

/**
 * Измените строчку ниже, для изменения вывода даты на сайте
 * Например: DEFINE("_DATE_FORMAT_LC"," %d %B %Y г. %H:%M");
 * Используйте формат PHP-функции strftime
 */
DEFINE('_DATE_FORMAT_LC',$mosConfig_form_date); //Используйте формат PHP-функции strftime
DEFINE('_DATE_FORMAT_LC2',$mosConfig_form_date_full); // Полный формат времени
DEFINE('_DATE_FORMAT','Сьогодні: d.m.Y р.'); //Используйте формат PHP-функции DATE

DEFINE('_LANGUAGE','uk');

DEFINE('_JAN','Січень');
DEFINE('_FEB','Лютий');
DEFINE('_MAR','Березень');
DEFINE('_APR','Квітень');
DEFINE('_MAY','Травень');
DEFINE('_JUN','Червень');
DEFINE('_JUL','Липень');
DEFINE('_AUG','Серпень');
DEFINE('_SEP','Вересень');
DEFINE('_OCT','Жовтень');
DEFINE('_NOV','Листопад');
DEFINE('_DEC','Грудень');

/**
 * даты со склонением
 */
DEFINE('_JAN_2','Січня');
DEFINE('_FEB_2','Лютого');
DEFINE('_MAR_2','Березня');
DEFINE('_APR_2','Квітня');
DEFINE('_MAY_2','Травня');
DEFINE('_JUN_2','Червня');
DEFINE('_JUL_2','Липня');
DEFINE('_AUG_2','Серпня');
DEFINE('_SEP_2','Вересня');
DEFINE('_OCT_2','Жовтня');
DEFINE('_NOV_2','Листопада');
DEFINE('_DEC_2','Грудня');


/**
 * Ошибки и предупреждения
 */
DEFINE('_404','Запитану сторінку не знайдено');
DEFINE('_404_RTS','Повернутись на сайт');
DEFINE('_IFRAMES','Ця сторінка буде відображена некоректно. Ваш браузер не підтримує вкладені фрейми (IFrame)');
DEFINE('_JAVASCRIPT','Для виконання даної операції у вашому браузері повинна бути включена підтримка Java-script.');
DEFINE('_DO_LOGIN','Ви повинні авторизуватися або пройти реєстрацію.');
DEFINE('_ERROR_OCCURED','Виникла помилка');
DEFINE('_MOS_WARNING','Увага!');
DEFINE('_NOT_AUTH','Вибачте, але для перегляду цієї сторінки у Вас недостатньо прав.');
DEFINE('_NOT_EXIST','Вибачте, сторінка не знайдена. <br/> Будь ласка, поверніться на головну сторінку сайту.');
DEFINE('_NOT_EXISTS','Відсутні');
DEFINE('_SYSERR1','Немає підтримки MySQL');
DEFINE('_SYSERR2','Неможливо підключитися до сервера бази даних');
DEFINE('_SYSERR3','Неможливо підключитися до бази даних');
DEFINE('_TEMPLATE_WARN','<font color=\"red\"><strong>Файл шаблону не знайдений: </strong></font><br/>Зайдіть в Панель керування сайтом і виберіть новий шаблон');

/** pageNavigation - front*/
DEFINE('_PN_LT','&larr;');
DEFINE('_PN_RT','&rarr;');
DEFINE('_PN_PAGE','Сторінка');
DEFINE('_PN_OF','із');
DEFINE('_PN_START','Перша');
DEFINE('_PN_PREVIOUS','Попередня');
DEFINE('_PN_NEXT','Наступна');
DEFINE('_PN_END','Остання');
DEFINE('_PN_DISPLAY_NR','Показувати');
DEFINE('_PN_RESULTS','Результати');
/** pageNavigation - admin*/
DEFINE('_NAV_SHOW','Показано');
DEFINE('_NAV_SHOW_FROM','з');
DEFINE('_NO_ITEMS','Записи не знайдені');
DEFINE('_NAV_ORDER_UP','Перемістити вище');
DEFINE('_NAV_ORDER_DOWN','Перемістити нижче');
DEFINE('_PN_ALL','-Всі-');
DEFINE('_PN_MOVE_TOP','Пересунути вище');
DEFINE('_PN_MOVE_DOWN','Пересунути нижче');

DEFINE('_NEXT','Наст.');
DEFINE('_NEXT_ARROW',"&nbsp;&raquo;");
DEFINE('_PREV','Попер.');
DEFINE('_PREV_ARROW',"&laquo;&nbsp;");


/**
 * Текст общего назначения
 */
DEFINE('_ACCESS','Доступ'); 
DEFINE('_ACCESS_RIGHTS','Права доступу');
DEFINE('_ADD','Додати');
DEFINE('_ADVANCED','Додатково');
DEFINE('_ALL','Все');
DEFINE('_ALL_CONTENT','Увесь вміст');
DEFINE('_ALLOWED','Дозволено');
DEFINE('_ALWAYS','Завжди');
DEFINE('_APPLY','Застосувати');
DEFINE('_ARCHIVE','Архів');
DEFINE('_ASSIGN','Назначити');
DEFINE('_ASSIGNED_TO','Назначено');
DEFINE('_AUTHOR',' Автор');
DEFINE('_AUTHOR_BY',' Автор');
DEFINE('_AUTHORS','Автори');
DEFINE('_BACK','Назад');
DEFINE('_BOTTOM','Знизу');
DEFINE('_BUTTON','Кнопка');
DEFINE('_BUTTON_LOGIN','Увійти');
DEFINE('_BUTTON_LOGOUT','Вийти');
DEFINE('_CANCEL','Скасувати');
DEFINE('_CAPTION','Заголовок');
DEFINE('_CATEGORIES','Категорії');
DEFINE('_CATEGORY','Категорія');
DEFINE('_CENTER','По центру');
DEFINE('_CHANGE','Змінити');
DEFINE('_CHECKED_OUT','Заблоковано');
DEFINE('_CHOOSE_IMAGE','Виберіть зображення');
DEFINE('_CLOSE','Закрити');
DEFINE('_COMPONENT','Компонент');  
DEFINE('_COMPONENTS','Компоненти');
DEFINE('_CONTACT_NAME','Ім’я: ');
DEFINE('_CONTENT','Вміст');
DEFINE('_CONTINUE','Продовжити');
DEFINE('_COPY','Копіювати');
DEFINE('_CREATE_ACCOUNT','Реєстрація');
DEFINE('_CREATE','Створити');
DEFINE('_CREATED','Дата створення:');
DEFINE('_CREATION','Створення');
DEFINE('_DATABASE','База даних');
DEFINE('_DATE','Дата');
DEFINE('_DEFAULT','По замовчанню');
DEFINE('_DELETE','Видалити');
DEFINE('_DELETING','Видалення');
DEFINE('_DESCRIPTION','Опис');
DEFINE('_DETAILS','Деталі');
DEFINE('_EDIT','Редагувати');
DEFINE('_EDIT_CATEGORY','Редагування категорії');
DEFINE('_EDITING','Редагування');
DEFINE('_EMAIL','E-mail ');
DEFINE('_END','Закінчення');
DEFINE('_EXTENSIONS','Розширення');
DEFINE('_FILE','Файл');   
DEFINE('_FILTER','Фільтр');
DEFINE('_FIRST','Перший');
DEFINE('_FOLDER','Каталог');
DEFINE('_GENERAL','Спільне');
DEFINE('_GROUP','Група');
DEFINE('_HELP','Допомога');
DEFINE('_HI','Привіт, ');
DEFINE('_HIDE','Приховати');
DEFINE('_HITS','Переглядів');
DEFINE('_HITS_NOT_FOUND','переглядів не було');
DEFINE('_ICON','Значок');
DEFINE('_ICON_SEP','|');
DEFINE('_IMAGE','Зображення');
DEFINE('_IMAGES','Зображення');
DEFINE('_INFO','Інформація');
DEFINE('_INPROGRESS','Виконується...');
DEFINE('_INSTALL','Встановити');
DEFINE('_INSTALLATION','Встановлення');
DEFINE('_LAST','Останній');
DEFINE('_LEFT','Зліва');
DEFINE('_MAIN_PAGE','Головна');
DEFINE('_MAMBOT','Мамбот');
DEFINE('_MAMBOTS','Мамботи');
DEFINE('_METADATA','Метадані');
DEFINE('_MODULE','Модуль');
DEFINE('_MODULES','Модулі');
DEFINE('_MORE','Детальніше');
DEFINE('_MOVE','Перенести');
DEFINE('_NAME','Назва:');  
DEFINE('_NEVER','Ніколи');
DEFINE('_NEW','Створити');
DEFINE('_NO','Ні');
DEFINE('_NO_ACCOUNT','Ще не зареєстровані?');
DEFINE('_NONE','Немає');
DEFINE('_NOT_CHOOSED','Не вибрано');
DEFINE('_UNPUBLISHED','Не опубліковано');
DEFINE('_OBJECT_MUST_HAVE_TITLE','Цей об’єкт повинен мати заголовок');
DEFINE('_ON_SITE','На сайті');
DEFINE('_OPTIONAL','Не обов’язково');
DEFINE('_ORDER_BY_DATE_CR','Даті створення');
DEFINE('_ORDER_BY_DATE_MOD','Даті модифікації');
DEFINE('_ORDER_BY_HEADERS','Заголовках');
DEFINE('_ORDER_BY_HITS','Переглядах');
DEFINE('_ORDER_BY_ID','Ідентифікаторах ID');
DEFINE('_ORDER_BY_NAME','Внутрішньому порядку');
DEFINE('_ORDER_DROPDOWN','Порядок');  
DEFINE('_ORDERING','Сортування');
DEFINE('_PARAMETERS','Параметри');
DEFINE('_PARENT','Батьківський');
DEFINE('_PASSWORD','Пароль');
DEFINE('_PLEASE_CHOOSE_CATEGORY','Ви повинні вибрати категорію');
DEFINE('_PLEASE_CHOOSE_SECTION','Ви повинні вибрати розділ');
DEFINE('_PLEASE_WAIT','Зачекайте...');
DEFINE('_PLUGINS','Плагіни');
DEFINE('_POSITION','Розташування');
DEFINE('_PREVIEW','Перегляд');
DEFINE('_PRINT','Друк');
DEFINE('_PRINT_PAGE_LINK','Адреса сторінки на сайті');
DEFINE('_PUBLISH_ON_FRONTPAGE','Опублікувати на сайті');
DEFINE('_PUBLISHED','Опубліковано');
DEFINE('_PUBLISHING','Публікація');
DEFINE('_READ_MORE','Детальніше');
DEFINE('_READ_MORE_REGISTER','Тільки для зареєстрованих користувачів...');
DEFINE('_REMOVE','Стерти');
DEFINE('_RESET','Обнулити');
DEFINE('_REQUIRED','Обов’язково');
DEFINE('_RIGHT','Справа');
DEFINE('_SAVE','Зберегти');
DEFINE('_SAVE_AND_ADD','Зберегти і додати');
DEFINE('_SEARCH','Пошук');
DEFINE('_SECTION','Розділ');
DEFINE('_SECTIONS','Розділи');
DEFINE('_SELECT','Вибрати');
DEFINE('_SEND_BUTTON','Надіслати');
DEFINE('_SHOW','Показати');
DEFINE('_SITE','Сайт'); 
DEFINE('_SORT_ASC','По зростанню');
DEFINE('_SORT_DESC','По спаданню');
DEFINE('_SORT_NONE','Без сортування');
DEFINE('_SORT_ORDER','Порядок сортування');
DEFINE('_START','Початок');
DEFINE('_SUBFOLDER','Підкаталог');
DEFINE('_SUBJECT','Тема'); 
DEFINE('_SUBMIT_BUTTON','Надіслати');
DEFINE('_TAGS','Теги:');
DEFINE('_TAGS_NOT_DEFINED','Теги не вказані');
DEFINE('_TASK_UPLOAD','Завантажити');
DEFINE('_TEMPLATES','Шаблони');
DEFINE('_TEMPLATE','Шаблон'); 
DEFINE('_TIMES','раз');
DEFINE('_TO_BOTTOM','Донизу');
DEFINE('_TO_TOP','Вгору');
DEFINE('_TOP','Вгорі');
DEFINE('_TYPE','Тип');
DEFINE('_VERSION','Версія:');
DEFINE('_VIEW_COUNT','К-сть переглядів');
DEFINE('_USERNAME','Ім’я користувача');
DEFINE('_UNKNOWN','Невідомо');
DEFINE('_USED_ON','Використовується');
DEFINE('_USER','Користувач');
DEFINE('_USERS','Користувачі');
DEFINE('_WARNCAT','Будь ласка, оберіть категорію');
DEFINE('_WEBLINK','Посилання');
DEFINE('_LINKS','Посилання');
DEFINE('_WITHOUT_END','Без закінчення');
DEFINE('_WRITEABLE','Доступне для запису');
DEFINE('_WRITTEN_BY',' Автор');
DEFINE('_YES','Так');
DEFINE('_MALE','Чол');
DEFINE('_FEMALE','Жін');
DEFINE('_GENDER_NONE','Не вказано');
DEFINE('_CACHE','Кеш');
DEFINE('_MESSAGE_ERROR_404','Запитана сторінка не знайдена');
DEFINE('_MESSAGE_ERROR_403','Доступ до даної сторінки заборонено');
DEFINE('_REG_CAPTCHA','Введіть текст із зображення:*');
DEFINE('_REG_CAPTCHA_VAL','Необхідно ввести код з зображення.');
DEFINE('_REG_CAPTCHA_REF','Натисніть, щоб оновити зображення.');
DEFINE('_YOU_NEED_TO_AUTH','Необхідно авторизуватись');
DEFINE('_ADMIN_SESSION_ENDED','Сесія адміністратора закінчилась');
DEFINE('_YOU_NEED_TO_AUTH_AND_FIX_PHP_INI','Вам необхідно авторизуватись. Якщо увімкнений параметр PHP session.auto_start або вимкнений параметр session.use_cookies, то спершу ви маєте їх виправити перед тим, як зможете увійти');
DEFINE('_WRONG_USER_SESSION','Невірна сесія');
DEFINE('_ADM_MENUS_TARGET_CUR_WINDOW','поточному вікні з панеллю навігації');
DEFINE('_ADM_MENUS_TARGET_NEW_WINDOW_WITH_PANEL','новому вікні з панеллю навігації');
DEFINE('_ADM_MENUS_TARGET_NEW_WINDOW_WITHOUT_PANEL','новому вікні без панелі навігації');
DEFINE('_WITH_UNASSIGNED','Із вільними');
DEFINE('_NO_USER','Немає користувача');
DEFINE('_CREATE_CATEGORIES_FIRST','Спершу необхідно створити категорії');
DEFINE('_PUBLISHED_VUT_NOT_ACTIVE','Опублікований, але <u>не активний</u>');
DEFINE('_PUBLISHED_AND_ACTIVE','Опублікований і <u>активний</u>');
DEFINE('_PUBLISHED_BUT_DATE_EXPIRED','Опублікований, але <u>збіг строк публікації</u>');
DEFINE('_LINK_NAME','Назва посилання');
DEFINE('_MENU_EXPIRED','Застаріло');
DEFINE('_MENU_ITEM_NAME','Назва пункту');
DEFINE('_SEL_SECTION','- Виберіть розділ -');
DEFINE('_SEL_CATEGORY','- Виберіть категорію -');
DEFINE('_SEL_AUTHOR','- Виберіть автора -');
DEFINE('_SEL_POSITION','- Виберіть позицію -');
DEFINE('_SEL_TYPE','- Виберіть тип -');
DEFINE('_DEFAULT_IMAGE','- Зображення стандартно -');
DEFINE('_DONT_USE_IMAGE','- Не використовувати зображення -');
DEFINE('_ET_MENU','- Виберіть меню -');
DEFINE('_HANDLER','Оброблювач для даного типу відсутній');
DEFINE('_NO_PARAMS','Об’єкт не містить параметрів, що настроюються');
DEFINE('_INCLUDED_FILES','Завантажено файлів');
DEFINE('_ERROR_DELETING_CACHE','Помилка при вилученні кеша');
DEFINE('_ERROR_READING_CACHE_DIR','Помилка читання директорії кешу');
DEFINE('_ERROR_READING_CACHE_FILE','Помилка читання файлу кешу');
DEFINE('_ERROR_WRITING_CACHE_FILE','Помилка запису файлу кешу');
DEFINE('_SCRIPT_MEMORY_USING','Використано пам’яті');


/**
 * Administrator area
 */
DEFINE('_ADMIN_LOGIN_COUNTER','Кількість невдалих спроб авторизації');
DEFINE('_ADMIN_LOGIN_COUNTER2','Кількість невдалих спроб, після яких буде показана captcha. -1 - Не показувати. 0 - завжди показувати.');
DEFINE('_ADMIN_REDIRECT_PAGE','Вказана');
DEFINE('_ADMIN_SECURE_CODE','Код безпеки для доступу до панелі керування');
DEFINE('_ADMIN_SECURE_CODE_HELP','При включенні коду безпеки вхід в панель керування здійснюється за адресою http://yoursite.ru/administrator/?код_безпеки');
DEFINE('_ADMIN_SECURE_CODE_OPTION','Робити редірект на головну сторінку сайту або на сторінку, задану адміністратором');
DEFINE('_ADMIN_SECURE_CODE_REDIRECT_OPTIONS','Режим редіректу');
DEFINE('_ADMIN_SECURE_CODE_REDIRECT_PATH','Користувацька сторінка для редіректу, адреса пишеться від кореня сайту');
DEFINE('_CACHE_DIR','Каталог кешу');
DEFINE('_CACHE_SYSTEM','Тип кешуючої системи');
DEFINE('_CONFIG_SAVED','Конфігурація успішно збережена');
DEFINE('_CHANGE_USER_DATA','Змінити дані користувача');
DEFINE('_CHOOSE_MENU_PLEASE','Будь ласка, виберіть меню');
DEFINE('_CHOOSE_MENUTYPE_PLEASE','Будь ласка, виберіть тип меню');
DEFINE('_CMN_ARCHIVE','Додати до архіву');
DEFINE('_CMN_UNARCHIVE','Витягти з архіву');
DEFINE('_CONTROL_PANEL','Панель керування');
DEFINE('_CREATE_MENU_ITEM','Створити пункт меню');
DEFINE('_ENABLE_ADMIN_SECURE_CODE','Дозволити код безпеки для доступу до панелі керування');
DEFINE('_ENTER_MENUITEM_NAME','Будь ласка, введіть назву для цього пункту меню');
DEFINE('_ERROR_REPORTING','Відображення помилок');
DEFINE('_EXISTED_MENU_ITEMS','Існуючі посилання меню');
DEFINE('_IMAGES_DIRS','Каталоги зображень (MOSImage)');
DEFINE('_IMAGE_POSTITION','Розташування зображення');
DEFINE('_IN_TRASH','У кошику');
DEFINE('_INSTALL_3PD_WARN','Попередження: Установка сторонніх розширень може вплинути на безпеку вашого сайту. При оновленні Joostina! сторонні розширення не оновлюються. <br /> Для отримання додаткової інформації про заходи захисту свого сайту і сервера, будь ласка, відвідайте <a href="http://forum.joomla.org/index.php/board,267.0.html" target="_blank" style="color: blue; text-decoration: underline;"> Форум безпеки Joomla! </ a>. ');
DEFINE('_INSTALL_WARN','З міркувань безпеки, будь ласка, видаліть каталог <strong>installation</strong> з вашого сервера і обновіть сторінку.');
DEFINE('_LOGIN_BLOCKED','Вибачте, ваш обліковий запис заблокований. За більш детальною інформацією зверніться до адміністратора сайту.');
DEFINE('_LOGIN_INCOMPLETE','Будь ласка, заповніть поля Ім’я користувача і Пароль.');
DEFINE('_LOGIN_INCORRECT','Неправильне ім’я користувача (логін) або пароль. Спробуйте ще раз.');
DEFINE('_LOGIN_NOADMINS','Вибачте, ви не можете увійти на сайт. Адміністратори на сайті не зареєстровані.');
DEFINE('_MAINMENU_BOX','Головне меню');
DEFINE('_MAKE_UNWRITEABLE_AFTER_SAVING','Зробити недоступним для запису після збереження');
DEFINE('_MENU','Меню');
DEFINE('_MENU_ITEMS','Пункти меню');
DEFINE('_MENU_LINK','Зв’язок з меню');
DEFINE('_MENU_NAME','Назва пункту меню');
DEFINE('_MENUITEM','Пункт меню');
DEFINE('_NEW_ITEM_FIRST','За замовчуванням нові об’єкти будуть додані в початок списку. Порядок розташування може бути змінений тільки після збереження об’єкта.');
DEFINE('_NEW_ITEM_LAST','За замовчуванням нові об’єкти будуть додані в кінець списку. Порядок розташування може бути змінений тільки після збереження об’єкта.');
DEFINE('_NEWSFLASH_BOX','Короткі новини!');
DEFINE('_E_STATE','Стан');
DEFINE('_PARENT_MENU_ITEM','Батьківський пункт');
DEFINE('_STATIC_CONTENT','Статичний матеріал');
DEFINE('_TRASH','Кошик');
DEFINE('_UMENU_TITLE','Меню користувача');
DEFINE('_UNWRITEABLE','Недоступний для запису');
DEFINE('_USER_GROUP_ALL','Загальний');
DEFINE('_USER_GROUP_REGISTERED','Учасники');
DEFINE('_USER_GROUP_SPECIAL','Спеціальний');


/**
 * Menubar.html.old.php + menubar.html.php
 */
DEFINE('_CMN_EDIT_CSS','Редагувати CSS');
DEFINE('_CMN_EDIT_HTML','Редагувати HTML');
DEFINE('_EDIT_CSS','Ред. CSS');
DEFINE('_EDIT_HTML','Ред. HTML');
DEFINE('_FROM_ARCHIVE','З архіву');
DEFINE('_PLEASE_CHOOSE_ELEMENT','Будь ласка, виберіть елемент.');
DEFINE('_PLEASE_CHOOSE_ELEMENT_FOR_PUBLICATION','Будь ласка, виберіть зі списку об’єкти для їх публікації на сайті');
DEFINE('_PLEASE_CHOOSE_ELEMENT_TO_ARCHIVE','Будь ласка, виберіть зі списку об’єкти для їх архівації');
DEFINE('_PLEASE_CHOOSE_ELEMENT_TO_ASSIGN','Будь ласка, для призначення об’єкта виберіть його');
DEFINE('_PLEASE_CHOOSE_ELEMENT_TO_DELETE','Виберіть об’єкт зі списку для видалення');
DEFINE('_PLEASE_CHOOSE_ELEMENT_TO_EDIT','Виберіть об’єкт зі списку для редагування');
DEFINE('_PLEASE_CHOOSE_ELEMENT_TO_MAKE_DEFAULT','Будь ласка, виберіть об’єкт, щоб призначити його стандартним');
DEFINE('_PLEASE_CHOOSE_ELEMENT_TO_TRASH','Виберіть об’єкт зі списку для переміщення його в кошик');
DEFINE('_PLEASE_CHOOSE_ELEMENT_TO_UNARCHIVE','Виберіть об’єкт для відновлення його з архіву');
DEFINE('_PLEASE_CHOOSE_ELEMENT_TO_UNPUBLISH','Для скасування публікації об’єкта, спочатку виберіть його');
DEFINE('_REALLY_WANT_TO_DELETE_OBJECTS','Ви дійсно хочете видалити обрані об’єкти?');
DEFINE('_REMOVE_TO_TRASH','У кошик');
DEFINE('_TO_ARCHIVE','До архіву');

/**
 * Administrator modules includes admin.php
 */
DEFINE('_CACHE_DIR_IS_NOT_WRITEABLE','Будь ласка, зробіть каталог кешу доступним для запису');
DEFINE('_CACHE_DIR_IS_NOT_WRITEABLE2','Каталог кешу недоступний для запису');
DEFINE('_CLEANING_ADMIN_MENU_CACHE','Помилка очищення кешу меню панелі керування');
DEFINE('_MENU_CACHE_CLEANED','Кеш меню панелі керування очищений');
DEFINE('_NO_MENU_ADMIN_CACHE','Кеш меню панелі керування не виявлено. Перевірте каталог кешу.');
DEFINE('_PHP_MAGIC_QUOTES_ON_OFF','PHP magic_quotes_gpc встановлено в `OFF` замість `ON`');
DEFINE('_PHP_REGISTER_GLOBALS_ON_OFF','PHP register_globals встановлено в `ON` замість `OFF`');
DEFINE('_PHP_SETTINGS_WARNING','Наступні налаштування PHP не є оптимальними для <strong>БЕЗПЕКИ</strong> і їх рекомендується змінити');


/**
 * Administrator modules popups uploadimage.php
 */
DEFINE('_BAD_UPLOAD_FILE_NAME','Імена файлів повинні складатися із символів алфавіту і не повинні містити пробілів');
DEFINE('_CHOOSE_IMAGE_FOR_UPLOAD','Будь ласка, виберіть зображення для завантаження');
DEFINE('_FILE_MUST_HAVE_THIS_EXTENSION','Файл повинен мати розширення');
DEFINE('_FILE_UPLOAD_SUCCESS','Завантаження файлу успішно завершено');
DEFINE('_FILE_UPLOAD_UNSUCCESS','Завантаження файлу невдале');
DEFINE('_IMAGE_ALREADY_EXISST','Зображення вже існує');

/**
 * Administrator index.php index2.php index3.php
 */
DEFINE('_ACCESS_DENIED','У доступі відмовлено');
DEFINE('_BAD_USERNAME_OR_PASSWORDWORD','Невірні ім’я користувача, пароль, або рівень доступу. Будь ласка, повторіть знову');
DEFINE('_BAD_USERNAME_OR_PASSWORDWORD2','Ім’я або пароль не вірні. Повторіть введення.');// not equal to _BAD_USERNAME_OR_PASSWORDWORD!
DEFINE('_CHECKIN_OJECT','Розблокувати');
DEFINE('_PLEASE_ENTER_PASSWORDWORD','Будь ласка, введіть пароль');
DEFINE('_TEMPLATE_NOT_FOUND','Шаблон не виявлений');

/* Users */
DEFINE('_USERS_USERLIST','Список користувачів');
DEFINE('_REGISTERED_USERS_COUNT','Зареєстровано');

/* Section, category */
DEFINE('_MENU_LINK_AVAILABLE_AFTER_SAVE','Зв’язок з меню буде доступний після збереження');
DEFINE('_CATEGORIES_BLOG','Блог категорії');
DEFINE('_CATEGORIES_ARHIVE','Архів категорії');
DEFINE('_CATEGORIES_TABLE','Таблиця вмісту категорії');
DEFINE('_TEMPLATE_ITEM_SHOW','Сторінка перегляду запису');
DEFINE('_TEMPLATE_ITEM_EDIT','Сторінка додавання / редагування запису');

DEFINE('_CONTACT','Контакт');

DEFINE('_ALIAS','Псевдонім');
DEFINE('_POLLS','Опитування');

/* Content, users, avatars */
DEFINE('_C_USERS_AVATARS_SHOISE','Змінити');
DEFINE('_UPLOADING','Завантаження');

/* captha */
DEFINE('_BAD_CAPTCHA_STRING','Введений невірний код перевірки');
DEFINE('_PRESS_HERE_TO_RELOAD_CAPTCHA','Натисніть щоб оновити зображення');
DEFINE('_SHOW_CAPTCHA','Оновити зображення');
DEFINE('_PLEASE_ENTER_CAPTCHA','Введіть код перевірки з картинки вище');
DEFINE('_IN_NEW_WINDOW','Відкрити у новому вікні');
DEFINE('_NO_CAPTCHA_CODE','Не введено код перевірки');
DEFINE('_USER_BLOKED','Користувач заблокований');

DEFINE('_PREVIEW_SITE','на сайт');

DEFINE('_JWMM_FILESIZE','Розмір');
DEFINE('_JWMM_BYTES','байт');
DEFINE('_JWMM_KBYTES','кб');
DEFINE('_JWMM_MBYTES','мб');
DEFINE('_JWMM_FILE_DELETED','Файл успішно вилучено');

DEFINE('_CONTENT_PREVIEW','Перегляд вмісту');
DEFINE('_MAX_SIZE','Максимальний розмір');
DEFINE('_FILE_UPLOAD','Завантаження файлу');

DEFINE('_USER_BLOCK','Блок');

DEFINE('_NEW_ORDER_SAVED','Новий порядок збережений');
DEFINE('_SAVE_ORDER','Зберегти порядок');
DEFINE('_CHANGE_CONTENT','Змінити вміст');
DEFINE('_CHANGE_CATEGORY','Змінити категорію');

DEFINE('_C_CONTENT_USER_CONTENT','Вміст користувача');
DEFINE('_USERS_MALE_S','чоловіча');
DEFINE('_USERS_FEMALE_S','жіноча');
DEFINE('_YEAR','рік');
DEFINE('_YEAR_','роки');
DEFINE('_YEARS','років');

DEFINE('_REGISTER_REQUIRED','Всі поля, відмічені символом (*), обов’язкові для заповнення!');
DEFINE('_PAGE_TITLE','Назва сторінки');
DEFINE('_USER_PROFILE','Профіль користувача %s');

DEFINE('_TEMPLATE_DIR','Шаблон з');
DEFINE('_TEMPLATE_DIR_DEF','Каталога шаблону');
DEFINE('_TEMPLATE_DIR_SYSTEM','Системний каталог');

DEFINE('_C_USERS_GENDER','Стать');
DEFINE('_C_USERS_B_DAY','Дата народження');
DEFINE('_C_USERS_DESCRIPTION','Про себе');
DEFINE('_USER_CONTACTS','Контакти');
DEFINE('_C_USERS_CONTACT_SITE','Сайт');
DEFINE('_C_USERS_CONTACT_PHONE','Телефон');
DEFINE('_C_USERS_CONTACT_PHONE_MOBILE','Мобільний телефон');
DEFINE('_C_USERS_CONTACT_FAX','Факс');
DEFINE('_C_USERS_AVATARS','Аватар');
DEFINE('_USERS_LOCATION','Розташування');
DEFINE('_COM_USERS_CONTACT_INFO','Контактна інформація');
DEFINE('_USER_NONE_LAST_VISIT','не визначено');

DEFINE('_PAGE_ACCESS_DENIED','Вибачте, до цієї сторінки доступ закритий');
DEFINE('_CONTENT_TYPED','Статичний вміст');

DEFINE('_E_ITEM_SAVED','Успішно збережено!');
DEFINE('_REGWARN_EMAIL_INUSE','Цей e-mail вже використовується. Якщо Ви забули свій пароль, натисніть посилання "Забули пароль?" І на вказаний e-mail буде висланий новий пароль.');
DEFINE('_REGWARN_INUSE','Це ім’я користувача вже існує. Будь ласка, виберіть інше ім’я.');
DEFINE('_REGWARN_MAIL','Будь ласка, правильно введіть адресу e-mail.');
DEFINE('_MODULE_PREVIEW','Попередній перегляд модуля.');
DEFINE('_PAGES','Сторінки');
DEFINE('_LOST_PASSWORDWORD','Забули пароль?');
DEFINE('_MAIL_SUB','Новий матеріал від користувача');
DEFINE('_MAIL_MSG','Доброго дня, $adminName, \n\n Користувач $author пропонує новий матеріал у розділ $type з назвою $title'.
'Для сайту JPATH_SITE.\n\n\n'.
'Будь ласка, зайдіть в панель адміністратора за адресою JPATH_SITE/administrator для перегляду і додавання його в $type. \n\n'.
'На цей лист не треба відповідати, оскільки він створений автоматично і призначений тільки для сповіщення \n');
DEFINE('_THANK_SUB','Дякуємо за Ваш матеріал. Він буде переглянутий адміністратором перед розміщенням на сайті.');
DEFINE('_MASS_RESULTS','Результати масового додавання');
DEFINE('_CANNOT_MOVE_TO_MEDIA','Не можу перемістити скачаний файл у каталог <code>/media</code>');
DEFINE('_CLOAKING','Цей e-mail захищений від спам-ботів. Для його перегляду у вашому браузері повинна бути включена підтримка Javascript');
DEFINE('_SITE_OFFLINE','Сайт вимкнено');
DEFINE('_MOVED_TO_TRASH','Відправлено в кошик');
DEFINE('_CATS_TO_COPY','Категорії, що копіюються');
DEFINE('_PROMPT_CLOSE','Закрити вікно');
DEFINE('_REMEMBER_ME','Запам’ятати');
DEFINE('_ENQUIRY','Контакт');
DEFINE('_WARNING','Попередження');
DEFINE('_BROWSER','Браузер (User Agent)');
DEFINE('_MENU_NEXT','Далі');
DEFINE('_MENU_BACK','Назад');
DEFINE('_ITEM_PREVIOUS','«');
DEFINE('_ITEM_NEXT','»');
DEFINE('_CONTENT_ITEMS_TO_COPY','вміст, що копіюється');
DEFINE('_USER_POSITION','Посада');
DEFINE('_OBJECTS_DELETED','Об’єкт(и) успішно видалений(і)');
DEFINE('_PASSWORDWORD','Пароль');

/* Langeditor */
DEFINE('_ALL_SECTIONS','Всі розділи');
DEFINE('_MENU_ITEMS_TO_COPY','Будуть скопійовані наступні пункти');
DEFINE('_PLEASE_ENTER_SUBJECT','Будь ласка, впишіть заголовок');
DEFINE('_PLEASE_ENTER_MODULE_NAME','Будь ласка, введіть назву для нового модуля');
DEFINE('_CONTENT_IMAGES','Зображення вмісту');
DEFINE('_ACTIVE_IMAGE','Активне зображення');
DEFINE('_ALIGN','Вирівнювання');
DEFINE('_CANNOT_EDIT_ARCHIVED_ITEM','Ви не можете відредагувати об’єкт архіву');
DEFINE('_CAPTION_ALIGN','Вирівнювання підпису');
DEFINE('_CAPTION_POSITION','Положення підпису');
DEFINE('_CAPTION_WIDTH','Ширина підпису');
DEFINE('_CHECKED_IN_ITEMS','Перевірка');
DEFINE('_SECTION_LIST','Список розділу');
DEFINE('_E_EDIT','Редагувати');
DEFINE('_SEARCH_BOX','Пошук ...');
DEFINE('_GLOBAL_CONFIG','Глобальна конфігурація');
DEFINE('_LANGUAGE_PACKS','Мовні пакети');
DEFINE('_PAGES_HITS','Статистика відвідування сторінок');
DEFINE('_BUTTON_LINK_IN_NEW_WINDOW','У новому вікні');
DEFINE('_SQL_CONSOLE','SQL консоль');
DEFINE('_XMAP_MSG_NO_SITEMAP','Ця карта недоступна');
DEFINE('_CACHE_MANAGEMENT','Керування кешем');

DEFINE('_GUEST','Гість');
DEFINE('_EDITOR','Редактор');
DEFINE('_PUBLISHER','Публікатор');
DEFINE('_MANAGER','Менеджер');
DEFINE('_ADMINISTRATOR','Адміністратор');
DEFINE('_SUPER_ADMINISTRATOR','Супер-Адміністратор');
DEFINE('_IN_ARCHIVE','В архіві');
DEFINE('_SEARCH_NEWSFEEDS','Стрічки новин');