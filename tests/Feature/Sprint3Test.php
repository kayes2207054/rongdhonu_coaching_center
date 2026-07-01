<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\User;
use App\Models\Result;
use App\Models\Contact;

class Sprint3Test extends TestCase
{
    use RefreshDatabase;

    protected $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->admin = User::factory()->create([
            'email' => 'admin@rongdhonu.edu',
            'password' => bcrypt('password'),
        ]);
        Storage::fake('public');
    }

    // Result Tests
    public function test_admin_can_create_result()
    {
        $file = UploadedFile::fake()->create('result.pdf', 100, 'application/pdf');

        $response = $this->actingAs($this->admin)->post('/admin/results', [
            'student_name' => 'Alice Student',
            'student_id' => 'STU-100',
            'exam_name' => 'Final Exam',
            'marks' => 95.5,
            'file_path' => $file,
        ]);

        $response->assertRedirect('/admin/results');
        $this->assertDatabaseHas('results', [
            'student_name' => 'Alice Student',
            'marks' => 95.5,
        ]);
    }

    public function test_admin_can_delete_result()
    {
        $result = Result::create([
            'student_name' => 'Bob',
            'exam_name' => 'Midterm',
        ]);

        $response = $this->actingAs($this->admin)->delete('/admin/results/'.$result->id);
        $response->assertRedirect('/admin/results');
        $this->assertDatabaseMissing('results', ['id' => $result->id]);
    }

    // Contact Message Tests
    public function test_public_can_submit_contact_message()
    {
        $response = $this->post('/contact', [
            'name' => 'Visitor User',
            'email' => 'visitor@test.com',
            'subject' => 'Inquiry',
            'message' => 'I would like to know more about the courses.',
        ]);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('contacts', [
            'email' => 'visitor@test.com',
            'is_read' => false,
        ]);
    }

    public function test_admin_can_view_and_delete_contact_message()
    {
        $contact = Contact::create([
            'name' => 'Test',
            'email' => 'test@test.com',
            'message' => 'Hello',
            'is_read' => false,
        ]);

        // Viewing marks as read
        $this->actingAs($this->admin)->get('/admin/contacts/'.$contact->id);
        $this->assertDatabaseHas('contacts', [
            'id' => $contact->id,
            'is_read' => true,
        ]);

        // Deleting
        $response = $this->actingAs($this->admin)->delete('/admin/contacts/'.$contact->id);
        $response->assertRedirect('/admin/contacts');
        $this->assertDatabaseMissing('contacts', ['id' => $contact->id]);
    }

    // Dynamic Public Website Test
    public function test_public_website_displays_dynamic_data()
    {
        // Insert some dynamic data
        \App\Models\Course::create(['title' => 'Dynamic Course XYZ', 'description' => 'Desc', 'duration' => '1M']);
        \App\Models\Notice::create(['title' => 'Dynamic Notice ABC', 'content' => 'Content', 'date' => '2026-07-02']);

        $response = $this->get('/');
        
        $response->assertStatus(200);
        $response->assertSee('Dynamic Course XYZ');
        $response->assertSee('Dynamic Notice ABC');
    }
}
