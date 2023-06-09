<?php
// site root path
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));

// plugin directory (relative path)
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');

// theme directory (relative path)
define('__TYPECHO_THEME_DIR__', '/usr/themes');

// admin directory (relative path)
define('__TYPECHO_ADMIN_DIR__', '/admin/');

// register autoload
require_once __TYPECHO_ROOT_DIR__ . '/var/Typecho/Common.php';

// init
\Typecho\Common::init();

// config db
$db = new \Typecho\Db($_ENV["ADAPTER_NAME"], $_ENV["PREFIX"]);
$db->addServer(array (
  'host' => $_ENV["HOST"],
  'user' => $_ENV["USERNAME"],
  'password' => $_ENV["PASSWORD"],
  'charset' => $_ENV["CHARSET"],
  'port' => $_ENV["PORT"],
  'database' => $_ENV["DATABASE"]
), \Typecho\Db::READ | \Typecho\Db::WRITE);
\Typecho\Db::set($db);
