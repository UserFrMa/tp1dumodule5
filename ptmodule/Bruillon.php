switch($zonegeo){
     
     case $zone[0]:
         return $zone[1];
        
     case $zone[2]:
         return $zone[3];
         

     case $zone[4]:
         return $zone[5];
     
     case $zone[6]:
           return $zone[7];
         
     case $zone[8]:
         return $zone[9];

         
     case $zone[10]:
         return $zone[11];

     case $zone[12] :
         return $zone[13];

     case $zone[14] :
         return $zone[15];

     default:
       return ('inconnu');
     
 }

 $zone = array('France'=>'Paris',
    'Allemagne' => 'Berlin',
    'Italie' => 'Rome',
    'Maroc' => 'Rabat',
    'Espagne' => 'Madrid',
    'Portugal' => 'Lisbonne',
    'Angleterre' => 'Londres',
    );


    $message = '<pre>
                $zone = array(\'France\'=>\'Paris\',
                \'Allemagne\' => \'Berlin\',
                \'Italie\' => \'Rome\',
                \'Maroc\' => \'Rabat\',
                \'Espagne\' => \'Madrid\',
                \'Portugal\' => \'Lisbonne\',
                \'Angleterre\' => \'Londres\',
                );
                $zonegeo = \'Italie\';
                switch($zonegeo){
                 
                    case \'France\':
                        return $zone[\'France\'];
                        break;
                       
                    case \'Allemagne\':
                        return $zone[\'Allemagne\'];
                        break;
                        
                    case \'Italie\':
                        return $zone[\'Italie\'];
                        break;
                       
                    case \'Maroc\':
                        return $zone[\'Maroc\'];
                        break;
            
                        
                    case \'Espagne\':
                        return $zone[\'Espagne\'];
                        break;
            
                    case \'Portugal\' :
                        return $zone[\'Portugal\'];
                        break;
            
                    case \'Angleterre\':
                        return $zone[\'Angleterre\'];
                        break;
            
                    default:
                      return (\'inconnu\');
                      break;
                    
        }</pre>';