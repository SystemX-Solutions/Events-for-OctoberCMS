<?php
namespace XavieR\Events\Models;

use Model;

class City extends Model {


    /**
     * @var string The database table used by the model.
     */
    public $table = 'xavier_events_cities';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['title', 'description', 'confirmed'];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title' => 'required'
    ];

    /**
     * Returns the list of menu items, where the key is the id and the value is the title, indented with '-' for depth
     * @return array
     */
    public function getSelectList()
    {
        $items = $this->getAll();
        $output = array();
        foreach($items as $item) {
            $depthIndicator = $this->getDepthIndicators($item->nest_depth);
            $output["id-$item->id"] = $depthIndicator . ' ' . $item->title;
        }
        return $output;
    }

    /**
     * Recursively adds depth indicators, a '-', to a string
     *
     * @param int    $depth
     * @param string $indicators
     *
     * @return string
     */
    protected function getDepthIndicators( $depth = 0, $indicators = '' )
    {
        if ( $depth < 1 ) {
            return $indicators;
        }
        return $this->getDepthIndicators( --$depth, $indicators . '-' );
    }

    public function getPageList()
    {
        return ['first', 'second'];
    }

    /**
     * Get a list of all pages. Prepend an empty option to the start
     *
     * @return array
     */
    public function getUrlOptions()
    {
        $allPages = Page::sortBy('baseFileName')->lists('title', 'baseFileName');
        $pages = array(
            '' => 'No page link'
        );
        foreach($allPages as $key => $value) {
            $pages[$key] = "{$value} - (File: $key)";
        }
        return $pages;
    }

    /**
     * Returns the class name so I can compare
     *
     * @return string
     */
    public static function getClassName()
    {
        return get_called_class();
    }

}