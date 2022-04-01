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
        $response = $this->get(route('categories.index'));
        $response->assertStatus(200);
        $response->assertSee('Tambah Kategori');
    }

    public function test_user_can_access_categories_create_page()
    {
        $this->signIn();
        $response = $this->get(route('categories.create'));
        $response->assertStatus(200);
    }

    public function test_user_can_create_a_new_category()
    {
        $this->signIn();
        $response = $this->post('categories', [
            'name' => 'New category',
        ]);
        $response->assertRedirect('categories');
        $this->assertDatabaseHas('categories', [
            'name' => 'New category',
            'slug' => 'new-category',
        ]);
        $category = Category::latest()->first();
        $this->assertEquals('New category', $category->name);
        $this->assertEquals('new-category', $category->slug);
    }

    public function test_user_can_access_categories_edit_page()
    {
        $this->signIn();
        $category = Category::factory()->create();
        $response = $this->get(route('categories.edit', $category->id));
        $response->assertStatus(200);
    }

    public function test_user_can_update_a_category()
    {
        $this->signIn();
        $category = Category::factory()->create();
        $this->put(route('categories.update', $category->id),[
            'name' => 'Update category',
        ]);
        $this->assertDatabaseHas('categories', [
            'name' => 'Update category',
            'slug' => 'update-category',
        ]);
        $category = Category::latest()->first();
        $this->assertEquals('Update category', $category->name);
        $this->assertEquals('update-category', $category->slug);
    }

    public function test_user_can_delete_a_category()
    {
        $this->signIn();
        $category = Category::factory()->create();
        $this->assertEquals(1, Category::count());
        $response = $this->delete('categories/' . $category->id);
        $response->assertStatus(200);
    }

    public function test_validate_category_name_is_required()
    {
        $this->signIn();
        $response = $this->post('categories', ['name' => '']);
        $response->assertSessionHasErrors('name');
    }

    public function test_validate_category_name_is_unique()
    {
        $this->signIn();
        $category = Category::factory()->create();
        $response = $this->post('categories', ['name' => $category->name]);
        $response->assertSessionHasErrors('name');
    }
}
