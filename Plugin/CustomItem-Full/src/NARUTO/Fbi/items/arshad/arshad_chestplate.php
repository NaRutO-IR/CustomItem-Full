<?php

namespace NARUTO\Fbi\items\arshad;

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

class arshad_chestplate extends Armor implements ItemComponents {
    use ItemComponentsTrait;

    public function __construct(ItemIdentifier $identifier) {
        $name = "FBI Arshad Chestplate";

        $armorInfo = new ArmorTypeInfo(
            14,                 
            4000,                
            ArmorInventory::SLOT_CHEST
        );

        $inventory = new CreativeInventoryInfo(
            CreativeInventoryInfo::CATEGORY_EQUIPMENT,
            CreativeInventoryInfo::GROUP_CHESTPLATE

        );

        parent::__construct($identifier, $name, $armorInfo);

        $this->initComponent('mazario_moa:bee_chestplate', $inventory);
        
        $this->addComponent(new DurabilityComponent(4000));
        
      
    }

    public function getMaxDurability(): int {
        return 4000;
    }

    public function getDefensePoints(): int {
        return 14;
    }
}