<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Balance
 * @package App\Models
 */
class Balance extends Model
{
    use HasFactory;

    /**
     * @var string
     *
     */
    protected $table = 'balance';

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'balance'
    ];
}
