<?php

namespace App\Events\Expense;

use App\Models\Expense;
use Illuminate\Queue\SerializesModels;

/**
 * Class ExpenseWasUpdated.
 */
class ExpenseWasUpdated extends Event
{
    use SerializesModels;

    /**
     * @var Expense
     */
    public $expense;

    /**
     * Create a new event instance.
     *
     * @param Expense $expense
     */
    public function __construct(Expense $expense)
    {
        $this->expense = $expense;
    }
}
