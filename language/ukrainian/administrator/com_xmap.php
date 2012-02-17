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
defined( '_VALID_MOS' ) or die( 'Прямой вызов файла запрещен' );

DEFINE('_XMAP_CFG_COM_TITLE','Карти сайту');
DEFINE('_XMAP_CFG_OPTIONS','Відображення');
DEFINE('_XMAP_CFG_CSS_CLASSNAME','Стилі CSS');
DEFINE('_XMAP_CFG_EXPAND_CATEGORIES','Розширювати категорії вмісту');
DEFINE('_XMAP_CFG_EXPAND_SECTIONS','Розширювати розділи вмісту');
DEFINE('_XMAP_CFG_SHOW_MENU_TITLES','Показувати назви меню');
DEFINE('_XMAP_CFG_NUMBER_COLUMNS','Кількість стовпців');
DEFINE('_XMAP_EX_LINK','Відзначати зовнішні посилання');
DEFINE('_XMAP_CFG_CLICK_HERE','Натисніть сюди');
DEFINE('_XMAP_CFG_GOOGLE_MAP','Google Sitemap');
DEFINE('_XMAP_EXCLUDE_MENU','Виключати ID меню');
DEFINE('_XMAP_TAB_DISPLAY','Відображення');
DEFINE('_XMAP_CFG_WRITEABLE','доступний');
DEFINE('_XMAP_CFG_UNWRITEABLE','не доступний');
DEFINE('_XMAP_MSG_MAKE_UNWRITEABLE','Заборонити редагування після збереження');
DEFINE('_XMAP_MSG_OVERRIDE_WRITE_PROTECTION','Ігнорувати захист при записі');
DEFINE('_XMAP_CFG_INCLUDE_LINK','Приховувати посилання на автора');
DEFINE('_XMAP_EXCLUDE_MENU_TIP','Ідентифікатори меню виключаються з карти.<br/><strong>УВАГА</strong><br/>Ідентифікатори розділяти комами!');
DEFINE('_XMAP_CFG_SET_ORDER','Сортування меню');
DEFINE('_XMAP_CFG_MENU_SHOW','Показати');
DEFINE('_XMAP_CFG_MENU_REORDER','Пересортувати');
DEFINE('_XMAP_CFG_MENU_ORDER','Положення');
DEFINE('_XMAP_CFG_MENU_NAME','Назва меню');
DEFINE('_DISABLE','Вимкнути');
DEFINE('_XMAP_CFG_ENABLE','Увімкнути');
DEFINE('_XMAP_SHOW','Показати');
DEFINE('_XMAP_NO_SHOW','Не показувати');
DEFINE('_XMAP_TOOLBAR_CANCEL','Вихід');
DEFINE('_XMAP_ERR_NO_LANG','Мовний файл [ %s ] не знайдено, використовується стандартна мова<br/>');
DEFINE('_XMAP_ERR_CONF_SAVE','ПОМИЛКА: Неможливо зберегти конфігурацію.');
DEFINE('_XMAP_ERR_NO_CREATE','ПОМИЛКА: Відсутня таблиця налаштувань');
DEFINE('_XMAP_ERR_NO_DEFAULT_SET','ПОМИЛКА: Відсутня таблиця базових даних');
DEFINE('_XMAP_ERR_NO_PREV_BU','ПОПЕРЕДЖЕННЯ: Неможливо видалити копію');
DEFINE('_XMAP_ERR_NO_BACKUP','ПОМИЛКА: Неможливо створити копію');
DEFINE('_XMAP_ERR_NO_DROP_DB','ПОМИЛКА: Неможливо видалити налаштування');
DEFINE('_XMAP_ERR_NO_SETTINGS','ПОМИЛКА: Неможливо завантажити налаштування: <a href="%s">Створити таблицю налаштувань</a>');
DEFINE('_XMAP_MSG_SET_RESTORED','Налаштування відновлені');
DEFINE('_XMAP_MSG_SET_BACKEDUP','Налаштування збережені');
DEFINE('_XMAP_MSG_SET_DB_CREATED','Таблиця налаштувань створена');
DEFINE('_XMAP_MSG_SET_DEF_INSERT','Базові дані внесені');
DEFINE('_XMAP_MSG_SET_DB_DROPPED','Таблиці Xmap\'s збережені!');
DEFINE('_XMAP_CSS','Xmap CSS');
DEFINE('_XMAP_CSS_EDIT','Редагування CSS карт // Edit template');
DEFINE('_XMAP_SHOW_AS_EXTERN_ALT','Посилання відкриється в новому вікні');
DEFINE('_XMAP_CFG_MENU_SHOW_HTML','Показувати на сайті');
DEFINE('_XMAP_CFG_MENU_SHOW_XML','Показувати в XML карті');
DEFINE('_XMAP_CFG_MENU_PRIORITY','Пріоритет');
DEFINE('_XMAP_CFG_MENU_CHANGEFREQ','Створювати');
DEFINE('_XMAP_CFG_CHANGEFREQ_ALWAYS','Постійно');
DEFINE('_XMAP_CFG_CHANGEFREQ_HOURLY','Щогодини');
DEFINE('_XMAP_CFG_CHANGEFREQ_DAILY','Щодня');
DEFINE('_XMAP_CFG_CHANGEFREQ_WEEKLY','Щотижня');
DEFINE('_XMAP_CFG_CHANGEFREQ_MONTHLY','Щомісячно');
DEFINE('_XMAP_CFG_CHANGEFREQ_YEARLY','Щорічно');
DEFINE('_XMAP_TIT_SETTINGS_OF','Налаштування %s');
DEFINE('_XMAP_TAB_SITEMAPS','Карта');
DEFINE('_XMAP_MSG_NO_SITEMAPS','Немає створених карт');
DEFINE('_XMAP_MSG_LOADING_SETTINGS','Завантаження налаштувань...');
DEFINE('_XMAP_MSG_ERROR_LOADING_SITEMAP','Помилка. Неможливо завантажити карту');
DEFINE('_XMAP_MSG_ERROR_SAVE_PROPERTY','Помилка. Неможливо зберегти пріоритет.');
DEFINE('_XMAP_MSG_ERROR_CLEAN_CACHE','Помилка. Неможливо очистити кеш карти.');
DEFINE('_XMAP_ERROR_DELETE_DEFAULT','Неможливо видалити карту, що використовується стандартно!');
DEFINE('_XMAP_MSG_CACHE_CLEANED','Кеш карти очищений!');
DEFINE('_XMAP_CHARSET','utf-8');
DEFINE('_XMAP_SITEMAP_ID','Ідентифікатор карти');
DEFINE('_SAVE_SITEMAP','Створити нову карту сайту');
DEFINE('_XMAP_NAME_NEW_SITEMAP','Нова карта');
DEFINE('_XMAP_SITEMAP_SET_DEFAULT','Стандартно');
DEFINE('_SETTINGS','Налаштування');
DEFINE('_XMAP_CLEAR_CACHE','Очистити кеш');
DEFINE('_XMAP_MOVEUP_MENU','Вище');
DEFINE('_XMAP_MOVEDOWN_MENU','Нижче');
DEFINE('_SAVE_MENU','Додати меню');
DEFINE('_XMAP_COPY_OF','Копія %s');
DEFINE('_XMAP_INFO_LAST_VISIT','Останнє відвідування');
DEFINE('_XMAP_INFO_COUNT_VIEWS','Кількість відвідувань');
DEFINE('_XMAP_INFO_TOTAL_LINKS','Кількість посилань');
DEFINE('_XMAP_CFG_URLS','URL карти');
DEFINE('_XMAP_XML_LINK_TIP','Скопіюйте це посилання для використання в Google і Yahoo');
DEFINE('_XMAP_HTML_LINK_TIP','Це повна адреса карти.');
DEFINE('_XMAP_CFG_XML_MAP','XML карта');
DEFINE('_XMAP_CFG_HTML_MAP','HTML карта');
DEFINE('_XMAP_XML_LINK','Googlelink');
DEFINE('_XMAP_CFG_XML_MAP_TIP','XML файл створюється для пошукових систем');
DEFINE('_XMAP_LOADING','Завантаження ...');
DEFINE('_XMAP_CACHE','Кешування');
DEFINE('_XMAP_USE_CACHE','Використовувати');
DEFINE('_CACHE_TIME','Час життя кешу');
DEFINE('_XMAP_PLUGINS','Розширення');
DEFINE('_INSTALL_NEW_PLUGIN','Встановити нове розширення');
DEFINE('_XMAP_UNKNOWN_AUTHOR','Автор невідомий');
DEFINE('_XMAP_PLUGIN_VERSION','Версія %s');
DEFINE('_XMAP_TAB_EXTENSIONS','Розширення');
DEFINE('_XMAP_TAB_INSTALLED_EXTENSIONS','Встановлені розширення');
DEFINE('_XMAP_NO_PLUGINS_INSTALLED','Розширення не встановлені');
DEFINE('_HEADER_AUTHOR','Автор');
DEFINE('_XMAP_CONFIRM_DELETE_SITEMAP','Ви впевнені що хочете видалити цю карту?');
DEFINE('_XMAP_CONFIRM_UNINSTALL_PLUGIN','Ви впевнені що хочете видалити це розширення?');
DEFINE('_XMAP_EXT_PUBLISHED','Опублікувати');
DEFINE('_XMAP_PLUGIN_OPTIONS','Options');
DEFINE('_XMAP_EXT_INSTALLED_MSG','Розширення встановлено, будь ласка перевірте його параметри і опублікуйте.');
DEFINE('_XMAP_CONTINUE','Продовжити...');
DEFINE('_XMAP_MSG_EXCLUDE_CSS_SITEMAP','Не використовувати CSS в карті');
DEFINE('_XMAP_MSG_EXCLUDE_XSL_SITEMAP','Використовувати класичну XML карту');
DEFINE('_XMAP_MSG_SELECT_FOLDER','Будь ласка, виберіть каталог');
DEFINE('_XMAP_UPLOAD_PKG_FILE','Завантаження пакету розширення');
DEFINE('_UPLOAD_AND_INSTALL','Завантажити та встановити');
DEFINE('_INSTALL_F_DIRECTORY','Установка з каталогу');
DEFINE('_INSTALLATION_DIRECTORY','Каталог установки');
DEFINE('_XMAP_WRITEABLE','Доступний');
DEFINE('_XMAP_UNWRITEABLE','Немає');
DEFINE('_XMAP_INVALID_SID','Помилка ідентифікатора карти');
DEFINE('_EXTENSION_NAME','Назва розширення');
DEFINE('_PUBLICATION','Публікація');
DEFINE('_XMAP_PAGE','Сторінка');
DEFINE('_XMAP_PLUGIN_SET','Налаштування розширення:');