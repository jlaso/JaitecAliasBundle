<?php

namespace Jaitec\AliasBundle\Generator;

interface AliasGeneratorInterface
{

    /**
     * encodes numeric id in n-based code
     * @param integer $id
     * @param integer $maxdigits
     * @return string 
     */
    public function encode($id, $maxdigits=8);


    /**
     * decodes an alias obtained previously with encode and returns the id that originates this alias
     * @param string $alias
     * @return integer 
     */
    public function decode($alias);

    
}
