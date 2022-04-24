<?php

namespace Tests\Feature;

use App\Models\Menu;
use App\Models\Place;
use Database\Seeders\SubDistrictSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class APIPlaceTest extends TestCase
{
    use RefreshDatabase;

    public function test_api_list_place()
    {
        $this->data_seed();
        $this->json('GET', 'api/places', [], ['Accept' => 'application/json'])
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
                ]
            ]);
    }

    public function test_api_show_place()
    {
        $this->data_seed();
        $this->json('GET', 'api/places/1', [], ['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
                "data" => [
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
            ]);
    }

    // public function test_api_show_place_related()
    // {

    // }

    public function test_api_show_place_menu()
    {
        $this->data_seed();
        $this->json('GET', 'api/places/1/menu', [], ['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
                "data" => [
                    0 => [
                        "id",
                        "name",
                        "slug",
                        "description",
                        "price",
                        "image",
                        "category" => [
                            "id",
                            "name",
                            "slug",
                            "created_at",
                            "updated_at",
                        ]
                    ]
                ],
            ]);
    }

    public function test_api_show_place_menu_detail()
    {
        $this->data_seed();
        $this->json('GET', 'api/places/1/menu/1', [], ['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
                "data" => [
                    "id",
                    "name",
                    "slug",
                    "description",
                    "price",
                    "image",
                    "category" => [
                        "id",
                        "name",
                        "slug",
                        "created_at",
                        "updated_at",
                    ]
                ],
            ]);
    }

    private function data_seed()
    {
        $this->seed(SubDistrictSeeder::class);
        Place::factory()->create();
        Menu::factory()->create();
    }
}
