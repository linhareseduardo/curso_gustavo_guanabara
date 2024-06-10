<?php 
    //$cores = array ('vermelho', 'verde', 'amarelo');
    //print $cores[0];
    //var_dump($cores);
    //$cores = [];
    //$cores[] = 'vermelho';
    //$cores[] = 'verde';
    //$cores[] = 'amarelo';
    //$cores[] = 'azul';
    
    //var_dump($cores); 

    //$cores = [];
   // $cores[1] = 'vermelho';
   // $cores[3] = 'verde';
   // $cores[8] = 'amarelo';
  //  $cores[22] = 'azul';
    
   // var_dump($cores);

//    $pessoa = [];
//    $pessoa['nome'] = 'maria';
//    $pessoa['endereco'] = 'rua tal';
//    $pessoa['nascimento'] = '1990-01-01';

//    echo $pessoa['nascimento'];

//    foreach($pessoa as $chave => $informacao){
//         print $chave . ': ' . $informacao . '<br>';
//    }

   $carros = ['palio' => ['cor' => 'azul',
                          'marca' => 'fiat',
                          'ano' => 2002],
              'corsa' => ['cor' => 'prata',
                          'marca' => 'GM',
                          'ano' => 2003]
             ];
   
   // print $carros['palio']['cor'];

    // foreach($carros as $modelo => $informacoes){
    //     print "<b>$modelo<b><br>";
    //     foreach($informacoes as $atributo => $valor){
    //         print "$atributo: $valor <br>";
    //     }
    // }

    $cores = ['vermelho', 'verde', 'amarelo'];
    //$cores [] = 'ciano';
    //array_push($cores, 'ciano');
    //array_unshift($cores, 'ciano');
    //array_shift($cores);
    //array_pop($cores);

    //$cores = array_reverse($cores);
    //$resultado = array_merge($cores, ['ciano', 'magenta']);
    //var_dump($resultado);
    //var_dump($cores);

    $carros = [];
    $carros [10001] = 'Palio 2002';
    $carros [73933] = 'Corsa 2003';
    $carros [82634] = 'Celta 2005';
    $carros [12838] = 'Uno 1999';

    
    // //sort($carros);
    // echo '<pre>';
    // var_dump($carros);
    // asort($carros);
    // echo '<pre>';
    // var_dump($carros);
    // ksort($carros);
    // echo '<pre>';
    // var_dump($carros); 

    // var_dump($carros);
    // echo '<pre>';
    // var_dump(array_keys($carros));
    // echo '<pre>';
    // var_dump(array_values($carros));

    // echo '<pre>';
    // var_dump(count($carros));
    
    // echo '<pre>';
    // var_dump(in_array('Uno 1999',$carros));
    
    // $data = '2013-10-20';

    // $partes = explode('-', $data);

    // print $partes[2];

    $partes = ['2013', '10', '20'];
    print implode('-', $partes);    

    


   
  

?>