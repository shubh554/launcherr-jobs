<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerProfile extends Model
{
    use HasFactory;
    protected $table = 'employer_profiles';
    protected $fillable = ['user_id','company_name','address','company_website','city','state','country','about','image'];

    public function user()
    {
    return $this->belongsTo(User::class);
    }
}
