<?php

namespace GildedRose;

/**
 * Class AgedBrie
 * @package GildedRose
 */
class AgedBrie extends Item
{
    /**
     * Updates quality of the Aged Brie item
     * "Aged Brie" actually increases in Quality the older it gets
     * The Quality of an item is never more than 50
     */
    public function updateQuality(){

        $this->quality += 1;
        $this->sellIn -= 1;
        if($this->sellIn <= 0){
            $this->quality += 1;
        }
        if ($this->quality > 50)
        {
            $this->quality = 50;
        }
        return;

    }
}