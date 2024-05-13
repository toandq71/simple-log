<?php

namespace VoyagerInc\SimpleHistories;

use App\Models\Histories;
use VoyagerInc\SimpleHistories\Interface\LogHistoryInterface;

class LogHistory implements LogHistoryInterface
{
    /**
     * Save History
     *
     * @param array $data
     */
    public function saveHistory(array $data): void
    {
        $mHistory = new Histories();

        $mHistory->fill($data)->save();
    }
}
