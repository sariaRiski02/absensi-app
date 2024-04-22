<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\group;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RoutesTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_forDisplay(): void
    {
        // test for landing page
        $response = $this->get('/');
        $response->assertViewIs('landing');

        // test for about page
        $response = $this->get('/tentang');
        $response->assertViewIs('about');

        // test for contact page
        $response = $this->get('/kontak');
        $response->assertViewIs('contact');
    }

    public function test_dashboardRoute(): void
    {
        // test for dashboard page
        auth()->loginUsingId(1);
        $response = $this->get('/dashboard');
        $response->assertViewIs('dashboard');
    }

    public function test_filAttandanceDisplay()
    {
        // test for fill attandance page
        $response = $this->get('/isi-absen');
        $response->assertViewIs('attandance');
    }

    public function test_filAttandanceStoreSuccess()
    {
        group::query()->update([
            'deadline' => now()->addHour(1)
        ]);
        // test for store attandance

        $responsesuccess = $this->post(
            '/isi-absen',
            [
                'name' => 'test',
                'absencode' => group::get('code_absen')->random()->code_absen
            ]
        );


        $responsesuccess->assertStatus(302);

        $responsesuccess->assertRedirect('/isi-absen');
        $message = $responsesuccess->getSession()->get('success');
        $this->assertEquals('Absen berhasil diisi', $message);
    }
}
