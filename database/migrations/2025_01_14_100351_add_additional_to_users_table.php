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
            //
            $table->text('address');
            $table->string('phone');
            $table->string('photo')->nullable();
            $table->string('id_no')->nullable();
            $table->string('batch')->nullable();
            $table->string('occupation');
            $table->text('company_name')->nullable();
            $table->text('business_name')->nullable();
            $table->text('business_info')->nullable();
            $table->string('business_type')->nullable();
            $table->text('business_location')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
