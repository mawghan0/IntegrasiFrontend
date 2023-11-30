<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
  protected $primaryKey = 'nim';
  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
    'nim', 'nama', 'angkatan', 'password', 'token'
  ];

  protected $table = 'mahasiswas';
  public $timestamps = false;
  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var string[]
   */
  protected $hidden = [];
}
