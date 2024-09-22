<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' =>
  array (
    0 =>
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 =>
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'oc6jtb7wf4fu',
  'passwordsalt' => '5v4LEvpg7DyTKImu2CYjH5Da3SpwEu',
  'secret' => 'OJzVTUwkpdVGiBG1Zj70lEsNlBX5PqpKZPjtEGyLZWVJj0JM',
  'trusted_domains' =>
  array (
    0 => 'cloud.serverdemo.net',
  ),
  'trusted_proxies' =>
  array (
    0 => '172.18.0.4',
    1 => '172.16.0.10',
  ),
  'overwriteprotocol' => 'https',
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '29.0.6.1',
  'overwrite.cli.url' => 'https://cloud.serverdemo.net',
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'changeme',
  'installed' => true,
  'maintenance_window_start' => 1,
  'allow_local_remote_servers' => true,
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' =>
  array (
    'host' => 'redis',
    'password' => '',
    'port' => 6379,
  ),
  'loglevel' => 0,
  'defaultapp' => '',
  'skeletondirectory' => '',
);
