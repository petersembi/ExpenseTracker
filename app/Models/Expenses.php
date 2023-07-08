<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;

    protected $fillable = ['item', 'quantity', 'cost', 'category', 'date_of_creation', 'author'];

    public function scopeFilter($query, array $filters)
    {
        //if a tag has been parsed in the url
        if($filters['search'] ?? false){
            $query -> where('item', 'like', '%'. request('search').'%')
                -> orwhere('quantity', 'like', '%'.request('search').'%')
                -> orwhere('cost', 'like', '%'.request('search').'%')
                ->orwhere('date_of_creation', 'like', '%'.request('search').'%')
                ->orwhere('category', 'like', '%'.request('search').'%')
                ->orwhere('author', 'like', '%'.request('search').'%')
                ;
        }
    }
}
