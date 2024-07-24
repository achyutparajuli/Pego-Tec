# Pego-Tec
Pego Tec Interview laravel project regarding CMS,

Firstly Thank you for having me.


# Here are the steps to run the project.
1) Clone the project and the code is in main branch. Since I am only working and this is one time.
2) Create a database and link the credentials in the .env file
3) run composer install
4) run php artisan migrate:fresh --seed for migration and seeder
5) run php artisan storage:link 
6) then serve and run the project check the user seeder for credentials


# packages used
1) yoeunes/toastr, to display the toast message.


# General Points
1) Seeder and pagination are used in case of the sample data seeding and listing the data in the admin dashboard which is static for now.
2) Have used view composer, to get the details for pages menu in the nav blade.
3) Pages and CMS/content are managed from the page menu, Used summer note for the content section. Also there is checkbox for displaying the page on menu.
4) Middleware is created to block the access to normal users from accessing admin.
5) 404 page is created and slightly modified in case of user and admin.
6) Menu manager is not required since I have added display on menu option in the pages menu itself.
7) Additionally relationship between pages and user is defined to display the name of the user who created the page, however there is no log for that thing for now.
8) Search added on admin side listing


# Please let me know in case of any issues or confussion. I hope I have understood and submitted the code in a proper way.
