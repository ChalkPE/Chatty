<?php

namespace ifteam\Chatty\dummy;

use pocketmine\network\protocol\DataPacket;
use pocketmine\network\SourceInterface;
use pocketmine\Player;
use pocketmine\plugin\Plugin;

class DummyPlayer extends Player {
	public $name = "";
	public $loggedIn = true;
	public function __construct(SourceInterface $interface, $clientID, $ip, $port) {
		parent::__construct ( $interface, $clientID, $ip, $port );
	}
	public function dataPacket(DataPacket $packet, $needACK = false) {
		return parent::dataPacket ( $packet, $needACK );
	}
	public function handleDataPacket(DataPacket $packet) {
		//parent::handleDataPacket ( $packet );
	}
	public function isOnline() {
		return false;
	}
	public function setName($name) {
		$this->name = $name;
	}
	public function getDisplayName() {
		return $this->name;
	}
	public function sendChunk($x, $z, $payload){
		return;
	}
	public function isAlive(){
		return false;
	}
	public function getName() {
		return $this->name;
	}
	public function hasPermission($name){
		return false;
	}
	public function addAttachment(Plugin $plugin, $name = \null, $value = \null){
		return false;
	}
}
?>