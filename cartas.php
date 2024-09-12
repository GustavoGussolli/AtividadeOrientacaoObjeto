<?php 

    class Carta{

        private int $numero;
        private string $nome;



        /**
         * Get the value of numero
         */
        public function getNumero(): int
        {
                return $this->numero;
        }

        /**
         * Set the value of numero
         */
        public function setNumero(int $numero): self
        {
                $this->numero = $numero;

                return $this;
        }

        /**
         * Get the value of nome
         */
        public function getNome(): string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome(string $nome): self
        {
                $this->nome = $nome;

                return $this;
        }
    }

    $cartas = array();

    $carta1 = new Carta;
    $carta1->setNumero(1);
    $carta1->setNome("Rios de Sangue"); 

    $carta2 = new Carta;
    $carta2->setNumero(2);
    $carta2->setNome("Presa do Cão de Caça");

    $carta3 = new Carta;
    $carta3->setNumero(3);
    $carta3->setNome("Espada Grande com Lâmina Enxertada"); 

    $carta4 = new Carta;
    $carta4->setNumero(4);
    $carta4->setNome("Espada Grande da Lua Sombria"); 

    $carta5 = new Carta;
    $carta5->setNumero(5);
    $carta5->setNome("Espada Grande das Ruínas"); 

    $carta6 = new Carta;
    $carta6->setNumero(6);
    $carta6->setNome("Véu da Lua"); 

    $carta7 = new Carta;
    $carta7->setNumero(7);
    $carta7->setNome("Espada Blasfema");

    array_push($cartas, $carta1 ,$carta2, $carta3, $carta4 , $carta5, $carta6, $carta7);
    $elementoDoArray = $cartas[array_rand($cartas)];

    foreach ($cartas as $c){
        
        echo "Numero da carta: " . $c->getNumero() . "\n";
        echo "Nome da carta: " . $c->getNome() . "\n";
    }

    do{
        
        $escolha = readline("Informe a carta: ");

        if($escolha == $elementoDoArray->getNumero())
            echo "Acertou \n";
        if ($escolha != $elementoDoArray->getNumero())
            echo "Errou \n";
       
    } while($escolha != $elementoDoArray->getNumero());