<?php

namespace FlamingGenius\SandRun;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\event\Event;

class SandRun extends PluginBase implements Listener{
 public $timer = [];
 public function onEnable(){
  $this->saveDefaultConfig();
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
 }
 
 public function createTask(){
  $timer = new Task($this);
  $h = $this->getServer()->getScheduler()->scheduleRepeatingTask($timer, 20);
  $timer->setHandler($handler);
  $this->timer[$timer->getTaskId] = $timer->getTaskId();
 }

 
 public function onLobbyJoin(){
  $lobby = $this->getConfig()->get("lobby-world");
  $players = $this->getServer()->getLevelByName($lobby)->getOnlinePlayers();
  $min = $this->getConfig()->get("min-players");
  if(count($players) >= $min){
   
  }
 }


}




?>
