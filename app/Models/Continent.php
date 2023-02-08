<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'continents';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'code';

	/**
	 * The "type" of the primary key ID.
	 *
	 * @var string
	 */
	protected $keyType = 'string';

    public $incrementing = false;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['code', 'name', 'active'];



}
