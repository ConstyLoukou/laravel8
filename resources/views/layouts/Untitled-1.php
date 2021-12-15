<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
        <?php

        use Illuminate\Support\Str;
        
        return [
        
            /*
            |--------------------------------------------------------------------------
            | Default Session Driver
            |--------------------------------------------------------------------------
            |
            | This option controls the default session "driver" that will be used on
            | requests. By default, we will use the lightweight native driver but
            | you may specify any of the other wonderful drivers provided here.
            |
            | Supported: "file", "cookie", "database", "apc",
            |            "memcached", "redis", "dynamodb", "array"
            |
            */
        
            'driver' => env('SESSION_DRIVER', 'file'),
        
            /*
            |--------------------------------------------------------------------------
            | Session Lifetime
            |--------------------------------------------------------------------------
            |
            | Here you may specify the number of minutes that you wish the session
            | to be allowed to remain idle before it expires. If you want them
            | to immediately expire on the browser closing, set that option.
            |
            */
        
            'lifetime' => env('SESSION_LIFETIME', 120),
        
            'expire_on_close' => false,
        
            /*
            |--------------------------------------------------------------------------
            | Session Encryption
            |--------------------------------------------------------------------------
            |
            | This option allows you to easily specify that all of your session data
            | should be encrypted before it is stored. All encryption will be run
            | automatically by Laravel and you can use the Session like normal.
            |
            */
        
            'encrypt' => false,
        
            /*
            |--------------------------------------------------------------------------
            | Session File Location
            |--------------------------------------------------------------------------
            |
            | When using the native session driver, we need a location where session
            | files may be stored. A default has been set for you but a different
            | location may be specified. This is only needed for file sessions.
            |
            */
        
            'files' => storage_path('framework/sessions'),
        
            /*
            |--------------------------------------------------------------------------
            | Session Database Connection
            |--------------------------------------------------------------------------
            |
            | When using the "database" or "redis" session drivers, you may specify a
            | connection that should be used to manage these sessions. This should
            | correspond to a connection in your database configuration options.
            |
            */
        
            'connection' => env('SESSION_CONNECTION', null),
        
            /*
            |--------------------------------------------------------------------------
            | Session Database Table
            |--------------------------------------------------------------------------
            |
            | When using the "database" session driver, you may specify the table we
            | should use to manage the sessions. Of course, a sensible default is
            | provided for you; however, you are free to change this as needed.
            |
            */
        
            'table' => 'sessions',
        
            /*
            |--------------------------------------------------------------------------
            | Session Cache Store
            |--------------------------------------------------------------------------
            |
            | While using one of the framework's cache driven session backends you may
            | list a cache store that should be used for these sessions. This value
            | must match with one of the application's configured cache "stores".
            |
            | Affects: "apc", "dynamodb", "memcached", "redis"
            |
            */
        
            'store' => env('SESSION_STORE', null),
        
            /*
            |--------------------------------------------------------------------------
            | Session Sweeping Lottery
            |--------------------------------------------------------------------------
            |
            | Some session drivers must manually sweep their storage location to get
            | rid of old sessions from storage. Here are the chances that it will
            | happen on a given request. By default, the odds are 2 out of 100.
            |
            */
        
            'lottery' => [2, 100],
        
            /*
            |--------------------------------------------------------------------------
            | Session Cookie Name
            |--------------------------------------------------------------------------
            |
            | Here you may change the name of the cookie used to identify a session
            | instance by ID. The name specified here will get used every time a
            | new session cookie is created by the framework for every driver.
            |
            */
        
            'cookie' => env(
                'SESSION_COOKIE',
                Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
            ),
        
            /*
            |--------------------------------------------------------------------------
            | Session Cookie Path
            |--------------------------------------------------------------------------
            |
            | The session cookie path determines the path for which the cookie will
            | be regarded as available. Typically, this will be the root path of
            | your application but you are free to change this when necessary.
            |
            */
        
            'path' => '/',
        
            /*
            |--------------------------------------------------------------------------
            | Session Cookie Domain
            |--------------------------------------------------------------------------
            |
            | Here you may change the domain of the cookie used to identify a session
            | in your application. This will determine which domains the cookie is
            | available to in your application. A sensible default has been set.
            |
            */
        
            'domain' => env('SESSION_DOMAIN', null),
        
            /*
            |--------------------------------------------------------------------------
            | HTTPS Only Cookies
            |--------------------------------------------------------------------------
            |
            | By setting this option to true, session cookies will only be sent back
            | to the server if the browser has a HTTPS connection. This will keep
            | the cookie from being sent to you when it can't be done securely.
            |
            */
        
            'secure' => env('SESSION_SECURE_COOKIE'),
        
            /*
            |--------------------------------------------------------------------------
            | HTTP Access Only
            |--------------------------------------------------------------------------
            |
            | Setting this value to true will prevent JavaScript from accessing the
            | value of the cookie and the cookie will only be accessible through
            | the HTTP protocol. You are free to modify this option if needed.
            |
            */
        
            'http_only' => true,
        
            /*
            |--------------------------------------------------------------------------
            | Same-Site Cookies
            |--------------------------------------------------------------------------
            |
            | This option determines how your cookies behave when cross-site requests
            | take place, and can be used to mitigate CSRF attacks. By default, we
            | will set this value to "lax" since this is a secure default value.
            |
            | Supported: "lax", "strict", "none", null
            |
            */
        
            'same_site' => 'lax',
        
        ];
         36  config/view.php 
        @@ -0,0 +1,36 @@
        <?php
        
        return [
        
            /*
            |--------------------------------------------------------------------------
            | View Storage Paths
            |--------------------------------------------------------------------------
            |
            | Most templating systems load templates from disk. Here you may specify
            | an array of paths that should be checked for your views. Of course
            | the usual Laravel view path has already been registered for you.
            |
            */
        
            'paths' => [
                resource_path('views'),
            ],
        
            /*
            |--------------------------------------------------------------------------
            | Compiled View Path
            |--------------------------------------------------------------------------
            |
            | This option determines where all the compiled Blade templates will be
            | stored for your application. Typically, this is within the storage
            | directory. However, as usual, you are free to change this value.
            |
            */
        
            'compiled' => env(
                'VIEW_COMPILED_PATH',
                realpath(storage_path('framework/views'))
            ),
        
        ];
         47  database/factories/UserFactory.php 
        @@ -0,0 +1,47 @@
        <?php
        
        namespace Database\Factories;
        
        use App\Models\User;
        use Illuminate\Database\Eloquent\Factories\Factory;
        use Illuminate\Support\Str;
        
        class UserFactory extends Factory
        {
            /**
             * The name of the factory's corresponding model.
             *
             * @var string
             */
            protected $model = User::class;
        
            /**
             * Define the model's default state.
             *
             * @return array
             */
            public function definition()
            {
                return [
                    'name' => $this->faker->name(),
                    'email' => $this->faker->unique()->safeEmail(),
                    'email_verified_at' => now(),
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                    'remember_token' => Str::random(10),
                ];
            }
        
            /**
             * Indicate that the model's email address should be unverified.
             *
             * @return \Illuminate\Database\Eloquent\Factories\Factory
             */
            public function unverified()
            {
                return $this->state(function (array $attributes) {
                    return [
                        'email_verified_at' => null,
                    ];
                });
            }
        }
    
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}



<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
 32  database/migrations/2014_10_12_100000_create_password_resets_table.php 
@@ -0,0 +1,32 @@
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}
 36  database/migrations/2019_08_19_000000_create_failed_jobs_table.php 
@@ -0,0 +1,36 @@
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
}
 36  database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php 
@@ -0,0 +1,36 @@
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
    }
}
 36  database/migrations/2021_10_25_174106_students_table.php 
@@ -0,0 +1,36 @@
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('spécialité');
            $table->string('sexe');
            $table->integer('note_fin_formation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
 18  database/seeders/DatabaseSeeder.php 
@@ -0,0 +1,18 @@
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
    }
}
 18  package.json 
@@ -0,0 +1,18 @@
{
    "private": true,
    "scripts": {
        "dev": "npm run development",
        "development": "mix",
        "watch": "mix watch",
        "watch-poll": "mix watch -- --watch-options-poll=1000",
        "hot": "mix watch --hot",
        "prod": "npm run production",
        "production": "mix --production"
    },
    "devDependencies": {
        "axios": "^0.21",
        "laravel-mix": "^6.0.6",
        "lodash": "^4.17.19",
        "postcss": "^8.1.14"
    }
}
 31  phpunit.xml 
@@ -0,0 +1,31 @@
<?xml version="1.0" encoding="UTF-8"?>
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="./vendor/phpunit/phpunit/phpunit.xsd"
         bootstrap="vendor/autoload.php"
         colors="true"
>
    <testsuites>
        <testsuite name="Unit">
            <directory suffix="Test.php">./tests/Unit</directory>
        </testsuite>
        <testsuite name="Feature">
            <directory suffix="Test.php">./tests/Feature</directory>
        </testsuite>
    </testsuites>
    <coverage processUncoveredFiles="true">
        <include>
            <directory suffix=".php">./app</directory>
        </include>
    </coverage>
    <php>
        <server name="APP_ENV" value="testing"/>
        <server name="BCRYPT_ROUNDS" value="4"/>
        <server name="CACHE_DRIVER" value="array"/>
        <!-- <server name="DB_CONNECTION" value="sqlite"/> -->
        <!-- <server name="DB_DATABASE" value=":memory:"/> -->
        <server name="MAIL_MAILER" value="array"/>
        <server name="QUEUE_CONNECTION" value="sync"/>
        <server name="SESSION_DRIVER" value="array"/>
        <server name="TELESCOPE_ENABLED" value="false"/>
    </php>
</phpunit>
 219  project_for_igs.sql 
@@ -0,0 +1,219 @@
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 26 oct. 2021 à 09:21
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `project_for_igs`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_25_174106_students_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spécialité` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note_fin_formation` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`id`, `nom`, `prenom`, `spécialité`, `sexe`, `note_fin_formation`, `created_at`, `updated_at`) VALUES
(11, 'KOUADIO', 'BEKANTY', 'REFERENT DIGITAL', 'M', 8, '2021-10-25 23:57:57', '2021-10-25 23:57:57'),
(12, 'ABRAHAM', 'KOUASSI', 'REFERENT DIGITAL', 'M', 9, '2021-10-25 23:58:29', '2021-10-25 23:58:29'),
(13, 'GNETO', 'DETO', 'DATA IA', 'M', 10, '2021-10-25 23:59:01', '2021-10-25 23:59:01'),
(15, 'TRAORE', 'ALASSANE', 'DEV WEB / MOBILE', 'M', 6, '2021-10-26 00:53:44', '2021-10-26 00:54:14'),
(16, 'KACOU', 'EKRA', 'DEV WEB / MOBILE', 'M', 2, '2021-10-26 00:57:36', '2021-10-26 00:57:47');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
 19  routes/api.php 
@@ -0,0 +1,19 @@
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 18  routes/channels.php 
@@ -0,0 +1,18 @@
<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
 19  routes/console.php 
@@ -0,0 +1,19 @@
<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
 19  routes/web.php 
@@ -0,0 +1,19 @@
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('students', 'App\Http\Controllers\StudentController');
 21  server.php 
@@ -0,0 +1,21 @@
<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
 1  storage/framework/sessions/E0gKmpX7d7pqsGIxzKNG298ih4AkOkxqsaNE1nqr 
@@ -0,0 +1 @@
a:3:{s:6:"_token";s:40:"geOG9qmQ7uuYXxsRbNDaQu3BYfgn6ymAzPh4BgMf";s:9:"_previous";a:1:{s:3:"url";s:30:"http://127.0.0.1:8000/students";}s:6:"_flash";a:2:{s:3:"old";a:0:{}s:3:"new";a:0:{}}} 
 1  storage/framework/sessions/hgzZMMEBlVALI3wwZVQOUTnWFKJOz4CWc5pYgUUv 
@@ -0,0 +1 @@
a:3:{s:6:"_token";s:40:"scuJI0WgN5CVEWAhVSE0wKJfRzKPjcXiYXtWkZe6";s:9:"_previous";a:1:{s:3:"url";s:21:"http://127.0.0.1:8000";}s:6:"_flash";a:2:{s:3:"old";a:0:{}s:3:"new";a:0:{}}} 
 1  storage/framework/sessions/pg5V7AWsJ78SoNryLbhTQ1hhBuej2nce91HXatT8 
@@ -0,0 +1 @@
a:3:{s:6:"_token";s:40:"DOtZByhGRvmeuFrdUaUKDL1WvBgE9Nku9tx0yLNH";s:9:"_previous";a:1:{s:3:"url";s:30:"http://127.0.0.1:8000/students";}s:6:"_flash";a:2:{s:3:"old";a:0:{}s:3:"new";a:0:{}}} 
 1  storage/framework/sessions/tA5OReF1UCLFYamCG6KCkIJ27k3NJfAgZ1pLaVpk 
@@ -0,0 +1 @@
a:3:{s:6:"_token";s:40:"e0G03waekwuNXVYxGwrPxFwpW5qecMEWdOb4MlTW";s:9:"_previous";a:1:{s:3:"url";s:54:"http://localhost/my_project_in_laravel/public/students";}s:6:"_flash";a:2:{s:3:"old";a:0:{}s:3:"new";a:0:{}}} 
 58  storage/framework/views/12ced4345d867d1d26e35e1df90c93eff44c71e3.php 
@@ -0,0 +1,58 @@


<?php $__env->startSection('content'); ?>





<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <strong>Whoops!</strong>Veuillez remplir tous les champs. <br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<div class="container admin  back-create margin-create center ">
    <h2>Modifier les informations d'un étudiant</h2>
    <form action="<?php echo e(route('students.update', $student->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="nom">Nom étudiant</label>
                <input type="text" class="form-control" name="nom" value="<?php echo e($student->nom); ?>" id="nom">
            </div>

            <div class="form-group">
                <label for="prenom">Prénom étudiant</label>
                <input type="text" class="form-control" name="prenom" value="<?php echo e($student->prenom); ?>" id="prenom">
            </div>

            <div class="form-group">
                <label for="spec">Spécialité étudiant</label>
                <input type="text" class="form-control" name="spécialité" value="<?php echo e($student->spécialité); ?>" id="spec">
            </div>


            <div class="form-group">
                <label for="sexe">Sexe étudiant</label>
                <input type="text" class="form-control" name="sexe" value="<?php echo e($student->sexe); ?>" id="sexe">
            </div>

            <div class="form-group">
                <label for="note">Note en fin de la formation</label>
                <input type="number" class="form-control" name="note_fin_formation" value="<?php echo e($student->note_fin_formation); ?>" id="note">
            </div>

            <button type="submit" class="btn btn-primary">Valider</button>
            <a href="<?php echo e(route('students.index')); ?>" class="btn btn-primary">Retour</a>


        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\my_project_in_laravel\resources\views/students/edit.blade.php ENDPATH**/ ?> 
 5  storage/framework/views/57370a0090930254870f06aa31ff8a4105d639dc.php 
@@ -0,0 +1,5 @@
<?php $__env->startSection('title', __('Not Found')); ?>
<?php $__env->startSection('code', '404'); ?>
<?php $__env->startSection('message', __('Not Found')); ?>

<?php echo $__env->make('errors::minimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\my_project_in_laravel\vendor\laravel\framework\src\Illuminate\Foundation\Exceptions/views/404.blade.php ENDPATH**/ ?> 
 71  storage/framework/views/7c51c7252d1e3aee0c2b61a3339f5a0389488838.php 
@@ -0,0 +1,71 @@


<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Ajouter un étudiant</h2>
        </div>
        <div class="pull-right">
            <a href="<?php echo e(route('students.index')); ?>" class="btn btn-primary">Retour</a>
        </div>
    </div>
</div>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <strong>Whoops!</strong>There were some problems with your input. <br><br>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<form action="<?php echo e(route('students.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom étudiant:</strong>
                <input type="text" name="nom" class="form-control" placeholder="Nom étudiant">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom étudiant:</strong>
                <input type="text" name="prenom" class="form-control" placeholder="Preom étudiant">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Spécialité étudiant:</strong>
                <input type="text" name="spécialité" class="form-control" placeholder="Spécialité étudiant">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sexe étudiant:</strong>
                <input type="text" name="sexe" class="form-control" placeholder="Sexe étudiant">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Note en fin de formation de l'étudiant:</strong>
                <input type="number" name="note_fin_formation" class="form-control" placeholder="Nom étudiant">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\my_project_in_laravel\resources\views/students/create.blade.php ENDPATH**/ ?> 
 59  storage/framework/views/8069a34adbf9246108ce1667c3450a5b43b5dea8.php 
@@ -0,0 +1,59 @@


<?php $__env->startSection('content'); ?>

<div class="back tp">
    <div class="bd">
        <div class="pull-left">
            <h2>BASE DE DONNEES DES ETUDIANTS D'IGS</h2>
        </div>

        <div class="row">
            <div class="col-lg-12 marge">
                <div class="pull-right">
                    <a href="<?php echo e(route('students.create')); ?>" class="btn btn-success">Ajouter un étudiant</a>
                </div>
            </div>
        </div>
    </div>


    <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
    <?php endif; ?>

    <table class="table table-bordered table-hover col">
        <tr>
            <!-- <th>No</th> -->
            <th>Nom</th>
            <th>Prenom</th>
            <th>Spécialité</th>
            <th>Sexe</th>
            <th>Note fin formation</th>
            <th width="215px">Action</th>
        </tr>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <!-- <td><?php echo e(++$i); ?></td> -->
            <td><?php echo e($student->nom); ?></td>
            <td><?php echo e($student->prenom); ?></td>
            <td><?php echo e($student->spécialité); ?></td>
            <td><?php echo e($student->sexe); ?></td>
            <td><?php echo e($student->note_fin_formation); ?></td>
            <td>
                <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST">
                    <!-- <a href="<?php echo e(route('students.show', $student->id)); ?>" class="btn btn-info">Show</a> -->
                    <a href="<?php echo e(route('students.edit', $student->id)); ?>" class="btn btn-primary">Modifier</a>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\my_project_in_laravel\resources\views/students/index.blade.php ENDPATH**/ ?> 
 39  storage/framework/views/bfbd22bfa8e20d6f0919edafff736f0aad81fb03.php 
@@ -0,0 +1,39 @@
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $__env->yieldContent('title'); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}code{font-family:monospace,monospace;font-size:1em}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}code{font-family:Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-gray-400{--border-opacity:1;border-color:#cbd5e0;border-color:rgba(203,213,224,var(--border-opacity))}.border-t{border-top-width:1px}.border-r{border-right-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-xl{max-width:36rem}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.uppercase{text-transform:uppercase}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.tracking-wider{letter-spacing:.05em}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@-webkit-keyframes spin{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@keyframes  spin{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@-webkit-keyframes ping{0%{transform:scale(1);opacity:1}75%,to{transform:scale(2);opacity:0}}@keyframes  ping{0%{transform:scale(1);opacity:1}75%,to{transform:scale(2);opacity:0}}@-webkit-keyframes pulse{0%,to{opacity:1}50%{opacity:.5}}@keyframes  pulse{0%,to{opacity:1}50%{opacity:.5}}@-webkit-keyframes bounce{0%,to{transform:translateY(-25%);-webkit-animation-timing-function:cubic-bezier(.8,0,1,1);animation-timing-function:cubic-bezier(.8,0,1,1)}50%{transform:translateY(0);-webkit-animation-timing-function:cubic-bezier(0,0,.2,1);animation-timing-function:cubic-bezier(0,0,.2,1)}}@keyframes  bounce{0%,to{transform:translateY(-25%);-webkit-animation-timing-function:cubic-bezier(.8,0,1,1);animation-timing-function:cubic-bezier(.8,0,1,1)}50%{transform:translateY(0);-webkit-animation-timing-function:cubic-bezier(0,0,.2,1);animation-timing-function:cubic-bezier(0,0,.2,1)}}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <div class="flex items-center pt-8 sm:justify-start sm:pt-0">
                    <div class="px-4 text-lg text-gray-500 border-r border-gray-400 tracking-wider">
                        <?php echo $__env->yieldContent('code'); ?>
                    </div>

                    <div class="ml-4 text-lg text-gray-500 uppercase tracking-wider">
                        <?php echo $__env->yieldContent('message'); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\my_project_in_laravel\vendor\laravel\framework\src\Illuminate\Foundation\Exceptions/views/minimal.blade.php ENDPATH**/ ?> 
 133  storage/framework/views/da3dc59aea667f6cefd59a081d5c1f94612422c7.php 
Large diffs are not rendered by default.

 53  storage/framework/views/e0353c0f2b283a3a491f4de92bcc28575d4e1560.php 
@@ -0,0 +1,53 @@


<?php $__env->startSection('content'); ?>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <strong>Whoops!</strong>Veuillez remplir tous les champs. <br><br>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>


<div class="container admin  back-create margin-create center ">
    <h2>Ajouter un étudiant</h2>
    <form action="<?php echo e(route('students.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nom">Nom étudiant</label>
            <input type="text" name="nom" class="form-control" id="nom">
        </div>

        <div class="form-group">
            <label for="prenom">Prenom étudiant</label>
            <input type="text" name="prenom" class="form-control" id="prenom">
        </div>

        <div class="form-group">
            <label for="spec">Spécialité étudiant</label>
            <input type="text" name="spécialité" class="form-control" id="spec">
        </div>

        <div class="form-group">
            <label for="sexe">Sexe étudiant</label>
            <input type="text" name="sexe" class="form-control" id="sexe">
        </div>

        <div class="form-group">
            <label for="note">Note en fin de formation de l'étudiant</label>
            <input type="number" name="note_fin_formation" class="form-control" id="note">
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>
        <a href="<?php echo e(route('students.index')); ?>" class="btn btn-primary">Retour</a>

    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\my_project_in_laravel\resources\views/students/Create.blade.php ENDPATH**/ ?> 
 64  storage/framework/views/ef65ae2cb2158488d170b3f36b9e06d16e444914.php 
@@ -0,0 +1,64 @@
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            background-color: #22a6b3;
        }

        .back{
            background-color: #dff9fb;
            padding: 50px;
            border-radius: 10px;
        }

        .bd{
            display:flex;
        }

        .tp{
            margin-top: 50px;
        }

        .marge{
            margin-left: 15px;
        }

        .admin{
            margin: auto;
            width: 70%;
        }

        .back-create{
            background-color: #dff9fb;
            padding: 30px;
            border-radius:20px;
            box-shadow: 1px 0px 3px 2px white;
        }

        .margin-create{
            margin-top:30px;

        }
    </style>
  </head>
  <body>

        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\my_project_in_laravel\resources\views/students/layout.blade.php ENDPATH**/ ?> 
 1,079  storage/logs/laravel.log 
Large diffs are not rendered by default.

 22  tests/CreatesApplication.php 
@@ -0,0 +1,22 @@
<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
 21  tests/Feature/ExampleTest.php 
@@ -0,0 +1,21 @@
<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
 10  tests/TestCase.php 
@@ -0,0 +1,10 @@
<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}
 18  tests/Unit/ExampleTest.php 
@@ -0,0 +1,18 @@
<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
}
 17  webpack.mix.js 
@@ -0,0 +1,17 @@
const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);