<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
    use HasFactory;
    protected $table = 'job_posting';
    protected $fillable = ['title','description','duration','short_description','location'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
