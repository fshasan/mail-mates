<?php 

namespace App\ModelFilters;
use Illuminate\Support\Facades\Auth;
use EloquentFilter\ModelFilter;
use Carbon\Carbon;

class DraftFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function emailTypeDrafts($type)
    {
        $draftType = match ($type)
        {
            1 => $this->where('email_type', 1)->where('user_id', Auth::id()),

            2 => $this->where('email_type', 2)->where('user_id', Auth::id()),

            3 => $this->where('email_type', 3)->where('user_id', Auth::id()),

            4 => $this->where('email_type', 4)->where('user_id', Auth::id()),
        };

        return $draftType;
    }

    public function recievedAtDrafts($range)
    {
        $rangeArray = explode(' - ', $range);

        $startDate = Carbon::parse($rangeArray[0])->format('Y-m-d');

        $endDate = Carbon::parse($rangeArray[1])->format('Y-m-d');

        return $this->whereBetween('created_at', [$startDate, $endDate]);
    }

    public function searchDrafts($search)
    {
        return $this->whereLike('subject', $search);
    }


}
