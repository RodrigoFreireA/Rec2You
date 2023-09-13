<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToAnunciosTable extends Migration
{
    public function up()
    {
        Schema::table('anuncios', function (Blueprint $table) {
            $table->string('service_type');
            $table->string('device_used');
            $table->json('images');
        });
    }

    public function down()
    {
        Schema::table('anuncios', function (Blueprint $table) {
            $table->dropColumn(['service_type', 'device_used', 'images']);
        });
    }
};
