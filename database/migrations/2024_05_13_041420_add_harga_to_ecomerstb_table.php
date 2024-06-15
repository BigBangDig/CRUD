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
        Schema::table('ecomerstb', function (Blueprint $table) {
            // Menambahkan kolom harga setelah kolom image_url
            $table->double('harga')->after('image_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ecomerstb', function (Blueprint $table) {
            // Menghapus kolom harga jika migrasi di-rollback
            $table->dropColumn('harga');
        });
    }
};
