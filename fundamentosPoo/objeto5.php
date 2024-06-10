<?php 

class Produto{
    private $descricao;
    private $estoque;
    private $preco;

    public function __construct($descricao, $estoque, $preco){
        $this -> setDescricao($descricao);
        $this -> setEstoque($estoque);
        $this -> setPreco($preco);
    }



    public function setDescricao($descricao){
 
            $this -> descricao = $descricao;
 
    }

    public function getDescricao(){
        return $this -> descricao;       
    }

    public function setEstoque($estoque){
        if(is_numeric($estoque)){
            $this -> estoque = $estoque;
        }
    }

    public function getEstoque(){
        return $this -> estoque;       
    }

    public function setPreco($preco){
        if(is_numeric($preco)){
            $this -> preco = $preco;
        }
    }

    public function getPreco(){
        return $this -> preco;       
    }

    public function aumentarEstoque($unidades){
        if(is_numeric($unidades) and $unidades >= 0){
            $this -> estoque += $unidades;
        }
    }

    public function diminuirEstoque($unidades){
        if(is_numeric($unidades) and $unidades >= 0){
            $this -> estoque -= $unidades;
        }
    }

    public function reajustarPreco($percentual){
        if(is_numeric($percentual) and $percentual > 0){
            $this -> preco *=(1 + ($percentual/100));
        }
    }

    public function __destruct(){
        echo "Destruído: Objeto {$this -> getDescricao()} <br>";    
    }

}

// $p1 = new Produto;
// $p1 -> descricao = 'Chocolate';
// $p1 -> estoque = 10;
// $p1 -> preco = 8;

// $p1 = new Produto;
// $p1 -> setDescricao('Chocolate');
// $p1 -> setEstoque(10);
// $p1 -> setPreco(8);

$p1 = new Produto('Chocolate', 10, 8);
$p2 = new Produto('Café', 5, 10);

echo "O estoque de {$p1 -> getDescricao()} é {$p1 -> getEstoque()}<br>";
echo "O preço de {$p1 -> getDescricao()} é {$p1 -> getPreco()}<br>";
echo '<pre>';
$p1 -> aumentarEstoque(10);
var_dump($p1);
echo '<pre>';
$p1 -> diminuirEstoque(5);
var_dump($p1);
echo '<pre>';
$p1 -> reajustarPreco(50);
var_dump($p1); 

echo "O estoque de {$p1 -> getDescricao()} é {$p1 -> getEstoque()}<br>";
echo "O preço de {$p1 -> getDescricao()} é {$p1 -> getPreco()}<br>";

unset($p1);
unset($p2);
?>