<?php 

    class Carta{

        private int $numero;
        private string $nome;
        private string $tipo;

        



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

                /**
         * Get the value of tipo
         */
        public function getTipo(): string
        {
                return $this->tipo;
        }

        /**
         * Set the value of tipo
         */
        public function setTipo(string $tipo): self
        {
                $this->tipo = $tipo;

                return $this;
        }

    }

    $cartas = array();

    $carta1 = new Carta;
    $carta1->setNumero(1);
    $carta1->setNome("Rios de Sangue");
    $carta1->setTipo("Katana Leve");

    $carta2 = new Carta;
    $carta2->setNumero(2);
    $carta2->setNome("Presa do Cão de Caça");
    $carta2->setTipo("Espada Comprida");

    $carta3 = new Carta;
    $carta3->setNumero(3);
    $carta3->setNome("Espada Grande com Lâmina Enxertada"); 
    $carta3->setTipo("Espada Pesada");

    $carta4 = new Carta;
    $carta4->setNumero(4);
    $carta4->setNome("Espada Grande da Lua Sombria"); 
    $carta4->setTipo("Espada Pesada");

    $carta5 = new Carta;
    $carta5->setNumero(5);
    $carta5->setNome("Espada Grande das Ruínas"); 
    $carta5->setTipo("Espada Pesada");

    $carta6 = new Carta;
    $carta6->setNumero(6);
    $carta6->setNome("Véu da Lua"); 
    $carta6->setTipo("Katana Leve");

    $carta7 = new Carta;
    $carta7->setNumero(7);
    $carta7->setNome("Espada Blasfema");
    $carta7->setTipo("Espada Comprida");

    array_push($cartas, $carta1 ,$carta2, $carta3, $carta4 , $carta5, $carta6, $carta7);
    $elementoDoArray = $cartas[array_rand($cartas)];
    $pontuacao = 0;

    foreach ($cartas as $c){
        
        echo "Numero da carta: " . $c->getNumero() . "\n";
        echo "Nome da carta: " . $c->getNome() . "\n";
        echo "Tipo da arma: " . $c->getTipo() . "\n";
    }

    do {

        do{
        
            $escolha = readline("Advinhe o Número da carta: ");

            if ($elementoDoArray == 1){
                echo "Dica: ";
            }

            if ($elementoDoArray == 2){
                echo "Dica: ";
            }

            if ($elementoDoArray == 3){
                echo "Dica: ";
            }

            if ($elementoDoArray == 4){
                echo "Dica: ";
            }

            if ($elementoDoArray == 5){
                echo "Dica: ";
            }

            if ($elementoDoArray == 6){
                echo "Dica: ";
            }

            if ($elementoDoArray == 7){
                echo "Dica: ";
            }
    
            if($escolha == $elementoDoArray->getNumero()){
                echo "Acertou \n";
                $pontuacao++;
            }
                
            if ($escolha != $elementoDoArray->getNumero())
                echo "Errou \n";
           
        } while($escolha != $elementoDoArray->getNumero());    


        $continuar = readline("Quer Continuar? Digite S ou N: ");

        if ($continuar == "S")
            $elementoDoArray = $cartas[array_rand($cartas)];
       
    } while ($continuar !="N");

    echo "Pontuação Final: " . $pontuacao;
