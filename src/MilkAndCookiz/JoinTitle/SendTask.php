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
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\scheduler\Task;
use pocketmine\event\Listener;
#Internal
use MilkAndCookiz\JoinTitle\Main;

class SendTask extends Task implements Listener {

	public function __construct(Main $main, Player $player) {
		$this->main = $main;
		$this->player = $player;
	}

	public function onRun($currentTick) {
		$this->player->addTitle(
			$this->main->getConfig()->get("main_title"),
			$this->main->getConfig()->get("down_title"),
			20,
			$this->main->getConfig()->get("time_title"),
			40
		);
	}

}
