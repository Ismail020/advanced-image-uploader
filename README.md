# Advanced image uploader

### Setup For local development

#### First time Setup

``` bash 
# Clone the repository to your device and cd into it
git clone https://github.com/Ismail020/advanced-image-uploader.git && cd "$(basename "$_" .git)"
```

```bash
# Copy the .env.example and change the copied file name to .env
cp .env.example .env
```

```bash
# Install composer packages with
composer install
```

```bash
# Generate an app key (dont use on production or staging)
php artisan key:generate
```

```bash
# Link the storage
php artisan storage:link
```

```bash
#Add a local database matching DB_DATABASE in .env — default: 'image_uploader'
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=image_uploader
DB_USERNAME=root
DB_PASSWORD=
```

```bash
# Migrate and seed the tables to your database
php artisan migrate:fresh --seed
```

```bash
# Start Environment
php artisan serve
```