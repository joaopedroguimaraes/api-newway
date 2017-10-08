<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20)->nullable(false);
            $table->timestamps();
        });

        // commenting the line below will
        // create the tags table without
        // any records
        // populate();
    }

    /*public function populate() {
        $attach = ['psicologia', 'ficção', 'criatividade', 'freud', 'jung', 'star wars',
                'tolkien', 'senhor dos aneis'];
        foreach ($tag as $tag) {
            DB::table('tags')->insert(
                array(
                    'name' => $tag
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
        Schema::dropIfExists('tags');
    }
}
