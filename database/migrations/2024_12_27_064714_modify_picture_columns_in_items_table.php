<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyPictureColumnsInItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->longText('picture_1')->nullable()->change();
            $table->longText('picture_2')->nullable()->change();
            $table->longText('picture_3')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->text('picture_1')->nullable()->change();
            $table->text('picture_2')->nullable()->change();
            $table->text('picture_3')->nullable()->change();
        });
    }
}
