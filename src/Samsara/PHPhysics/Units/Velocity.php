<?php

namespace Samsara\PHPhysics\Units;

use Samsara\PHPhysics\Core\Quantity;
use Samsara\PHPhysics\Core\UnitComposition;

class Velocity extends Quantity
{
    const METERS_PER_SECOND         = 'm/s';
    const KILOMETERS_PER_SECOND     = 'km/s';
    const LIGHT_SPEED               = 'c';
    const AU_PER_SECOND             = 'AU/s';

    protected $units = [
        self::METERS_PER_SECOND     => 1,
        self::KILOMETERS_PER_SECOND => 2,
        self::LIGHT_SPEED           => 3,
        self::AU_PER_SECOND         => 4
    ];

    protected $native = self::METERS_PER_SECOND;

    public function __construct($value, UnitComposition $unitComposition, $unit = null)
    {
        $this->rates = [
            $this->units[self::METERS_PER_SECOND]       => '1',
            $this->units[self::KILOMETERS_PER_SECOND]   => '1000',
            $this->units[self::LIGHT_SPEED]             => '299792458',
            $this->units[self::AU_PER_SECOND]           => '149597870700'
        ];

        parent::__construct($value, $unitComposition, $unit);

        $this->setComposition(UnitComposition::VELOCITY);
    }

}