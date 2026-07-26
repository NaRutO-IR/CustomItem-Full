<?php

namespace NARUTO\hats\items;

use customiesdevs\customies\item\component\DurabilityComponent;
use customiesdevs\customies\item\CreativeInventoryInfo;
use customiesdevs\customies\item\ItemComponents;
use customiesdevs\customies\item\ItemComponentsTrait;
use pocketmine\inventory\ArmorInventory;
use pocketmine\item\ArmorTypeInfo;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\Armor;
use pocketmine\item\ItemFactory;
use pocketmine\item\ItemIds;

class hat_propeller extends Armor implements ItemComponents {
    use ItemComponentsTrait;

    public function __construct(ItemIdentifier $identifier) {
        $name = "Propeller Hat";

        $armorInfo = new ArmorTypeInfo(
            4,                 
            350,                
            ArmorInventory::SLOT_HEAD   
        );

        $inventory = new CreativeInventoryInfo(
            CreativeInventoryInfo::CATEGORY_EQUIPMENT,
            CreativeInventoryInfo::GROUP_HELMET

        );

        parent::__construct($identifier, $name, $armorInfo);

        $this->initComponent('ft.hat_propeller', $inventory);
        
        $this->addComponent(new DurabilityComponent(350));
        
      
    }

    public function getMaxDurability(): int {
        return 350;
    }

    public function getDefensePoints(): int {
        return 4;
    }
}