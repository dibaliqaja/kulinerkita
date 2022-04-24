<?php

namespace Tests\Feature;

use App\Models\Place;
use Database\Seeders\SubDistrictSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class APISubDistrictTest extends TestCase
{
    use RefreshDatabase;

    public function test_api_list_sub_district()
    {
        $this->seed(SubDistrictSeeder::class);
        $this->json('GET', 'api/sub-districts', [], ['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
                "data" => [
                    0 => [
                        'id',
                        'name',
                        'slug',
                        'places_count'
                    ],
                ]
            ]);
    }

    public function test_api_show_sub_district()
    {
        $this->seed(SubDistrictSeeder::class);
        $this->json('GET', 'api/sub-districts/1', [], ['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
                "data" => [
                    'id',
                    'name',
                    'slug',
                    'places_count'
                ],
            ]);
    }

    public function test_api_list_place_by_sub_district()
    {
        $this->seed(SubDistrictSeeder::class);
        Place::factory()->create();
        $this->json('GET', 'api/sub-districts/2/place', [], ['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
                "data" => [
                    0 => [
                        "id",
                        "name",
                        "description",
                        "address",
                        "phone",
                        "image",
                        "latitude",
                        "longitude",
                        "sub_district" => [
                            'id',
                            'name',
                            'slug',
                            'created_at',
                            'updated_at'
                        ],
                        "is_favorite",
                    ],
                ],
            ]);
    }
}
