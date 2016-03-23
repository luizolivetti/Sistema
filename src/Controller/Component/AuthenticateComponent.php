<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class AuthenticateComponent extends Component
{
    /**
     * Metodo estatico para validação do logon
     */ 
    public static function isAuthenticated()
    {
        session_start();
        if(
            !array_key_exists('usuario', $_SESSION)   and
            !array_key_exists('nome', $_SESSION)      and 
            !array_key_exists('permissao', $_SESSION) and 
            !array_key_exists('salt', $_SESSION)   
           )
           {
              //redirect login 
              return false;
           }
        elseif($_SESSION['salt']!=MD5($_SESSION['usuario'].$_SESSION['nome'].date('Ymd')))
           {
              //redirect login
              return false;
           } 
           
           //Usuário Logado 
           //Valida permissão
           return true;
    }
    
    /**
     * O metodo authenticate cria a sessão de autenticação do usuario que for 
     * informado para ela, permitindo acesso ao sistema de acordo com as pemissões
     * concedidas a esse usuário
     * @param type $usuario é o codigo do usuário
     * @param type $nome é o nome do usuário
     * @param type $permissao é o array de permissoes do usuário
     *             EXEMPLO >> ['controller' => 'XPTO'], ['action' => 'xp']
     */
    public static function authenticate($usuario, $nome, $permissao)
    {
        if(is_string($nome) && is_array($permissao) && is_int($usuario)){
            session_start();
            $_SESSION['usuario']   = $usuario;
            $_SESSION['nome']      = $nome;
            $_SESSION['permissao'] = NULL;
            $_SESSION['salt']      = MD5($_SESSION['usuario'].$_SESSION['nome'].date('Ymd'));

            // Organizando as permissões
            foreach ($permissao as $key => $value) {
              if($value[0]==$value[2])
                $_SESSION['permissao'][$value[2]] = $permissao[$key];
              else
                $_SESSION['permissao'][$value[2]][6][] = $permissao[$key];
            }

            return true;
        }else{
            session_destroy();
            return false;
        }
    }
    
    /**
     * Limpa sessão em andamento
     */
    public static function clearAuthenticate()
    {
        reset($_SESSION);
        session_destroy();
    }    
}