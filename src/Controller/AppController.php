<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\I18n\Time;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Variaveis para mensagens padrão
     */
    public $sistema;
    
    /**
     * Helper para DataTables
     */
    public $helpers = [
        'DataTables' => [
            'className' => 'DataTables.DataTables'
        ]
    ];

    /**
     * Declaração do Componente Authenticate customizado para os 
     * controles de segurança especificos criados para essa aplicação
     */
    public $Authenticate = [
       'Authenticate' => [
            'className' => 'src/Controller/Component/AuthenticateComponent'
       ]
    ];
    
    /**
     * Declaração do Componente FPDF customizado para os 
     * controles de relatorios especificos dessa aplicação
     */
    public $pdf = [
       'FPDF' => [
            'className' => 'src/Controller/Component/FPDFComponent'
       ]
    ];   
    
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize()
    {
        // Inicialização
        parent::initialize();
        
        //Valida Logon
        if(!Component\AuthenticateComponent::isAuthenticated() && $this->request->params["controller"]!='Log'){
            return $this->redirect(['controller' => 'Log', 'action' => 'index']);
        }

        // Parametro para datas
        Time::$defaultLocale = 'pt_BR';
        Time::setToStringFormat('dd/MM/Y H:mm:ss');
        
        // Carga de Componentes
        $this->loadComponent('Flash');
        $this->loadComponent('DataTables.DataTables');
        $this->loadComponent('Authenticate');
        $this->loadComponent('FPDF');
        
        /** 
         * Nome do Sistema
         */
        $this->sistema = 'Sistema';
    }

    /**
     * Informacoes do ambiente TO DO => Impor seguranca
     */
    public function info(){
        //Valida Logon
        if(!Component\AuthenticateComponent::isAuthenticated() && $this->request->params["controller"]!='Log'){
            return $this->redirect(['controller' => 'Log', 'action' => 'index']);
        }
        phpinfo();
    }
  
}