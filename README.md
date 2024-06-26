# How to Deploy


- Before installing project, you should ensure that your local machine has PHP and **[Composer](https://getcomposer.org/)** installed


- visit [https://github.com/PeterMangoro/Assessment](https://github.com/PeterMangoro/Assessment) and download the zipped file.

- Extract the compressed file in your prefered folder
- Open command line in the folder you just extracted the App
- run **composer install && npm install && cp .env.example .env && php artisan key:generate && php artisan storage:link**
- run **php artisan serve**
- Open another command line and run **npm run dev**
- Open another command line run **php artisan migrate --seed**
- visit **[http://127.0.0.1:8000](http://127.0.0.1:8000/)** to access the App

-You can switch between dashboard and welcome page by clicking the logo

### Accessing as Admin
- navigate to the **[Login](http://127.0.0.1:8000/login)** page by clicking the logo
- login with the following credentials
==Email== : admin@user.com
==Password== :password




## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
