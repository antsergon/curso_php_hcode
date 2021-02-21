<?php

$hierarquia = array(

    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //diretor comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //gerente de vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                    //gerente de vendas fim
                )
            ),
            //Diretor Comercial fim

            array(
                //Diretor Financeiro
                'nome_cargo'=> 'Diretor Financeiro',
                'subordinados'=> array(
                    //Gerente de Contas a pagar
                    array(
                        'nome_cargo'=>'Gerente de contas a pagar',
                        'subordinados'=> array(
                            //Supervisor
                            array(
                                'nome_cargo'=>'Supervisor'
                            )
                            //supervisor fim
                        ),
                        //gerente de conta a pagar fim
                        //inicio gerente de compras
                        array(
                            'nome_cargo'=>'Gerente de Compras',
                            'subordinados'=> array(
                                //supervisor suprimentos
                                array(
                                    'nome_cargo'=>'Supervisor de suprimentos'
                                )
                                                              
                                //supervisor suprimentos fim
                            )
                        )
                    )
                )
            )
        )
    )
);
//funçao recursiva exemplo
function exibe($cargos){

    $html = '<ul>';

    foreach ($cargos as $cargo) {
        
        $html = '<li>';

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            
            $html .= exibe($cargo['subordinados']);


        }

        $html .= '</li>';
    }

    $html .= '</ul>';

    return $html;

}

echo exibe($hierarquia);

