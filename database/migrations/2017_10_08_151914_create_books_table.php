<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150)->nullable(false);
            $table->string('author', 100)->nullable(false);
            $table->integer('pages')->unsigned()->nullable(false);
            $table->timestamps();
        });

        //populate();
    }

    /*public function populate() {
        $books = [
                    ('name' => 'A Interpretação dos Sonhos',
                    'author' => 'Sigmund Freud',
                    'pages' => 616),
                    ('name' => 'O Homem e seus Símbolos',
                    'author' => 'Carl Jung',
                    'pages' => 448),
                    ('name' => 'Darth Vader e Filho',
                    'author' => 'Jeffrey Brown',
                    'pages' => 68),
                    ('name' => 'O Hobbit',
                    'author' => 'J. R. R. Tolkien',
                    'pages' => 297),
                    ('name' => 'O Silmarillion',
                    'author' => 'J. R. R. Tolkien',
                    'pages' => 480),
                    ('name' => 'Enigma',
                    'author' => 'Andrew Razeghi',
                    'pages' => 210)
        ];
        foreach ($books as $book) {
            DB::table('book')->insert(
                array(
                    'name' => $book->name,
                    'author' => $book->author,
                    'pages' => $book->pages,
                )
            );
        }
    }*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
