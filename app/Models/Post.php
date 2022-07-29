<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_img',
        'descripcion',
        'image',
        'user_id',
        'image_name'
    ];
   
    public function user(){
        return $this->belongsTo(User::class);
      }

      public function getGetExcerptAttribute(){
        return \substr($this->body,0,140);
      }
      public function getGetImageAttribute(){
        if($this->image){
            return url("storage/$this->image");
        }
      }
}
