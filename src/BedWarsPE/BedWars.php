<?php
namespace BedWarsPE;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\item\Item;
use pocketmine\event\EventListener;
use pocketmine\Player;
use pocketmine\block\Block;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

class BedWars extends PluginBase implements Listener {
  public function onEnable() {
    $this->safeResource("config.yml");
    $this->getServer()->getPluginManager()->registerEvents($this,$this);
  }
}
