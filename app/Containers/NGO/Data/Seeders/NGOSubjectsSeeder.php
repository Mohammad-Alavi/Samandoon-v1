<?php

namespace App\Containers\NGO\Data\Seeders;

use App\Containers\NGO\Models\Subject;
use App\Ship\Parents\Seeders\Seeder;

class NGOSubjectsSeeder extends Seeder
{
    public function run()
    {
        // add ngo subjects here
        $subjects = ['test1', 'test2', 'test3', 'test4'];

        foreach ($subjects as $subject) {
            $tempSubject = new Subject;
            $tempSubject->subject = $subject;
            $tempSubject->saveOrFail();
        }

    }
}
