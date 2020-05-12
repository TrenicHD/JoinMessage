<?php

namespace TrenicHD;

/*##################################################
Coded By TrenicHD
Support?
YT:https://www.youtube.com/channel/UCkH1MkgKy72wGbX8x4mt2yA?view_as=subscriber
Discord: TrenicHD#4300
Github: https://github.com/TrenicHD
##################################################*/

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;


class Main extends PluginBase implements Listener {

    public $prefix = "[DeinServer.de]";  /*<--- änder die Naricht so wie du es willst ^-^ [DeinServer.de] z.b Plot-craft.net....*/

    public function onEnable()
    {
        $this->getLogger()->info(TextFormat::GREEN. "JoinMessage Aktiv code by TrenicHD c:");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onDisable()
    {
        $this->getLogger()->info(TextFormat::RED. "Oh.. noooo Plugin Deaktiviert :c");
    }

    public function onJoinPlayer(PlayerJoinEvent $event){
        $name = $event->getPlayer()->getName();
        $event->setJoinMessage("$this->prefix §6[§r+§6] $name");
    }

    public function onPlayerQuit(PlayerQuitEvent $event){
        $name = $event->getPlayer()->getName();
        $event->setQuitMessage("$this->prefix §6[§r-§6] $name");
    }

}