<?php

class Transaction extends Eloquent {

	protected $table = 'transactions';

	protected $guarded = ['id'];

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}

}