<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    public function primaryMuscle() {
        return $this->belongsTo(Muscle::class, 'primaryMuscleTrained');
    }

    public function secondaryMuscle() {
        return $this->belongsTo(Muscle::class, 'secondaryMuscleTrained');
    }

    public function tertiaryMuscle() {
        return $this->belongsTo(Muscle::class, 'tertiaryMuscleTrained');
    }
}
