<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Description;

/**
 * Class Category
 * @property $name
 * @property $code
 * @property description
 * @package App\Models
 */
class Category extends Model
{
    use HasFactory;
}
