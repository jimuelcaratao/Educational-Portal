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
        Schema::create('thesis', function (Blueprint $table) {
            $table->id('thesis_id');
            $table->foreignId('user_id');
            $table->string('author_name', 255);
            $table->string('title', 255)->unique();
            $table->string('slug', 255);
            $table->longText('body')->nullable();
            $table->string('section')->nullable();
            $table->string('year')->nullable();
            $table->string('course')->nullable();
            $table->string('thesis_status')->nullable();
            $table->string('editor', 255)->nullable();
            $table->text('default_photo')->nullable();
            $table->text('pdf')->nullable();
            $table->softDeletes();
            $table->integer('viewers')->nullable();
            $table->string('published_date')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thesis');
    }
};
