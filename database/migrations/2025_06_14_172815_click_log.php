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
        Schema::create('click_logs', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('source')->default(0)->comment('-1=未计入页面,0=home,1=new,2=detail');
            $table->string('open_url', 100)->nullable();
            $table->string('ip')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('click_logs');
    }
};
