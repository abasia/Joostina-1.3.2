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


DEFINE('_NEW_USER_MESSAGE_SUBJECT','Нові дані користувача');
DEFINE('_NEW_USER_MESSAGE', 'Доброго дня, %s


Ви були зареєстровані Адміністратором на сайті %s.

Це повідомлення містить Ваші ім’я користувача та пароль для входу на сайт %s:

Ім’я користувача - %s
Пароль - %s


На це повідомлення не потрібно відповідати. Воно згенероване роботом розсилань і відправлено лише для сповіщення. ');
DEFINE('_USER_LOGIN_TXT','Ім’я користувача (логін)');
DEFINE('_LOGGED_IN','На сайті');
DEFINE('_LAST_LOGIN','Останнє відвідування');
DEFINE('_ALLOW','Дозволити');
DEFINE('_DISALLOW','Заборонити');
DEFINE('_ENTER_LOGIN_PLEASE','Ви повинні ввести ім’я користувача для входу на сайт');
DEFINE('_BAD_USER_LOGIN','Ваше ім’я для входу містить неправильні символи або надто коротке.');
DEFINE('_ENTER_NAME_PLEASE','Ви повинні ввести ім’я');
DEFINE('_ENTER_EMAIL_PLEASE','Ви повинні ввести адресу e-mail');
DEFINE('_ENTER_GROUP_PLEASE','Ви повинні призначити користувачеві групу доступу');
DEFINE('_BAD_PASSWORDWORD','Пароль неправильний');
DEFINE('_BAD_GROUP_1','Будь ласка, виберіть іншу групу. Групи типу `Public Front-end` вибирати не можна');
DEFINE('_BAD_GROUP_2','Будь ласка, виберіть іншу групу. Групи типу `Public Back-end` вибирати не можна');
DEFINE('_USER_INFO','Інформація про користувача');
DEFINE('_NEW_PASSWORDWORD','Новий пароль');
DEFINE('_REPEAT_PASSWORDWORD','Перевірка паролю');
DEFINE('_BLOCK_USER','Блокувати користувача');
DEFINE('_RECEIVE_EMAILS','Отримувати системні повідомлення на e-mail');
DEFINE('_REGISTRATION_DATE','Дата реєстрації');
DEFINE('_CONTACT_INFO','Контактна інформація');
DEFINE('_NO_USER_CONTACTS','У цього користувача немає контактної інформації:<br />Для подробиць дивіться \'Компоненти -> Контакти -> Керування контактами\'');
DEFINE('_FULL_NAME','Повне ім’я');
DEFINE('_CHANGE_CONTACT_INFO','Змінити контактну інформацію');
DEFINE('_CONTACT_INFO_PATH_URL','Компоненти -> Контакти -> Керування контактами');
DEFINE('_RESTRICT_FUNCTION','Функціональність обмежена');
DEFINE('_NO_RIGHT_TO_CHANGE_GROUP','Ви не можете змінити цю групу користувачів. Це може зробити тільки Головний адміністратор сайту');
DEFINE('_NO_RIGHT_TO_USER_CREATION','Ви не можете створити користувача з цим рівнем доступу. Це може зробити тільки Головний адміністратор сайту');
DEFINE('_PROFILE_SAVE_SUCCESS','Успішно збережені зміни профілю користувача');
DEFINE('_CANNOT_DEL_ONE_SUPER_ADMIN','Ви не можете видалити цього Головного адміністратора, тому що він єдиний Головний адміністратор сайту');
DEFINE('_CHOOSE_USER_TO','Виберіть користувача для');
DEFINE('_PLEASE_CHOOSE_USER','Будь ласка, виберіть користувача');
DEFINE('_CANNOT_DISABLE_SUPER_ADMIN','Ви не можете відключити Головного адміністратора');
DEFINE('_THIS_CAN_DO_HIGHLEVEL_USERS','Це можуть робити тільки користувачі з більш високим рівнем доступу');
DEFINE('_DISABLE','Вимкнути');
DEFINE('_com_users_SELECT_GROOP','- Виберіть групу -');
DEFINE('_com_users_SELECT_STATUS','- Виберіть статус -');
DEFINE('_com_users_USER_LOGED','авторизований(а) на сайті');
DEFINE('_SITE_SETTINGS','Налаштування сайту');
DEFINE('_SELECT_EDITOR','- Виберіть редактор -');
DEFINE('_VALID_AZ09','Будь ласка, перевірте, чи правильно написано %s. Ім’я не повинно містити пробілів, тільки символи 0-9, a-z, A-Z і мати довжину не менше %d символів.');
DEFINE('_VALID_AZ09_USER','Будь ласка, введіть правильно %s. Має містити тільки символи 0-9, a-z, A-Z і мати довжину не менше %d символів.');
DEFINE('_YOUR_NAME','Повне ім’я');
DEFINE('_CONTACT_INFO_COM_CONTACT','Зв’язок з компонентом контактів');
DEFINE('_C_USERS_USER_EDIT','Редагування профілю користувача');
DEFINE('_C_USERS_USER_NEW','Новий користувач');
DEFINE('_ADDITIONAL_INFO','Додаткова інформація');
DEFINE('_C_USERS_CONTACT_INFO','Контактні дані');
DEFINE('_C_USERS_REG_SETTINGS','Користувачі: налаштування реєстрації');
DEFINE('_C_USERS_REG_FORM_BEFORE','Текст перед формою реєстрації');
DEFINE('_C_USERS_REG_FORM_AFTER','Текст після форми реєстрації');
DEFINE('_C_USERS_REG_AFTER_LINK','Посилання для переходу після реєстрації');
DEFINE('_C_USERS_REG_ONE_GROOP_TEMPLATE','Використовувати єдиний шаблон форми реєстрації для всіх груп користувачів');
DEFINE('_C_USERS_REG_DEFAULT_GROOPS','Група користувача за замовчуванням');
DEFINE('_C_USERS_REG_PROFILE_ACTIVATE','Активація облікового запису адміністратором (працює спільно з глобальним налаштуванням "Використовувати активацію нового облікового запису")');
DEFINE('_C_USERS_PROFILE_SETTINGS','Користувачі: налаштування профілю');
DEFINE('_C_USERS_PROFILE_ONE_TEMPLATE','Використовувати єдиний шаблон профілю для всіх груп користувачів');
DEFINE('_C_USERS_PROFILE_ONE_TEMPLATE_EDIT','Використовувати єдиний шаблон редагування даних для всіх груп користувачів');
DEFINE('_C_USERS_LOSTPASS_SETTINGS','Налаштування відновлення пароля');