<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    const TABLE = 'jobs';
    protected $table = self::TABLE;

    const PAYMENT_TYPE_CASH = 'cash';
    const PAYMENT_TYPE_CREDIT_CARD = 'credit_card';
    const PAYMENT_TYPE_CHECK = 'check';
    const PAYMENT_TYPE_BANK_TRANSFER = 'bank_transfer';
    const PAYMENT_TYPE_PAYPAL = 'paypal';
    const PAYMENT_TYPE_OTHER = 'other';

    const STATUS_PENDING = 'pending';
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_COMPLETED = 'completed';
    const STATUS_CANCELED = 'canceled';
    const STATUS_IN_DISPUTE = 'in_dispute';

    const CURRENCY_EUR = 'EUR';
    const CURRENCY_USD = 'USD';
}
