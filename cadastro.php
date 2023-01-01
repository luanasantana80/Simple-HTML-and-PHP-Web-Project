<?php
                    $nome=$_POST['nome'];
                    $endereco=$_POST['endereco'];
                    $numero=$_POST['numero'];
                    $cidade=$_POST['cidade'];
                    $estado=$_POST['est'];
                    $telefone=$_POST['tel'];
                    $celular=$_POST['cel'];
                    $email=$_POST['email'];
                    $data=$_POST['nascimento'];

                    echo $nome.$endereco.$numero.$cidade.$estado.$telefone.$celular.$email.$data;
                ?>