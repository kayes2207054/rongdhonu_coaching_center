<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Notice;

class Sprint2Test extends TestCase
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

    // Teacher Tests
    public function test_admin_can_create_teacher_with_image()
    {
        $file = UploadedFile::fake()->create('teacher.jpg', 100, 'image/jpeg');

        $response = $this->actingAs($this->admin)->post('/admin/teachers', [
            'name' => 'John Doe',
            'designation' => 'Math Teacher',
            'email' => 'john@test.com',
            'phone' => '1234567890',
            'bio' => 'Experienced math teacher.',
            'image' => $file,
        ]);

        $response->assertRedirect('/admin/teachers');
        $this->assertDatabaseHas('teachers', [
            'name' => 'John Doe',
            'email' => 'john@test.com',
        ]);
        
        $teacher = Teacher::first();
        Storage::disk('public')->assertExists($teacher->image);
    }

    public function test_admin_can_update_teacher()
    {
        $teacher = Teacher::create([
            'name' => 'Jane Doe',
            'designation' => 'English Teacher',
        ]);

        $response = $this->actingAs($this->admin)->put('/admin/teachers/'.$teacher->id, [
            'name' => 'Jane Smith',
            'designation' => 'Senior English Teacher',
        ]);

        $response->assertRedirect('/admin/teachers');
        $this->assertDatabaseHas('teachers', [
            'name' => 'Jane Smith',
            'designation' => 'Senior English Teacher',
        ]);
    }

    public function test_admin_can_delete_teacher()
    {
        $teacher = Teacher::create([
            'name' => 'To Delete',
            'designation' => 'Teacher',
        ]);

        $response = $this->actingAs($this->admin)->delete('/admin/teachers/'.$teacher->id);
        $response->assertRedirect('/admin/teachers');
        $this->assertDatabaseMissing('teachers', ['id' => $teacher->id]);
    }

    // Course Tests
    public function test_admin_can_create_course()
    {
        $response = $this->actingAs($this->admin)->post('/admin/courses', [
            'title' => 'Physics 101',
            'description' => 'Intro to Physics',
            'duration' => '3 Months',
            'fee' => 500.00,
        ]);

        $response->assertRedirect('/admin/courses');
        $this->assertDatabaseHas('courses', [
            'title' => 'Physics 101',
            'fee' => 500.00,
        ]);
    }

    public function test_admin_can_update_course()
    {
        $course = Course::create([
            'title' => 'Math 101',
            'description' => 'Intro to Math',
            'duration' => '3 Months',
        ]);

        $response = $this->actingAs($this->admin)->put('/admin/courses/'.$course->id, [
            'title' => 'Advanced Math 201',
            'description' => 'Advanced Math',
            'duration' => '4 Months',
        ]);

        $response->assertRedirect('/admin/courses');
        $this->assertDatabaseHas('courses', [
            'title' => 'Advanced Math 201',
        ]);
    }

    public function test_admin_can_delete_course()
    {
        $course = Course::create([
            'title' => 'To Delete',
            'description' => 'Desc',
            'duration' => '1 Month',
        ]);

        $response = $this->actingAs($this->admin)->delete('/admin/courses/'.$course->id);
        $response->assertRedirect('/admin/courses');
        $this->assertDatabaseMissing('courses', ['id' => $course->id]);
    }

    // Notice Tests
    public function test_admin_can_create_notice_with_pdf()
    {
        $file = UploadedFile::fake()->create('document.pdf', 100, 'application/pdf');

        $response = $this->actingAs($this->admin)->post('/admin/notices', [
            'title' => 'Holiday Notice',
            'content' => 'School will be closed.',
            'date' => '2026-07-01',
            'attachment' => $file,
        ]);

        $response->assertRedirect('/admin/notices');
        $this->assertDatabaseHas('notices', [
            'title' => 'Holiday Notice',
        ]);

        $notice = Notice::first();
        Storage::disk('public')->assertExists($notice->attachment);
    }

    public function test_admin_can_update_notice()
    {
        $notice = Notice::create([
            'title' => 'Old Notice',
            'content' => 'Old Content',
            'date' => '2026-01-01',
        ]);

        $response = $this->actingAs($this->admin)->put('/admin/notices/'.$notice->id, [
            'title' => 'New Notice',
            'content' => 'New Content',
            'date' => '2026-02-01',
        ]);

        $response->assertRedirect('/admin/notices');
        $this->assertDatabaseHas('notices', [
            'title' => 'New Notice',
            'date' => '2026-02-01',
        ]);
    }

    public function test_admin_can_delete_notice()
    {
        $notice = Notice::create([
            'title' => 'To Delete',
            'content' => 'Content',
            'date' => '2026-01-01',
        ]);

        $response = $this->actingAs($this->admin)->delete('/admin/notices/'.$notice->id);
        $response->assertRedirect('/admin/notices');
        $this->assertDatabaseMissing('notices', ['id' => $notice->id]);
    }
}
