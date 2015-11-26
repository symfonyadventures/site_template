<?php
namespace AppBundle\Entity; 

use FOS\UserBundle\Model\User as BaseUser;  
use Doctrine\ORM\Mapping as ORM;  
 
 /**  
  * @ORM\Entity  
  * @ORM\Table(name="fos_user")  
  */  
 class Usuario extends BaseUser  
 {  
   /**  
    * @var integer
    *
    * @ORM\Id  
    * @ORM\Column(type="integer")  
    * @ORM\GeneratedValue(strategy="AUTO")  
    */  
     protected $id; 

     public function __construct()  
     {  
        parent::__construct();  
         // your own logic  
     }  
 } 
