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

#External
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\scheduler\Task;
use pocketmine\event\Listener;
#Internal
use MilkAndCookiz\JoinTitle\Main;

class SendTask extends Task implements Listener {

	public function __construct(Main $plugin, Player $player) {
		$this->main = $plugin;
		$this->player = $player;
	}

	public function onRun($currentTick) {
		$this->player->addTitle(
			$this->plugin->getConfig()->get("main_title"),
			$this->plugin->getConfig()->get("down_title"),
			20,
			$this->plugin->getConfig()->get("time_title"),
			40
		);
	}

}
