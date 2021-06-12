## Guides

1. Clone the Repository
2. Run Composer Install
3. Configure the .env with your local database
4. Kindly extract the attached zip folder inside `storage/app/public/productImages` folder. So that the product image will be placed inside `storage/app/public/productImages` folder
5. Run `php artisan storage:link` command
6. Run `php artisan migrate --seed` command for migrating the database files and seeders
7. Since the above command will run the demo records into the database for the products
8. For compiling the assets run the following command `npm install & npm run dev`
9. As a result of laravel mix, you can access the `/products` route to check the product lists
