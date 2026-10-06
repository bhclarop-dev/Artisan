<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;

#[Fillable(['name','sale_price', 'purchase_price','description', 'stock', 'image', 'status', 'registered_by' ])]
#[Hidden(['status', 'registered_by'])]

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';

    public function clients(): HasMany
    {
        return $this->hasMany(Client::class, 'product_id');
    }
}
