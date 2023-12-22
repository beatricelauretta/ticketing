<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveCheckoutTableColumnsIspaid extends Migration
{
    public function up()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->dropColumn(['is_paid']);
        });
    }

    public function down()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->boolean('is_paid')->default(false);
        });
    }
};
