// Funcao pronta para Diferenca percentual

public function getPorcentagem()
{

    $valorInicial = $this->valorAssistencia;
    $valorFinal = $this->valorShowroom;

    if($valorInicial > $valorFinal):
        return ($valorInicial - $valorFinal)*100/$valorInicial . "%";
    else:
        return ($valorFinal - $valorInicial)*100/$valorInicial . "%";
    endif;
}
