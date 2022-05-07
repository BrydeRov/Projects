<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->timestamps();
        });

        Schema::table('projects' , function(Blueprint $table){
            $table->unsignedBigInteger('Category_id')->nullable()->after('id');

            $table->foreign('Category_id')->references('id')->on('categories')
                ->OnUpdate('cascade')
                ->OnDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');

        Schema::table('projects' , function(Blueprint $table){
            $table->dropForeign('projects_Category_id_foreign');
            $table->dropColumn('Category_id');

        });
        
    }
};
