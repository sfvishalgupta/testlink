<?php
class Parkingoption extends Eloquent {

	protected $table = "parkingoptions";
	protected $fillable = array('name');
	protected $guarded = array();
	public $timestamps = false;
}