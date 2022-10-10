<?php
#  _____                               ____             _                     _  __ ____
# |_   _|__ _  _ __  ____ __ _ __  __ / ___|_   _  ___ | |_  ___   _ __ ___  | |/ /| __ )
#   | | / _` || '__||_  // _` |\ \/ /| |   | | | |/ __|| __|/ _ \ | '_ ` _ \ | ' / |  _ \
#   | || (_| || |    / /| (_| | >  < | |___| |_| |\__ \| |_| (_) || | | | | || . \ | |_) |
#   |_| \__,_||_|   /___|\__,_|/_/\_\ \____|\__,_||___/ \__|\___/ |_| |_| |_||_|\_\|____/
#
namespace tarzax\kb;

use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{

    public function onEnable(): void
    {
        $this->getLogger()->notice("TarzaxKB has been successfully activated");
        @mkdir($this->getDataFolder());
        $this->saveDefaultConfig();
        $this->getResource("config.yml");
    }

    #public function kb(EntityDamageByEntityEvent $event){
    #    $player = $event->getEntity();
    #    $event->setKnockBack(($this->getConfig()->get("KB")));
    #}

    public function Kb(EntityDamageByEntityEvent $event){
        $player = $event->getEntity();
        $event->setAttackCooldown(($this->getConfig()->get("AttackCooldown")));
        $event->setKnockBack(($this->getConfig()->get("KB")));
    }
}