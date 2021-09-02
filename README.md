# wp_original_themes_template
originalテーマを作成するためのテンプレート

.gitignore
```
# ignore everything in the root except the "wp-content" directory.
!wp-content/

# ignore everything in the "wp-content" directory, except:
# "mu-plugins", "plugins", "themes" directory
wp-content/*
!wp-content/mu-plugins/
!wp-content/plugins/
!wp-content/themes/

# ignore these plugins
wp-content/plugins/hello.php

# ignore specific themes
wp-content/themes/twenty*/

# ignore node dependency directories
node_modules/

# ignore log files and databases
*.log
*.sql
*.sqlite

/wp-config.php
/.htaccess
/.htpasswd
/index.php
/license.txt
/readme.html
wp-content/themes/original/style.css
wp-content/themes/original/style.css.map

.history/*

movefile.yml
Movefile

*/.DS_Store
config.codekit3
wp-content/themes/.DS_Store
wp-content/plugins/siteguard/really-simple-captcha/tmp/*
```

wp-config.php 参考
```
<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lxoo7_hoge_dev' );

/** MySQL database username */
define( 'DB_USER', 'lxoo7_hoge_dev' );

/** MySQL database password */
define( 'DB_PASSWORD', '***********' );

/** MySQL hostname */
define( 'DB_HOST', 'public.lxoo7.tyo1.database-hosting.conoha.io' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tZ4Zbc8jbrHUcDpof5ZP5VoAh8Q0oeCjkyjQeEzjrBRuepQTo5ijFhJwVtrmAD5uPBvJ++Yty+P4Uusp0hVDzA==');
define('SECURE_AUTH_KEY',  'Cg9z/mY1aBXmUCcE71LwOrPCiRyRwYGkIF8u6nQadRDgnuhmp/kAO0TGGiCcTrKNrErEzJkIfuaaqAKDni7IQg==');
define('LOGGED_IN_KEY',    'AWUozvDww0I7ybjDcoJ818Utcj3a2BQKFaNuyCY7RI1eELcPaY8fDgPUjiWOoOJHCTQ48xtUaae29BbeS2KcrQ==');
define('NONCE_KEY',        'lP8P/WKFHjeb5elGSfjjE6Zqt3LV6yfBWQ/LMHdF06YwcZHffe6XLi4HXQToS2ENGWA03EqBVufswE5VeIR/8w==');
define('AUTH_SALT',        'H+uoOBTRWfXIIrUytMgcmULuawoC88RuEElVg3Br76m1MTL7EDdm5SR2mUA7lNRabIAo4lbzVn9KDWq2OZNZXQ==');
define('SECURE_AUTH_SALT', 'WblAbLM5oIV4NpFrmcHefpWdVFaKPTlkybny9MmQ0jqKNeOAzjjYBwBNv6Cmw801O4pIBu77OrXblhVuNYE+rQ==');
define('LOGGED_IN_SALT',   'thLifkZBVgvK126sjHD36gL2OsyVPXOz1hKjMQt7cMy/y+lTVIdrssw9v9E/n4J3ydBGOxNquytuLAp7C08ylQ==');
define('NONCE_SALT',       'FehlqWtAbRpfc0+bEBty9NJB3UQr8ChehHL64yNonqPMoxZhFjzLoesdARIKCLArY9h4SfJMdj89jHDfFSAp6Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
```

movefile.yml 参考
```
global:
  sql_adapter: default
local:
  vhost: http://hoge.local
  wordpress_path: /Users/nakashima/Local Sites/hoge/app/public # use an absolute path here
  database:
    name: 'lxoo7_hoge_dev'
    user: 'lxoo7_hoge_dev'
    password: '********' # could be blank, so always use quotes around
    host: 'public.lxoo7.tyo1.database-hosting.conoha.io'
    # port: '4051'
    # mysqldump_options: --column-statistics=0

staging:
  vhost: 	staging-hab2.co
  wordpress_path: /home/c2498038/public_html/staging-hab2.co/hoge # use an absolute path here

  database:
    name: b0xah_hoge_stg
    user: b0xah_hoge_stg
    password: *******
    host: mysql70.conoha.ne.jp
    # port: 3306 # Use just in case you have exotic server config

  exclude:
    - '.git/'
    - '.gitignore'
    - '.gitmodules'
    - '.env'
    - 'node_modules/'
    - 'bin/'
    - 'tmp/*'
    - 'Gemfile*'
    - 'Movefile'
    - 'movefile'
    - 'movefile.yml'
    - 'movefile.yaml'
    - 'wp-config.php'
    - 'wp-content/*.sql.gz'
    - '*.orig'

  ssh:
    host: www231.conoha.ne.jp
    user: c2498038
    port: 8022 # Port is optional

# production:
#   vhost: https://recruit.hoge.com
#   wordpress_path: /home/hoge/www/recruit.hoge.com # use an absolute path here

#   database:
#     name: hoge_recruit
#     user: hoge
#     password: sP8NLjbWc_hMBejg
#     host: mysql57.hoge.sakura.ne.jp
#     mysqldump_options: "--default-character-set=utf8"

#   exclude:
#     - '.git/'
#     - '.gitignore'
#     - '.gitmodules'
#     - '.env'
#     - 'node_modules/'
#     - 'bin/'
#     - 'tmp/*'
#     - 'Gemfile*'
#     - 'Movefile'
#     - 'movefile'
#     - 'movefile.yml'
#     - 'movefile.yaml'
#     - 'wp-config.php'
#     - 'wp-content/*.sql.gz'
#     - '*.orig'

#   ssh:
#     host: hoge.sakura.ne.jp
#     user: hoge
#     rsync_options: "--verbose" # Additional rsync options, optional
#     # port: 8022 # Port is optional
#     # password: f8588u3ew7

```


