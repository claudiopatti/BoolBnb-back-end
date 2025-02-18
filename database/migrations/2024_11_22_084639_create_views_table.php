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
        Schema::create('views', function (Blueprint $table) {
            $table->id();
            //foreign key
            $table->unsignedBigInteger('apartment_id')->nullable();
            $table->foreign('apartment_id')->references('id')->on('apartments')->onUpdate('cascade')->onDelete('set null');


            $table->date('view_date');
            $table->string('ip_address');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('views');
    }
};
