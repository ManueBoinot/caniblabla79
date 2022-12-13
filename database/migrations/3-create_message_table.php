<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            // génère un ID auto-increment unique et no null
            $table->id();
            // contenu du message max 3000 caractères
            $table->text("contenu", 3000);
            // clé étrangère vers table USERS
            $table->foreignId("user_id")->constrained()->cascadeOnDelete();
            // image associée message
            $table->string("image")->nullable();
            // tags de l'image
            $table->string("tags", 50)->nullable();
            // champs created_at et updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message');
    }
};
