<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('wahanas', function (Blueprint $table) {
            $table->string('nama_wahana');
            $table->text('deskripsi');
            $table->string('lokasi');
            $table->decimal('harga_tiket', 10, 2);
            $table->string('jam_operasional');
        });
    }

    public function down(): void
    {
        Schema::table('wahanas', function (Blueprint $table) {
            $table->dropColumn([
                'nama_wahana',
                'deskripsi',
                'lokasi',
                'harga_tiket',
                'jam_operasional',
            ]);
        });
    }
};
