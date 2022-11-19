php artisan make:controller PagesController --resource

php artisan storage:link
php artisan make:factory PostFactory

php artisan tinker
\App\Models\Post::factory()->create();
\App\Models\Post::factory()->count(2)->create();

php artisan route:list

php artisan make:rule Uppercase
php artisan make:request CreateValidationRequest

php artisan clear-compiled

php artisan up
php artisan down // maintenance

php artisan env
php artisan --version
php artisan optimize
php artisan cache:clear
php artisan auth:clear-resets //reset token
php artisan key:generate
