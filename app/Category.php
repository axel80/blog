<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{

    protected $table = "categories";
    protected $fillable = ['name'];
    
    // se establece la relacion que tienen las tablas en la base de datos en este caso uno a muchos
    public function articles()
    {
        
        // retona la relacion que hay entre las tablas
        return $this->hasMany('App\Article'); 
        
    }
}
