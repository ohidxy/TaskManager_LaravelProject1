<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'owner_id'];

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function addTask($validated_data){
        $this->tasks()->create(
            $validated_data
        );
    }
}
