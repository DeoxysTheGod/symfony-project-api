<div align="center">

# ~~ 🇫 API For Country Flags 🇫 ~~

</div>

<div align="center">
  <br>
  <a href="https://www.php.net/manual/en/"><kbd> <br> PHP doc <br> </kbd></a>&ensp;&ensp;
  <a href="https://symfony.com/doc/current/index.html"><kbd> <br> Symfony doc <br> </kbd></a>&ensp;&ensp;
  <a href="https://getcomposer.org/doc/"><kbd> <br> Composer doc <br> </kbd></a>&ensp;&ensp;
</div><br>

## Informations

This project is a simple API that allows you to get the flags of countries. It is developed with the Symfony framework.

* **php:** `8.3.15`
* **symfony-version:** `7.2.2`
* **composer-version:** `2.8.5`

## Requirements

You need to have the following tools installed on your machine:
* **php:** `8.3.15`
* **symfony:** `7.2.2`
* **composer:** `2.8.5`
* **mysql** or **mariadb**: `8.0.27` or `11.6.2`

## Installation

### step 1: Clone the project

```bash
git clone git@github.com:DeoxysTheGod/symfony-project-api.git
```

### step 2: Install dependencies

```bash
composer install
```

### step 3: Database setup

```bash
php bin/console doctrine:database:create
```
```bash
php bin/console doctrine:migrations:migrate
```
```bash
php bin/console doctrine:fixtures:load
```

### step 4: Run the project

```bash
symfony server:start
```
