<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function find($id): array
    {
        $job = Arr::first(self::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }

    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$150,000'
            ],
            [
                'id' => 2,
                'title' => 'Developer',
                'salary' => '$130,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$60,000'
            ],
        ];
    }
}
