<html>
    <!-- Html com o formulário dentro do corpo -->
    <body>
        <form id="formteste" action="home.php" method="post">
            <label for="Name">
                <p>Digite seu nome:</p>
                <input id="Nome" class="form-control" type="text" name="Nome" required><br>
                <i>(exemplo de validação de texto)</i>
            </label>
            <label for="Idd">
                <p>Insira sua idade:</p>
                <input id="Idade" class="form-control" type="number" name="Idade" required><br>
                <i>(exemplo de validação de número)</i>
            </label>
            <br><br><input class="btn btn-primary" type="submit" id="botaovalidar" value="Disparar Validação JQuery">        
        </form>
    </body>
</html>

<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous">
  //Inclusão do próprio JQuery.
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js">
    //Inclusão do plugin "Validation" do JQuery
</script>
<script src="validation.js">
    //Meu arquivo .js contendo as funções relacionadas à validação.
</script>
