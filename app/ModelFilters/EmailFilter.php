<?php

namespace App\ModelFilters;

use Illuminate\Support\Facades\Auth;
use EloquentFilter\ModelFilter;
use Carbon\Carbon;

class EmailFilter extends ModelFilter
{
    /**
     * Related Models that have ModelFilters as well as the method on the ModelFilter
     * As [relationMethod => [input_key1, input_key2]].
     *
     * @var array
     */
    public $relations = [];

    public function emailType($type)
    {
        $user = Auth::user();

        $emailType = match ($type) {
            1 => $this->where('email_type', 1)->whereJsonContains('recievers', ['email' => $user['email']]),

            2 => $this->where('email_type', 2)->whereJsonContains('recievers', ['email' => $user['email']]),

            3 => $this->where('email_type', 3)->whereJsonContains('recievers', ['email' => $user['email']]),

            4 => $this->where('email_type', 4)->whereJsonContains('recievers', ['email' => $user['email']]),
        };

        return $emailType;
    }

    public function search($search)
    {
        return $this->whereLike('subject', $search);
    }

    public function receivedAt($range)
    {
        $rangeArray = explode(' - ', $range);

        $startDate = Carbon::parse($rangeArray[0])->format('Y-m-d');

        $endDate = Carbon::parse($rangeArray[1])->format('Y-m-d');

        return $this->whereBetween('created_at', [$startDate, $endDate]);
    }
}
