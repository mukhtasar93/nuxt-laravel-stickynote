<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notes')->insert([
            [
                'title' => 'Note Title 1',
                'content' => 'Content 1, Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium modi totam excepturi laboriosam, voluptas nostrum sequi quibusdam sint eligendi distinctio.'
            ],
            [
                'title' => 'Note Title 2',
                'content' => 'Content 2, Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium modi totam excepturi laboriosam, voluptas nostrum sequi quibusdam sint eligendi distinctio.'
            ],
            [
                'title' => 'Note Title 3',
                'content' => 'Content 3, Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium modi totam excepturi laboriosam, voluptas nostrum sequi quibusdam sint eligendi distinctio.'
            ],
            [
                'title' => 'Note Title 4',
                'content' => 'Content 4, Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium modi totam excepturi laboriosam, voluptas nostrum sequi quibusdam sint eligendi distinctio.'
            ],
            [
                'title' => 'Note Title 5',
                'content' => 'Content 5, Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium modi totam excepturi laboriosam, voluptas nostrum sequi quibusdam sint eligendi distinctio.'
            ],
            [
                'title' => 'Note Title 6',
                'content' => 'Content 6, Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium modi totam excepturi laboriosam, voluptas nostrum sequi quibusdam sint eligendi distinctio.'
            ],
            [
                'title' => 'Note Title 7',
                'content' => 'Content 7, Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium modi totam excepturi laboriosam, voluptas nostrum sequi quibusdam sint eligendi distinctio.'
            ],
            [
                'title' => 'Note Title 8',
                'content' => 'Content 8, Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium modi totam excepturi laboriosam, voluptas nostrum sequi quibusdam sint eligendi distinctio.'
            ],
            [
                'title' => 'Note Title 9',
                'content' => 'Content 9, Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium modi totam excepturi laboriosam, voluptas nostrum sequi quibusdam sint eligendi distinctio.'
            ],
            [
                'title' => 'Note Title 10',
                'content' => 'Content 10, Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium modi totam excepturi laboriosam, voluptas nostrum sequi quibusdam sint eligendi distinctio.'
            ],
            [
                'title' => 'Note Title 11',
                'content' => 'Content 11, Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium modi totam excepturi laboriosam, voluptas nostrum sequi quibusdam sint eligendi distinctio.'
            ],
            [
                'title' => 'Note Title 12',
                'content' => 'Content 12, Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium modi totam excepturi laboriosam, voluptas nostrum sequi quibusdam sint eligendi distinctio.'
            ]
        ]);
    }
}