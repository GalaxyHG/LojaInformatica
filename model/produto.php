<?php
    class Produtos
    {
        private $idProduto;
        private $nome;
        private $preco;
        private $quantidade;

        public function setIdProduto($idProduto){$this->idProduto = $idProduto;}
        public function setNome($nome){$this->nome = $nome;}
        public function setPreco($preco){$this->preco = $preco;}
        public function setQuantidade($quantidade){$this->quantidade = $quantidade;}

        public function getIdProduto(){return $this->idProduto;}
        public function getNome(){return $this->nome;}
        public function getPreco(){return $this->preco;}
        public function getQuantidade(){return $this->quantidade;}
    }
?>