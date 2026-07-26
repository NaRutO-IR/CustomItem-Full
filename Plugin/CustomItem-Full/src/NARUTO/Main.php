<?php

namespace NARUTO;

use customiesdevs\customies\item\CustomiesItemFactory;
use pocketmine\plugin\PluginBase;
use customiesdevs\customies\item\CreativeInventoryInfo;
use pocketmine\entity\Entity;
use customiesdevs\customies\block\{CustomiesBlockFactory, Material, Model};
use customiesdevs\customies\entity\CustomiesEntityFactory;
use pocketmine\block\{BlockBreakInfo, BlockIdentifier, BlockTypeIds, BlockTypeInfo};
use pocketmine\math\Vector3;

 
#Lebas
use NARUTO\Lebas\items\army_uniform;
use NARUTO\Lebas\items\clown_uniform;
use NARUTO\Lebas\items\construction_uniform;
use NARUTO\Lebas\items\mcdonalds_uniform;
use NARUTO\Lebas\items\mechanical_uniform;
use NARUTO\Lebas\items\special_force_uniform;
use NARUTO\Lebas\items\suit_21;
use NARUTO\Lebas\items\onesie_09;
use NARUTO\Lebas\items\onesie_16;
use NARUTO\Lebas\items\onesie_27;
use NARUTO\Lebas\items\tshirt_26;
use NARUTO\Lebas\items\tshirt_03;
use NARUTO\Lebas\items\sweater_05;
use NARUTO\Lebas\items\sweater_25;
use NARUTO\Lebas\items\sweater_26;
use NARUTO\Lebas\items\sweater_19;
use NARUTO\Lebas\items\sweater_12;
use NARUTO\Lebas\items\jacket_09;
#Kolah
use NARUTO\hats\items\hat_birthday_present;
use NARUTO\hats\items\hat_boombox;
use NARUTO\hats\items\hat_chicken_jockey;
use NARUTO\hats\items\hat_crown_cake;
use NARUTO\hats\items\hat_jester;
use NARUTO\hats\items\hat_party;
use NARUTO\hats\items\hat_propeller;
use NARUTO\hats\items\snowier_arch_crown;
use NARUTO\hats\items\snowier_plaghat;
use NARUTO\hats\items\snowier_plag;
use NARUTO\hats\items\snowier_fungus_hat;
use NARUTO\hats\items\snowier_foreigner_hat;
use NARUTO\hats\items\snowier_evoc_hat;
use NARUTO\hats\items\snowier_ent_hat;
use NARUTO\hats\items\snowier_ember_hat;
use NARUTO\hats\items\snowier_cussycolor;
use NARUTO\hats\items\snowier_cowboy;
#Wings
use NARUTO\Wings\items\angel_black;
use NARUTO\Wings\items\angel_yellow;
use NARUTO\Wings\items\cyborg_black;
use NARUTO\Wings\items\cyborg_green;
use NARUTO\Wings\items\cyborg_orange;
use NARUTO\Wings\items\cyborg_purple;
use NARUTO\Wings\items\cyborg_yellow;
use NARUTO\Wings\items\dragon_black;
use NARUTO\Wings\items\dragon_blue;
use NARUTO\Wings\items\dragon_orange;
use NARUTO\Wings\items\dragon_red;
use NARUTO\Wings\items\dragon_white;
use NARUTO\Wings\items\fairy_black;
use NARUTO\Wings\items\fairy_blue;
use NARUTO\Wings\items\fairy_yellow;
#swords
use NARUTO\swords\items\celestial_sword;
use NARUTO\swords\items\shadow_sword;
use NARUTO\swords\items\mystic_axe;
use NARUTO\swords\items\poison_sword;
use NARUTO\swords\items\skull_crusher;
use NARUTO\swords\items\cosmic_sword;
use NARUTO\swords\items\hand_sword;
use NARUTO\swords\items\ice_sword;
use NARUTO\swords\items\kyro_sword;
use NARUTO\swords\items\laser_sword;
use NARUTO\swords\items\skull_sword;
use NARUTO\swords\items\titan_sword;
use NARUTO\swords\items\vampire_sword;
#Army/sarbaz
use NARUTO\Army\items\sarbaz\sarbaz_helmet;
use NARUTO\Army\items\sarbaz\sarbaz_chestplate;
use NARUTO\Army\items\sarbaz\sarbaz_leggings;
use NARUTO\Army\items\sarbaz\sarbaz_boots;
#Army/arshad
use NARUTO\Army\items\arshad\army_arshad_helmet;
use NARUTO\Army\items\arshad\army_arshad_chestplate;
use NARUTO\Army\items\arshad\army_arshad_leggings;
use NARUTO\Army\items\arshad\army_arshad_boots;
#Army/leader
use NARUTO\Army\items\leader\army_leader_helmet;
use NARUTO\Army\items\leader\army_leader_chestplate;
use NARUTO\Army\items\leader\army_leader_leggings;
use NARUTO\Army\items\leader\army_leader_boots;
#Fbi/sarbaz
use NARUTO\Fbi\items\sarbaz\fbi_helmet;
use NARUTO\Fbi\items\sarbaz\fbi_chestplate;
use NARUTO\Fbi\items\sarbaz\fbi_leggings;
use NARUTO\Fbi\items\sarbaz\fbi_boots;
#Fbi/mavad
use NARUTO\Fbi\items\mavad\mavad_helmet;
use NARUTO\Fbi\items\mavad\mavad_chestplate;
use NARUTO\Fbi\items\mavad\mavad_leggings;
use NARUTO\Fbi\items\mavad\mavad_boots;
#Fbi/leader
use NARUTO\Fbi\items\leader\leader_helmet;
use NARUTO\Fbi\items\leader\leader_chestplate;
use NARUTO\Fbi\items\leader\leader_leggings;
use NARUTO\Fbi\items\leader\leader_boots;
#Fbi/swat
use NARUTO\Fbi\items\swat\swat_helmet;
use NARUTO\Fbi\items\swat\swat_chestplate;
use NARUTO\Fbi\items\swat\swat_leggings;
use NARUTO\Fbi\items\swat\swat_boots;
#Fbi/arshad
use NARUTO\Fbi\items\arshad\arshad_helmet;
use NARUTO\Fbi\items\arshad\arshad_chestplate;
use NARUTO\Fbi\items\arshad\arshad_leggings;
use NARUTO\Fbi\items\arshad\arshad_boots;

class Main extends PluginBase
{

    protected function onEnable(): void
    {  
		#Lebas
		CustomiesItemFactory::getInstance()->registerItem(army_uniform::class, "ic:army_uniform ", "Army Uniform");
		CustomiesItemFactory::getInstance()->registerItem(clown_uniform::class, "ic:clown_uniform", "Dalghak Uniform");
		CustomiesItemFactory::getInstance()->registerItem(construction_uniform::class, "ic:construction_uniform", "Builder Uniform");
		CustomiesItemFactory::getInstance()->registerItem(mcdonalds_uniform::class, "ic:mcdonalds_uniform", "MC Donalds Uniform");
		CustomiesItemFactory::getInstance()->registerItem(mechanical_uniform::class, "ic:mechanical_uniform", "RepairMan Uniform");
		CustomiesItemFactory::getInstance()->registerItem(special_force_uniform::class, "ic:special_force_uniform", "SWAT Uniform");
		CustomiesItemFactory::getInstance()->registerItem(suit_21::class, "ic:suit_21", "Helper Uniform");
		CustomiesItemFactory::getInstance()->registerItem(jacket_09::class, "ic:jacket_09", "Jacket");
		CustomiesItemFactory::getInstance()->registerItem(onesie_09::class, "ic:onesie_09", "Onesie 1");
		CustomiesItemFactory::getInstance()->registerItem(onesie_16::class, "ic:onesie_16", "Onesie 2");
		CustomiesItemFactory::getInstance()->registerItem(onesie_27::class, "ic:onesie_27", "Onesie 3");
		CustomiesItemFactory::getInstance()->registerItem(sweater_05::class, "ic:sweater_05", "Sweater 1");
		CustomiesItemFactory::getInstance()->registerItem(sweater_12::class, "ic:sweater_12", "Sweater 2");
		CustomiesItemFactory::getInstance()->registerItem(sweater_19::class, "ic:sweater_19", "Sweater 3");
		CustomiesItemFactory::getInstance()->registerItem(sweater_25::class, "ic:sweater_25", "Sweater 4");
		CustomiesItemFactory::getInstance()->registerItem(sweater_26::class, "ic:sweater_26", "Sweater 5");
		CustomiesItemFactory::getInstance()->registerItem(tshirt_03::class, "ic:tshirt_03", "T Shirt 1");
		CustomiesItemFactory::getInstance()->registerItem(tshirt_26::class, "ic:tshirt_26", "T Shirt 2");
		#Kolah
	    CustomiesItemFactory::getInstance()->registerItem(hat_birthday_present::class, "noxcrew.ft:hat_birthday_present", "Birthday Hat"); 
	    CustomiesItemFactory::getInstance()->registerItem(hat_boombox::class, "noxcrew.ft:hat_boombox", "Boombox Hat");  
        CustomiesItemFactory::getInstance()->registerItem(hat_chicken_jockey::class, "noxcrew.ft:hat_chicken_jockey", "Chicken Jocky Hat");  
	    CustomiesItemFactory::getInstance()->registerItem(hat_crown_cake::class, "noxcrew.ft:hat_crown_cake", "Crown Cake Hat");  
	    CustomiesItemFactory::getInstance()->registerItem(hat_jester::class, "noxcrew.ft:hat_jester", "Jester Hat");  
	    CustomiesItemFactory::getInstance()->registerItem(hat_party::class, "noxcrew.ft:hat_party", "Party Hat");
        CustomiesItemFactory::getInstance()->registerItem(hat_propeller::class, "noxcrew.ft:hat_propeller", "Propeller Hat");
	    CustomiesItemFactory::getInstance()->registerItem(snowier_arch_crown::class, "snowier:arch_crown", "Arch Hat");  
	    CustomiesItemFactory::getInstance()->registerItem(snowier_plaghat::class, "snowier:plaghat", "Plaghat Hat");  
	    CustomiesItemFactory::getInstance()->registerItem(snowier_plag::class, "snowier:plag", "Plag Hat");
	    CustomiesItemFactory::getInstance()->registerItem(snowier_fungus_hat::class, "snowier:fungus_hat", "Fungus Hat");  
	    CustomiesItemFactory::getInstance()->registerItem(snowier_foreigner_hat::class, "snowier:foreigner_hat", "Foreigner Hat");  
	    CustomiesItemFactory::getInstance()->registerItem(snowier_evoc_hat::class, "snowier:evoc_hat", "Evoc Hat");  
	    CustomiesItemFactory::getInstance()->registerItem(snowier_ent_hat::class, "snowie:ent_hat", "Ent Hat");  
	    CustomiesItemFactory::getInstance()->registerItem(snowier_ember_hat::class, "snowier:ember_hat", "Ember Hat");  
	    CustomiesItemFactory::getInstance()->registerItem(snowier_cussycolor::class, "snowier:cussycolor", "Cussy Hat");  
	    CustomiesItemFactory::getInstance()->registerItem(snowier_cowboy::class, "snowier:cowboy", "Cowboy Hat"); 
		#Wings
		 CustomiesItemFactory::getInstance()->registerItem(angel_black::class, "mn_wings:angel_type4_black_wings", "Black Angel"); 
		 CustomiesItemFactory::getInstance()->registerItem(angel_yellow::class, "mn_wings:angel_type1_yellow_wings", "Yellow Angel");  
		 CustomiesItemFactory::getInstance()->registerItem(cyborg_black::class, "mn_wings:cyborg_type2_black_wings", "Black Cyborg");  
		 CustomiesItemFactory::getInstance()->registerItem(cyborg_green::class, "mn_wings:cyborg_type3_green_wings", "Green Cyborg");  
		 CustomiesItemFactory::getInstance()->registerItem(cyborg_orange::class, "mn_wings:cyborg_type4_orange_wings", "Orange Cyborg");
		 CustomiesItemFactory::getInstance()->registerItem(cyborg_purple::class, "mn_wings:cyborg_type1_purple_wings", "Purple Cyborg");
		 CustomiesItemFactory::getInstance()->registerItem(cyborg_yellow::class, "mn_wings:cyborg_type3_yellow_wings", "Yellow Cyborg");
		 CustomiesItemFactory::getInstance()->registerItem(dragon_black::class, "mn_wings:dragon_type4_black_wings", "Black Dragon");
		 CustomiesItemFactory::getInstance()->registerItem(dragon_blue::class, "mn_wings:dragon_type3_blue_wings", "Blue Dragon");
		 CustomiesItemFactory::getInstance()->registerItem(dragon_orange::class, "mn_wings:dragon_type4_orange_wings", "Orange Dragon");
		 CustomiesItemFactory::getInstance()->registerItem(dragon_red::class, "mn_wings:dragon_type4_red_wings", "Red Dragon");
		 CustomiesItemFactory::getInstance()->registerItem(dragon_white::class, "mn_wings:dragon_type1_white_wings", "White Dragon");
		 CustomiesItemFactory::getInstance()->registerItem(fairy_black::class, "mn_wings:fairy_type1_black_wings", "Black Fairy");
		 CustomiesItemFactory::getInstance()->registerItem(fairy_blue::class, "mn_wings:fairy_type2_blue_wings", "Blue Fairy");
		 CustomiesItemFactory::getInstance()->registerItem(fairy_yellow::class, "mn_wings:fairy_type4_yellow_wings", "Yellow Fairy"); 
		 #Swords
		 CustomiesItemFactory::getInstance()->registerItem(celestial_sword::class, "manalabs_opw:celestial_sword", "Celestial Sword");
		 CustomiesItemFactory::getInstance()->registerItem(shadow_sword::class, "manalabs_opw:shadow_sword", "Shadow Sword");
		 CustomiesItemFactory::getInstance()->registerItem(mystic_axe::class, "manalabs_opw:mystic_axe", "Mystic Axe");
		 CustomiesItemFactory::getInstance()->registerItem(poison_sword::class, "manalabs_opw:poison_sword", "Poison Sword");
		 CustomiesItemFactory::getInstance()->registerItem(skull_crusher::class, "manalabs_opw:skull_crusher", "Skull Crusher");
		 CustomiesItemFactory::getInstance()->registerItem(cosmic_sword::class, "manalabs_opw:cosmic_sword", "Cosmic Sword");
		 CustomiesItemFactory::getInstance()->registerItem(hand_sword::class, "manalabs_opw:hand_sword", "Hand Sword");
		 CustomiesItemFactory::getInstance()->registerItem(ice_sword::class, "manalabs_opw:ice_sword", "Ice Sword");
		 CustomiesItemFactory::getInstance()->registerItem(kyro_sword::class, "manalabs_opw:kyro_sword", "Kyro Sword");
		 CustomiesItemFactory::getInstance()->registerItem(laser_sword::class, "manalabs_opw:laser_swordz", "Laser Sword");
		 CustomiesItemFactory::getInstance()->registerItem(skull_sword::class, "manalabs_opw:skull_sword", "Skull Sword");
		 CustomiesItemFactory::getInstance()->registerItem(titan_sword::class, "manalabs_opw:titan_sword", "Titan Sword");
		 CustomiesItemFactory::getInstance()->registerItem(vampire_sword::class, "manalabs_opw:vampire_sword", "Vampire Sword");
		 #Army/Arshad
		 CustomiesItemFactory::getInstance()->registerItem(army_arshad_helmet::class, "mazario_moa:piglin_helmet", "Army Arshad Helmet");
		 CustomiesItemFactory::getInstance()->registerItem(army_arshad_chestplate::class, "mazario_moa:piglin_chestplate", "Army Arshad Chestplate");
		 CustomiesItemFactory::getInstance()->registerItem(army_arshad_leggings::class, "mazario_moa:piglin_leggings", "Army Arshad Leggings");
		 CustomiesItemFactory::getInstance()->registerItem(army_arshad_boots::class, "mazario_moa:piglin_boots", "Army Arshad Boots");
		 #Army/Sarbaz
		 CustomiesItemFactory::getInstance()->registerItem(sarbaz_helmet::class, "mazario_moa:panda_helmet", "Sarbaz Helmet");
		 CustomiesItemFactory::getInstance()->registerItem(sarbaz_chestplate::class, "mazario_moa:panda_chestplate", "Sarbaz Chestplate");
		 CustomiesItemFactory::getInstance()->registerItem(sarbaz_leggings::class, "mazario_moa:panda_leggings", "Sarbaz Leggings");
		 CustomiesItemFactory::getInstance()->registerItem(sarbaz_boots::class, "mazario_moa:panda_boots", "Sarbaz Boots");
		 #Army/leader
		 CustomiesItemFactory::getInstance()->registerItem(army_leader_helmet::class, "mazario_moa:iron_golem_helmet", "Army Leader Helmet");
		 CustomiesItemFactory::getInstance()->registerItem(army_leader_chestplate::class, "mazario_moa:iron_golem_chestplate", "Army Leader Chestplate");
		 CustomiesItemFactory::getInstance()->registerItem(army_leader_leggings::class, "mazario_moa:iron_golem_leggings", "Army Leader Leggings");
		 CustomiesItemFactory::getInstance()->registerItem(army_leader_boots::class, "mazario_moa:iron_golem_boots", "Army Leader Boots");
		 #Fbi/Sarbaz
		 CustomiesItemFactory::getInstance()->registerItem(fbi_helmet::class, "mazario_moa:blaze_helmet", "FBI Sarbaz Helmet");
		 CustomiesItemFactory::getInstance()->registerItem(fbi_chestplate::class, "mazario_moa:blaze_chestplate", "FBI Sarbaz Chestplate");
		 CustomiesItemFactory::getInstance()->registerItem(fbi_leggings::class, "mazario_moa:blaze_leggings", "FBI Sarbaz Leggings");
		 CustomiesItemFactory::getInstance()->registerItem(fbi_boots::class, "mazario_moa:blaze_boots", "FBI Sarbaz Boots");
		 #Fbi/swat
		 CustomiesItemFactory::getInstance()->registerItem(swat_helmet::class, "mazario_moa:chicken_helmet", "FBI Swat Helmet");
		 CustomiesItemFactory::getInstance()->registerItem(swat_chestplate::class, "mazario_moa:chicken_chestplate", "FBI Swat Chestplate");
		 CustomiesItemFactory::getInstance()->registerItem(swat_leggings::class, "mazario_moa:chicken_leggings", "FBI Swat Leggings");
		 CustomiesItemFactory::getInstance()->registerItem(swat_boots::class, "mazario_moa:chicken_boots", "FBI Swat Boots");
		 #Fbi/mavad
		 CustomiesItemFactory::getInstance()->registerItem(mavad_helmet::class, "mazario_moa:creeper_helmet", "FBI Mobarez Mavad Helmet");
		 CustomiesItemFactory::getInstance()->registerItem(mavad_chestplate::class, "mazario_moa:creeper_chestplate", "FBI Mobarez Mavad Chestplate");
		 CustomiesItemFactory::getInstance()->registerItem(mavad_leggings::class, "mazario_moa:creeper_leggings", "FBI Mobarez Mavad Leggings");
		 CustomiesItemFactory::getInstance()->registerItem(mavad_boots::class, "mazario_moa:creeper_boots", "FBI Mobarez Mavad Boots");
		 #Fbi/leader
		 CustomiesItemFactory::getInstance()->registerItem(leader_helmet::class, "mazario_moa:ender_dragon_helmet", "FBI Leader Helmet");
		 CustomiesItemFactory::getInstance()->registerItem(leader_chestplate::class, "mazario_moa:ender_dragon_chestplate", "FBI Leader Chestplate");
		 CustomiesItemFactory::getInstance()->registerItem(leader_leggings::class, "mazario_moa:ender_dragon_leggings", "FBI Leader Leggings");
		 CustomiesItemFactory::getInstance()->registerItem(leader_boots::class, "mazario_moa:ender_dragon_boots", "FBI Leader Boots");
		 #Fbi/arshad
		 CustomiesItemFactory::getInstance()->registerItem(arshad_helmet::class, "mazario_moa:bee_helmet", "FBI Arshad Helmet");
		 CustomiesItemFactory::getInstance()->registerItem(arshad_chestplate::class, "mazario_moa:bee_chestplate", "FBI Arshad Chestplate");
		 CustomiesItemFactory::getInstance()->registerItem(arshad_leggings::class, "mazario_moa:bee_leggings", "FBI Arshad Leggings");
		 CustomiesItemFactory::getInstance()->registerItem(arshad_boots::class, "mazario_moa:bee_boots", "FBI Arshad Boots");
    }
}