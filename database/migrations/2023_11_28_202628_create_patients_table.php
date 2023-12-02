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
        Schema::create('patients', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('id_card',20);
            $table->string('gender',99)->nullable();
            $table->string('name',99);
            $table->string('surname',99);
            $table->timestamp('date_of_birth')->nullable();
            $table->string('address',191)->nullable();;
            $table->string('post_code',20)->nullable();
            $table->string('contact_number_one',20)->nullable();
            $table->string('contact_number_two',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
