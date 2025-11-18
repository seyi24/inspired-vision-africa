<?php

namespace App\Filament\Resources\Galleries\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Gallery;

class GalleryStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Galleries', Gallery::count()),

            Stat::make('Total Images', Gallery::sum('image_count')),

            Stat::make('Active Galleries', Gallery::where('status', 'active')->count()),
        ];
    }
}
