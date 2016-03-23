<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
            <div class="row">
                &nbsp;
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="lead">Relatorios Parciais</span>
                        </div>
                        <div class="panel-body">
                            
                            <?= $this->Flash->render() ?>
                            
                            <div class="dataTable_wrapper">
                            
                                <table class="table table-striped table-bordered table-hover" id="relatoriosparciais-table">
                                      <thead>
                                            <tr>
                                                <th>Titulo</th>
                                                <th>Quantidade</th>
                                                <th>Opções</th>
                                            </tr>
                                        </thead>


                                </table>
                                
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    /*
    $(document).ready(function() {
        $('#relatoriosparciais-table').dataTable({
            "language": {
                "lengthMenu": "Apresentando _MENU_ registros por página",
                "zeroRecords": "Nenhum dado encontrado",
                "info": "Apresentando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum dado cadastrado",
                "infoFiltered": "(Filtrado de _MAX_ registros)"
            },            
            responsive: true,
            Processing: true,
            ServerSide: true,
            ajax: {
                "url": "<?php echo \Cake\Routing\Router::Url(array('controller' => 'Relatorioparcial', 'action' => 'disponiveis')); ?>",
                "type": "POST"
            },
            columns: [
                { data: "titulo" },
                { data: "quantidade" },
                { data: "id" }
            ],
            columnDefs: [ 
                {
                    render: function (data, type, row) {
                            return data.titulo;
                    },
                    targets: 1                   
                },
                {
                    render: function (data, type, row) {
                        if(data==0)
                            return "<i class='fa fa-square-o'></i>";
                        else
                            return "<i class='fa fa-check-square-o'></i>";
                    },
                    targets: 2                   
                },
                {
                    targets: -1,
                    render: function (data, type, row) {
                            return "<a href='/Produto/view/"+data+"' class='text-success' Title='Alterar esta linha'><span class='fa fa-pencil'></span>&nbsp;Editar</a> &nbsp; <a href='/Produto/delete/"+data+"' class='text-danger' Title='Deletar esta linha'><span class='fa fa-eraser' Title='Remover esta linha'></span>&nbsp;Excluir</a>"
                    }
                } 
            ],
            order: [[1, 'asc']]
        });
    });
    */
</script>