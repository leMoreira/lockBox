<?php
/** 
$validacao= Validacao::validar([
    'nome' => 'required',
    'email' => ['required', 'email', 'confirmed'],
    'senha' => ['required', 'min:8', 'max:30', 'strong']
], $_POST);
  
if($validacao->naoPassou()){
    $_SESSION['validacoes'] = $validacao->validacoes;
    header('location: /login');
    exit();
}

 $validacoes = [];

$nome = $_POST['nome'];
$email = $_POST['email'];
$email_confirmacao = $_POST['email_confirmacao'];
$senha = $_POST['senha'];

// nome precisa ser obrigatório
if(strlen($nome) == 0) {
$validacoes [] = 'O nome é obrigatório';
}

if(strlen($email) == 0) {
 $validacoes [] = 'O e-mail é obrigatório';
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $validacoes [] = 'O e-mail é inválido';
}

if($email != $email_confirmacao){
 $validacoes [] = 'O e-mail de confirmação está diferente';
}

if(strlen($senha) < 8 || strlen($senha) > 30) {
 $validacoes [] = 'A senha precisa ter entre 8 e 30 caracteres';
}

if(!str_contains($senha, '*')) {
 $validacoes [] = 'A senha precisa ter um * nela';
}
*/

class Validacao{

    public $validacoes =[];

    public static function validar($regras, $dados) 
    {

        $validacao = new self;
            // nokme do campo e regras[]

            foreach ($regras as $campo => $regrasDoCampo) {
                foreach ($regrasDoCampo as $regra) {
                    $valorDoCampo = $dados[$campo];

                    if($regra == 'confirmed'){
                        $validacao->$regra($campo, $valorDoCampo, $dados["{$campo}_confirmacao"]);

                    } elseif(str_contains($regra, ':')) {
                        $temp = explode(':', $regra);

                        $regra = $temp[0];
                        $regraAr = $temp[1];
                        $validacao->$regra($regraAr, $campo, $valorDoCampo);
                        
                        
                    }else {
                        $validacao->$regra($campo, $valorDoCampo);
                    }
                        
                }

                
            }

            return $validacao;
    }

private function unique($tabela, $campo, $valor) 
{
    if(strlen($valor) == 0) {
        
        
        return;
    }


    $db = new Database(config('database'));

   $resultado = $db->query(query: "select * from $tabela where email = :valor",
   params: ['valor' => $valor]
   )->fetch();

   if ($resultado){
    $this->addError($campo,"O $campo já está sendo usado.");
   }



}

    private function required($campo, $valor){
        if(strlen($valor) == 0) {
            $this->addError($campo,"O $campo é obrigatório.");
            }
    }

  

    private function email($campo, $valor){
        if(!filter_var($valor, FILTER_VALIDATE_EMAIL)) {
            $this->addError($campo,"O $campo é inválido.");
           }
    }

    private function confirmed($campo, $valor, $valorDeConfirmacao){
        if($valor != $valorDeConfirmacao){
            $this->addError($campo,"O $campo de confirmação está diferente.");
           }
    }

    private function min($min, $campo, $valor) {
        if(strlen($valor) <= $min){
            $this->addError($campo,"O $campo precisa ter no mínimo de $min caracteres.");
        }
    }


    private function max($max, $campo, $valor){

        if(strlen($valor) > $max){
            $this->addError($campo,"O $campo precisa ter no máximo de $max caracteres");
        }
    }
  
    private function strong($campo, $valor){

        if(! strpbrk($valor, '*!%ˆ!@#$&()_-[/];.')) {
            $this->addError($campo,"O $campo precisa ter um caracter especial nela");
           }
    }


    private function addError($campo, $erro)
    {

        $this->validacoes[$campo][] =$erro;

    }


    public function naoPassou($nomeCustomizado = null) {

$chave = 'validacoes';

if ($nomeCustomizado) {
    $chave .= '_'.$nomeCustomizado;
}


        // Adicionar valor
        flash()->push($chave, $this->validacoes);

        //$_SESSION['validacoes'] = $this->validacoes;
        return sizeof($this->validacoes) > 0;
    }



}

?>