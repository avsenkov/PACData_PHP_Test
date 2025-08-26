<?php

namespace App\Filament\Resources\Patients\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PatientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code')
                    ->required(),
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('first_name')
                    ->required(),
                TextInput::make('middle_name'),
                TextInput::make('sex')
                    ->required(),
                DatePicker::make('birth_date'),
                TextInput::make('center_id')
                    ->numeric(),
                TextInput::make('primary_icd10_id')
                    ->numeric(),
                Textarea::make('diagnosis_text')
                    ->columnSpanFull(),
                TextInput::make('genome_file_url'),
            ]);
    }
}
