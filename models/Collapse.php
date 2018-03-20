<?php namespace ChiragPatel\BootstrapCollapse\Models;

use Model;
use October\Rain\Database\Traits\Sortable;

/**
 * Model
 */
class Collapse extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    use Sortable;

    protected $dates = ['deleted_at','created_at','updated_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $fillable = ['title','description','sort_order'];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'chiragpatel_bootstrapcollapse_collapses';
}
