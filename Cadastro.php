<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            margin-top: 25%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 30px;
            border-radius: 30px;
            width: 23%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .LabelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .LabelInput,
        .inputUser:valid ~ .LabelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="Cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Produtos</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" nome="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="LabelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" nome="sku" id="sku" class="inputUser" required>
                    <label for="sku"class="LabelInput">SKU</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" nome="preco" id="preco" class="inputUser" required>
                    <label for="preco"class="LabelInput">Preço</label>
                </div>
                <br><br>
                    <div class="inputBox">
                        <input type="text" nome="descricao" id="descricao" class="inputUser" required>
                        <label for="decricao"class="LabelInput">Descrição</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" nome="quantidade" id="quantidade" class="inputUser" required>
                        <label for="quantidade"class="LabelInput">Quantidade</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" nome="categoria" id="categoria" class="inputUser" required>
                        <label for="categoria"class="LabelInput">Categoria</label>
                    </div>
                    <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>    
        </form>
</body>
</html>