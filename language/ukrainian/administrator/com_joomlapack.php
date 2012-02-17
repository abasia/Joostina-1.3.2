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

DEFINE('_JP_BACKUPPING','Резервування');
DEFINE('_JP_PHPINFO', '- Інформація про PHP -');
DEFINE('_JP_FREEMEMORY','Вільно пам’яті');
DEFINE('_JP_GZIP_ENABLED', 'GZIP стиснення: доступне (це добре)');
DEFINE('_JP_GZIP_NOT_ENABLED', 'GZIP стиснення: недоступне (це погано)');
DEFINE('_JP_START_BACKUP_DB',' Початок резервування бази даних');
DEFINE('_JP_START_BACKUP_FILES',' Початок резервування всіх даних сайту');
DEFINE('_JP_CUBE_ON_STEP', 'CUBE :: Робота на кроці');
DEFINE('_JP_CUBE_STEP_FINISHED', 'CUBE:: Крок завершений');
DEFINE('_JP_CUBE_FINISHED', 'CUBE :: Завершено');
DEFINE('_JP_ERROR_ON_STEP', 'CUBE :: Помилка на кроці ');
DEFINE('_JP_CLEANUP','Очищення');
DEFINE('_JP_RECURSING_DELETION','Рекурсивне видалення');
DEFINE('_JP_NOT_FILE', 'Видалення <b> ЦЕ ФАЙЛ, НЕ КАТАЛОГ</b>');
DEFINE('_JP_ERROR_DEL_DIRECTORY','Помилка видалення каталогу. Перевірте права доступу');
DEFINE('_JP_QUICK_MODE', 'Режим однопрохідне');
DEFINE('_JP_QUICK_MODE_ON_STEP', 'Використовується швидкий алгоритм на кроці');
DEFINE('_JP_CANNOT_USE_QUICK_MODE', 'Неможливо використовувати швидкий алгоритм на кроці');
DEFINE('_JP_MULTISTEP_MODE', 'Режим багатопрохідне');
DEFINE('_JP_MULTISTEP_MODE_ON_STEP', 'Використовується повільний алгоритм на кроці');
DEFINE('_JP_MULTISTEP_MODE_ERROR', 'Помилка виконання повільного алгоритму на кроці');
DEFINE('_JP_SMART_MODE','Прискорений режим');
DEFINE('_JP_SMART_MODE_ON_STEP','Виконання прискореного режиму на кроці');
DEFINE('_JP_SMART_MODE_ERROR', 'Помилка виконання прискореного режиму на кроці');
DEFINE('_JP_CHOOSED_ALGO','Обрано');
DEFINE('_JP_ALGORITHM_FOR','алгоритм для');

DEFINE('_JP_NEXT_STEP_BACKUP_DB','Наступний крок --> Резервування бази');
DEFINE('_JP_NEXT_STEP_FILE_LIST','Наступний крок --> Створення списку файлів');
DEFINE('_JP_NEXT_STEP_FINISHING','Наступний крок --> Завершення');
DEFINE('_JP_NEXT_STEP_GZIP','Наступний крок --> Пакування');
DEFINE('_JP_NEXT_STEP_FINISHED','Наступний крок --> Завершено');
DEFINE('_JP_NO_NEXT_STEP','Наступний крок не потрібен; все вже завершено');
DEFINE('_JP_NO_CUBE', 'Немає існуючого CUBE; створення нового');
DEFINE('_JP_CURRENT_STEP','Поточний крок');
DEFINE('_JP_UNPACKING_CUBE', 'Розпакування існуючого CUBE');
DEFINE('_JP_TIMEOUT','Час на виконання операції збіг, але операція не завершена');
DEFINE('_JP_FETCHING_TABLE_LIST', 'CDBBackupEngine :: Отримання списку таблиць');
DEFINE('_JP_BACKUP_ONLY_DB', 'CDBBackupEngine :: Резервування тільки бази даних');
DEFINE('_JP_ONE_FILE_STORE', 'CDBBackupEngine :: Задане об’єднання файлом');
DEFINE('_JP_FILE_STRUCTURE', 'CDBBackupEngine :: Файл структури');
DEFINE('_JP_DATAFILE', 'CDBBackupEngine :: Файл даних');
DEFINE('_JP_FILE_DELETION', 'CDBBackupEngine :: Видалення файлів');
DEFINE('_JP_FIRST_STEP', 'CDBBackupEngine :: Перший прохід ');
DEFINE('_JP_ALL_COMPLETED', 'CDBBackupEngine :: Все завершено');
DEFINE('_JP_START_TICK', 'CDBBackupEngine :: Початок обробки ');
DEFINE('_JP_READY_FOR_TABLE','Виконано для таблиці');
DEFINE('_JP_DB_BACKUP_COMPLETED','Резервування бази даних завершене');
DEFINE('_JP_NEW_FRAGMENT_ADDED', 'Додано новий фрагмент');
DEFINE('_JP_KERNEL_TABLES','Таблиці ядра');
DEFINE('_JP_FIRST_STEP_2', 'Перший прохід ');
DEFINE('_JP_NEXT_VALUE', 'Вихідне значення');
DEFINE('_JP_SKIP_TABLE','Пропускання таблиці');
DEFINE('_JP_GETTING','Отримання');
DEFINE('_JP_COLUMN_FROM', 'стовпця з');
DEFINE('_JP_ERROR_WRITING_FILE',' Помилка запису у файл');
DEFINE('_JP_CANNOT_SAVE_DUMP', 'Неможливо зберегти в дамп');
DEFINE('_JP_CHECK_RESULTS',' Результати перевірки');
DEFINE('_JP_ANALYZE_RESULTS','Результати аналізу');
DEFINE('_JP_OPTIMIZE_RESULTS','Результати оптимізації');
DEFINE('_JP_REPAIR_RESULTS', 'Результати виправлення');
DEFINE('_JP_GETTING_DIRS_LIST','Отримання списку каталогів для виключення з резервної копії');
DEFINE('_JP_GZIP_FIRST_STEP','Пакування: перший крок');
DEFINE('_JP_GZIP_FINISHED',' Пакування:: Завершене');
DEFINE('_JP_PACK_FINISHED', 'Завершення архівування');
DEFINE('_JP_GZIP_OF_FRAGMENT','Архівування фрагменту #');
DEFINE('_JP_CURRENT_FRAGMENT',' Поточний фрагмент');
DEFINE('_JP_DELETE_PATH', ' шлях для видалення: ');
DEFINE('_JP_PATH_TO_DELETE', ' шлях для додавання');
DEFINE('_JP_SAVING_ARCHIVE_INFO',' Збереження інформації про архівні об’єкти');
DEFINE('_JP_LOADING_ARCHIVE_INFO', 'Завантаження інформації про архівні об’єкти');
DEFINE('_JP_ADDING_FILE_TO_ARCHIVE', 'Додавання файлів до архіву');
DEFINE('_JP_ARCHIVING','Архівування');
DEFINE('_JP_ARCHIVE_COMPLETED','Архівування завершено');
DEFINE('_JP_BACKUP_CONFIG','Конфігурація резервного копіювання даних');
DEFINE('_JP_CONFIG_SAVING','Збереження налаштувань');
DEFINE('_JP_MAIN_CONFIG', 'Основні параметри');
DEFINE('_JP_CONFIG_DIRECTORY',' Каталог збереження архівів');
DEFINE('_JP_ARCHIVE_NAME', 'Назва архіву');
DEFINE('_JP_LOG_LEVEL','Рівень ведення логу');
DEFINE('_JP_ADDITIONAL_CONFIG', 'Додаткові налаштування');
DEFINE('_JP_DELETE_PREFIX', 'Видаляти префікс таблиць');
DEFINE('_JP_EXPORT_TYPE', 'Тип експорту бази даних');
DEFINE('_JP_FILELIST_ALGORITHM','Обробка файлів');
DEFINE('_JP_CONFIG_DB_BACKUP','Обробка бази');
DEFINE('_JP_CONFIG_GZIP','Стиснення файлів');
DEFINE('_JP_CONFIG_DUMP_GZIP','Стиснення дампу бази даних');
DEFINE('_JP_AVAILABLE', '<font color="green"><b>доступне</b</font>');
DEFINE('_JP_NOT_AVAILABLE', '<font color="red"><b>недоступне</b></font>');
DEFINE('_JP_MYSQL4_COMPAT','В режимі сумісності з MySQL 4');
DEFINE('_JP_NO_GZIP', 'Не архівувати (.sql)');
DEFINE('_JP_GZIP_TAR_GZ','Архівувати в tar.gz (.tar.gz)');
DEFINE('_JP_GZIP_ZIP','Архівувати в ZIP (.zip)');
DEFINE('_JP_QUICK_METHOD','Швидко - один прохід');
DEFINE('_JP_STANDARD_METHOD','Рекомендовано - Стандартно');
DEFINE('_JP_SLOW_METHOD',' Повільно - мультіпроходность');
DEFINE('_JP_LOG_ERRORS_OLY', 'Тільки помилки');
DEFINE('_JP_LOG_ERROR_WARNINGS',' Помилки та попередження');
DEFINE('_JP_LOG_ALL','Вся інформація');
DEFINE('_JP_LOG_ALL_DEBUG','Вся інформація та зневаджування');
DEFINE('_JP_DONT_SAVE_DIRECTORIES_IN_BACKUP', 'Не зберігати каталоги в резервній копії');
DEFINE('_FILE_NAME', 'Назва файлу');
DEFINE('_JP_DOWNLOAD_FILE','Звантажити');
DEFINE('_JP_REALLY_DELETE_FILE','Дійсно видалити файл?');
DEFINE('_JP_FILE_CREATION_DATE','Створено');
DEFINE('_JP_NO_BACKUPS','Файли резервних копій відсутні');
DEFINE('_JP_ACTIONS_LOG','Лог виконання дій');
DEFINE('_JP_BACKUP_MANAGEMENT','Резервне копіювання');
DEFINE('_JP_CREATE_BACKUP','Створити архів даних');
DEFINE('_DB_MANAGEMENT','Керування даних');
DEFINE('_JP_DONT_SAVE_DIRECTORIES', 'Не зберігати каталоги');
DEFINE('_JP_CONFIG','Налаштування збереження');
DEFINE('_JP_ERRORS_TMP_DIR','Виявлено помилки, перевірте можливість запису в каталог зберігання резервних копій');
DEFINE('_JP_BACKUP_CREATION','Створення резервної копії даних');
DEFINE('_JP_DONT_CLOSE_BROWSER_WINDOW', 'Будь ласка, не закривайте вікно браузера і не переходьте з цієї сторінки до закінчення резервування і відображення відповідного повідомлення.');
DEFINE('_JP_ERRORS_VIEW_LOG',' У ході роботи виявлені помилки, будь ласка, <a href="index2.php?option=com_joomlapack&act=log">подивіться лог</a> роботи і з’ясуйте причину.');
DEFINE('_JP_BACKUP_SUCCESS','Резервування даних сайту виконано успішно. Звантажити.');
DEFINE('_JP_CREATION_FILELIST', '1. Створення списку файлів для архівування.');
DEFINE('_JP_BACKUPPING_DB', '2. Архівація бази даних.');
DEFINE('_JP_CREATION_OF_ARCHIVE', '3. Створення результуючого архіву');
DEFINE('_JP_ALL_COMPLETED_2', '4. Все виконано.');
DEFINE('_JP_PROGRESS','Обробка');
DEFINE('_SQL_TABLES','Таблиці');
DEFINE('_DB_NUM_RECORDS','Записів');
DEFINE('_JP_SIZE', 'Розмір');
DEFINE('_JP_INCREMENT', 'Інкремент');
DEFINE('_JP_CREATION_DATE', 'Створено');
DEFINE('_JP_CHECKING','Перевірка');
DEFINE('_JP_FULL_BACKUP', 'Повний резерв');
DEFINE('_JP_BACKUP_BASE',' Резервувати базу');
DEFINE('_JP_BACKUP_PANEL',' Панель резервування');
DEFINE('_JP_REPAIR', 'Виправити');
DEFINE('_JP_OPTIMIZE','Оптимізувати');
DEFINE('_JP_ANALYSE','Аналізувати');
DEFINE('_JP_CHECK','Перевірити');
DEFINE('_SQL_TABLE','Таблиця');
DEFINE('_COM_MESSAGES_STATUS','Статус');
DEFINE('_JP_GET_FILE_LISTING','Отримання списку файлів');