<?php
class Lost_object {
 
  private $caption;
  private $initial_location;
  private $final_location;
  private $found;
  private $found_date;
  private $img_path;
  private $file_name;

  public function __construct($caption = null, $initial_location = null, $final_location = null, $found = null, $found_date = null, $img_path = null, $file_name = null) {
      $this->caption = $caption;
      $this->initial_location = $initial_location;
      $this->final_location = $final_location;
      $this->found = $found;
      $this->found_date = $found_date;
      $this->img_path = $img_path;
      $this->file_name = $file_name;
  }

  public function __construct2($array){
        $this->caption = $array('caption');
        $this->initial_location = $array('initial_location');
        $this->final_location = $$array('final_location');
        $this->found = $array('found');
        $this->found_date = $array('found_date');
        $this->img_path = $array('img_path');
        $this->file_name = $array('file_name');
  }

  public function getCaption() {
      return $this->caption;
  }

  public function getInitialLocation() {
      return $this->initial_location;
  }

  public function getFinalLocation() {
      return $this->final_location;
  }

  public function getFound() {
      return $this->found;
  }

  public function getFoundDate() {
      return $this->found_date;
  }

  public function getImgPath() {
      return $this->img_path;
  }

  public function getFileName() {
      return $this->file_name;
  }

  public function setCaption($caption) {
      $this->caption = $caption;
  }

  public function setInitialLocation($initial_location) {
      $this->initial_location = $initial_location;
  }

  public function setFinalLocation($final_location) {
      $this->final_location = $final_location;
  }

  public function setFound($found) {
      $this->found = $found;
  }

  public function setFoundDate($found_date) {
      $this->found_date = $found_date;
  }

  public function setImgPath($img_path) {
      $this->img_path = $img_path;
  }

  public function setFileName($file_name) {
      $this->file_name = $file_name;
  }


}
?>