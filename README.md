# Personal Notes Web Application

This is a simple web application that allows users to create, read, update, and delete personal notes. Users can manage their notes by performing various actions such as creating new notes, editing existing notes, and deleting notes.

## Features

- Note Listing: Display a list of all notes with their titles.
- Note Creation: Allow users to create new notes with a title and content.
- Note Details: Show the full content of a selected note.
- Note Editing: Let users edit the title and content of a note.
- Note Deletion: Provide an option to delete notes.


Step 1: Setup Laravel Project
Assuming you have Composer installed, open your terminal and run the following command to create a new Laravel project:

composer create-project --prefer-dist laravel/laravel <projectname>


Replace <projectname> with the desired name for your project.



Step 2: Database Setup
Configure the database connection in the .env file with your database credentials:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password



Next, create a migration for the <name> table:

php artisan make:migration create_table

Edit the migration file in database/migrations to define the title and content fields:

public function up()
{
    Schema::create('notes', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
    });
}


Run the migration to create the table:

php artisan migrate


Step 3: Routes
Define routes for the CRUD operations in routes/web.php:

Step 4: Controllers and Views
Generate a controller using the following command:

php artisan make:controller ControllerName


Create the necessary Blade views in the resources/views folder:

index.blade.php for listing notes
create.blade.php for creating a new note
edit.blade.php for editing a note
show.blade.php for viewing note details


Step 5: Model
Create a model for the <projectname>:

php artisan make:model <name>


Define the model's relationship with the table in app/Note.php:

class Note extends Model
{
    protected $fillable = [];
}

Step 6: Forms and Validation
In the NoteController, implement methods for showing, creating, editing, and deleting notes. Include validation rules for input data.

Step 7: Styling
Apply basic CSS styles to your Blade views to make the UI visually appealing.


Step 8:To check the Output:

 php artisan serve










install composer and the xampp
open command prompt and install or create project laravel/laravel <project name>
after finishing this open a separate folder to store all the laravel project in it 
open the vs code open the folder 
next change the .env file to the database name what is given and if any password is there that also include it 
Then
open terminal
for new project 
        type the cmd : laravel new <projectname>
        Start the application:

cd <name>
      create table by using this cmd: 
                      php artisan make:migration create<table name> --create=<name>
                      include all the table required 
                  then migrate by using 
                        php artisan migrate (it will store in the database)
      then all the route as been include 

      to see output use 
      php artisan serve(it's server)
