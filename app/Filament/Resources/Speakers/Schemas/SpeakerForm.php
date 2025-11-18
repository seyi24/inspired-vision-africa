<?php

namespace App\Filament\Resources\Speakers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SpeakerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('position'),
                FileUpload::make('image')
                ->disk('public')               // IMPORTANT
                    ->directory('speaker')         // storage/app/public/gallery
                    ->image()                      // image only
                    ->visibility('public')         // ensures URL works
                    ->required(),
                    
            ]);
    }
}
