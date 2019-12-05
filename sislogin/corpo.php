
<?php
include_once("cabecalhoAdmin.php");
?>


<?php //obtendo os dados em ordem descendente    
    $query = "SELECT id_usuario, nome_usuario, login, email, date_format(sessao,'%d/%m/%Y %T') as sessao, if(situacao=1,'Disponível','Indisponível') as situacao, if(tipo=1,'Admin','Usuário') as tipo FROM usuarios ORDER BY id_usuario DESC";
    $resultado = $crud->getDados($query);    
?>


<div class="container-fluid my-5">
    <div class="row ">      
        <div class="col-6 sm-12 mx-auto"> 

            <a href="novo_login.php">
                <button type="button " id="novo_usuario" name="novo_usuario" class="btn btn-sm btn-outline-primary text-white">
                <i class='material-icons vertical-align-middle'>account_box</i>
                    Novo Usuário
                </button>    
            </a>

            <br>         
            <br>
                
            <table class="table table-striped table-dark table-bordered" id="tabelaUsuarios">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Nome Usuário</th>
                    <th>Email</th>
                    <th>Situação</th>
                    <th>Tipo</th>
                    <th>Última Sessão</th>
                    <th>Opções</th>
                    </tr>
                </thead>
            
                <tbody>
                    <?php
                    //obtendo os dados em ordem alfabética
                    foreach ($resultado as $key => $linha){
                    echo "<tr>";			
                    echo "<td>" . $linha['id_usuario'] . "</td>";
                    echo "<td>" . $linha['nome_usuario'] . "</td>";
                    echo "<td>" . $linha['email'] . "</td>";
                    echo "<td>" . $linha['situacao'] . "</td>";        
                    echo "<td>" . $linha['tipo'] . "</td>";   
                    echo "<td>" . $linha['sessao'] . "</td>";   
                    echo "<td class='btnTable'>				
                            <a href=\"userpagina.php?id_usuario=$linha[id_usuario]\" class='btn btn-sm btn-outline-warning text-white' title='Editar o registro corrente'><i class='material-icons vertical-align-middle'>edit</i> Editar</a>  				
                            <a href=\"apaga_usuario.php?id_usuario=$linha[id_usuario]\" onClick=\"return confirm('Confirma a exclusão do registro?')\" class='btn btn-sm btn-outline-danger btn-sm text-white' title='Apagar o registro corrente'><i class='material-icons vertical-align-middle'>delete</i>Apagar</a>
                        </td>"; 			
                    }
                    ?>			
                    </tr>    
                </tbody>
        
            </table>	


        </div>
    </div>

    <!-- </div> -->

<?php
include_once("rodape.php");
?>
