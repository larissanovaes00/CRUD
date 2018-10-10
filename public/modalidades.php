<?php 
session_start();
    require_once '../config/header.inc.html'
?>


<div class="row container">
    <div class="cols12"><p>&nbsp;</p>
        <h5 class="light">Cadastro de Modalidades</h5><hr>
         
        
        <?php 

            if(isset($_SESSION['sucesso'])):
                echo "<p class='center green lighten-2 white-text' padding:10px>";
                
                echo $_SESSION['sucesso'];
                unset($_SESSION['sucesso']);

                echo "</p>";

                elseif(isset($_SESSION['erro'])):
                    echo "<p class='center red lighten-2 white-text' padding:10px>";
                   
                    echo $_SESSION['erro'];
                    unset($_SESSION['erro']);

                echo "</p>";

            endif;

            require_once '../forms/form-add-mod.php';
        ?>

    </div>

</div>

<div class="row container">
    <div class="col s-12">
        <h5 class="light">Modalidades Cadastradas</h5><hr>

            <!-- tabela -->
            <table class="striped">
                
                <thead>
                    <tr><th>ID</th><th>Modalidade</th><th>Mensalidade</th><th>Ações</th></tr>
                </thead>

                <tbody> 

                    <?php
                        require_once '../database/modalidades/read.php';
                    ?>

                </tbody>

            </table>


    </div>

</div>
<?php require_once '../config/footer.inc.html'; ?>