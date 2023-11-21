# Vparrot Project

### Create vparrot database
In the .env.local file, uncomment the database application you want to use (MySQL, MariaDB or PostGreSQL) 
Here is an example for MySQL : DATABASE_URL="mysql://app:!ChangeMe!@127.0.0.1:3306/vparrot?serverVersion=8.0.32&charset=utf8mb4"
> Instead of app, enter your login and instead of !ChangeMe!, enter your password.

Then enter the command line : php bin/console doctrine:database:create => the database vparrot has been created

### Create data tables
In the terminal, enter the following command lines :
> php bin/console make:migration
> php bin/console doctrine:migrations:migrate => the tables have been created

### Generate data in the tables
Data has been generated using fixtures and faker php to create fake data. So the corresponding packages have to be installed using the following command lines :
> composer require --dev orm-fixtures
> composer require --dev fakerphp/faker

Then fixtures can be loaded : 
> php bin/console doctrine:fixtures:load


### Connecting to the backoffice
You can connect to the backoffice using the admin account that has been loaded in User's fixture.
On top right of navbar area, you have a secured area link leading to a login page
> Enter mail : contact.vparrot@gmail.com and password : admin => you are logged in
