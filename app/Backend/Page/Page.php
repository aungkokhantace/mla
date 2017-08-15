<?php
/**
 * Created by PhpStorm.
 * Author: Mi Tin Zar Kyaw
 * Date: 1/14/2017
 * Time: 3:56 PM
 */

namespace App\Backend\Page;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';

    protected $fillable = [
        'id',
        'name',
        'description',
        'content',
        'status',
        'url',
        'title',
        'page_menu_order',
        'events_id',
        'templates_id',
        'updated_at','created_at','deleted_at'
    ];

    public function templatesidebarmenu()
    {
        return $this->hasMany('App\Backend\TemplateSidebarMenu\TemplateSidebarMenu');
    }

    public function template()
    {
        return $this->belongsTo('App\Backend\Template\Template','templates_id','id');
    }

    public function event()
    {
        return $this->belongsTo('App\Backend\Event\Event','events_id','id');
    }

    public function menudetail()
    {
        return $this->hasOne('App\Backend\Event\Event');
    }

    public function post()
    {
        return $this->hasMany('App\Backend\Post\Post');
    }
}
