<?php
//Field HTML class

if( !class_exists( 'CEDCDF_Field_Html' )){
  class CEDCDF_Field_Html {
    public $name;
    public $value;
    public $attributes = array();
    public $classes = array();
    public $type;
    public $settings;
    
    function __construct( $settings ){
      
    }
  }
}
