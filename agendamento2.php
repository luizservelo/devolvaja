<?php require '_inc/header.php' ?>
<main>
<div class="modalArea">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="modalMain">
                        <button class="closeModal">x</button>
                        <h2><b>AINDA NÃO ATUAMOS COM ESTA OPERADORA E/OU REGIÃO.</b> POR FAVOR, DEIXE SEU CONTATO PARA PODERMOS ATENDÊ-LO EM BREVE.</h2>

                        <form class="m_top" method="post">
                            <div class="row">
                                <div class="col-md-2">
                                    <p class='inputLabel'>OPERADORA:</p>
                                </div>
                                <div class="col-md-4">
                                    <select class="" name="">
                                        <option value="">SELECIONE</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <p class='inputLabel'>NOME:</p>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" name="" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <p class='inputLabel'>E-MAIL:</p>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" name="" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <p class='inputLabel'>ESTADO:</p>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="" value="">
                                </div>

                                <div class="col-md-2">
                                    <p class='inputLabel'>CIDADE:</p>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <p class='inputLabel'>TEL. FIXO:</p>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="" value="">
                                </div>
                                <div class="col-md-2">
                                    <p class='inputLabel'>CELULAR 1:</p>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="" value="">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-6">
                                    <p class='inputLabel'>CELULAR 2:</p>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" align="center">
                                    <button name="button"><a href="agradecimento2.php" style='color: #FFFFFF'>ENVIAR</a></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <section id="agendamento">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="blockMain">
                        <ul class="listNumeros">
                            <li>1</li>
                            <li class='active'>2</li>
                            <li>3</li>
                            <li>4</li>
                        </ul>
                        <h2>QUAL O <b>ENDERECO</b> DE COLETA?</h2>
                        <div class="row">

                            <div class="col-md-6 col-md-offset-3">
                                <p class='al-center'>Coletamos seu aparelho onde preferir: em casa, no trabalho ou até no endereço de alguém de sua confiança!</p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <form class="" action="agendamento3.php" method="post">
                            <div class="col-md-3 col-md-offset-2">
                                    <p class='inputLabel al-center'>ESTADO:</p>
                                    <select class="" name="">
                                        <option value="" selected="selected" disabled>UF:</option>
                                        <option value="">PR</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <p class='inputLabel al-center'>CIDADE:</p>
                                    <select class="" name="">
                                        <option value="" selected="selected" disabled>Selecione a cidade:</option>
                                        <option value="">Curitiba</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <p class='inputLabel'>CEP:</p>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="" value="">
                                        </div>

                                        <div class="col-md-2">
                                            <p class='inputLabel'>ENDEREÇO:</p>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p class='inputLabel'>NÚMERO:</p>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="" value="">
                                        </div>
                                        <div class="col-md-2">
                                            <p class='inputLabel'>COMPLEMENTO:</p>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p class='inputLabel'>OBSERVAÇÕES:</p>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea type="text" name="" value=""></textarea>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p class='naoEncontrou'>NÃO ENCONTROU SUA CIDADE NA LISTA? <a href="#" class='launchModal'>CLIQUE AQUI</a></p>
                                </div>
                                <div class="col-md-6" align="center">
                                    <a href="agendamento.php" class='backButton'>VOLTAR</a>
                                </div>
                                <div class="col-md-6" align="center">
                                    <button name="button">AVANÇAR</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require '_inc/footer.php' ?>
