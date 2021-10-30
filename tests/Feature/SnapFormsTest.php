<?php

namespace Tests\Feature;

use App\SnapForm;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SnapFormsTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function a_user_can_access_the_form_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('snapforms.create');
        $response->assertSee('Snap Forms');
    }

    /** @test */
    public function a_users_data_can_be_added_to_the_database()
    {
        $this->withoutExceptionHandling();
        $attributes = factory(SnapForm::class)->raw();
        $this->post(route('form.store', $attributes));
        $this->assertDatabaseHas('snap_forms', $attributes);
    }
}
