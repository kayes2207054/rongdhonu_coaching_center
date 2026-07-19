<?php
$faker = Faker\Factory::create();
$designations = ['Senior Lecturer', 'Assistant Professor', 'Guest Lecturer', 'Subject Expert', 'Instructor', 'Academic Coordinator'];
$teachers = [];
for ($i = 1; $i <= 16; $i++) {
    $teachers[] = [
        'name' => $faker->name,
        'designation' => $faker->randomElement($designations),
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'bio' => $faker->sentence(10),
        'image' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ];
}
DB::table('teachers')->insert($teachers);
echo "Seeded 16 teachers successfully.\n";
