## About El Oyamel

El Oyamel is a school in Zitácuaro, Michoacán. For more datails you can check out their current [webpage](https://sites.google.com/view/oyamel-en-casa/inicio).

In order to satisfy the necessities of the current school's administration, we've built this web application project, which includes a modern and easy-to-use blog control system and a redesigned static web interface to help the teachers, children and their parents to see the information that they need without difficulties.

## Developers

### Pre-requisites

To be able to run the app you will need to install the following software in your local machine. 

- [Apache](http://apache.org/) - Web server (v2.4.x)
- [PHP](https://www.php.net/) - Scripting language (v7.2.x)
- [MySQL] - SQL database manager (v8.0). You can also use MariaDB
- [Composer](https://getcomposer.org/) - Dependency Manager for PHP
- [NodeJS] - Javascript runtime (v14.15.x). It already includes _npm_ which is a package manager

You can also use [xampp](https://www.apachefriends.org/download.html) if you do not want to install Apache, PHP and MySQL manually.

### Installation

Once you hace installed all the pre-requisites you'll need to run the following commands from the _el-oyamel root directory_.

```
composer install
npm install
npm run dev
php artisan migrate
```

Finally, you can run the server with the command:

```
php artisan serve
```

## Built with

- [Laravel](https://laravel.com/) - PHP Framework
- [Jetstream](https://jetstream.laravel.com/) - Authentication package for Laravel 8
- [TailwindCSS](https://tailwindcss.com/) - CSS framework

## Authors

* **Saul Aguilar**
* **Axel Avila**
* **Ivan Blancas**
* **Isaac Valdespino**

We're all students from the [Instituto Tecnológico de Zitácuaro](https://portal.itzitacuaro.edu.mx/), currently in 7th semester of Computational Systems Engineering. 

By the way, we're all extremely high-level hackers.