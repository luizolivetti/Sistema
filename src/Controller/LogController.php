<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;
use App\Controller\Component\AuthenticateComponent;

class LogController extends AppController
{
    /**
     * pagina de login do sistema
     */
    public function index(){
        $this->render('index', 'ajax');
    }

    /**
     * validação e chamada para login
     */
    public function on($login=null,$senha=null){
        // Não carrega view
        $this->autoRender = false;

        // Le parametros
        $login=$this->request->data['login'];
        $senha=$this->request->data['senha'];

    	// valores
        if (empty($login) || empty($senha))
    	{
                 $this->Flash->error('Por favor, informe um login e senha válidos.');
                 return $this->redirect(['controller' => 'Log', 'action' => 'index']);
        }

    	//Chama metodo de Login
        $this->login($login, $senha);
    }

    /**
     * leitura dos dados de login
     */
    public function login($log, $pwd){
        // Não carrega view
        $this->autoRender = false;

        // pegar usuário (por Login e Senha)
        $usuario = $this->loadModel('usuario');
        $data  = $usuario->find()->select(['usuario.id', 'usuario.nome'])
                                 ->where('meta_excluido_usuario IS NULL AND meta_excluido_data IS NULL')
                                 ->where(['ativo'=>'1',
                                          'login'=>$log,
                                          'senha'=>md5($pwd)])
                                 ->first();
        // Criar Autenticação
        if(!empty($data)){
            $cod = $data->id;
            $usr = $data->nome;

            // pegar permissoes (Grupos e EPS's)  - TO DO -
            $conn = ConnectionManager::get('default');
            $lck = $conn->query('SELECT gr.recurso_id root,
                                        r.titulo title,
                                        r.recurso_id parent,
                                        r.controller, 
                                        r.action,
                                        r.icone
                                   FROM usuario u,
                                        grupousuario gu,
                                        gruporecurso gr,
                                        recurso r
                                  WHERE gu.usuario_id = u.id       
                                    AND gr.grupo_id = gu.grupo_id
                                    AND r.id = gr.recurso_id
                                    AND u.id='.$cod)->fetchAll();

                if(AuthenticateComponent::authenticate($cod, $usr, $lck))
                    return $this->redirect(['controller' => 'Dashboard' , 'action' => 'index' ]);
                else
                    $this->Flash->error('Não foi possivel autenticar o usuário pedido, senha ou login inválidos');
                    return $this->redirect(['controller' => 'Log', 'action' => 'index']);
            }else{    
                $this->Flash->error('Não foi possivel autenticar o usuário pedido, não encontrado.');
                return $this->redirect(['controller' => 'Log', 'action' => 'index']);
            }
    }

    /**
     * Logout do sistema e redireciona a pagina para o login
     */
    public function out(){
        // Não carrega view
        $this->autoRender = false;
        // Limpa Sessão
        AuthenticateComponent::clearAuthenticate();
        //redireciona para o index
        return $this->redirect(['controller' => 'Log', 'action' => 'index']);
    }
}
