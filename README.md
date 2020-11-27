# Laravel Docker Template

A simple template environment instsaller for Laravel.

## 1. What's included

- **Docker**
- **Nginx**
- **MariaDB**
- **Redis**
- **Supervisor**
- **Cron**
- **Swagger**
- **PHPUnit Cover Generate**

## 2. How to Start

Simple! All you have to do is to follow these 3 steps:

### 2.1 Create a new Laravel project

You can start with any Laravel stack you want, but in this example let's keep it simple.

If you are using [Laravel Installer](https://github.com/laravel/installer)

```sh
laravel new src
```

or with composer

```sh
composer create-project --prefer-dist laravel/laravel src
```

### 2.2 Run the installer

Go to `assets` folder and run the `install` file

```sh
cd assets/
```

```sh
chmod +x installer
```

```sh
./installer
```

### 2.3 Run Docker Compose

Back to the root folder, just run the `docker-compose.yml` file

```sh
docker-compose up --build -d
```

That's it!

## 3. Wait, what just happened

Well, i told you that was simple. If you wanna know more, read the [full explained documentation](https://github.com/thshiro/laravel-docker-template/assets/docs).
