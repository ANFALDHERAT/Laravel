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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->unsignedBigInteger('author_id'); // This creates an 'user_id' column as an unsigned big integer

            // Define a foreign key constraint
            $table->foreign('author_id')
                ->references('id') // References the 'id' column of the 'users' table
                ->on('authors') // The name of the referenced table
                ->onDelete('cascade'); // Optional: Define what happens on delete (e.g., cascade)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
