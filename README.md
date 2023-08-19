# Personal Notes Web Application

This is a simple web application that allows users to create, read, update, and delete personal notes. Users can manage their notes by performing various actions such as creating new notes, editing existing notes, and deleting notes.

## Features

- Note Listing: Display a list of all notes with their titles.
- Note Creation: Allow users to create new notes with a title and content.
- Note Details: Show the full content of a selected note.
- Note Editing: Let users edit the title and content of a note.
- Note Deletion: Provide an option to delete notes.


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
