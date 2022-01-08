## Usage

```bash
git clone https://github.com/Ir001/quiz-laravel.git
cd quiz-laravel
cp .env.example .env
# Edit Cofiguration DB in .env file
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed ProductSeeder

# Pagination
# http://127.0.0.1:8000/api/public/product/?page={page}

# Group By Category 
# http://127.0.0.1:8000/api/public/product/category/{category_id}
```
