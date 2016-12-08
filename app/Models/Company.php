<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $fillable = [
        'name',
        'logo_path',
    ];

    protected static function boot()
    {
        parent::boot();
        static::created(function (Company $company) {
            $company = $company->fresh();
            $name = strtolower(preg_replace('/\s+/', '', $company->name));
            $company->users()->create([
                'name'     => $name . '-user',
                'email'    => "user@$name.com",
                'password' => bcrypt('hello123')
            ]);
        });
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
