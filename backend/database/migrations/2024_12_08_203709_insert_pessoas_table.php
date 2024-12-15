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
        
        DB::table('pessoas')->insert(
            array(
                "nome" => "Jessica Teste 123",
                "tipo" => "061.023.456-19",
                "documento" => "Rua 7 de Setembro",
                "email" => "teste@email.com",
                "telefone" => "Casa"
            ));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
