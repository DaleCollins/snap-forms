<?php

namespace Tests\Feature;

use App\SnapForm;
use Tests\TestCase;
use App\Actions\SendMail;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SnapFormsTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function a_user_can_access_the_form_page()
    {
        $this->get('/')
        ->assertStatus(200)
        ->assertViewIs('snapforms.create')
        ->assertSee('Snap Forms');
    }

    /** @test */
    public function a_users_data_can_be_added_to_the_database_and_they_are_redirected_to_the_thank_you_page()
    {
        $attributes = factory(SnapForm::class)->raw();
        $response = $this->post(route('form.store', $attributes));
        $this->assertDatabaseHas('snap_forms', $attributes);
        $response->assertRedirect(route('form.thankyou'));
    }

    /** @test */
    public function check_the_validation_on_required_fields() {
        collect(['first_name','last_name','email','address','suburb','state', 'postcode'])
        ->each(function($field) {
            $attributes = factory(SnapForm::class)->raw([$field => '']);
            $this->post(route('form.store', $attributes))
            ->assertSessionHasErrors($field);
        });
    }

    /** @test */
    public function an_email_can_be_sent_using_mailgun()
    {
        $attributes = factory(SnapForm::class)->raw();
        $response = (new SendMail($attributes['email'], "New Patient Information", $attributes))->execute();
        $this->assertEquals('Queued. Thank you.',$response->getMessage());

    }
}
