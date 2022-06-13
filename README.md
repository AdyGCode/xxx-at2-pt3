# NMT Laravel Plus Base Project

Starter Project for students at North Metropolitan TAFE

Contains:

- Laravel 9,
- MongoDB,
- MariaDB, - *we use MariaDB to replace MySQL for our work at NMT*
- Minio,
- Selenium,
- Redis,
- Memcached,
- MailHog,
- Mongo-Express.

# Installation

1) Create your own project as normal, replacing `example-app`
   with the name of your application.
    - `curl -s https://laravel.build/example-app?with=mariadb | bash`
2) Perform `sail up` to run the base application
3) Run the command: `sail artisan vendor:publish --tag=sail-docker`
4) Perform `sail down` (or use `CTRL`+`C`) to stop the container
5) Replace the existing `docker-compose.yaml` with the one from this
   project.
6) Replace the existing `docker/8.1/Dockerfile` with the one from your
   project.
7) Perform `sail up` to re-run the application. It should now have
   mongodb and mongo-express running as part of the development
   environment.

## Modify the `Dockerfile`

Open the `docker/8.1/Dockerfile`, ensure that these lines are present:

```dockerfile
RUN setcap "cap_net_bind_service=+ep" /usr/bin/php8.1

RUN pecl install mongodb
RUN echo "extension=mongodb.so" > /etc/php/8.1/cli/php.ini

RUN groupadd --force -g $WWWGROUP sail
RUN useradd -ms /bin/bash --no-user-group -g $WWWGROUP -u 1337 sail
```

The `docker-compose.yaml` file should not have any issues, and it includes the required MongoDB,
Mongo-Express and other service details.

# Additional Laravel Packages

- Laravel Breeze (laravel/breeze)
- Jensseger's MongoDB: (jenssegers/mongodb)
- Laravel Debugbar (barryvdh/laravel-debugbar)

Install these using the following:

```shell
sail composer require laravel/breeze
sail composer require jenssegers/mongodb
sail composer require --dev barryvdh/laravel-debugbar
```

Install the Breeze components as required:

```shell
sail artisan breeze:install
```

Run the npm installer:

```shell
sail npm install 
```

### Add Jenssegers/MongoDB to the App.php config:

Locate the lines:

```php
        /*
         * Package Service Providers...
         */
        ```

Add the following immediately after the `*/`:

```php
        Jenssegers\Mongodb\MongodbServiceProvider::class,
```

## Publish package configurations

Each publication of a package configuration is optional. It will be
dependent on your project's requirements.

```shell
sail artisan vendor:publish --tag=ignition-config 
sail artisan vendor:publish --tag=laravel-errors  
sail artisan vendor:publish --tag=laravel-mail
sail artisan vendor:publish --tag=laravel-notifications  
sail artisan vendor:publish --tag=laravel-pagination
sail artisan vendor:publish --tag=sanctum-config 
sail artisan vendor:publish --tag=sanctum-migrations
```

Run the following commands:

```shell

  ```

## Browsers Sync for Development

Run the command:

```shell
sail artisan sail:publish
```

Add the following lines to `webpack.mix.js`:

```js
mix.browserSync({
    proxy: 'localhost',
    open: false,
});
```

Modify the docker-compose.yaml file and add `- 3000:3000` as shown below:

```yaml
        ports:
            - '${APP_PORT:-80}:80'
            - '${HMR_PORT:-8080}:8080'
            - 3000:3000
```

> Note - this is already done for you in the docker-compose file in this project.

Perform a sail restart:

```shell
sail restart
```

In your second CLI re-run Mix:

```shell
 sail npm install && sail npm install && sail npm run watch-poll
```

Open browser to `http://localhost:3000` to have the browser sync to the development.

> Tip found at https://blog.devgenius.io/quick-tip-laravel-mix-hot-reloading-in-sail-with-browsersync-555b6c97bca3

# Configurations

## `config/database.php` File

Edit this file and make sure that a section for MongoDB is present in the `connections`
details (Note there is a TO DO for this in the example file):

```php
        'mongodb' => [
            'driver' => 'mongodb',
            'url' => env('MONGO_URL'),
            'host' => env('MONGO_HOST', 'localhost'),
            'port' => env('MONGO_PORT', '27017'),
            'database' => env('MONGO_DATABASE', 'forge'),
            'username' => env('MONGO_USERNAME', 'forge'),
            'password' => env('MONGO_PASSWORD', ''),
            # 'dsn' => env('MONGO_URI',
            # 'mongodb+srv://username:password@<atlas-cluster-uri>/myappdb?retryWrites=true&w=majority'),
            'options' => [
                // here you can pass more settings to the Mongo Driver Manager
                // see https://www.php.net/manual/en/mongodb-driver-manager.construct.php under "Uri Options" for a list of complete parameters that you can use

                'database' => env('DB_AUTHENTICATION_DATABASE', 'admin'), // required with Mongo 3+
            ],
        ],
```

# Users

The users are built in, but a few changes are made to make use of
the MongoDB connections.

Add Timezone to User migrations and model.

```shell
sail artisan make:migration ModifyUserAddTimeZone
```

The new migration will contain:

```PHP
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('timezone', 64)
                  ->nullable()
                  ->default('Australia/Perth');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('timezone',);
        });
    }
```

## Data Seeders

```shell
sail artisan make:seeder UsersSeeder 
```

The `database/seeders/UserSeeder.php` file contains a number of demo
users for use in testing and development. Feel free to copy this
over the newly added UserSeeder file.

Remember to add the UserSeeder call to the DatabaseSeeder class.

# Cars Model/Migration/etc

```shell
 sail artisan make:model Car -a -r
```

# Collectors Model/Migration/etc

```shell
 sail artisan make:model Collector -a -r
```

The Collectors are given as an example of using MongoDB for CRUD etc.

## Create & Seed

To re-run and reseed the database creations, remember that when developing
you *usually* may execute:

```shell
sail artisan migrate:fresh --seed --step
```

# Other changed locations

Check the files named below, or in each of the following folders to see which have changed:

- config
- database
- resource/css resource/js resource/sass resource/views
- .env
- docker-compose.yml
- webpack.mix.js
- package.json
- composer.json
- .gitignore
- routes/web.php
- app/Http/Requests
- app/Http/Controllers
- app/Models

# TO DO

Look for the TODO in code that is not part of the vendor or node_modules.

These are items that need to be done.

# Admin Pages

Pages to access when using Laravel in Docker (plus extras).

- Main site: http://localhost or browser sync http://localhost:3000
- Mongo Express: http://localhost:8282
- MailHog: http://localhost:8025
- Minio: http://localhost:9000 (sail/password)
- Meilisearch: http://localhost:7700/
- phpMyAdmin: http://localhost:8181 *TODO: resolve login / hostname issues*
