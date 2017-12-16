<?php namespace App\Model;
 
 use Illuminate\Database\Eloquent\Model;
 
 
 class Siswa extends Model
 {
     protected $table = 'siswa';
     protected $guarded = ['id','created_at','updated_at'];
 }