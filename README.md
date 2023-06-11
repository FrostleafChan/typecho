see https://github.com/Lete114/Vercel-Typecho Serverless Typecho
随typecho上游更新
in config.inc.php:
```php
/** 定义数据库参数 */
$db = new Typecho_Db($_ENV["ADAPTER_NAME"], $_ENV["PREFIX"]);
$db->addServer(array (
  'host' => $_ENV["HOST"],
  'user' => $_ENV["USERNAME"],
  'password' => $_ENV["PASSWORD"],
  'charset' => $_ENV["CHARSET"],
  'port' => $_ENV["PORT"],
  'database' => $_ENV["DATABASE"],
  'engine' => $_ENV["ENGINE"],
), Typecho_Db::READ | Typecho_Db::WRITE);
Typecho_Db::set($db);
```
