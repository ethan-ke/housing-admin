<?php

namespace Database\Seeders;

use App\Models\SystemDomain;
use Illuminate\Database\Seeder;

class SystemDomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SystemDomain::insert([
            [
                'type'   => 'merchant-api',
                'domain' => 'api.house.zhennan-test.top',
            ],
            [
                'type'   => 'admin-api',
                'domain' => 'api.admin.house.zhennan-test.top',
            ],
        ]);
    }
}
