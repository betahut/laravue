<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class ManageFtp extends Model{
    protected $fillable = ['user_id', 'hostname', 'username', 'password', 'port', 'user_ip'];
}
