<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class BlogPostsChart extends ChartWidget
{
    protected static ?string $heading = 'Blog Posts Chart';

    protected function getData(): array
    { {
            $data = DB::table('posts')
                ->select(DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'), DB::raw('count(*) as count'))
                ->groupBy('month')
                ->orderBy('month')
                ->get();

            $labels = $data->pluck('month')->toArray();
            $counts = $data->pluck('count')->toArray();

            return [
                'labels' => $labels,
                'datasets' => [
                    [
                        'label' => 'Posts Created',
                        'data' => $counts,
                        'borderColor' => 'rgba(75, 192, 192, 1)',
                        'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                        'fill' => true,
                    ],
                ],
            ];
        }
    }

    protected function getType(): string
    {
        return 'line';
    }
}
