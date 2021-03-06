<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(IndividualTableSeeder::class);
        $this->call(FamilyTableSeeder::class);
        $this->call(EventTableSeeder::class);
        $this->call(RepositoryTableSeeder::class);
        $this->call(SourceTableSeeder::class);
        $this->call(CitationTableSeeder::class);
        $this->call(NoteTableSeeder::class);
    }
}
