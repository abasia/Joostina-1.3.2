# $Id: joostina.sql Joostina 1.2.0 boston $


#
# Структура таблицы `#__banners`
#

CREATE TABLE IF NOT EXISTS `#__banners` (
  `id` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL default '0',
  `tid` int(11) NOT NULL default '0',
  `type` varchar(10) NOT NULL default 'banner',
  `name` varchar(50) NOT NULL default '',
  `imp_total` int(11) NOT NULL default '0',
  `imp_made` int(11) NOT NULL default '0',
  `clicks` int(11) NOT NULL default '0',
  `image_url` varchar(100) default '',
  `click_url` varchar(200) default '',
  `custom_banner_code` text,
  `state` tinyint(1) NOT NULL default '0',
  `last_show` datetime NOT NULL default '0000-00-00 00:00:00',
  `msec` int(11) NOT NULL default '0',
  `publish_up_date` date NOT NULL default '0000-00-00',
  `publish_up_time` time NOT NULL default '00:00:00',
  `publish_down_date` date NOT NULL default '0000-00-00',
  `publish_down_time` time NOT NULL default '00:00:00',
  `reccurtype` tinyint(1) NOT NULL default '0',
  `reccurweekdays` varchar(100) NOT NULL default '',
  `access` int(11) NOT NULL default '0',
  `target` varchar(15) NOT NULL default '',
  `border_value` int(11) NOT NULL default '0',
  `border_style` varchar(11) NOT NULL default '',
  `border_color` varchar(11) NOT NULL default '',
  `click_value` varchar(10) NOT NULL default '',
  `complete_clicks` int(11) NOT NULL default '0',
  `imp_value` varchar(10) NOT NULL default '',
  `dta_mod_clicks` date default NULL,
  `password` varchar(40) NOT NULL default '',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `alt` varchar(200) default '',
  `title` varchar(200) default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__banners_categories`
#

CREATE TABLE IF NOT EXISTS `#__banners_categories` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `description` text,
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  CHARACTER SET utf8 COLLATE utf8_general_ci;


#
# Структура таблицы `#__banners_clients`
#

CREATE TABLE IF NOT EXISTS `#__banners_clients` (
  `cid` int(11) NOT NULL auto_increment,
  `name` varchar(60) NOT NULL default '',
  `contact` varchar(60) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `extrainfo` text,
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM  CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__categories`
#

CREATE TABLE `#__categories` (
  `id` int(11) NOT NULL auto_increment,
  `parent_id` int(11) NOT NULL default '0',
  `title` varchar(50) NOT NULL default '',
  `name` varchar(255) NOT NULL default '',
  `image` varchar(100) NOT NULL default '',
  `section` varchar(50) NOT NULL default '',
  `image_position` varchar(10) NOT NULL default '',
  `description` text,
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `editor` varchar(50) default NULL,
  `ordering` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `count` int(11) NOT NULL default '0',
  `params` text,
  PRIMARY KEY  (`id`),
  KEY `cat_idx` (`section`,`published`,`access`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`)
) ENGINE=MyISAM  CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__components`
#

CREATE TABLE `#__components` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `link` varchar(255) NOT NULL default '',
  `menuid` int(11) unsigned NOT NULL default '0',
  `parent` int(11) unsigned NOT NULL default '0',
  `admin_menu_link` varchar(255) NOT NULL default '',
  `admin_menu_alt` varchar(255) NOT NULL default '',
  `option` varchar(50) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  `admin_menu_img` varchar(255) NOT NULL default '',
  `iscore` tinyint(4) NOT NULL default '0',
  `params` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Данные таблицы `#__components`
#

INSERT INTO `#__components` VALUES (1, 'Баннеры', '', 0, 0, 'option=com_banners', 'Управление баннерами', 'com_banners', 0, 'js/ThemeOffice/component.png', 0, '');
INSERT INTO `#__components` VALUES (2, 'Баннеры', '', 0, 1, 'option=com_banners&task=banners', 'Активные баннеры', 'com_banners', 1, 'js/ThemeOffice/edit.png', 0, '');
INSERT INTO `#__components` VALUES (3, 'Клиенты', '', 0, 1, 'option=com_banners&task=clients', 'Управление клиентами', 'com_banners', 2, 'js/ThemeOffice/categories.png', 0, '');
INSERT INTO `#__components` VALUES (25, 'Категории', '', 0, 1, 'option=com_banners&task=categories', 'Управление категориями', 'com_banners', 2, 'js/ThemeOffice/categories.png', 0, '');
INSERT INTO `#__components` VALUES (4, 'Каталог ссылок', 'option=com_weblinks', 0, 0, '', 'Управление ссылками', 'com_weblinks', 0, 'js/ThemeOffice/globe2.png', 0, '');
INSERT INTO `#__components` VALUES (5, 'Ссылки', '', 0, 4, 'option=com_weblinks', 'Просмотр существующих ссылок', 'com_weblinks', 1, 'js/ThemeOffice/edit.png', 0, '');
INSERT INTO `#__components` VALUES (6, 'Категории', '', 0, 4, 'option=com_categories&section=com_weblinks', 'Управление категориями ссылок', '', 2, 'js/ThemeOffice/categories.png', 0, '');
INSERT INTO `#__components` VALUES (7, 'Контакты', 'option=com_contact', 0, 0, '', 'Редактировать контактную информацию', 'com_contact', 0, 'js/ThemeOffice/user.png', 1, '');
INSERT INTO `#__components` VALUES (8, 'Контакты', '', 0, 7, 'option=com_contact', 'Редактировать контактную информацию', 'com_contact', 0, 'js/ThemeOffice/edit.png', 1, '');
INSERT INTO `#__components` VALUES (9, 'Категории', '', 0, 7, 'option=com_categories&section=com_contact_details', 'Управление категориями контактов', '', 2, 'js/ThemeOffice/categories.png', 1, '');
INSERT INTO `#__components` VALUES (10, 'Главная страница', 'option=com_frontpage', 0, 0, '', 'Управление объектами главной страницы', 'com_frontpage', 0, 'js/ThemeOffice/component.png', 1, '');
INSERT INTO `#__components` VALUES (11, 'Опросы', 'option=com_poll', 0, 0, 'option=com_poll', 'Управление опросами', 'com_poll', 0, 'js/ThemeOffice/component.png', 0, '');
INSERT INTO `#__components` VALUES (12, 'Ленты новостей', 'option=com_newsfeeds', 0, 0, '', 'Управление настройками лент новостей', 'com_newsfeeds', 0, 'js/ThemeOffice/rss_go.png', 0, '');
INSERT INTO `#__components` VALUES (13, 'Ленты новостей', '', 0, 12, 'option=com_newsfeeds', 'Управление лентами новостей', 'com_newsfeeds', 1, 'js/ThemeOffice/edit.png', 0, '');
INSERT INTO `#__components` VALUES (14, 'Категории', '', 0, 12, 'option=com_categories&section=com_newsfeeds', 'Управление категориями', '', 2, 'js/ThemeOffice/categories.png', 0, '');
INSERT INTO `#__components` VALUES (15, 'Авторизация', 'option=com_login', 0, 0, '', '', 'com_login', 0, '', 1, '');
INSERT INTO `#__components` VALUES (16, 'Поиск', 'option=com_search', 0, 0, '', '', 'com_search', 0, '', 1, '');
INSERT INTO `#__components` VALUES (17, 'RSS экспорт', '', 0, 0, 'option=com_syndicate&hidemainmenu=1', 'Управление настройками экспорта новостей', 'com_syndicate', 0, 'js/ThemeOffice/rss.png', 0, '');
INSERT INTO `#__components` VALUES (18, 'Рассылка почты', '', 0, 0, 'option=com_massmail&hidemainmenu=1', 'Массовая рассылка почты', 'com_massmail', 0, 'js/ThemeOffice/mass_email.png', 0, '');
INSERT INTO `#__components` VALUES (19, 'Визуальный редактор', 'option=com_jce', 0, 0, 'option=com_jce', 'Визуальный редактор JCE', 'com_jce', 0, 'js/ThemeOffice/editor_on.png', 0, '');
INSERT INTO `#__components` VALUES (20, 'Настройки', '', 0, 19, 'option=com_jce&task=config', 'Настройки редактора JCE', 'com_jce', 0, 'js/ThemeOffice/controlpanel.png', 0, '');
INSERT INTO `#__components` VALUES (21, 'Языки интерфейса', '', 0, 19, 'option=com_jce&task=lang', 'Языки интерфейса JCE', 'com_jce', 1, 'js/ThemeOffice/language.png', 0, '');
INSERT INTO `#__components` VALUES (22, 'Расширения', '', 0, 19, 'option=com_jce&task=showplugins', 'Расширения JCE', 'com_jce', 2, 'js/ThemeOffice/add_section.png', 0, '');
INSERT INTO `#__components` VALUES (23, 'Расположение кнопок', '0', 0, 19, 'option=com_jce&task=editlayout', 'Расположение кнопок JCE', 'com_jce', 3, 'js/ThemeOffice/content.png', 0, '');
INSERT INTO `#__components` VALUES (24, 'Карта сайта', 'option=com_xmap', 0, 0, 'option=com_xmap', '', 'com_xmap', 0, 'js/ThemeOffice/map.png', 0, '');

#
# Структура таблицы `#__contact_details`
#

CREATE TABLE `#__contact_details` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(250) NOT NULL default '',
  `con_position` varchar(250) default NULL,
  `address` text,
  `suburb` varchar(250) default NULL,
  `state` varchar(250) default NULL,
  `country` varchar(250) default NULL,
  `postcode` varchar(20) default NULL,
  `telephone` varchar(250) default NULL,
  `fax` varchar(250) default NULL,
  `misc` mediumtext,
  `image` varchar(100) default NULL,
  `imagepos` varchar(20) default NULL,
  `email_to` varchar(100) default NULL,
  `default_con` tinyint(1) unsigned NOT NULL default '0',
  `published` tinyint(1) unsigned NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `params` text,
  `user_id` int(11) NOT NULL default '0',
  `catid` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__content`
#

CREATE TABLE `#__content` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `title_alias` varchar(255) NOT NULL default '',
  `introtext` mediumtext,
  `fulltext` mediumtext,
  `state` tinyint(3) NOT NULL default '0',
  `sectionid` int(11) unsigned NOT NULL default '0',
  `mask` int(11) unsigned NOT NULL default '0',
  `catid` int(11) unsigned NOT NULL default '0',
  `created` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) unsigned NOT NULL default '0',
  `created_by_alias` varchar(100) NOT NULL default '',
  `modified` datetime NOT NULL default '0000-00-00 00:00:00',
  `modified_by` int(11) unsigned NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `publish_up` datetime NOT NULL default '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL default '0000-00-00 00:00:00',
  `images` text,
  `urls` text,
  `attribs` text,
  `version` int(11) unsigned NOT NULL default '1',
  `parentid` int(11) unsigned NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `metakey` text,
  `metadesc` text,
  `access` int(11) unsigned NOT NULL default '0',
  `hits` int(11) unsigned NOT NULL default '0',
  `notetext` text,
  PRIMARY KEY  (`id`),
  KEY `idx_section` (`sectionid`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`state`),
  KEY `idx_catid` (`catid`),
  KEY `idx_mask` (`mask`),
  KEY `idx_created_by` (`created_by`)
) ENGINE=MyISAM  CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__content_frontpage`
#

CREATE TABLE `#__content_frontpage` (
  `content_id` int(11) NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`content_id`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__content_rating`
#

CREATE TABLE `#__content_rating` (
  `content_id` int(11) NOT NULL default '0',
  `rating_sum` int(11) unsigned NOT NULL default '0',
  `rating_count` int(11) unsigned NOT NULL default '0',
  `lastip` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`content_id`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__core_log_items`
#


CREATE TABLE `#__core_log_items` (
  `time_stamp` date NOT NULL default '0000-00-00',
  `item_table` varchar(50) NOT NULL default '',
  `item_id` int(11) unsigned NOT NULL default '0',
  `hits` int(11) unsigned NOT NULL default '0'
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__core_log_searches`
#


CREATE TABLE `#__core_log_searches` (
  `search_term` varchar(128) NOT NULL default '',
  `hits` int(11) unsigned NOT NULL default '0',
  KEY `hits` (`hits`),
  KEY `search_term` (`search_term`(16))
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__groups`
#

CREATE TABLE `#__groups` (
  `id` tinyint(3) unsigned NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Данные таблицы `#__groups`
#

INSERT INTO `#__groups` VALUES (0, 'Общий');
INSERT INTO `#__groups` VALUES (1, 'Участники');
INSERT INTO `#__groups` VALUES (2, 'Специальный');
# --------------------------------------------------------

#
# Структура таблицы `#__mambots`
#

CREATE TABLE `#__mambots` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `element` varchar(100) NOT NULL default '',
  `folder` varchar(100) NOT NULL default '',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `published` tinyint(3) NOT NULL default '0',
  `iscore` tinyint(3) NOT NULL default '0',
  `client_id` tinyint(3) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `params` text,
  PRIMARY KEY (`id`),
  KEY `idx_folder` (`published`,`client_id`,`access`,`folder`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `#__mambots` VALUES (1,'Изображение MOS','mosimage','content',0,-10000,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO `#__mambots` VALUES (2,'Разбиение на страницы MOS','mospaging','content',0,10000,1,1,0,0,'0000-00-00 00:00:00','');
#INSERT INTO `#__mambots` VALUES (3,'Включение наследования мамботов','legacybots','content',0,1,0,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO `#__mambots` VALUES (4,'SEF','mossef','content',0,3,0,0,0,0,'0000-00-00 00:00:00','');
INSERT INTO `#__mambots` VALUES (5,'Рейтинг статей','plugin_jw_ajaxvote','content',0,4,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO `#__mambots` VALUES (6,'Поиск содержимого','content.searchbot','search',0,1,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO `#__mambots` VALUES (7,'Поиск веб-ссылок','weblinks.searchbot','search',0,2,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO `#__mambots` VALUES (8,'Поддержка кода','moscode','content',0,2,0,0,0,0,'0000-00-00 00:00:00','');
INSERT INTO `#__mambots` VALUES (9,'Простой редактор HTML','none','editors',0,0,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO `#__mambots` VALUES (10, 'WYSIWYG-редактор JCE', 'jce', 'editors', 0, 1, 1, 0, 0, 0, '0000-00-00 00:00:00', 'theme=advance\r\neditor_width=100%');
INSERT INTO `#__mambots` VALUES (11,'Кнопка изображения MOS в редакторе','mosimage.btn','editors-xtd',0,0,1,0,0,0,'0000-00-00 00:00:00','');
INSERT INTO `#__mambots` VALUES (12,'Кнопка разрыва страницы MOS в редакторе','mospage.btn','editors-xtd',0,0,1,0,0,0,'0000-00-00 00:00:00','');
INSERT INTO `#__mambots` VALUES (13,'Поиск контактов','contacts.searchbot','search',0,3,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO `#__mambots` VALUES (14, 'Поиск категорий', 'categories.searchbot', 'search', 0, 4, 1, 0, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__mambots` VALUES (15, 'Поиск разделов', 'sections.searchbot', 'search', 0, 5, 1, 0, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__mambots` VALUES (16, 'Маскировка E-mail', 'mosemailcloak', 'content', 0, 5, 1, 0, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__mambots` VALUES (17, 'Поиск лент новостей', 'newsfeeds.searchbot', 'search', 0, 6, 1, 0, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__mambots` VALUES (18, 'Позиции загрузки модуля', 'mosloadposition', 'content', 0, 6, 0, 0, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__mambots` VALUES (19, 'Первый обработчик содержимого', 'first', 'mainbody', 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__mambots` VALUES (20, 'Модуль на главной странице', 'frontpagemodule', 'content', 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', 'mod_position=banner\nmod_type=1\nmod_after=1');
INSERT INTO `#__mambots` VALUES (21, 'Контактные данные пользователя', 'user_contacts', 'profile', 0, 2, 1, 0, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__mambots` VALUES (22, 'Материалы пользователя', 'user_content', 'profile', 0, 3, 1, 0, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__mambots` VALUES (23, 'Информация ', 'user_info', 'profile', 0, 1, 1, 0, 0, 0, '0000-00-00 00:00:00', 'header=Информация\nshow_header=1\nshow_location=1\ngender=1');
INSERT INTO `#__mambots` VALUES (24, 'Библиотека MyLib', 'mylib', 'system', 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '');

# --------------------------------------------------------

#
# Структура таблицы `#__menu`
#

CREATE TABLE `#__menu` (
  `id` int(11) NOT NULL auto_increment,
  `menutype` varchar(25) default NULL,
  `name` varchar(100) default NULL,
  `link` text,
  `type` varchar(50) NOT NULL default '',
  `published` tinyint(1) NOT NULL default '0',
  `parent` int(11) unsigned NOT NULL default '0',
  `componentid` int(11) unsigned NOT NULL default '0',
  `sublevel` int(11) default '0',
  `ordering` int(11) default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `pollid` int(11) NOT NULL default '0',
  `browserNav` tinyint(4) default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `utaccess` tinyint(3) unsigned NOT NULL default '0',
  `params` text,
  PRIMARY KEY  (`id`),
  KEY `componentid` (`componentid`,`menutype`,`published`,`access`),
  KEY `menutype` (`menutype`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `#__menu` VALUES (1, 'mainmenu', 'Главная', 'index.php?option=com_frontpage', 'components', 1, 0, 10, 0, 2, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, 'title=\npage_name=\nno_site_name=0\nrobots=-1\nmeta_description=\nmeta_keywords=\nmeta_author=\nmenu_image=-1\npageclass_sfx=\nheader=Добро пожаловать на главную страницу\npage_title=0\nback_button=0\nleading=2\nintro=2\ncolumns=1\nlink=0\norderby_pri=\norderby_sec=front\npagination=2\npagination_results=0\nimage=1\nsection=0\nsection_link=0\nsection_link_type=blog\ncategory=1\ncategory_link=0\ncat_link_type=blog\nitem_title=1\nlink_titles=1\nintro_only=1\nview_introtext=1\nintrotext_limit=\nview_tags=1\nreadmore=0\nrating=0\nauthor=1\nauthor_name=0\ncreatedate=1\nmodifydate=0\nhits=\nprint=0\nemail=0\nunpublished=0');
# --------------------------------------------------------

#
# Структура таблицы `#__messages`
#

CREATE TABLE `#__messages` (
  `message_id` int(10) unsigned NOT NULL auto_increment,
  `user_id_from` int(10) unsigned NOT NULL default '0',
  `user_id_to` int(10) unsigned NOT NULL default '0',
  `folder_id` int(10) unsigned NOT NULL default '0',
  `date_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `state` int(11) NOT NULL default '0',
  `priority` int(1) unsigned NOT NULL default '0',
  `subject` varchar(230) NOT NULL default '',
  `message` text,
  PRIMARY KEY  (`message_id`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__messages_cfg`
#

CREATE TABLE `#__messages_cfg` (
  `user_id` int(10) unsigned NOT NULL default '0',
  `cfg_name` varchar(100) NOT NULL default '',
  `cfg_value` varchar(255) NOT NULL default '',
  UNIQUE `idx_user_var_name` (`user_id`,`cfg_name`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__modules`
#

CREATE TABLE `#__modules` (
  `id` int(11) NOT NULL auto_increment,
  `title` text,
  `content` text,
  `ordering` int(11) NOT NULL default '0',
  `position` varchar(10) default NULL,
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `published` tinyint(1) NOT NULL default '0',
  `module` varchar(50) default NULL,
  `numnews` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `showtitle` tinyint(3) unsigned NOT NULL default '1',
  `params` text,
  `iscore` tinyint(4) NOT NULL default '0',
  `client_id` tinyint(4) NOT NULL default '0',
#  `assign_to_url` blob not null,
  PRIMARY KEY  (`id`),
  KEY `published` (`published`,`access`),
  KEY `newsfeeds` (`module`,`published`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Данные таблицы `#__modules`
#

INSERT INTO `#__modules` VALUES (1, 'Ваше мнение', '', 4, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_poll', 0, 0, 1, 'cache=1\nmoduleclass_sfx=', 0, 0);
INSERT INTO `#__modules` VALUES (2, 'Меню пользователя', '', 1, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_mljoostinamenu', 0, 1, 1, 'moduleclass_sfx=_menu\nclass_sfx=\nmenutype=usermenu\nmenu_style=ulli\nml_imaged=0\nml_module_number=1\nml_first_hidden=0\nfull_active_id=0\nmenu_images=0\nmenu_images_align=0\nexpand_menu=0\nactivate_parent=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nml_separated_link=0\nml_linked_sep=0\nml_separated_link_first=0\nml_separated_link_last=0\nml_hide_active=0\nml_separated_active=0\nml_linked_sep_active=0\nml_separated_active_first=0\nml_separated_active_last=0\nml_separated_element=0\nml_separated_element_first=0\nml_separated_element_last=0\nml_td_width=0\nml_div=0\nml_aligner=left\nml_rollover_use=0\nml_image1=-1\nml_image2=-1\nml_image3=-1\nml_image4=-1\nml_image5=-1\nml_image6=-1\nml_image7=-1\nml_image8=-1\nml_image9=-1\nml_image10=-1\nml_image11=-1\nml_image_roll_1=-1\nml_image_roll_2=-1\nml_image_roll_3=-1\nml_image_roll_4=-1\nml_image_roll_5=-1\nml_image_roll_6=-1\nml_image_roll_7=-1\nml_image_roll_8=-1\nml_image_roll_9=-1\nml_image_roll_10=-1\nml_image_roll_11=-1\nml_hide_logged1=1\nml_hide_logged2=1\nml_hide_logged3=1\nml_hide_logged4=1\nml_hide_logged5=1\nml_hide_logged6=1\nml_hide_logged7=1\nml_hide_logged8=1\nml_hide_logged9=1\nml_hide_logged10=1\nml_hide_logged11=1', 1, 0);
INSERT INTO `#__modules` VALUES (3, 'Главное меню', '', 2, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_mljoostinamenu', 0, 0, 0, 'cache=1\nmoduleclass_sfx=-round\nclass_sfx=\nmenutype=mainmenu\nmenu_style=ulli\nml_imaged=0\nml_module_number=1\nnumrow=5\nml_first_hidden=1\nfull_active_id=0\nmenu_images=0\nmenu_images_align=0\nexpand_menu=0\nactivate_parent=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nml_separated_link=0\nml_linked_sep=0\nml_separated_link_first=0\nml_separated_link_last=0\nml_hide_active=0\nml_separated_active=0\nml_linked_sep_active=0\nml_separated_active_first=0\nml_separated_active_last=0\nml_separated_element=0\nml_separated_element_first=0\nml_separated_element_last=0\nml_td_width=0\nml_div=0\nml_aligner=left\nml_rollover_use=0\nml_image1=-1\nml_image2=-1\nml_image3=-1\nml_image4=-1\nml_image5=-1\nml_image6=apply.png\nml_image7=apply.png\nml_image8=apply.png\nml_image9=apply.png\nml_image10=apply.png\nml_image11=apply.png\nml_image_roll_1=-1\nml_image_roll_2=-1\nml_image_roll_3=-1\nml_image_roll_4=-1\nml_image_roll_5=-1\nml_image_roll_6=-1\nml_image_roll_7=-1\nml_image_roll_8=-1\nml_image_roll_9=-1\nml_image_roll_10=-1\nml_image_roll_11=-1\nml_hide_logged1=1\nml_hide_logged2=1\nml_hide_logged3=1\nml_hide_logged4=1\nml_hide_logged5=1\nml_hide_logged6=1\nml_hide_logged7=1\nml_hide_logged8=1\nml_hide_logged9=1\nml_hide_logged10=1\nml_hide_logged11=1', 1, 0);
INSERT INTO `#__modules` VALUES (4, 'Авторизация', '', 1, 'toolbar', 0, '0000-00-00 00:00:00', 1, 'mod_ml_login', 0, 0, 0, 'moduleclass_sfx=\nml_visibility=1\ndr_login_text=Вход\norientation=0\nml_avatar=0\npretext=\nposttext=\nlogin=\nlogin_message=0\ngreeting=1\nuser_name=0\nprofile_link=0\nprofile_link_text=Личный кабинет\nlogout=\nlogout_message=0\nshow_login_text=1\nshow_login_tooltip=1\nml_login_text=Логин\nlogin_tooltip_text=\nshow_pass_text=1\nshow_pass_tooltip=0\nml_pass_text=\npass_tooltip_text=\nshow_remember=0\nml_rem_text=\nshow_lost_pass=1\nml_rem_pass_text=\nshow_register=1\nml_reg_text=\nsubmit_button_text=', 1, 0);
INSERT INTO `#__modules` VALUES (5, 'Экспорт новостей', '', 2, 'bottom', 0, '0000-00-00 00:00:00', 1, 'mod_rssfeed', 0, 0, 1, 'cache=1\nmoduleclass_sfx=\ntext=\nyandex=0\nrss091=0\nrss10=0\nrss20=1\natom=0\nopml=0\nrss091_image=\nrss10_image=\nrss20_image=\natom_image=\nopml_image=\nyandex_image=', 1, 0);
INSERT INTO `#__modules` VALUES (6, 'Последние новости', '', 1, 'user5', 0, '0000-00-00 00:00:00', 1, 'mod_latestnews', 0, 0, 1, 'cache=1\nmoduleclass_sfx=\ncache=1\nnoncss=0\ntype=1\nshow_front=1\ncount=3\ncatid=\nsecid=1\ndef_itemid=29', 1, 0);
INSERT INTO `#__modules` VALUES (7, 'Статистика', '', 2, 'user9', 0, '0000-00-00 00:00:00', 1, 'mod_stats', 0, 0, 0, 'cache=1\nserverinfo=1\nsiteinfo=0\ncounter=0\nincrease=0\nmoduleclass_sfx=-stat', 0, 0);
INSERT INTO `#__modules` VALUES (8, 'Пользователи', '', 1, 'user9', 0, '0000-00-00 00:00:00', 1, 'mod_whosonline', 0, 0, 1, 'nmoduleclass_sfx=\nmodule_orientation=0\nall_user=1\nonline_user_count=0\nonline_users=0\nuser_avatar=0', 0, 0);
INSERT INTO `#__modules` VALUES (9, 'Популярное', '', 1, 'user6', 0, '0000-00-00 00:00:00', 1, 'mod_mostread', 0, 0, 1, 'cache=1\nmoduleclass_sfx=\ncache=1\nnoncss=0\ntype=1\nshow_front=1\nshow_hits=0\ncount=3\ncatid=\nsecid=\ndef_itemid=0', 0, 0);
INSERT INTO `#__modules` VALUES (10, 'Выбор шаблона', '', 7, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_templatechooser', 0, 0, 1, 'show_preview=1', 0, 0);
INSERT INTO `#__modules` VALUES (11, 'Архив', '', 8, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_archive', 0, 0, 1, '', 1, 0);
INSERT INTO `#__modules` VALUES (12, 'Разделы', '', 9, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_sections', 0, 0, 1, '', 1, 0);
INSERT INTO `#__modules` VALUES (13, 'Краткие новости', '', 1, 'top', 0, '0000-00-00 00:00:00', 0, 'mod_newsflash', 0, 0, 0, 'ncatid=3\nstyle=random\nimage=0\nlink_titles=\nreadmore=0\nitem_title=0\nitems=\ncache=0\nmoduleclass_sfx=', 0, 0);
INSERT INTO `#__modules` VALUES (14, 'Взаимосвязанные элементы', '', 2, 'user6', 0, '0000-00-00 00:00:00', 0, 'mod_related_items', 0, 0, 1, 'cache=0\nmoduleclass_sfx=', 0, 0);
INSERT INTO `#__modules` VALUES (15, 'Поиск', '', 1, 'header', 0, '0000-00-00 00:00:00', 1, 'mod_search', 0, 0, 0, 'moduleclass_sfx=\ncache=1\nset_itemid=5\nwidth=20\ntext=Поиск\nbutton=1\nbutton_text=\ntext_pos=inside\nbutton_pos=right', 0, 0);
INSERT INTO `#__modules` VALUES (16, 'Слайдшоу', '', 1, 'user1', 0, '0000-00-00 00:00:00', 1, 'mod_random_image', 0, 0, 0, 'rotate_type=1\ntype=jpg\nfolder=images/rotate\nlink=http://www.joostina.ru\nwidth=400\nheight=280\nmoduleclass_sfx=\nslideshow_name=jstSlideShow_1\nimg_pref=slide\ns_autoplay=1\ns_pause=2500\ns_fadeduration=500\npanel_height=55px\npanel_opacity=0.4\npanel_padding=5px\npanel_font=bold 11px Verdana', 0, 0);
INSERT INTO `#__modules` VALUES (17, 'Верхнее меню', '', 1, 'top', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 0, 0, 'cache=1\nclass_sfx=-nav\nmoduleclass_sfx=\nmenutype=topmenu\nmenu_style=list_flat\nfull_active_id=0\ncache=1\nmenu_images=0\nmenu_images_align=0\nexpand_menu=0\nactivate_parent=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=', 1, 0);
INSERT INTO `#__modules` VALUES (18, 'Баннеры', '', 1, 'banner', 0, '0000-00-00 00:00:00', 1, 'mod_banners', 0, 0, 0, 'categories=\nbanners=\nclients=\ncount=1\nrandom=0\norientation=0', 1, 0);
INSERT INTO `#__modules` VALUES (19, 'Компоненты', '', 2, 'cpanel', 0, '0000-00-00 00:00:00', 0, 'mod_components', 0, 99, 1, '', 1, 1);
INSERT INTO `#__modules` VALUES (20, 'Популярное содержимое', '', 3, 'advert2', 0, '0000-00-00 00:00:00', 0, 'mod_popular', 0, 99, 1, '', 1, 1);
INSERT INTO `#__modules` VALUES (21, 'Последнее добавленное содержимое', '', 4, 'advert1', 0, '0000-00-00 00:00:00', 1, 'mod_latest', 0, 99, 1, '', 1, 1);
INSERT INTO `#__modules` VALUES (22, 'Меню', '', 5, 'cpanel', 0, '0000-00-00 00:00:00', 1, 'mod_stats', 0, 99, 1, '', 0, 1);
INSERT INTO `#__modules` VALUES (23, 'Последние зарегистрированные пользователи', '', 4, 'advert2', 0, '0000-00-00 00:00:00', 1, 'mod_latest_users', 0, 99, 1, '', 1, 1);
INSERT INTO `#__modules` VALUES (24, 'Новые сообщения', '', 1, 'header', 0, '0000-00-00 00:00:00', 0, 'mod_unread', 0, 99, 1, '', 1, 1);
INSERT INTO `#__modules` VALUES (25, 'Активные пользователи', '', 2, 'header', 0, '0000-00-00 00:00:00', 0, 'mod_online', 0, 99, 1, '', 1, 1);
INSERT INTO `#__modules` VALUES (26, 'Полное меню', '', 1, 'top', 0, '0000-00-00 00:00:00', 1, 'mod_fullmenu', 0, 99, 1, '', 1, 1);
INSERT INTO `#__modules` VALUES (27, 'Путь', '', 1, 'pathway', 0, '0000-00-00 00:00:00', 0, 'mod_pathway', 0, 99, 1, '', 1, 1);
INSERT INTO `#__modules` VALUES (28, 'Панель инструментов', '', 1, 'toolbar', 0, '0000-00-00 00:00:00', 1, 'mod_toolbar', 0, 99, 1, '', 1, 1);
INSERT INTO `#__modules` VALUES (29, 'Системные сообщения', '', 1, 'inset', 0, '0000-00-00 00:00:00', 1, 'mod_mosmsg', 0, 99, 1, '', 1, 1);
INSERT INTO `#__modules` VALUES (30, 'Кнопки быстрого доступа', '', 2, 'icon', 0, '0000-00-00 00:00:00', 1, 'mod_quickicons', 0, 99, 1, '', 1, 1);
INSERT INTO `#__modules` VALUES (31, 'Помощь on-line', '', 3, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_mljoostinamenu', 0, 0, 1, 'moduleclass_sfx=-help\nclass_sfx=\nmenutype=othermenu\nmenu_style=ulli\nml_imaged=0\nml_module_number=1\nnumrow=3\nml_first_hidden=0\nfull_active_id=0\nmenu_images=0\nmenu_images_align=0\nexpand_menu=0\nactivate_parent=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nml_separated_link=0\nml_linked_sep=0\nml_separated_link_first=0\nml_separated_link_last=0\nml_hide_active=0\nml_separated_active=0\nml_linked_sep_active=0\nml_separated_active_first=0\nml_separated_active_last=0\nml_separated_element=0\nml_separated_element_first=0\nml_separated_element_last=0\nml_td_width=0\nml_div=0\nml_aligner=left\nml_rollover_use=0\nml_image1=-1\nml_image2=-1\nml_image3=-1\nml_image4=-1\nml_image5=-1\nml_image6=apply.png\nml_image7=apply.png\nml_image8=apply.png\nml_image9=apply.png\nml_image10=apply.png\nml_image11=apply.png\nml_image_roll_1=-1\nml_image_roll_2=-1\nml_image_roll_3=-1\nml_image_roll_4=-1\nml_image_roll_5=-1\nml_image_roll_6=-1\nml_image_roll_7=-1\nml_image_roll_8=-1\nml_image_roll_9=-1\nml_image_roll_10=-1\nml_image_roll_11=-1\nml_hide_logged1=1\nml_hide_logged2=1\nml_hide_logged3=1\nml_hide_logged4=1\nml_hide_logged5=1\nml_hide_logged6=1\nml_hide_logged7=1\nml_hide_logged8=1\nml_hide_logged9=1\nml_hide_logged10=1\nml_hide_logged11=1', 0, 0);
INSERT INTO `#__modules` VALUES (32, 'Wrapper', '', 10, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_wrapper', 0, 0, 1, '', 0, 0);
INSERT INTO `#__modules` VALUES (33, 'На сайте', '', 0, 'cpanel', 0, '0000-00-00 00:00:00', 0, 'mod_logged', 0, 99, 1, '', 0, 1);
#INSERT INTO `#__modules` VALUES (34, 'Спасибо за выбор Joostina!', 'Теперь мы вместе, и это очень радует ). Если вас интересует вопрос &quot;А почему именно Joostina?&quot;, мы хотели бы обратить ваше внимание на некоторые примечательные особенности этой CMS:\r\n<div class="marker_round">\r\n<b>1</b> Удачное сочетание мощности, скорости работы и нетребовательности к ресурсам сервера. Да, бывает и такое.<br />\r\n<b>2</b> Расширяемость за счет использования сторонних компонентов и модулей. А также простота разработки расширений для Joostina CMS. <br />\r\n<b>3</b> Данный продукт разрабатывается с большой любовью к коду и огромным  вниманием к пользователям. И наоборот. <br />\r\n</div>\r\n', 1, 'user2', 0, '0000-00-00 00:00:00', 1, '', 0, 0, 1, 'moduleclass_sfx=\ncache=1\nfirebots=1\nrssurl=\nrsstitle=1\nrssdesc=1\nrssimage=1\nrssitems=3\nrssitemdesc=1\nword_count=0\nrsscache=3600', 0, 0);
INSERT INTO `#__modules` VALUES (34, 'Случайное фото', '', 1, 'user7', 0, '0000-00-00 00:00:00', 1, 'mod_random_image', 0, 0, 1, 'rotate_type=0\ntype=jpg\nfolder=images/rotate\nlink=http://www.joostina.ru\nwidth=180\nheight=150\nmoduleclass_sfx=\nslideshow_name=jstSlideShow_1\nimg_pref=pic\ns_autoplay=1\ns_pause=2500\ns_fadeduration=500\npanel_height=55px\npanel_opacity=0.4\npanel_padding=5px\npanel_font=bold 11px Verdana', 0, 0);
#INSERT INTO `#__modules` VALUES (38, 'Полезная информация', '<ul class="bigred">\r\n<li>Файлы шаблонов Joostina CMS находятся в templates/[название_вашего_шаблона] </li>\r\n	<li>Отключите в глобальной конфигурации ненужные функции и мамботы для ускорение работы сайта </li>\r\n	<li>Правильно настроенное кэширование - залог здоровья высокопосещаемого сайта </li>\r\n</ul>\r\n', 1, 'user8', 0, '0000-00-00 00:00:00', 1, '', 0, 0, 1, 'moduleclass_sfx=\ncache=1\nfirebots=1\nrssurl=\nrsstitle=1\nrssdesc=1\nrssimage=1\nrssitems=3\nrssitemdesc=1\nword_count=0\nrsscache=3600', 0, 0);
INSERT INTO `#__modules` VALUES (35, 'Нижнее меню', '', 1, 'bottom', 0, '0000-00-00 00:00:00', 1, 'mod_mljoostinamenu', 0, 0, 0, 'moduleclass_sfx=-bottom\nclass_sfx=\nmenutype=topmenu\nmenu_style=ulli\nml_imaged=0\nml_module_number=2\nnumrow=6\nml_first_hidden=0\nfull_active_id=0\nmenu_images=0\nmenu_images_align=0\nexpand_menu=0\nactivate_parent=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nml_separated_link=0\nml_linked_sep=0\nml_separated_link_first=0\nml_separated_link_last=0\nml_hide_active=0\nml_separated_active=0\nml_linked_sep_active=0\nml_separated_active_first=0\nml_separated_active_last=0\nml_separated_element=0\nml_separated_element_first=0\nml_separated_element_last=0\nml_td_width=0\nml_div=0\nml_aligner=left\nml_rollover_use=0\nml_image1=-1\nml_image2=-1\nml_image3=-1\nml_image4=-1\nml_image5=-1\nml_image6=apply.png\nml_image7=apply.png\nml_image8=apply.png\nml_image9=apply.png\nml_image10=apply.png\nml_image11=apply.png\nml_image_roll_1=-1\nml_image_roll_2=-1\nml_image_roll_3=-1\nml_image_roll_4=-1\nml_image_roll_5=-1\nml_image_roll_6=-1\nml_image_roll_7=-1\nml_image_roll_8=-1\nml_image_roll_9=-1\nml_image_roll_10=-1\nml_image_roll_11=-1\nml_hide_logged1=1\nml_hide_logged2=1\nml_hide_logged3=1\nml_hide_logged4=1\nml_hide_logged5=1\nml_hide_logged6=1\nml_hide_logged7=1\nml_hide_logged8=1\nml_hide_logged9=1\nml_hide_logged10=1\nml_hide_logged11=1', 0, 0);
#INSERT INTO `#__modules` VALUES (36, 'Категории', '', 1, 'bottom', 0, '0000-00-00 00:00:00', 0, 'mod_secator', 0, 0, 0, '', 0, 0);
#INSERT INTO `#__modules` VALUES (37, 'Выпадающее меню слева', '', 1, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_menu', 0, 0, 0, '', 0, 0);
# --------------------------------------------------------

#
# Структура таблицы `#__modules_menu`
#

CREATE TABLE `#__modules_menu` (
  `moduleid` int(11) NOT NULL default '0',
  `menuid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`moduleid`,`menuid`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Данные таблицы `#__modules_menu`
#

INSERT INTO `#__modules_menu` VALUES (1, 0);
INSERT INTO `#__modules_menu` VALUES (2, 0);
INSERT INTO `#__modules_menu` VALUES (3, 0);
INSERT INTO `#__modules_menu` VALUES (4, 0);
INSERT INTO `#__modules_menu` VALUES (5, 0);
INSERT INTO `#__modules_menu` VALUES (6, 1);
INSERT INTO `#__modules_menu` VALUES (7, 1);
INSERT INTO `#__modules_menu` VALUES (8, 1);
INSERT INTO `#__modules_menu` VALUES (9, 1);
INSERT INTO `#__modules_menu` VALUES (10, 1);
INSERT INTO `#__modules_menu` VALUES (13, 0);
INSERT INTO `#__modules_menu` VALUES (15, 0);
INSERT INTO `#__modules_menu` VALUES (16, 1);
INSERT INTO `#__modules_menu` VALUES (17, 0);
INSERT INTO `#__modules_menu` VALUES (18, 0);
INSERT INTO `#__modules_menu` VALUES (30, 0);
INSERT INTO `#__modules_menu` VALUES (31, 0);
INSERT INTO `#__modules_menu` VALUES (34, 1);
INSERT INTO `#__modules_menu` VALUES (37, 1);
INSERT INTO `#__modules_menu` VALUES (38, 1);
INSERT INTO `#__modules_menu` VALUES (39, 1);


# --------------------------------------------------------

#
# Структура таблицы `#__newsfeeds`
#

CREATE TABLE `#__newsfeeds` (
  `catid` int(11) NOT NULL default '0',
  `id` int(11) NOT NULL auto_increment,
  `name` text,
  `link` text,
  `filename` varchar(200) default NULL,
  `published` tinyint(1) NOT NULL default '0',
  `numarticles` int(11) unsigned NOT NULL default '1',
  `cache_time` int(11) unsigned NOT NULL default '3600',
  `checked_out` tinyint(3) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `code` int(2) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `published` (`published`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__poll_data`
#

CREATE TABLE `#__poll_data` (
  `id` int(11) NOT NULL auto_increment,
  `pollid` int(4) NOT NULL default '0',
  `text` text,
  `hits` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `pollid` (`pollid`,`text`(1))
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__poll_date`
#

CREATE TABLE `#__poll_date` (
  `id` bigint(20) NOT NULL auto_increment,
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `vote_id` int(11) NOT NULL default '0',
  `poll_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `poll_id` (`poll_id`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__polls`
#

CREATE TABLE `#__polls` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(100) NOT NULL default '',
  `voters` int(9) NOT NULL default '0',
  `checked_out` int(11) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `published` tinyint(1) NOT NULL default '0',
  `access` int(11) NOT NULL default '0',
  `lag` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__poll_menu`
#

CREATE TABLE `#__poll_menu` (
  `pollid` int(11) NOT NULL default '0',
  `menuid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`pollid`,`menuid`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__sections`
#

CREATE TABLE `#__sections` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL default '',
  `name` varchar(255) NOT NULL default '',
  `image` varchar(100) NOT NULL default '',
  `scope` varchar(50) NOT NULL default '',
  `image_position` varchar(10) NOT NULL default '',
  `description` text,
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `count` int(11) NOT NULL default '0',
  `params` text,
  PRIMARY KEY  (`id`),
  KEY `idx_scope` (`scope`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__session`
#

CREATE TABLE `#__session` (
  `username` varchar(50) default '',
  `time` varchar(14) default '',
  `session_id` varchar(200) NOT NULL default '0',
  `guest` tinyint(4) default '1',
  `userid` int(11) default '0',
  `usertype` varchar(50) default '',
  `gid` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY (`session_id`),
  KEY `whosonline` (`guest`,`usertype`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__stats_agents`
#

CREATE TABLE `#__stats_agents` (
  `agent` varchar(255) NOT NULL default '',
  `type` tinyint(1) unsigned NOT NULL default '0',
  `hits` int(11) unsigned NOT NULL default '1',
  KEY `type_agent` (`type`,`agent`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;


#
# Структура таблицы `#__templates_menu`
#

CREATE TABLE `#__templates_menu` (
  `template` varchar(50) NOT NULL default '',
  `menuid` int(11) NOT NULL default '0',
  `client_id` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`template`,`menuid`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

# Данные таблицы `#__templates_menu`

INSERT INTO `#__templates_menu` VALUES ('newline2', '0', '0');
INSERT INTO `#__templates_menu` VALUES ('joostfree', '0', '1');

# --------------------------------------------------------

#
# Структура таблицы `#__template_positions`
#

CREATE TABLE `#__template_positions` (
  `id` int(11) NOT NULL auto_increment,
  `position` varchar(10) NOT NULL default '',
  `description` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Данные таблицы `#__template_positions`
#

INSERT INTO `#__template_positions` VALUES (0, 'left', '');
INSERT INTO `#__template_positions` VALUES (0, 'right', '');
INSERT INTO `#__template_positions` VALUES (0, 'top', '');
INSERT INTO `#__template_positions` VALUES (0, 'bottom', '');
INSERT INTO `#__template_positions` VALUES (0, 'inset', '');
INSERT INTO `#__template_positions` VALUES (0, 'banner', '');
INSERT INTO `#__template_positions` VALUES (0, 'header', '');
INSERT INTO `#__template_positions` VALUES (0, 'footer', '');
INSERT INTO `#__template_positions` VALUES (0, 'newsflash', '');
INSERT INTO `#__template_positions` VALUES (0, 'legals', '');
INSERT INTO `#__template_positions` VALUES (0, 'pathway', '');
INSERT INTO `#__template_positions` VALUES (0, 'toolbar', '');
INSERT INTO `#__template_positions` VALUES (0, 'cpanel', '');
INSERT INTO `#__template_positions` VALUES (0, 'user1', '');
INSERT INTO `#__template_positions` VALUES (0, 'user2', '');
INSERT INTO `#__template_positions` VALUES (0, 'user3', '');
INSERT INTO `#__template_positions` VALUES (0, 'user4', '');
INSERT INTO `#__template_positions` VALUES (0, 'user5', '');
INSERT INTO `#__template_positions` VALUES (0, 'user6', '');
INSERT INTO `#__template_positions` VALUES (0, 'user7', '');
INSERT INTO `#__template_positions` VALUES (0, 'user8', '');
INSERT INTO `#__template_positions` VALUES (0, 'user9', '');
INSERT INTO `#__template_positions` VALUES (0, 'advert1', '');
INSERT INTO `#__template_positions` VALUES (0, 'advert2', '');
INSERT INTO `#__template_positions` VALUES (0, 'advert3', '');
INSERT INTO `#__template_positions` VALUES (0, 'icon', '');
INSERT INTO `#__template_positions` VALUES (0, 'debug', '');
# --------------------------------------------------------

#
# Структура таблицы `#__users`
#

CREATE TABLE `#__users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `username` varchar(25) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `password` varchar(100) NOT NULL default '',
  `usertype` varchar(25) NOT NULL default '',
  `block` tinyint(4) NOT NULL default '0',
  `sendEmail` tinyint(4) default '0',
  `gid` tinyint(3) unsigned NOT NULL default '1',
  `registerDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `lastvisitDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `activation` varchar(100) NOT NULL default '',
  `params` text,
  `bad_auth_count` int(2) default '0',
  `avatar` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `usertype` (`usertype`),
  KEY `idx_name` (`name`),
  KEY `idxemail` (`email`),
  KEY `block_id` (`block`,`id`),
  KEY `username` (`username`)
) ENGINE=MyISAM  CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__usertypes`
#

CREATE TABLE `#__usertypes` (
  `id` tinyint(3) unsigned NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  `mask` varchar(11) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Данные таблицы `#__usertypes`
#

INSERT INTO `#__usertypes` VALUES (0, 'superadministrator', '');
INSERT INTO `#__usertypes` VALUES (1, 'administrator', '');
INSERT INTO `#__usertypes` VALUES (2, 'editor', '');
INSERT INTO `#__usertypes` VALUES (3, 'user', '');
INSERT INTO `#__usertypes` VALUES (4, 'author', '');
INSERT INTO `#__usertypes` VALUES (5, 'publisher', '');
INSERT INTO `#__usertypes` VALUES (6, 'manager', '');
# --------------------------------------------------------

#
# Структура таблицы `#__weblinks`
#

CREATE TABLE `#__weblinks` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `catid` int(11) NOT NULL default '0',
  `sid` int(11) NOT NULL default '0',
  `title` varchar(250) NOT NULL default '',
  `url` varchar(250) NOT NULL default '',
  `description` varchar(250) NOT NULL default '',
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `hits` int(11) NOT NULL default '0',
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `archived` tinyint(1) NOT NULL default '0',
  `approved` tinyint(1) NOT NULL default '1',
  `params` text,
  PRIMARY KEY  (`id`),
  KEY `catid` (`catid`,`published`,`archived`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__core_acl_aro`
#

CREATE TABLE `#__core_acl_aro` (
  `aro_id` int(11) NOT NULL auto_increment,
  `section_value` varchar(240) NOT NULL default '0',
  `value` varchar(240) NOT NULL default '',
  `order_value` int(11) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `hidden` int(11) NOT NULL default '0',
  PRIMARY KEY  (`aro_id`),
  UNIQUE KEY `#__gacl_section_value_value_aro` (`section_value`(100),`value`(100)),
  UNIQUE KEY `value` (`value`),
  KEY `#__gacl_hidden_aro` (`hidden`)
) ENGINE=MyISAM  CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__core_acl_aro_groups`
#
CREATE TABLE `#__core_acl_aro_groups` (
  `group_id` int(11) NOT NULL auto_increment,
  `parent_id` int(11) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `lft` int(11) NOT NULL default '0',
  `rgt` int(11) NOT NULL default '0',
  PRIMARY KEY  (`group_id`),
  KEY `parent_id_aro_groups` (`parent_id`),
  KEY `#__gacl_parent_id_aro_groups` (`parent_id`),
  KEY `#__gacl_lft_rgt_aro_groups` (`lft`,`rgt`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Данные таблицы `#__core_acl_aro_groups`
#
INSERT INTO `#__core_acl_aro_groups` VALUES (17,0,'ROOT',1,22);
INSERT INTO `#__core_acl_aro_groups` VALUES (28,17,'USERS',2,21);
INSERT INTO `#__core_acl_aro_groups` VALUES (29,28,'Public Frontend',3,12);
INSERT INTO `#__core_acl_aro_groups` VALUES (18,29,'Registered',4,11);
INSERT INTO `#__core_acl_aro_groups` VALUES (19,18,'Author',5,10);
INSERT INTO `#__core_acl_aro_groups` VALUES (20,19,'Editor',6,9);
INSERT INTO `#__core_acl_aro_groups` VALUES (21,20,'Publisher',7,8);
INSERT INTO `#__core_acl_aro_groups` VALUES (30,28,'Public Backend',13,20);
INSERT INTO `#__core_acl_aro_groups` VALUES (23,30,'Manager',14,19);
INSERT INTO `#__core_acl_aro_groups` VALUES (24,23,'Administrator',15,18);
INSERT INTO `#__core_acl_aro_groups` VALUES (25,24,'Super Administrator',16,17);

#
# Структура таблицы `#__core_acl_groups_aro_map`
#
CREATE TABLE `#__core_acl_groups_aro_map` (
  `group_id` int(11) NOT NULL default '0',
  `section_value` varchar(240) NOT NULL default '',
  `aro_id` int(11) NOT NULL default '0',
  UNIQUE KEY `group_id_aro_id_groups_aro_map` (`group_id`,`section_value`,`aro_id`),
  KEY `aro_id` (`aro_id`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

#
# Структура таблицы `#__core_acl_aro_sections`
#
CREATE TABLE `#__core_acl_aro_sections` (
  `section_id` int(11) NOT NULL auto_increment,
  `value` varchar(230) NOT NULL default '',
  `order_value` int(11) NOT NULL default '0',
  `name` varchar(230) NOT NULL default '',
  `hidden` int(11) NOT NULL default '0',
  PRIMARY KEY  (`section_id`),
  UNIQUE KEY `value_aro_sections` (`value`),
  KEY `hidden_aro_sections` (`hidden`)
) ENGINE=MyISAM  CHARACTER SET utf8 COLLATE utf8_general_ci;
;

INSERT INTO `#__core_acl_aro_sections` VALUES (10,'users',1,'Users',0);

#
# Таблицы JoomlaPack
#
CREATE TABLE `#__jp_packvars` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `key` VARCHAR(255) NOT NULL,
  `value` varchar(255) default NULL,
  `value2` LONGTEXT,
  PRIMARY KEY  (`id`)
)ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `#__jp_def` (
  `def_id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `directory` VARCHAR(255) NOT NULL,
  PRIMARY KEY(`def_id`)
)ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;


CREATE TABLE `#__jce_langs` (
  `id` int(11) NOT NULL auto_increment,
  `Name` varchar(100) NOT NULL default '',
  `lang` varchar(100) NOT NULL default '',
  `published` tinyint(3) NOT NULL default '0',
PRIMARY KEY (`id`)
)ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

insert into `#__jce_langs` values ('1', 'Русский (Russian utf8_general_ci)', 'ru', '1');

CREATE TABLE `#__jce_plugins` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `plugin` varchar(100) NOT NULL default '',
  `type` varchar(100) NOT NULL default 'plugin',
  `icon` varchar(255) NOT NULL default '',
  `layout_icon` varchar(255) NOT NULL default '',
  `access` tinyint(3) unsigned NOT NULL default '18',
  `row` int(11) NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `published` tinyint(3) NOT NULL default '0',
  `editable` tinyint(3) NOT NULL default '0',
  `elements` varchar(255) NOT NULL default '',
  `iscore` tinyint(3) NOT NULL default '0',
  `client_id` tinyint(3) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `params` text,
PRIMARY KEY  (`id`),
 UNIQUE KEY `plugin` (`plugin`) )
ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

# плагины редактора JCE
INSERT INTO `#__jce_plugins` VALUES(null, 'Полноэкранный режим', 'fullscreen', 'plugin', 'fullscreen', 'fullscreen', 18, 1, 22, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Вставка', 'paste', 'plugin', 'pasteword,pastetext', 'paste', 18, 1, 18, 1, 1, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Предпросмотр', 'preview', 'plugin', 'preview', 'preview', 18, 4, 1, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Таблицы', 'table', 'plugin', 'tablecontrols', 'buttons', 18, 2, 3, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Поиск и замена', 'searchreplace', 'plugin', 'search,replace', 'searchreplace', 18, 1, 8, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Стили', 'style', 'plugin', 'styleprops', 'styleprops', 18, 4, 2, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Видимые символы', 'visualchars', 'plugin', 'visualchars', 'visualchars', 18, 4, 4, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'XHTML Xtras', 'xhtmlxtras', 'plugin', 'cite,abbr,acronym,del,ins', 'xhtmlxtras', 18, 4, 5, 0, 0, 'del[*],ins[*]', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Редактор изображений', 'imgmanager', 'plugin', '', 'imgmanager', 18, 4, 6, 1, 1, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Гиперссылки', 'advlink', 'plugin', '', 'advlink', 18, 4, 7, 1, 1, '', 1, 0, 0, '0000-00-00 00:00:00', 'article=18\nsection=18\ncategory=18\nstatic=18\ncontact=18\nmenu=18');
INSERT INTO `#__jce_plugins` VALUES(null, 'Цвет текста', 'forecolor', 'command', 'forecolor', 'forecolor', 18, 1, 7, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Жирный', 'bold', 'command', 'bold', 'bold', 18, 1, 3, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Курсив', 'italic', 'command', 'italic', 'italic', 18, 1, 4, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Подчеркнутый', 'underline', 'command', 'underline', 'underline', 18, 1, 5, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Цвет фона', 'backcolor', 'command', 'backcolor', 'backcolor', 18, 1, 8, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Удалить ссылку', 'unlink', 'command', 'unlink', 'unlink', 18, 1, 16, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Выбор шрифта', 'fontselect', 'command', 'fontselect', 'fontselect', 18, 3, 2, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Размер шрифта', 'fontsizeselect', 'command', 'fontsizeselect', 'fontsizeselect', 18, 1, 19, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Стиль', 'styleselect', 'command', 'styleselect', 'styleselect', 18, 3, 1, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Новый документ', 'newdocument', 'command', 'newdocument', 'newdocument', 18, 1, 4, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Зачеркнутый', 'strikethrough', 'command', 'strikethrough', 'strikethrough', 18, 1, 6, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Вправо', 'indent', 'command', 'indent', 'indent', 18, 1, 11, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Влево', 'outdent', 'command', 'outdent', 'outdent', 18, 1, 10, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Отмена', 'undo', 'command', 'undo', 'undo', 18, 1, 1, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Повтор', 'redo', 'command', 'redo', 'redo', 18, 1, 2, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Горизонтальная линия', 'hr', 'command', 'hr', 'hr', 18, 2, 1, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'HTML', 'html', 'command', 'code', 'code', 18, 1, 20, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Нумерованный список', 'numlist', 'command', 'numlist', 'numlist', 18, 1, 10, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Маркированный список', 'bullist', 'command', 'bullist', 'bullist', 18, 1, 9, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Буфер обмена', 'clipboard', 'command', 'cut,copy,paste', 'clipboard', 18, 1, 16, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Подстрочный', 'sub', 'command', 'sub', 'sub', 18, 2, 2, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Надстрочный', 'sup', 'command', 'sup', 'sup', 18, 2, 3, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Контуры', 'visualaid', 'command', 'visualaid', 'visualaid', 18, 3, 7, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Спецсимволы', 'charmap', 'command', 'charmap', 'charmap', 18, 3, 6, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'По ширине', 'full', 'command', 'justifyfull', 'justifyfull', 18, 1, 14, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'По центру', 'center', 'command', 'justifycenter', 'justifycenter', 18, 1, 12, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Слева', 'left', 'command', 'justifyleft', 'justifyleft', 18, 1, 13, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Справа', 'right', 'command', 'justifyright', 'justifyright', 18, 1, 11, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Удалить форматирование', 'removeformat', 'command', 'removeformat', 'removeformat', 18, 1, 21, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Якорь', 'anchor', 'command', 'anchor', 'anchor', 18, 2, 9, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Формат', 'formatselect', 'command', 'formatselect', 'formatselect', 18, 3, 9, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Изображение', 'image', 'command', 'image', 'image', 18, 1, 17, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__jce_plugins` VALUES(null, 'Ссылка', 'link', 'command', 'link', 'link', 18, 1, 15, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');

# Компонент значков быстрого доступа
CREATE TABLE `#__quickicons` (
  `id` int(11) NOT NULL auto_increment,
  `text` varchar(64) NOT NULL default '',
  `target` varchar(255) NOT NULL default '',
  `icon` varchar(100) NOT NULL default '',
  `ordering` int(10) unsigned NOT NULL default '0',
  `new_window` tinyint(1) NOT NULL default '0',
  `published` tinyint(1) unsigned NOT NULL default '0',
  `title` varchar(64) NOT NULL default '',
  `display` tinyint(1) NOT NULL default '0',
  `access` int(11) unsigned NOT NULL default '0',
  `gid` int(3) default '25',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;


# Настройки компонента значков быстрого доступа
INSERT INTO `#__quickicons` VALUES (1, 'Добавить содержимое', 'index2.php?option=com_content&sectionid=0&task=new', '/administrator/templates/joostfree/images/cpanel_ico/add_new.png', 1, 0, 1, 'Добавить новость / статью', 0, 0, 0);
INSERT INTO `#__quickicons` VALUES (2, 'Разделы', 'index2.php?option=com_sections&scope=content', '/administrator/templates/joostfree/images/cpanel_ico/sections.png', 4, 0, 1, 'Управление разделами', 0, 0, 0);
INSERT INTO `#__quickicons` VALUES (3, 'Главная страница', 'index2.php?option=com_frontpage', '/administrator/templates/joostfree/images/cpanel_ico/frontpage.png', 6, 0, 1, 'Управление объектами главной страницы', 0, 0, 0);
INSERT INTO `#__quickicons` VALUES (4, 'Все содержимое сайта', 'index2.php?option=com_content&sectionid=0', '/administrator/templates/joostfree/images/cpanel_ico/all_content.png', 2, 0, 1, 'Управление объектами содержимого', 0, 0, 0);
INSERT INTO `#__quickicons` VALUES (5, 'Статичное содержимое', 'index2.php?option=com_typedcontent', '/administrator/templates/joostfree/images/cpanel_ico/all_typed.png', 3, 0, 1, 'Управление объектами статичного содержимого', 0, 0, 0);
INSERT INTO `#__quickicons` VALUES (6, 'Медиа менеджер', 'index2.php?option=com_jwmmxtd', '/administrator/templates/joostfree/images/cpanel_ico/mediamanager.png', 7, 0, 1, 'Управление медиа файлами', 0, 0, 0);
INSERT INTO `#__quickicons` VALUES (7, 'Категории', 'index2.php?option=com_categories&section=content', '/administrator/templates/joostfree/images/cpanel_ico/categories.png', 5, 0, 1, 'Управление категориями', 0, 0, 0);
INSERT INTO `#__quickicons` VALUES (8, 'Корзина', 'index2.php?option=com_trash', '/administrator/templates/joostfree/images/cpanel_ico/trash.png', 12, 0, 1, 'Управление корзиной удаленных объектов', 0, 0, 0);
INSERT INTO `#__quickicons` VALUES (9, 'Редактор меню', 'index2.php?option=com_menumanager', '/administrator/templates/joostfree/images/cpanel_ico/menu.png', 9, 0, 1, 'Управление объектами меню', 0, 0, 24);
INSERT INTO `#__quickicons` VALUES (10, 'Файловый менеджер', 'index2.php?option=com_joomlaxplorer', '/administrator/templates/joostfree/images/cpanel_ico/filemanager.png', 8, 0, 1, 'Управление всеми файлами', 0, 0, 25);
INSERT INTO `#__quickicons` VALUES (11, 'Пользователи', 'index2.php?option=com_users', '/administrator/templates/joostfree/images/cpanel_ico/user.png', 10, 0, 1, 'Управление пользователями', 0, 0, 24);
INSERT INTO `#__quickicons` VALUES (12, 'Глобальная конфигурация', 'index2.php?option=com_config&hidemainmenu=1', '/administrator/templates/joostfree/images/cpanel_ico/config.png', 13, 0, 1, 'Глобальная конфигурация сайта', 0, 0, 25);
INSERT INTO `#__quickicons` VALUES (13, 'Резервное копирование', 'index2.php?option=com_joomlapack&act=pack&hidemainmenu=1', '/administrator/templates/joostfree/images/cpanel_ico/backup.png', 11, 0, 1, 'Резервное копирование информации сайта', 0, 0, 24);
INSERT INTO `#__quickicons` VALUES (14, 'Очистить весь кэш', 'index2.php?option=com_admin&task=clean_all_cache', '/administrator/templates/joostfree/images/cpanel_ico/clear.png', 14, 0, 1, 'Очистить весь кэш сайта', 0, 0, 24);


# Таблицы компонента Xmap
CREATE TABLE `#__xmap` (
  `name` varchar(30) NOT NULL default '',
  `value` varchar(100) default NULL,
  PRIMARY KEY  (`name`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

# базовые настройки
INSERT INTO `#__xmap` VALUES ('version', '1.0');
INSERT INTO `#__xmap` VALUES ('classname', 'sitemap');
INSERT INTO `#__xmap` VALUES ('expand_category', '1');
INSERT INTO `#__xmap` VALUES ('expand_section', '1');
INSERT INTO `#__xmap` VALUES ('show_menutitle', '1');
INSERT INTO `#__xmap` VALUES ('columns', '1');
INSERT INTO `#__xmap` VALUES ('exlinks', '1');
INSERT INTO `#__xmap` VALUES ('ext_image', 'img_grey.gif');
INSERT INTO `#__xmap` VALUES ('exclmenus', '');
INSERT INTO `#__xmap` VALUES ('includelink', '1');
INSERT INTO `#__xmap` VALUES ('sitemap_default', '1');

# таблица карт xmap
CREATE TABLE `#__xmap_sitemap` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `expand_category` int(11) default NULL,
  `expand_section` int(11) default NULL,
  `show_menutitle` int(11) default NULL,
  `columns` int(11) default NULL,
  `exlinks` int(11) default NULL,
  `ext_image` varchar(255) default NULL,
  `menus` text,
  `exclmenus` varchar(255) default NULL,
  `includelink` int(11) default NULL,
  `usecache` int(11) default NULL,
  `cachelifetime` int(11) default NULL,
  `classname` varchar(255) default NULL,
  `count_xml` int(11) default NULL,
  `count_html` int(11) default NULL,
  `views_xml` int(11) default NULL,
  `views_html` int(11) default NULL,
  `lastvisit_xml` int(11) default NULL,
  `lastvisit_html` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

# таблица расширений xmap
CREATE TABLE IF NOT EXISTS `#__xmap_ext` (
  `id` int(11) NOT NULL auto_increment,
  `extension` varchar(100) NOT NULL,
  `published` int(1) default '0',
  `params` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  CHARACTER SET utf8 COLLATE utf8_general_ci;
# запись о расширении для создания карты контента
INSERT INTO `#__xmap_ext` ( `extension`, `published`, `params`) VALUES ( 'com_content', 1, '-1{expand_categories=1\nexpand_sections=1\nshow_unauth=0\ncat_priority=-1\ncat_changefreq=-1\nart_priority=-1\nart_changefreq=-1}');
INSERT INTO `#__xmap_ext` ( `extension`, `published`, `params`) VALUES ( 'com_weblinks', 1, '');

# таблица хранения конфигураций сайта
CREATE TABLE IF NOT EXISTS `#__config` (
  `id` int(11) NOT NULL auto_increment,
  `group` varchar(255) NOT NULL,
  `subgroup` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` text,
  PRIMARY KEY  (`id`),
  KEY `name` (`name`)
) ENGINE=MYISAM  CHARACTER SET utf8 COLLATE utf8_general_ci;


# расширенные поля профиля пользователя
CREATE TABLE IF NOT EXISTS `#__users_extra` (
  `user_id` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `about` tinytext,
  `location` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icq` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `jabber` varchar(255) NOT NULL,
  `msn` varchar(255) NOT NULL,
  `yahoo` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `mobil` varchar(255) NOT NULL,
  `birthdate` datetime default '0000-00-00 00:00:00',
  PRIMARY KEY  (`user_id`)
) ENGINE=MYISAM  CHARACTER SET utf8 COLLATE utf8_general_ci;

# таблица тэгов
CREATE TABLE `#__content_tags` (
  `id` int(11) NOT NULL auto_increment,
  `obj_id` int(11) NOT NULL,
  `obj_type` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `obj_id` (`obj_id`,`tag`)
) ENGINE=MYISAM  CHARACTER SET utf8 COLLATE utf8_general_ci;


# новые поля в таблицах
ALTER TABLE `#__sections` ADD `templates` text ;
ALTER TABLE `#__categories` ADD `templates` text ;
ALTER TABLE `#__content` ADD `templates` VARCHAR( 255 ) NOT NULL ;
# RC3
ALTER TABLE `#__content_tags` ADD INDEX ( `obj_type` );
ALTER TABLE `#__core_acl_aro_groups` DROP INDEX `parent_id_aro_groups`;
ALTER TABLE `#__session` ADD INDEX ( `time` );
ALTER TABLE `#__session` DROP PRIMARY KEY, ADD PRIMARY KEY ( `session_id` ( 64 ) );
# com_banners
ALTER TABLE `#__banners_categories` ADD INDEX ( `published` );
ALTER TABLE `#__banners_clients` ADD INDEX ( `published` );
ALTER TABLE `#__banners` ADD INDEX `ibx_select` (`state` ,`last_show` ,`msec` ,`publish_up_date` ,`publish_up_time` ,`publish_down_date` ,`publish_down_time` ,`reccurtype` ,`reccurweekdays` ( 2 ) ,`access`);
# 1.3.0.1
ALTER TABLE `#__content_frontpage` ADD INDEX ( `ordering` );
ALTER TABLE `#__sections` ADD INDEX ( `access` );
ALTER TABLE `#__sections` ADD INDEX ( `published` );
ALTER TABLE `#__content` ADD INDEX ( `hits` );

# 1.3.0.4
ALTER TABLE `#__core_acl_aro` CHANGE `value` `value` INT( 11 ) NOT NULL;
# 1.3.0.5
ALTER TABLE `#__users` CHANGE `username` `username` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL;