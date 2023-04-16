# Sherocommerce Docker for magento 2 'Fleck and Stenner' 

The images are maintained by sherocommerce. For issues you should contact: jcowie@sherocommerce.com or rafael@sherocommerce.com

This docker configuration has the following options
   - php-fpm
   - nginx
   - mysql
   - elasticsearch
   - redis
   - mailhog

Before installing the project, make sure you have warden installed. To install warden follow these steps: https://sherod.atlassian.net/wiki/spaces/OP/pages/861372749/Warden+setup+new+docker

# Known local issues

1) No issues.

## Setup docker

To setup this version of docker you have to follow the steps bellow.

1) ```Download``` or ```clone``` the code from bitbucket.

1a) If you are using fedora or ubuntu you need to do the following extra steps (Do not do them if you are using MacOs).

- Add the following domains to your /etc/hosts file. `127.0.0.1 flecksystems.local-fleckandstenner.test stennerpumpparts.local-fleckandstenner.test`
- Open the file .env on the root of the project and change `WARDEN_ENV_TYPE` to `magento2` https://share.getcloudapp.com/L1ugo1XD
- Ignore the file from git so you don't accidentally push it. `git update-index --assume-unchanged .env`

2) Run `composer install --ignore-platform-reqs`. Make sure you have the correct keys for the project. The best thing you can do is to create an auth.json file on the project root dir and put the keys from the production server.

3) Run ```warden up``` . This command will start the warden containers.

4) Generate all certificates for all domains.
    
- `warden sign-certificate flecksystems.local-fleckandstenner.test`
- `warden sign-certificate stennerpumpparts.local-fleckandstenner.test`

5) Run ```warden env up -d``` . This command will generate the project containers.

6) Run ```warden sync start``` . This command will start the sync session between the host and the container. (Do not run this if you are using ubuntu or fedora)

7) To import the database you need to open a tunnel.

7a) First you need to find the code of the database container. To find it run ``docker ps``. On the list you need the container with the `db` id: https://share.getcloudapp.com/mXuqxvjn . Normally the container name should be `fleckandstenner_db_1` but double check just to make sure. 

7b) Open the tunnel from the host: Run `ssh tunnel.warden.test -L 3318:fleckandstenner_db_1:3306 -N &`. If you get an error while you try to open the tunnel run the following commands and try again:

7b1) `ssh-keygen -R [127.0.0.1]:2222`

7b2) `ssh tunnel.warden.test` accept the connection and then exit.

7b3) Try the step 6 once more. 

7c) Import the database using magedbm2. Run `magedbm2 get fleckandstenner_local --db-host=127.0.0.1 --db-port=3318 --db-user=root --db-pass=magento --db-name=magento`

8) If you wish to get the images you can get them from QA - UAT - LIVE by running this command: `warden sync-images server.live /var/www/shared-images/media/wysiwyg pub/media`

To access your docker container you can use `warden shell` .

9) If you want to get the database from the UAT server you can follow these steps/

9.1) `ssh uatfleck@sip4-1239.nexcess.net`

9.2) `cd uat-flecksystems.shero.io/current/`

9.3) `n98-magerun2 db:dump ~/uat-dump-2020-03-24.sql`

9.4) `scp uatfleck@sip4-1239.nexcess.net:/home/uatfleck/uat-dump-2020-03-24.sql ~/Desktop/`

9.5) `Import the database on local magento`

9.6) `Change base urls using the warden shell and n98 tool`

9.7) `Clear cache`

After having your project up and running you can the use following ```env.php``` since it has all configurations. 

** NOTE ** Replace the crypt key with the one from QA or UAT. For security reasons the crypt key is removed.

```
<?php

return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'crypt' => [
        'key' => '< ! get the key from the QA or UAT ! >'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'db',
                'dbname' => 'magento',
                'username' => 'root',
                'password' => 'magento',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1'
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'production',
    'http_cache_hosts' => [
        [
            'host' => 'varnish',
            'port' => '80'
        ]
    ],
    'session' => [
        'save' => 'redis',
        'redis' => [
            'host' => 'redis',
            'port' => '6379',
            'password' => '',
            'timeout' => '2.5',
            'persistent_identifier' => '',
            'database' => '2',
            'compression_threshold' => '2048',
            'compression_library' => 'gzip',
            'log_level' => '1',
            'max_concurrency' => '20',
            'break_after_frontend' => '5',
            'break_after_adminhtml' => '30',
            'first_lifetime' => '600',
            'bot_first_lifetime' => '60',
            'bot_lifetime' => '7200',
            'disable_locking' => '0',
            'min_lifetime' => '60',
            'max_lifetime' => '2592000',
            'sentinel_master' => '',
            'sentinel_servers' => '',
            'sentinel_connect_retries' => '5',
            'sentinel_verify_master' => '0'
        ]
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '40d_',
                'backend' => 'Cm_Cache_Backend_Redis',
                'backend_options' => [
                    'server' => 'redis',
                    'database' => '0',
                    'port' => '6379',
                    'password' => '',
                    'compress_data' => '1',
                    'compression_lib' => ''
                ]
            ],
            'page_cache' => [
                'id_prefix' => '40d_',
                'backend' => 'Cm_Cache_Backend_Redis',
                'backend_options' => [
                    'server' => 'redis',
                    'database' => '1',
                    'port' => '6379',
                    'password' => '',
                    'compress_data' => '0',
                    'compression_lib' => ''
                ]
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'google_product' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [

    ],
    'install' => [
        'date' => 'Wed, 08 Jan 2020 14:23:18 +0000'
    ]
];
```

# URLS

- store 1: https://flecksystems.local-fleckandstenner.test
- store 2: https://stennerpumpparts.local-fleckandstenner.test
- email: https://mailhog.local-fleckandstenner.test

# Deployments

This project is using capistrano to make deployments on the following environments.
   - QA -> DEVELOP BRANCH
   - UAT -> DEVELOP BRANCH
   - PRODUCTION -> MASTER BRANCH
   
To be able to deploy on each of those environments you will need to have the following records on your `~/.sssh/config` file.

Host fleck.production
  Hostname 78980cc911.nxcli.net
  User a09128f6_1
  IdentityFile ~/.ssh/id_rsa
  ServerAliveInterval 120
  
Host fleck.uat
  Hostname sip4-1239.nexcess.net
  User uatfleck
  IdentityFile ~/.ssh/id_rsa
  ServerAliveInterval 120
  
Host fleck.qa
  Hostname sip4-1239.nexcess.net
  User qaflecks
  IdentityFile ~/.ssh/id_rsa

After adding those records you will need to test if you can access those environments. To do so you can try the following.
   - `ssh fleck.qa`
   - `ssh fleck.uat`
   - `ssh fleck.production`

If you can't connect to those environments then you have to contact the Team Lead or the DevOps Lead of the project so he/she can whitelist you on the server.
If you are able to connect then you can proceed to the next step.

All the environments are listed on this folder `cap/deploy`. Inside those folder you will find the file names that represent the environments.
For example you could possibly have this file `qa.rb` . This file represents the QA environments and also holds all the QA server configurations like root path, ssh configuration etc.

To deploy on the environments you have to run the following commands.
   - QA -> `cap qa deploy`
   - UAT -> `cap uat deploy`
   - PRODUCTION -> `cap production deploy`

The deployment will generate a log file that can be found here: `log/capistrano.log`.

