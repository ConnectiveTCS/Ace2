<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'clientImage',
        'clientName',
        'clientProfilePicture',
        'clientBusinessName',
        'clientProjectCategory',
        'clientProjectName',
        'clientShortStudy',
        'clientProjectDuration',
        'clientReviewProject',
    ];
}
