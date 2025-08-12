<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->string('summary')->comment('文章摘要')->nullable();

            $table->dropColumn('image');
            $table->bigInteger('main_image_id')->comment('文章主图')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->dropColumn('summary');
            $table->dropColumn('main_image_id');
            $table->string('image')->comment('文章图片')->nullable();
        });
    }
};
