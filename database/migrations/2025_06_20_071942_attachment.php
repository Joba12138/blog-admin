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
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->string('disk')->default('oss');
            $table->string('module')->nullable();
            $table->string('bucket_name')->nullable();
            $table->string('path');
            $table->string('url')->nullable();
            $table->string('mime_type')->nullable();
            $table->string('type')->default('image'); // image, video, file 等
            $table->string('original_name')->nullable();
            $table->unsignedBigInteger('size')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('attachments');
    }
};
