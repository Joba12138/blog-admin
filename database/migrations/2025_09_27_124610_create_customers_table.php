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
        Schema::connection('db_renwu')->create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->comment('姓');     // 姓
            $table->string('last_name')->comment('名');      // 名
            $table->string('email')->unique()->comment('邮箱');// 邮箱地址
            $table->string('phone')->nullable()->comment('手机号'); // 手机号
            $table->text('demand')->nullable()->comment('诉求');  // 诉求
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('db_renwu')->dropIfExists('customers');
    }
};
