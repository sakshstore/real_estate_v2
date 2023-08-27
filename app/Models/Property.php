<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
/**
 * Class Property
 *
 * @property $id
 * @property $bedrooms
 * @property $starting_price
 * @property $tenure
 * @property $property_type
 * @property $size_from
 * @property $completion
 * @property $interiors
 * @property $payment_plan_short
 * @property $payment_plan_detailsstarting_price
 * @property $down_payment
 * @property $connectivity
 * @property $unit_details
 * @property $floor_details
 * @property $amenities
 * @property $location
 * @property $address
 * @property $location_gps
 * @property $gallery
 * @property $broucher
 * @property $broker
 * @property $developer
 * @property $tags
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Property extends Model implements Viewable
{
      use InteractsWithViews;
   use SoftDeletes;
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['bedrooms','starting_price','tenure','property_type','size_from','completion',
    'interiors','payment_plan_short','payment_plan_details','down_payment','connectivities','unit_details','connectivites',
    'floor_details','amenities','location','address','location_gps','gallery','broucher','latitude', 'longitude','video_url','overview_custom_fields',
    'project_name','project_details','aminities','bathrooms','gallery_url','garage','property_thumbnail_url','status','brochure_url',
    'broker_id','developer','tags','project_tags','payment_id'];

    protected $dates = ['deleted_at'];

    public function broker()
    {
        return $this->belongsTo( User::class,'broker_id');
    }
    
    
    
        public function   leads(): HasMany
    {
        return $this->hasMany(Lead::class );
    }
    
}
