<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('type')
                    ->required(),

                FileUpload::make('image_path')
                    ->disk('public')               // IMPORTANT
                    ->directory('gallery')         // storage/app/public/gallery
                    ->image()                      // image only
                    ->visibility('public')         // ensures URL works
                    ->required(),

                TextInput::make('video_url')
                    ->url()
                    ->nullable(),
            ]);
    }
}
