<?php

 /**
 *  _____   ______   ______   _  _   _   ______
 * |  _ _| |  __  | |  __  | | |/ / |_| |  ____|
 * | |     | |  | | | |  | | |   /   _  | |___
 * | |     | |  | | | |  | | |  (   | | |  ___|
 * | |_ _  | |__| | | |__| | |   \  | | | |____
 * |_____| |______| |______| |_|\_\ |_| |______|
 *
 * Coded by MilkAndCookiz.
 *
**/

namespace MilkAndCookiz\JoinTitle;

use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

use MilkAndCookiz\JoinTitle\SendTask;

//Coded and created by CookieCode.

class Main extends PluginBase implements Listener {

	private $prefix = "[JoinTitle]";

	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
//		$this->getServer()->getLogger()->info(TextFormat::GREEN . $this->prefix . TextFormat::YELLOW . " Plugin enabled by MilkAndCookiz");
		$this->saveDefaultConfig();
	}

	public function onDisable() {
//		$this->getServer()->getLogger()->info(TextFormat::GREEN . $this->prefix . TextFormat::YELLOW . " Plugin disabled by MilkAndCookiz");
	}

	public function onJoin(PlayerJoinEvent $event) {
		$joinTask = new SendTask($this, $event->getPlayer());
		$this->getScheduler()->scheduleDelayedTask($joinTask, 20);
	}

}
