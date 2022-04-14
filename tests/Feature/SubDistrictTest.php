<?php

namespace Tests\Feature;

use Database\Seeders\SubDistrictSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubDistrictTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_access_sub_district_page()
    {
        $this->signIn();
        $response = $this->get(route('subdistrict.index'));
        $response->assertStatus(200);
        $response->assertSee('Data Kecamatan');
    }

    public function test_user_can_view_data_sub_district()
    {
        $this->seed(SubDistrictSeeder::class);
        $this->assertDatabaseHas('sub_districts', ['name' => 'Rengel']);
        $this->signIn();
        $response = $this->getJson(route('subdistrict.index'), ['HTTP_X-Requested-With' => 'XMLHttpRequest']);
        $response->assertSeeText('Rengel', 'Bancar', 'Tuban');
    }
}
