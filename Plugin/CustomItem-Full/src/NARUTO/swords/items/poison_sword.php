<?php

namespace NARUTO\swords\items;

use customiesdevs\customies\item\component\DurabilityComponent;
use customiesdevs\customies\item\CreativeInventoryInfo;
use customiesdevs\customies\item\ItemComponents;
use customiesdevs\customies\item\ItemComponentsTrait;
use pocketmine\item\Item;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\Sword;
use pocketmine\item\ToolTier;

class poison_sword extends Sword implements ItemComponents {
    use ItemComponentsTrait;

    public function __construct(ItemIdentifier $identifier) {
        $name = "Poison Sword";

        
        $inventory = new CreativeInventoryInfo(
            CreativeInventoryInfo::CATEGORY_EQUIPMENT,
            CreativeInventoryInfo::GROUP_SWORD
        );

        
        parent::__construct($identifier, $name, ToolTier::DIAMOND());

        $this->initComponent('manalabs_opw_poison_sword', $inventory);
        
        
        $this->addComponent(new DurabilityComponent(5000));
        
    
        
    }

    public function getMaxDurability(): int {
        return 5000;
    }

    public function getAttackPoints(): int {
        return 18; 
    }
}