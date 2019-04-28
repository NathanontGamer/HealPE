<?php

declare(strict_types=1);

namespace NG14872\Heal;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use poketmine\Player;
use poketmine\Server;

class Main extends PluginBase{

	public function onEnable() : void{
		$this->getLogger()->info("§aHeal Enable!");
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "heal":
				$sender->sendMessage("§aYou have been healed!");
				$sender->setHealth(20.0);
				return true;
			default:
				return false;
		}
	}

	public function onDisable() : void{
		$this->getLogger()->info("§cHeal Disable!");
	}
}
