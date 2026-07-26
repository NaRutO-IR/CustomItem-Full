<?php

namespace NARUTO\Fbi\items\sarbaz;

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

class fbi_helmet extends Armor implements ItemComponents {
    use ItemComponentsTrait;

    public function __construct(ItemIdentifier $identifier) {
        $name = "FBI Sarbaz Helmet";

        $armorInfo = new ArmorTypeInfo(
            15,                 
            4000,                
            ArmorInventory::SLOT_HEAD
        );

        $inventory = new CreativeInventoryInfo(
            CreativeInventoryInfo::CATEGORY_EQUIPMENT,
            CreativeInventoryInfo::GROUP_HELMET

        );

        parent::__construct($identifier, $name, $armorInfo);

        $this->initComponent('mazario_moa:blaze_helmet', $inventory);
        
        $this->addComponent(new DurabilityComponent(4000));
        
      
    }

    public function getMaxDurability(): int {
        return 4000;
    }

    public function getDefensePoints(): int {
        return 15;
    }
}