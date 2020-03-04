<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class Button extends Model
{
  protected $guarded = [];
	protected $table = 'thebutton';
  protected $fillable = [
    'value'
  ];

	public $timestamps = false;
}
?>
