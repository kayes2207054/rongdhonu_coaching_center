<?php
$faker = Faker\Factory::create('bn_BD');
$teachers = DB::table('teachers')->whereNull('image')->get();

foreach ($teachers as $teacher) {
    DB::table('teachers')->where('id', $teacher->id)->update([
        'name' => 'Prof. ' . $faker->firstName() . ' ' . $faker->lastName(),
    ]);
}
echo "Updated " . count($teachers) . " teachers with Bangladeshi names.\n";
