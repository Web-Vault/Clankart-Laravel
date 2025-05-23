
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatPartnersTable extends Migration
{
    public function up()
    {
        Schema::create('chat_partners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sender_id');
            $table->unsignedBigInteger('receiver_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chat_partners');
    }
}
