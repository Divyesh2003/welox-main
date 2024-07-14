<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
 /////////////////////////////////////////////////////////////////////old/////////////////
            // $table->id();
            // $table->unsignedBigInteger('parent_id')->nullable();
            // $table->foreign('parent_id')->references(['id'])->on('categories');
            // $table->string('name');
            // $table->string('image')->nullable();
            // $table->string('icon')->nullable();
            // $table->string('slug')->unique();
            // $table->text('description')->nullable();
            // $table->string('meta_title')->nullable();  // JKDobariya shoud not null if form field empty then set it (category_name | company_name)
            // $table->text('meta_description')->nullable();
            // $table->string('meta_keywords')->nullable();
            // $table->enum('show_in', ['Y', 'N'])->default('N');
            // $table->enum('mega_menu', ['Y', 'N'])->default('N');
            // $table->enum('nevigation_menu', ['Y', 'N'])->default('N');
            // $table->enum('show_template', ['A', 'D']);
            // $table->enum('status', ['A', 'D']);
            // $table->unsignedBigInteger('created_by')->nullable();
            // $table->unsignedBigInteger('updated_by')->nullable();
            // $table->timestamps();
            // $table->softDeletes();
/////////////////////////////////////////////////////new///////////////////////////////
            $table->id();
            // $table->unsignedBigInteger('parent_id')->nullable();
            // $table->foreign('parent_id')->references('id')->on('categories');
            // $table->unsignedBigInteger('attribute_groups_id')->nullable();
            // $table->foreign('attribute_groups_id')->references('id')->on('attribute_groups');
            $table->string('parent_id')->nullable();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->text('description')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            // $table->string('template')->nullable();
            // $table->boolean('is_megamenu')->default(1);
            // $table->boolean('in_navigation')->default(1);
            // $table->boolean('show_variation')->default(1);
            $table->unsignedBigInteger('total_view')->nullable();
            // $table->string('theme');
            // $table->string('layout');
            // $table->string('display'); // Category, Products, both
            // $table->string('default_sorting');
            // $table->unsignedBigInteger('cms_block')->nullable();
            // $table->foreign('cms_block')->references('id')->on('blocks');
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('updated_by')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();

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
    }
}
