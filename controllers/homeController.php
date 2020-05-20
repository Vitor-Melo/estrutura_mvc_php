<?php
class homeController extends controller{
    
    public function index(){
        $a = new Anuncios();

        $dados = array(
            'quantidade' => "24",
            'nome' => 'Vitor',
            'anuncios' => $a->getAnuncio()
        );

        $this->loadTemplate('home', $dados);
    }

}

?>