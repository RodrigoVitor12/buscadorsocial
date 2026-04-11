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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('docType');
            $table->string('phone_number');
            $table->string('daysToUse')->default('7');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('ip_address')->nullable();
            $table->string('role')->default('1'); // 0 - Admin / 1 - User
            $table->string('plan'); 
            $table->string('plan_price'); 
            $table->string('status')->default('ativo');
            $table->string('payment_status')->default('pendente');
            $table->integer('credits')->default(100);
            $table->integer('credits_used')->default(0);
            $table->timestamp('last_login')->useCurrent();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};