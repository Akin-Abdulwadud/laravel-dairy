<?php

// database/seeders/NotesTableSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Note;
use App\Models\User;

class NotesTableSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {
            Note::create([
                'note' => $this->getRandomNote(),
                'user_id' => $user->id,
            ]);
        }
    }

    private function getRandomNote()
    {
        $notes = [
            'This is a test note.',
            'This is another test note.',
            'This is a note created by the seeder.',
            'This is a test note with a longer text.',
            'This is a note created by the seeder with a longer text.',
        ];

        return $notes[array_rand($notes)];
    }
}
