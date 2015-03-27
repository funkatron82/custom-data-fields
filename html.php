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
      if( ! isset( $settings['name'] ) ){
        return;
      }
      $this->name = esc_attr( $settings['name'] );
      $this->value = $settings['value'] ? $this->esc_value( $settings['value'] ) : '';
      
      $this->normalize( $settings );
    }
  }
  
  function set_attributes( $defaults, $settings ){
    $settings = (array) $settings;
    foreach( $defaults as $key => $default ) {
      $this->attributes[$key] = array_key_exists($key, $settings) ? $settings[$key] : $default;
    }
  }
  
  function normalize( $settings ){
    $this->set_attributes( array(), $settings ); 
  }
  
  function set_classes( $settings ){
    
  }
}
