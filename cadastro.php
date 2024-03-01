<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/eduarda.css">
    <title>Formulário</title>
</head>
<body>
    <div class="box">
        <form action="">
            <fieldset>
                <legend><b>Fórmulario de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput"> Nome completo</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>

                 <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Digite sua senha</label>
                </div>
                <br><br>
                     <div class="inputBox">
                    <input type="tel" name="telefone" id="telefon" class="inputUser" required>
                    <label for="email" class="labelInput">Telefone</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="date" name="" id="data_nascimento" class="inputUser" required>
                    <label for="endereco">Data de Nascimento</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereco</label>
                </div>
                <br><br>
                <button>Entrar</button>
            </fieldset>
         </form>
   </div>            
</body>
</html>