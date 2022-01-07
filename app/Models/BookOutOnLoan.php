<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookOutOnLoan extends Model
{
    use HasFactory;
    protected $table = "book_out_on_loans";
    protected $primaryKey = "id";
    protected $appends = ['return_date', 'date_due', 'fine'];

    public function getReturnDateAttribute()
    {
        $time = date_create($this->issue_date);
        $time = date_add($time, date_interval_create_from_date_string("15 days"));
        return date_format($time, "Y-m-d");
    }

    public function getDateDueAttribute()
    {
        $days = self::calculateDifference($this->return_date);
        if ($this->return_date > date("Y-m-d")) 
            return $days;
        else 
            return 0;
        
    }

    public static function calculateDifference($return_date)
    {
        $date1 = date_create($return_date);
        $date2 = date_create(date("Y-m-d"));
        return date_diff($date1, $date2)->days;
    }

    public function getFineAttribute()
    {
        $days = self::calculateDifference($this->return_date);
        if ($this->date_due <= 0) 
            return $days * 10;
        else 
            return 0;
    }
}
