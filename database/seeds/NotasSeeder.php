<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Notes;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->truncate();

        factory(Notes::class, 10)->create();

    }
}
