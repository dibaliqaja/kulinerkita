<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ManageCategoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_see_category_create_button()
    {
        $this->signIn();
        $response = $this->get(route('category.index'));
        $response->assertStatus(200);
        $response->assertSee('Tambah Kategori');
    }

    public function test_user_can_access_categories_create_page()
    {
        $this->signIn();
        $response = $this->get(route('category.create'));
        $response->assertStatus(200);
    }

    public function test_user_can_create_a_new_category()
    {
        $this->signIn();
        $response = $this->post('category', [
            'name' => 'New category',
        ]);
        $response->assertRedirect('category');
        $this->assertDatabaseHas('categories', [
            'name' => 'New category',
            'slug' => 'new-category',
        ]);
        $category = Category::latest()->first();
        $this->assertEquals('New category', $category->name);
        $this->assertEquals('new-category', $category->slug);
    }

    public function test_validate_category_name_is_required()
    {
        $this->signIn();
        $response = $this->post('category', ['name' => '']);
        $response->assertSessionHasErrors('name');
    }

    public function test_validate_category_name_is_unique()
    {
        $this->signIn();
        $category = Category::factory()->create();
        $response = $this->post('category', ['name' => $category->name]);
        $response->assertSessionHasErrors('name');
    }
}
