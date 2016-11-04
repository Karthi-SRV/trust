<?php

namespace App\Models;

use Database\ORM\Model as BaseModel;


class GroupAccountToApprovedCustomerUser extends BaseModel
{
	public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
