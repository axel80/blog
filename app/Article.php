<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model 
{

    protected $table = "articles";
    
    protected $fillable = ['title', 'content', 'category_id', 'user_id'];
    
    // Tambien se establece la relacion que hay entre el modelo Category y $this
    public function category()
    {
        
        return  $this->belongsTo('App\Category');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function images()
    {
        
        return $this->hasMany('App\Image');
        
    }
    
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

}
