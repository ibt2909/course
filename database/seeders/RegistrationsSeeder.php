<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Doğru facade kullanıldı

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Öncelikle lessons ve students tablolarından rastgele veri seçeceğiz
        $lessons = \App\Models\Lesson::all();
        $students = \App\Models\Student::all();

        foreach (range(1, 100) as $index) { // 100 adet kayıt oluşturacağız
            $lesson = $lessons->random();
            $student = $students->random();

            // Aşağıda price alanını örnek veri olarak rastgele belirledim
            DB::table('registrations')->insert([
                'lesson_id' => $lesson->id,
                'student_id' => $student->id,
                'price' => rand(50, 500), // Rastgele bir fiyat belirledim, siz ihtiyaca göre ayarlayabilirsiniz
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}


