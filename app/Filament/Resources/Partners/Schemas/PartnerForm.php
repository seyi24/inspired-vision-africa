<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')                             
                  ->disk('public')               
                    ->directory('partner')         
                    ->image()                      
                    ->visibility('public')         
                    ->required(),
                     ]);
    }
}
