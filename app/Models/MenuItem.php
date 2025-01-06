<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MenuItem extends Model
{
    use HasFactory;

    protected $table = 'menu_items';

    protected $fillable = [
        'menu_id', 'title', 'price', 'sorting_weight', 'waiting_time'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

}
