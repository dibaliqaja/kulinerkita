<h1 align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="224px"/><br/>
  KulinerKita
</h1>
<p align="center">KulinerKita is a project for Culinary Place Management App</p>

<p align="center">
    <a href="https://github.com/dibaliqaja/kulinerkita/actions/workflows/kulinerkita.yml" target="_blank">
        <img src="https://img.shields.io/badge/actions-passing-success?style=for-the-badge&logo=github-actions" alt="github actions" />
    </a>
    &nbsp;
    <a href="https://github.com/dibaliqaja/kulinerkita/releases" target="_blank">
        <img src="https://img.shields.io/badge/version-v1.0.0-red?style=for-the-badge&logo=none" alt="system version" />
    </a>
    &nbsp;
    <a href="https://github.com/dibaliqaja/kulinerkita" target="_blank">
        <img src="https://img.shields.io/badge/Laravel-9.5.1-fb503b?style=for-the-badge&logo=laravel" alt="laravel version" />
    </a>
    &nbsp;
    <img src="https://img.shields.io/badge/license-mit-red?style=for-the-badge&logo=none" alt="license" />
</p>

### Features
- Admin Panel
  - Login
  - Logout
  - List SubDistrict
  - List, Add, Edit, Delete Category
  - List, Add, Edit, Delete Culinary Place
  - List, Add, Edit, Delete Culinary Menu
- API
  - Register
  - Login
  - List, Show SubDistrict
  - List, Show Place
  - List Place Related
  - List, Show Place Menu
  - List Favorite Place by User
  - Add Favorite Place by User
  - Delete Favorite Place by User

### ⚙️ Requirements
- PHP >= 8.0
- BCMath PHP Extension
- Ctype PHP Extension
- cURL PHP Extension
- DOM PHP Extension
- Fileinfo PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PCRE PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

### ⚡️ Installation
1. Clone GitHub repo for this project locally
```bash
git clone https://github.com/dibaliqaja/kulinerkita.git
```
2. Change directory in project which already clone
```bash
cd kulinerkita
```
3. Install Composer dependencies
```bash
composer install
```
4. Create a copy of your .env file
```bash
cp .env.example .env
```
5. Generate an app encryption key
```bash
php artisan key:generate
```
6. Create an empty database for our application

7. In the .env file, add database information to allow Laravel to connect to the database
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={database-name}
DB_USERNAME={username-database}
DB_PASSWORD={password-database}
```
8. Migrate the database
```bash
php artisan migrate
```
9. Seed the database
```bash
php artisan db:seed
```
10. Running project
```bash
php artisan serve
```

### User Credentials in Seeder
| #        | Administrator    |
| -------- | ---------------- |
| Email    | admin@email.com  |
| Password | password         |

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



