<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Illuminate\Support\Facades\DB::unprepared('CREATE TRIGGER institution AFTER INSERT ON users
        FOR EACH ROW
            IF NEW.id_institusi = 1
                THEN
                    INSERT INTO `users` (`ket_institusi`) VALUES ("Universitas");
            ELSE IF NEW.id_institusi = 2
                THEN
                    INSERT INTO `users` (`ket_institusi`) VALUES ("Sekolah");
            END IF');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \Illuminate\Support\Facades\DB::unprepared('DROP TRIGGER `institution`');
    }
}
