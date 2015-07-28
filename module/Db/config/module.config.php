<?php

return array(
    'doctrine' => array(
        'driver' => array(
            'db_entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' => __DIR__ . '/orm'
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Db\Entity'  => 'db_entity'
                )
            )
        )
    ),
);
