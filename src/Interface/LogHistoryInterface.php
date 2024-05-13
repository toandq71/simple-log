<?php

namespace VoyagerInc\SimpleHistories\Interface;

interface LogHistoryInterface
{
    /**
     * Save History
     *
     * @param array $data
     */
    public function saveHistory(array $data);
}
