<?php

class Bird {

  public $commonName;
  public $habitat;
  public $food;
  public $nestPlacement;
  public $behavior;
  public $conservation_id;
  public $backyardTips;

  protected const CONSERVATION_OPTIONS = [
    1 => 'Low concern',
    2 => 'Moderate concern',
    3 => 'High concern',
    4 => 'Extreme concern'
  ];

  public function __construct($args=[]) {
    $this->commonName = $args['common_name'] ?? '';
    $this->habitat = $args['habitat'] ?? '';
    $this->food = $args['food'] ?? '';
    $this->nestPlacement = $args['nest_placement'] ?? '';
    $this->behavior = $args['behavior'] ?? '';
    $this->conservation_id = $args['conservation_id'] ?? 1;
    $this->backyardTips = $args['backyard_tips'] ?? '';
  }

  public function conservation_level() {
    if($this->conservation_id > 0) {
      return self::CONSERVATION_OPTIONS[$this->conservation_id];
    } else {
      return "Unknown";
    }
  }

}

?>
