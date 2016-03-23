<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;
use App\Controller\Component\FPDFComponent;

/**
 * Recurso Controller
 *
 * @property \App\Model\Table\RecursoTable $Recurso
 */
class RelatorioController extends AppController
{
    /**
     * 
     */
    public function index(){
        
    }

    /**
     * 
     */
    public function rel1(){
        /**
         * Definição de conexao
         */
        $conn = ConnectionManager::get('default');
        $dados = $conn->query('SELECT gr.recurso_id root,
                                           r.titulo title,
                                           r.recurso_id parent,
                                           r.controller, 
                                           r.action
                                      FROM usuario u,
                                           grupousuario gu,
                                           gruporecurso gr,
                                           recurso r
                                     WHERE gu.usuario_id = u.id       
                                       AND gr.grupo_id = gu.grupo_id
                                       AND r.id = gr.recurso_id
                                       AND gu.meta_excluido_usuario IS NULL AND gu.meta_excluido_data IS NULL
                                       AND gr.meta_excluido_usuario IS NULL AND gr.meta_excluido_data IS NULL
                                       AND r.meta_excluido_usuario IS NULL AND r.meta_excluido_data IS NULL
                                       AND u.meta_excluido_usuario IS NULL AND u.meta_excluido_data IS NULL')->fetchAll();
        /**
         * Definição de variaveis
         */
        $sistema = $this->sistema;
        $colunas   = array('Raiz','Titulo','Pai','Controle','Funcao');
        $titulo    = 'Relatorio de Permissões de Usuários';
        $subtitulo = 'Emitido em: '.date('d/m/Y').' as '.date('h:m:s');
        $pdf = new FPDFComponent;

        /**
         * Passagem de variaveis
         */
        $this->set(compact($pdf,      'pdf'));
        $this->set(compact($dados,    'dados'));
        $this->set(compact($colunas,  'colunas'));
        $this->set(compact($titulo,   'titulo'));
        $this->set(compact($subtitulo,'subtitulo'));
        $this->set(compact($sistema,  'sistema'));
        
        /**
         * Layout de saida
         */
        $this->layout = 'pdf';
    }

    /**
     * 
     */
    public function rel2(){
        /**
         * Definição de conexao
         */
        $usuario = $this->loadModel('usuario');
        $dados  = $usuario->find('all')->select(['usuario.nome', 'usuario.login'])->where(['meta_excluido_usuario IS NULL'])->where(['meta_excluido_data IS NULL'])->hydrate(false)->toArray();

        /**
         * Definição de variaveis
         */
        $sistema = $this->sistema;
        $colunas   = array('Nome','Login');
        $titulo    = 'Relatorio de Lista de Usuários';
        $subtitulo = 'Emitido em: '.date('d/m/Y').' as '.date('h:m:s');
        $pdf = new FPDFComponent;

        /**
         * Passagem de variaveis
         */
        $this->set(compact($pdf,      'pdf'));
        $this->set(compact($dados,    'dados'));
        $this->set(compact($colunas,  'colunas'));
        $this->set(compact($titulo,   'titulo'));
        $this->set(compact($subtitulo,'subtitulo'));
        $this->set(compact($sistema,  'sistema'));
        
        /**
         * Layout de saida
         */
        $this->layout = 'pdf';
    }

    
}