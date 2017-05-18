<?php

namespace pocketmine\event\player;

use pocketmine\entity\Entity;
use pocketmine\Player;

/**
 * Called when a player is interacting an entity
 */
class InteractEvent extends PlayerEvent{
	public static $handlerList = null;

	protected $entity;

	protected $action;

	/**
	 * @param Player   $player
	 */
	public function __construct(Player $player, Entity $entity = null, $action){
		$this->player = $player;
		$this->entity = $entity;
		$this->action = $action;
	}

	/**
	 * @return Entity
	 */
	public function getEntity(){
		return $this->entity;
	}

	/**
	 * @return int
	 */
	public function getAction(){
		return $this->action;
	}
}