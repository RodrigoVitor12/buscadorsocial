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
        Schema::table('users', function (Blueprint $table) {
            $table->string('contractor_name')->nullable()->after('name');

            $table->string('full_address')->nullable()->after('phone_number');

            $table->string('neighborhood')->nullable()->after('full_address');

            $table->string('city')->nullable()->after('neighborhood');

            $table->string('state', 10)->nullable()->after('city');

            $table->string('postal_code', 20)->nullable()->after('state');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'contractor_name',
                'full_address',
                'neighborhood',
                'city',
                'state',
                'postal_code'
            ]);
        });
    }
};