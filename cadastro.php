<?php
//Classe Cadastro
    class Cadastro{
        //Declaração de Variáveis
        private string $nomeCompleto;
        private int    $rg;
        private int    $telefone;
        private string $temPlanoSaude;
        private string $planoSaude;
        private string $usaFarmaciaPopular;
        private string $produtos;

        public function __construct($nomeCompleto, $rg, $telefone, $temPlanoSaude, $planoSaude ,$usaFarmaciaPopular, $produtos){
            $this->setNomeCompleto    ($nomeCompleto);
            $this->setRg              ($rg);
            $this->setTelefone        ($telefone);
            $this->setTemPlanoSaude   ($temPlanoSaude);
            $this->setPlanoSaude      ($planoSaude);
            $this->setFarmaciaPopular ($usaFarmaciaPopular);
            $this->setProdutos        ($produtos);
        }//Fim do Construtor

        //Métodos modificadores e de consulta
        

        //Get
        public function getNomeCompleto(){
            return $this->nomeCompleto;
        }//Fim do Método

        public function getRg(){
            return $this->rg;
        }//Fim do Método

        public function getTelefone(){
            return $this->telefone;
        }//Fim do Método

        public function getTemPlanoSaude(){
            return $this->temPlanoSaude;
        }//Fim do Método

        public function getPlanoSaude(){
            return $this->planoSaude;
        }//Fim do Método
        public function getUsaFarmaciaPopular(){
            return $this->usaFarmaciaPopular;
        }//Fim do Método
        public function getProdutos(){
            return $this->produtos;
        }//Fim do Método

        
        //Set
        public function setNomeCompleto($nomeCompleto){
            $this->nomeCompleto = $nomeCompleto;
        }//Fim do Método

        public function setRg($rg){
            $this->rg = $rg;
        }//Fim do Método

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }//Fim do Método

        public function setTemPlanoSaude($temPlanoSaude){
            $this->temPlanoSaude = $temPlanoSaude;
        }//Fim do Método

        public function setPlanoSaude($planoSaude){
            $this->planoSaude = $planoSaude;
        }//Fim do Método

        public function setFarmaciaPopular($usaFarmaciaPopular){
            $this->usaFarmaciaPopular = $usaFarmaciaPopular;
        }//Fim do Método

        public function setProdutos($produtos){
            $this->produtos = $produtos;
        }//Fim do Método


        //Método Imprimir
        public function imprimir(){
            $msg = "\n\nNome Completo: "      .$this->getNomeCompleto().
                   "\nRg: "                   .$this->getRg().
                   "\nTelefone: "             .$this->getTelefone().
                   "\nTem Plano de Saude: "   .$this->getTemPlanoSaude().
                   "\nPlano de Saude: "       .$this->getPlanoSaude().
                   "\nUsa Farmacia Popular: " .$this->getUsaFarmaciaPopular().
                   "\nProdutos: "             .$this->getProdutos();
            return $msg;
        }//Fim do Método Imprimir


        //Método Excluir
        public function excluir(){
            $this->setCPF     (0);
            $this->setNome    ("");
            $this->setTelefone("");
            $this->setEndereco("");
            $this->setCidade  ("");
            return "Dados Excluidos!";
        }//Fim do Método Excluir


        //Método Atualizar
        public function atualizar($opcao, $dado){
            switch($opcao){
                case 1:
                    $this->setNome($dado);
                    break;
                case 2:
                    $this->setTelefone($dado);
                    break;
                case 3:
                    $this->setEndereco($dado);
                    break;
                case 4:
                    $this->setCidade($dado);
                    break;
                default:
                    return "Opção escolhida não é válida";
            }//Fim do Opção
        }//Fim do Método Atualizar

    }//Fim da Classe Cadastro
?>