<?php

/**
 * (c) Joseluis Laso <wld1373@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Jaitec\AliasBundle\Generator;


interface AliasGeneratorInterface
{

    /**
     * encodes numeric id in n-based code
     * @param integer $id
     * @param byte $maxdigits
     * @return string 
     */
    public function encode($id, $maxdigits=8);


    /**
     * decodes an alias obtained previously with encode and returns the id that originates this alias
     * @param strig $alias
     * @return integer 
     */
    public function decode($alias);

    
}
