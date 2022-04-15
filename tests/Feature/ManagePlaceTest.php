<?php

namespace Tests\Feature;

use App\Models\Place;
use Database\Seeders\SubDistrictSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class ManagePlaceTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_user_can_access_places_page()
    {
        $this->signIn();
        $response = $this->get(route('places.index'));
        $response->assertStatus(200);
        $response->assertSee('Tambah Tempat');
        $response->assertSee('Data Tempat Kuliner');
    }

    public function test_user_can_view_data_places()
    {
        $this->seed(SubDistrictSeeder::class);
        $place = Place::factory()->create();
        $this->assertDatabaseHas('places', ['name' => $place->name]);
        $this->signIn();
        $response = $this->getJson(route('places.index'), ['HTTP_X-Requested-With' => 'XMLHttpRequest']);
        $response->assertSeeText($place->name);
    }

    public function test_user_can_access_places_create_page()
    {
        $this->signIn();
        $response = $this->get(route('places.create'));
        $response->assertStatus(200);
    }

    public function test_user_can_create_a_new_place()
    {
        $name            = $this->faker->name;
        $description     = $this->faker->text(50);
        $sub_district_id = 1;
        $address         = $this->faker->address;
        $phone           = $this->faker->phoneNumber;
        $image           = 'images/avatar.jpg';
        $latitude        = $this->faker->latitude;
        $longitude       = $this->faker->longitude;

        $this->seed(SubDistrictSeeder::class);
        $this->signIn();
        $response = $this->post('places', [
            'name'            => $name,
            'description'     => $description,
            'sub_district_id' => $sub_district_id,
            'address'         => $address,
            'phone'           => $phone,
            'image'           => UploadedFile::fake()->image($image),
            'latitude'        => $latitude,
            'longitude'       => $longitude
        ]);
        $response->assertRedirect('places');
        $place = Place::latest()->first();
        $this->assertEquals($name, $place->name);
        $this->assertEquals($description, $place->description);
        $this->assertEquals($sub_district_id, $place->sub_district_id);
    }

    public function test_user_can_access_place_edit_page()
    {
        $this->seed(SubDistrictSeeder::class);
        $place = Place::factory()->create();
        $this->signIn();
        $response = $this->get(route('places.edit', $place->id));
        $response->assertStatus(200);
    }

    public function test_validate_place_name_is_required()
    {
        $this->signIn();
        $response = $this->post('places', ['name' => '']);
        $response->assertSessionHasErrors('name');
    }
}
