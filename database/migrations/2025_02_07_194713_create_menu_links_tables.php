<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('menu_links', function (Blueprint $table) {
            createDefaultTableFields($table);

            $table->string('title', 200)->nullable();

            $table->integer('position')->unsigned()->nullable();

            $table->nestedSet();
        });

        Schema::create('menu_link_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'menu_link');

            $table->string('title', 200)->nullable();
        });
    }

    public function down()
    {
        
        Schema::dropIfExists('menu_link_translations');
        Schema::dropIfExists('menu_links');
    }
};
