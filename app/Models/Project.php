<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['status_id','category_id', 'user_id', 'title', 'tech_stack','description','links','image','tags'];

    protected $casts = [
        'links' => 'array',
        'tags' => 'array',
    ];
    // Дополнительно: методы для удобного получения ссылок
    public function getGithubLinkAttribute()
    {
        return $this->links['github'] ?? null;
    }

    public function getProjectLinkAttribute()
    {
        return $this->links['project'] ?? null;
    }

    public function getPortfolioLinkAttribute()
    {
        return $this->links['portfolio'] ?? null;
    }

    public function getDemoLinkAttribute()
    {
        return $this->links['demo'] ?? null;
    }


    public function status(){
        return $this->belongsTo(Status::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
