# Advanced image uploader

## Setup for local development

### First time setup

Clone the repository to your device and cd into it
``` bash 
git clone https://github.com/Ismail020/advanced-image-uploader.git && cd "$(basename "$_" .git)"
```

Copy the .env.example and change the copied file name to .env
```bash
cp .env.example .env
```

Install composer packages with
```bash
composer install
```

Generate an app key (dont use on production or staging)
```bash
php artisan key:generate
```

Link the storage
```bash
php artisan storage:link
```

Add a local database matching DB_DATABASE in .env — default: 'image_uploader'
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=image_uploader
DB_USERNAME=root
DB_PASSWORD=
```

Migrate and seed the tables to your database
```bash
php artisan migrate:fresh --seed
```

Start environment
```bash
php artisan serve
```

Start the development server
```bash
npm run dev
```