# E-Portal

---

## A beginner's guide to clone from github.

-   go to `This PC -> Local Disk (C:) -> xampp -> htdocs` folder.

![Screenshot 2020-10-30 215333](https://user-images.githubusercontent.com/61103022/97713413-c12c8a80-1afa-11eb-8ad6-de787fb453d0.png)
![Screenshot 2020-10-30 215430](https://user-images.githubusercontent.com/61103022/97713405-bf62c700-1afa-11eb-840c-c1b2c6060706.png)
![Screenshot 2020-10-30 215525](https://user-images.githubusercontent.com/61103022/97713410-c093f400-1afa-11eb-89ad-19bc2851dd70.png)

-   right click anywhere and click `Git bash here` and run `git clone https://github.com/jimuelcaratao/CyberPen.git`

![Screenshot 2020-10-30 220722](https://user-images.githubusercontent.com/61103022/97714826-993e2680-1afc-11eb-9363-e32cd30a2a49.png)
![Screenshot 2020-10-30 220837](https://user-images.githubusercontent.com/61103022/97714835-9ba08080-1afc-11eb-8377-32dc40f40eb0.png)

-   Close the Git bash.

-   right click the `eCommerce-laravel` (CyberPen) and click `Git bash here`

![Screenshot 2020-10-30 221236](https://user-images.githubusercontent.com/61103022/97715215-17023200-1afd-11eb-9d8e-6e2d5e6beef1.png)

## Step to run

### Locally

-   git clone
-   create db in phpmyadmin
-   composer install
-   cyberpendb (dbname note: create on phpmyadmin and do nothing after created)
-   npm install
-   npm run dev
-   php artisan migrate
-   php artisan db:seed --class=UserTableSeeder
-   php artisan storage:link
-   php artisan route:cache
-   php artisan config:cache
-   php artisan serve (start)

### Step to reset database

-   php artisan migrate:fresh
-   php artisan db:seed --class=UserTableSeeder (Default accounts)

### Need to Install

-   xampp
-   https://getcomposer.org/download/
-   https://git-scm.com/download/win
-   https://nodejs.org/en/download/

### User Roles and Accounts

Is_admin collumn

#### 1 = Admin

-   Moderator 1 -
    'name' => `Admin One`,
    'email' => `admin1@gmail.com`,
    'password' => `qweqweqwe`,
