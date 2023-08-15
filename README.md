# Labrestrap
Laravel 10 Starter Kit with Laravel Breeze and Twitter Bootstrap. 
I Change tailwind with bootstrap but use breeze not laravel/ui

## Installation

- Clone this repository
```
git clone https://github.com/abumaryam/labrestrap.git
```
- Run composer
```
composer install
```
- Rename `.env.example` file to .env and edit database configuration in there. After that, run key generate
```
php artisan key:generate
```
- run migration
```
php artisan migrate
```
- run npm
```
npm install
npm run dev
```

## notes

In `node_modules\bootstrap\scss\mixins\_grid.scss` edit  line 59 from: 
```
    width: divide(100%, $count);
```
to:
```
    width: divide(100, $count);
```

