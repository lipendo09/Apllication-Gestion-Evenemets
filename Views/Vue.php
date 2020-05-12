<?php
class Vue{
private $_file;

// titre de la page

private $_t;

function __construct($action){

    $this->_file= 'vues/vue'.$action.'.php';

}

//créer qui va géner et afficher la vue

public function generate($data){

     //definir le contenu envoyer
     $content= $this->generateFile($this->_file, $data);

     //template
     $vue= $this->generateFile('vues/template.php', array('t'=> $this->_t, 'content'=> $content));
     echo $vue;
}


private function generateFile($file, $data){

    if(file_exists($file)){
        extract($data);

        //commencer la temporisation
        ob_start();

        require $file;


        //arreter la temporisation

        return ob_get_clean();
    }

//     else{
//         throw new Exception("Fichier ".$file."introuvable", 1);
// }
   
        
    }





}









?>