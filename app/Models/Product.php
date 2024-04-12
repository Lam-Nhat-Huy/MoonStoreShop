<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Searchable;

    protected $fillable = ['product_name', 'regular_price', 'discount_price', 'quantity', 'short_description', 'product_description', 'image', 'category_id', ''];

    public function toSearchableArray()
    {
        return [
            'id' => (int) $this->id,
            'product_name' => (string) $this->product_name,
        ];
    }
}
