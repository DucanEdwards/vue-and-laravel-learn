<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 站点
 */
class Site extends Model
{
    use HasFactory;

    // 哪些字段可以批量填充列表
    protected $fillable = ['title', 'domain', 'keyword', 'description', 'logo', 'icp', 'tel', 'email', 'counter'];
    // 哪些不能
    // protected $guarded=[];
}
