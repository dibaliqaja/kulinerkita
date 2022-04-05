<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Place;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ManagePlaceTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_see_place_create_button()
    {
        $this->signIn();
        $response = $this->get(route('places.index'));
        $response->assertStatus(200);
        $response->assertSee('Tambah Tempat');
    }

    public function test_user_can_access_places_create_page()
    {
        $this->signIn();
        $response = $this->get(route('places.create'));
        $response->assertStatus(200);
    }

    public function test_validate_place_name_is_required()
    {
        $this->signIn();
        $response = $this->post('places', ['name' => '']);
        $response->assertSessionHasErrors('name');
    }
}
