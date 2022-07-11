<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $guarded = [
        'code', 'type', 'sum'
    ];

    /**
     * @param string $code
     * @return bool
     */
    public static function isExist(string $code): bool
    {
        return self::where('code', $code)->exists();
    }

    /**
     * @param string $code
     * @return bool
     */
    public static function isUsed(string $code): bool
    {
        return (bool)self::where('code', $code)->used;
    }

    /**
     * @param $code
     * @return bool
     */
    public static function isAvailableByDate($code): bool
    {
        return Carbon::now() > self::where('code', $code)->availableTo;
    }
}
