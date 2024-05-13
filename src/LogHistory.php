<?php

namespace toandq71\SimpleLog;

use App\Models\Histories;
use toandq71\SimpleLog\Interface\LogHistoryInterface;

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
