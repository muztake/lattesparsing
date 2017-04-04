<?php
  // Classe principal
  class Curriculo{
    // ICs
    public $titulacao;
    public $artigos;
    public $livros;
    // Construtor
    public function __construct(){
      $this->titulacao = '';
    }

    // Função para instanciar e buscar todas as informações
    public static function getCurriculo($data){
      $curriculo = new self();
      $curriculo->titulacao = Titulacao::getTitulacao($data);
      $curriculo->artigos = Artigo::getArtigos($data);
      $curriculo->livros = Livro::getLivros($data);
      return $curriculo;
    }

  }

  // Importando ICs
  require 'utils.php';
  require 'titulacao.php';
  require 'artigo.php';
  require 'livro.php';






 ?>
