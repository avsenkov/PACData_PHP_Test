<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'last_name',
        'first_name',
        'middle_name',
        'sex',
        'birth_date',
        'center_id',
        'primary_icd10_id',
        'diagnosis_text',
        'genome_file_url',
    ];

    public function getFullNameAttribute(): string
    {
        return trim("{$this->last_name} {$this->first_name} {$this->middle_name}");
    }
}



