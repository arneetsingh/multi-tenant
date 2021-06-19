<?php


namespace App\Models;


use App\Scopes\TenantScope;

trait BelongsToTenant{

	public static function bootBelongsToTenant()
	{
        static::addGlobalScope(new TenantScope());

        static::creating(function($model){
            if(session()->has('tenant_id')){
                $model->tenant_id = session()->get('tenant_id');
            }
        });
	}
}
