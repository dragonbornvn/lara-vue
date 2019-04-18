<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $visible = ['id', 'title', 'body', 'views', 'time', 'category_id' , 'user' , 'breadcrumb'];
    protected $appends = ['time','user','breadcrumb'];

    public function getTimeAttribute()
    {
        return $this->created_at->timestamp;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getUserAttribute()
    {
        return $this->user()->first();
    }

    public function getBreadcrumbAttribute()
    {
        $category = $this->category;

        return [
            [ 'title' => 'Home', 'link' => '/' ],
            [ 'title' => $category->name, 'link' => "/category/$category->id"],
            [ 'title' => $this->title, 'link' => "/topic/$this->id"]
        ];
    }

}
