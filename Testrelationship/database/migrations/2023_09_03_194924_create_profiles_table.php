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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // This creates an 'user_id' column as an unsigned big integer
            $table->string ('bio',255);

            // Define a foreign key constraint
            $table->foreign('user_id')
                ->references('id') // References the 'id' column of the 'users' table
                ->on('users') // The name of the referenced table
                ->onDelete('cascade'); // Optional: Define what happens on delete (e.g., cascade)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
