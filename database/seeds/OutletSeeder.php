<?php

use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $outlet = new \App\Outlet;
        $outlet->nama = "Imas Outlet";
        $outlet->alamat = "Jl. Cikater";
        $outlet->no_telp = "08124552323";

        $outlet->save();

        $this->command->info("Seeder berhasil!");
    }
}
