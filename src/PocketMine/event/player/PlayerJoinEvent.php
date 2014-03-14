<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link   http://www.pocketmine.net/
 *
 *
 */

namespace PocketMine\Event\Player;

use PocketMine;
use PocketMine\Player;

/**
 * Called when a player joins the server, after sending all the spawn packets
 */
class PlayerJoinEvent extends PlayerEvent{
	public static $handlers;
	public static $handlerPriority;

	/**
	 * @var string
	 */
	protected $joinMessage;

	public function __construct(Player $player, $joinMessage){
		$this->player = $player;
		$this->joinMessage = $joinMessage;
	}

	/**
	 * Sets the join message. This won't work on Minecraft: PE <= 0.8.1, since the join message is client-side
	 * We'll see if Mojang adds this in Minecraft: PE 0.9.0 ^.^
	 *
	 * @param string $joinMessage
	 */
	public function setJoinMessage($joinMessage){
		$this->joinMessage = $joinMessage;
	}

	public function getJoinMessage(){
		return $this->joinMessage;
	}

}