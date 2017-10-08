<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_tag', function (Blueprint $table) {
            $table->integer('book_id')->unsigned();
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            $table->timestamps();
        });

        //populate();
    }

    /*public function populate() {
        $attach = [('id_book' => 1,
                    'ig_tag' => 1),
                    ('id_book' => 1,
                    'ig_tag' => 4),
                    ('id_book' => 2,
                    'ig_tag' => 1),
                    ('id_book' => 2,
                    'ig_tag' => 5),
                    ('id_book' => 3,
                    'ig_tag' => 6),
                    ('id_book' => 4,
                    'ig_tag' => 2),
                    ('id_book' => 4,
                    'ig_tag' => 7),
                    ('id_book' => 4,
                    'ig_tag' => 8),
                    ('id_book' => 5,
                    'ig_tag' => 2),
                    ('id_book' => 5,
                    'ig_tag' => 7),
                    ('id_book' => 5,
                    'ig_tag' => 8),
                    ('id_book' => 6,
                    'ig_tag' => 3)
        ];
        foreach ($attach as $a) {
            DB::table('book_tag')->insert(
                array(
                    'id_book' => $a->id_book,
                    'id_tag' => $a->id_tag
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
        Schema::dropIfExists('book_tag');
    }
}
