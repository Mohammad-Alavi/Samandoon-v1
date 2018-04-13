<?php

namespace App\Containers\NGO\Data\Seeders;

use App\Containers\NGO\Models\Subject;
use App\Ship\Parents\Seeders\Seeder;

class NGOSubjectsSeeder extends Seeder
{
    public function run()
    {
        // add ngo subjects here
        $subjects = ['علمی', 'فرهنگی', 'اجتماعی', 'ورزشی', 'هنری', 'نیکو کاری و امور خیریه', 'بشردوستانه', 'امور زنان', 'آسیب دیدگان اجتماعی', 'حمایتی', 'بهداشت و درمان', 'توانبخشی', 'محیط زیست', 'عمران و آبادانی'];

        foreach ($subjects as $subject) {
            $tempSubject = new Subject;
            $tempSubject->subject = $subject;
            $tempSubject->saveOrFail();
        }
    }
}
