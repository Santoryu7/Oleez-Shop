<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    public const CATEGORY_ID = 'category_id';
    public const TITLE = 'title';


    protected function getCallbacks(): array
    {
        return [
            self::CATEGORY_ID => [$this, 'categoryId'],
            self::TITLE => [$this, 'searchField'],
        ];
    }

    public function categoryId(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }

    public function searchField(Builder $builder, $value)
    {
        $builder->where('title', 'LIKE', '%'.$value.'%');
    }
}
