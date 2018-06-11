<?php require '_inc/header.php' ?>
<main>
    <section id="agendamento">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="blockMain">
                        <ul class="listNumeros">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li class='active'>4</li>
                        </ul>
                        <h2>DADOS PARA <b>CONTATO</b></h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <form class="m_top" action="agradecimento.php"  method="post">
                                <div class="row">
                                        <div class="col-md-3">
                                            <p class="inputLabel">NOME COMPLETO:</p>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class='col-md-3'>
                                            <p class='inputLabel'>É TITULAR?</p>
                                        </div>
                                        <div class='col-md-2'>
                                            <input type="radio" name="titular" class='inputTitular' value="sim">
                                            <span class='labelTitular'>SIM</span>
                                            <div class='clear'></div>
                                        </div>
                                        <div class="col-md-2">
                                            <div data-toggle="tooltip" title="SEM PROBLEMA, INFORME SEU PRÓPRIO CPF"><input type="radio" name="titular" class='inputTitular' value="nao">
                                            <span class='labelTitular'>NÃO</span></div>
                                            
                                            <div class='clear'></div><br>
                                        </div>
                                        <div class='col-md-5'>
                                            <input type="text" placeholder="CPF:">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p class="inputLabel">E-MAIL:</p>
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p class="inputLabel">FIXO:</p>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <p class="inputLabel">CELULAR 1:</p>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text">
                                                </div>
                                                <div class="col-md-4">
                                                    <p class="inputLabel">CELULAR 2:</p>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" align="center">
                                        <a href="agendamento3.php" class='backButton'>VOLTAR</a>
                                    </div>
                                    <div class="col-md-6" align="center">
                                        <button name="button">CONFIRMAR</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<style>

.inputTitular{
    float: left;
    width: auto;
    height: auto;
    margin-top: 14px !important;
    margin-right: 15px !important;
}

.labelTitular{
    position: relative;
    top: 11px;
    color: #f5932f;
}

</style>
<?php require '_inc/footer.php' ?>
