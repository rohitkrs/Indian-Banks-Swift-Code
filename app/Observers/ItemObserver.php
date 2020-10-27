<?php

namespace App\Observers;
use App\Item;

class ItemObserver
{
   public function creating(Item $item)
   {
      $item->name = strtoupper($item->name);
   }
}