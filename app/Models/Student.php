<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_roll',
        'first_name',
        'last_name',
        'middle_name',
        'gender',
        'date_of_birth',
        'phone_no',
        'present_address',
        'permanent_address',
    ];
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
    public function calculateGPA()
{
    $totalCredits = 0;
    $totalPoints = 0;

    foreach ($this->enrollments as $enrollment) {
        if ($enrollment->grade) {
            $gradePoints = $this->getGradePoints($enrollment->grade->grade);
            $credits = $enrollment->course->credits;

            $totalPoints += $gradePoints * $credits;
            $totalCredits += $credits;
        }
    }

    return $totalCredits ? $totalPoints / totalCredits : 0;
}

private function getGradePoints($grade)
{
    $points = [
        'A' => 4,
        'B' => 3,
        'C' => 2,
        'D' => 1,
        'F' => 0,
    ];

    return $points[$grade];
}

}