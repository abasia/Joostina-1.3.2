<?php
/*
* @package Russian Variables for Joomla Content Editor
* @version JCE 1.1.1
* @localized Авторские права (C) 2005-2007 Joom.Ru - Русский дом Joomla!
* @translator Перевод Kozyrev Andrey aka AndTaran (admin@taran-dg.ru)
* @proofreading Корректоры: Artem A. Lebsak aka Ladm (ladm@mail.ru) and Oleg M. aka sourpuss (sourpuss@mail.ru)
* @website www.joom.ru
*/

// запрет прямого доступа
defined( '_VALID_MOS' ) or die( 'Доступ ограничен' );

//Общее
DEFINE('_JCE_VERSION', 'Версия');
DEFINE('_JCE_DATE', 'Дата');
DEFINE('_JCE_AUTHOR', 'Автор');
DEFINE('_JCE_AUTHOR_EMAIL', 'Электронная почта автора');
DEFINE('_JCE_AUTHOR_URL', 'URL автора');
DEFINE('_JCE_PUBLISHED', 'Опубликовано');

//Редактор значков
DEFINE('_JCE_LAYOUT_MSG','Здесь представлены кнопки только опубликованных Команд и Расширений. Для установки нужного расположения кнопок, можете перетащить кнопки из одного ряда в другой, или просто поменять их местами в пределах одного ряда. Серая область представляет Интерфейс пользователя Редактора. Кнопки должны находиться в пределах этой области. Синие прямоугольники указывают границу каждого ряда.');
DEFINE('_JCE_LAYOUT_PLUGINS', 'Расширения Менеджера изображений (Image manager) и Менеджера изображений SE (Image manager SE) представлены одним значком с изображением картины, расширения AdvLink и AdvLink SE - в виде одного значка с изображением ссылки (звенья цепи), но одновременно может использоваться только один тип расширения.');
DEFINE('_JCE_LAYOUT_HEADING', 'Менеджер расположения кнопок JCE');
//

//Менеджер локализаций
DEFINE('_JCE_LANG_HEADING', 'Менеджер локализаций JCE');
DEFINE('_JCE_LANG_LANG', 'Язык');

//Инсталлятор локализаций
DEFINE('_JCE_LANG_HEADING_INSTALL', 'Установить локализацию JCE');
DEFINE('_JCE_LANG_BACK', 'Вернуться в Менеджер локализаций');
//

//Общий инсталлятор
DEFINE('_JCE_INS_PACKAGE_UPLOAD', 'Загрузка файла пакета');
DEFINE('_JCE_INS_PACKAGE_FILE', 'Файл пакета');
DEFINE('_JCE_INS_INSTALL', 'Установка из папки');
DEFINE('_JCE_INS_INSTALL_DIR', 'Папка установки');
DEFINE('_JCE_INS_UPLOAD_BUTTON', 'Загрузить файл и установить');
DEFINE('_JCE_INS_INSTALL_BUTTON', 'Установить');
//

//Расширения
DEFINE('_JCE_PLUGIN_PLUGIN', 'Расширение');
DEFINE('_JCE_PLUGIN_PLUGCOM', 'Расширение/команда');
DEFINE('_JCE_PLUGIN_NAME', 'Название');
DEFINE('_JCE_PLUGIN_HEADING', 'Менеджер расширений JCE');
DEFINE('_JCE_PLUGIN_FILTER', 'Фильтр');
DEFINE('_JCE_PLUGIN_ACCESS_LIST', 'Уровень доступа');
DEFINE('_JCE_PLUGIN_ACCESS_LVL', 'Уровень доступа');
DEFINE('_JCE_PLUGIN_CORE', 'Ядро');
DEFINE('_JCE_PLUGIN_ORDER', 'Порядок');
DEFINE('_JCE_PLUGIN_ROW', 'Ряд');
DEFINE('_JCE_PLUGIN_TYPE', 'Тип');
DEFINE('_JCE_PLUGIN_ICON', 'Значок');
DEFINE('_JCE_PLUGIN_LAYOUT_ICON', 'Значок панели');
DEFINE('_JCE_PLUGIN_DESC', 'Описание');
DEFINE('_JCE_PLUGIN_EDIT', 'Изменить');
DEFINE('_JCE_PLUGIN_NEW', 'Новый');
DEFINE('_JCE_PLUGIN_DETAILS', 'Детали расширения');
DEFINE('_JCE_PLUGIN_PARAMS', 'Параметры');
DEFINE('_JCE_PLUGIN_ELMS', 'Элементы');
//Инсталлятор расширений
DEFINE('_JCE_PLUGINS_INSTALL_HEADING','Установка новых расширений JCE');
DEFINE('_JCE_PLUGINS_INSTALL_MSG', 'Здесь показаны только те расширения, которые могут быть удалены. Расширения ядра не могут быть удалены.');
DEFINE('_JCE_PLUGIN_NONE', 'Установленные расширения отсутствуют');
?>
