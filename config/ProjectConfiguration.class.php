<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony-1.4.20/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
  }

  public function configureDoctrine(Doctrine_Manager $manager)
  {
    $manager->setCollate('utf8_unicode_ci');
    $manager->setCharset('utf8');
  }
}
