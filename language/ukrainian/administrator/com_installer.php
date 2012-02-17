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

DEFINE('_OTHER_COMPONENT_USE_DIR', 'Інший компонент вже використовує каталог');
DEFINE('_CANNOT_CREATE_DIR','Не можу створити каталог');
DEFINE('_SQL_ERROR', 'Помилка виконання SQL');
DEFINE('_ERROR_MESSAGE', 'Текст помилки');
DEFINE('_CANNOT_COPY_PHP_INSTALL', 'Не можу скопіювати PHP-файл установки');
DEFINE('_CANNOT_COPY_PHP_REMOVE', 'Не можу скопіювати PHP-файл видалення');
DEFINE('_ERROR_DELETING', 'Помилка при вилученні');
DEFINE('_IS_PART_OF_CMS', 'є елементом ядра Joostina і не може бути видалений.<br />Ви повинні зняти його з публікації, якщо не хочете його використовувати.');
DEFINE('_DELETE_ERROR', 'Видалення - помилка');
DEFINE('_UNINSTALL_ERROR', 'Помилка деінсталяції');
DEFINE('_BAD_XML_FILE','Неправильний XML-файл');
DEFINE('_PARAM_FILED_EMPTY','Поле параметра пусте і неможливо видалити файли');
DEFINE('_INSTALLED_COMPONENTS','Встановлені компоненти ');
DEFINE('_INSTALLED_COMPONENTS2', 'Тут показані лише ті розширення, які Ви можете видалити. Частини ядра Joostina видалити не можна.');
DEFINE('_COMPONENT_NAME', 'Назва компоненту');
DEFINE('_COMPONENT_LINK', 'Посилання меню компонента');
DEFINE('_COMPONENT_AUTHOR_URL', 'URL автора');
DEFINE('_OTHER_COMPONENTS_NOT_INSTALLED','Сторонні компоненти не встановлені');
DEFINE('_COMPONENT_INSTALL','Установка компонента');
DEFINE('_CANNOT_DEL_LANG_ID', 'ID мови порожнє, тому неможливо видалити файли');
DEFINE('_GOTO_LANG_MANAGEMENT', 'Перейти до керування мовами');
DEFINE('_INTALL_LANG','Встановлення мовного пакету сайту');
DEFINE('_NO_FILES_OF_MAMBOTS', 'Немає файлів, позначених як мамботи');
DEFINE('_WRONG_ID', 'Неправильний ідентифікатор об’єкту');
DEFINE('_BAD_DIR_NAME_EMPTY','Поле папки порожнє, неможливо видалити файли');
DEFINE('_INSTALLED_MAMBOTS', 'Встановлені мамботи');
DEFINE('_OTHER_MAMBOTS', 'Це не мамботи ядра, а сторонні мамботи');
DEFINE('_INSTALL_MAMBOT','Установка мамбота');
DEFINE('_UNKNOWN_CLIENT','Невідомий тип клієнта');
DEFINE('_NO_FILES_MODULES','Файли, зазначені як модулі, відсутні');
DEFINE('_ALREADY_EXISTS', 'вже існує');
DEFINE('_DELETING_XML_FILE', 'Видалення XML-файлу');
DEFINE('_INSTALL_MODULE', 'Встановлені модулі');
DEFINE('_NO_OTHER_MODULES','Сторонні модулі не встановлені');
DEFINE('_MODULE_INSTALL','Встановлення модуля');
DEFINE('_CANNOT_DEL_FILE_NO_DIR', 'Неможливо видалити файл, тому що каталог не існує');
DEFINE('_CHOOSE_DIRECTORY_PLEASE', 'Будь ласка, виберіть теку');
DEFINE('_ZIP_UPLOAD_AND_INSTALL', 'Завантаження архіву розширення з подальшою установкою');
DEFINE('_PACKAGE_FILE', 'Файл пакету');
DEFINE('_UPLOAD_AND_INSTALL', 'Завантажити і встановити');
DEFINE('_INSTALL_FROM_DIR','Встановлення з каталогу');
DEFINE('_INSTALLATION_DIRECTORY','Каталог інсталяції');
DEFINE('_NO_INSTALLER', 'не знайдено інсталятор');
DEFINE('_CANNOT_INSTALL','Інсталяція [$element] неможлива ');
DEFINE('_CANNOT_INSTALL_DISABLED_UPLOAD','Інсталяція неможлива, поки заборонене завантаження файлів. Будь ласка, використовуйте інсталяцію з каталогу.');
DEFINE('_INSTALL_ERROR', 'Помилка інсталяції');
DEFINE('_CANNOT_INSTALL_NO_ZLIB','Інсталяція неможлива, поки не встановлена підтримка zlib');
DEFINE('_NO_FILE_CHOOSED', 'Файл не обраний');
DEFINE('_ERORR_UPLOADING_EXT','Помилка завантаження нового модуля');
DEFINE('_UPLOADING_ERROR', 'Завантаження невдале');
DEFINE('_SUCCESS', 'успішно');
DEFINE('_UNSUCCESS','невдало');
DEFINE('_UPLOAD_OF_EXT', 'Завантаження нового елементу');
DEFINE('_DELETE_SUCCESS', 'Видалення успішне');
DEFINE('_CANNOT_CHMOD', 'Не можу змінити права доступу до завантаженого файлу');
DEFINE('_CANNOT_WRITE_TO_MEDIA', 'Завантаження скасоване, тому що каталог <code>/media</code> недоступний для запису.');
DEFINE('_CANNOT_INSTALL_NO_MEDIA', 'Завантаження скасоване, тому що каталог <code>/media</code> не існує');
DEFINE('_ERROR_NO_XML_JOOMLA', 'ПОМИЛКА: У інсталяційному пакеті неможливо знайти XML-файл установки Joostina.');
DEFINE('_ERROR_NO_XML_INSTALL', 'ПОМИЛКА: У інсталяційному пакеті неможливо знайти XML-файл установки');
DEFINE('_NO_NAME_DEFINED','Не визначено ім’я файлу');
DEFINE('_NOT_CORRECT_INSTALL_FILE_FOR_JOOMLA', 'не є коректним файлом установки Joostina!');
DEFINE('_CANNOT_RUN_INSTALL_METHOD','Метод "install" не може бути викликаний класом');
DEFINE('_CANNOT_RUN_UNINSTALL_METHOD','Метод "uninstall" не може бути викликаний класом');
DEFINE('_CANNOT_FIND_INSTALL_FILE','Інсталяційний файл не знайдено');
DEFINE('_XML_NOT_FOR', 'Інсталяційний XML-файл - не для');
DEFINE('_FILE_NOT_EXISTSS', 'Файл не існує');
DEFINE('_INSTALL_TWICE', 'Ви намагаєтеся двічі встановити одне і те ж розширення');
DEFINE('_ERROR_COPYING_FILE','Помилка копіювання файлу');
DEFINE('_INSTALL_MANAGER','Менеджер розширень');
DEFINE('_CHOOSE_DIRECTORY_NOT_ARCHIVE', 'Будь ласка, виберіть каталог, а не архів');
DEFINE('_CHOOSE_URL_PLEASE', 'Будь ласка, введіть адресу');
DEFINE('_INSTALL_FROM_URL','Інсталяція по URL');
DEFINE('_INSTALLATION_URL', 'URL архіву');
DEFINE('_UNKNOWN_EXTENSION_TYPE','Невідомий тип розширення');
DEFINE('_DISABLE_ALLOW_URL_FOPEN','Інсталяція через URL неможлива, налаштування <a href="http://php.net/manual/en/features.remote-files.php" target="_blank"> allow_url_fopen</a> сервера заборонене.');
DEFINE('_CANNOT_CONNECT_SERVER', 'Не вдалося встановити зв’язок з віддаленим сервером ');
DEFINE('_COM_INSTALLER_MAMBOT_EXIST', 'Мамбот %s вже існує');
DEFINE('_COM_INSTALLER_ACTIVE', 'Дозволено');
DEFINE('_COM_INSTALLER_NO_PREVIEW', 'Попередній перегляд недоступний');
DEFINE('_COM_INSTALLER_TEMPLATE_PREVIEW', 'Попередній перегляд шаблону');