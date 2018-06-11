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
                            <li class='active'>3</li>
                            <li>4</li>
                        </ul>
                        <h2>AGENDE <b>A COLETA</b></h2>
                        <div class="row">
                            <form class="" action="agendamento4.php"  method="post">
                                <div class="col-md-4">
                                    <p class='inputLabel al-center'><br>DATA:</p>
                                    <input type="text" name="" value="" placeholder="dd/mm/aaaa">
                                </div>
                                <div class="col-md-4">
                                    <p class='inputLabel al-center'><br>PERÍODO:</p>
                                    <select class="" name="">
                                        <option value="" selected="selected" disabled>SELECIONE UM PERÍODO:</option>
                                        <option value="">Manhã</option>
                                        <option value="">Tarde</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <p class='inputLabel al-center'>RETIRAR APARELHOS DE QUANTOS PONTOS?</p>
                                    <input type="number" name="" value="">
                                </div>
                                <div class="col-md-4 m_top">
                                    <p class='inputLabel'>TIPO DE EQUIPAMENTO:</p>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p style="margin-top: 20px">
                                                <input type="radio" name="tipoEquipamento" value="" style='width: 20px; position: relative; top: 4px; height: 20px'> <b style="font-family: 'GothamBlack'; color: #f69535;">KIT COMPLETO:</b> Controle(s), cabo(s), MODEM TV/INTERNET
                                            </p>
                                            <p>
                                                <input type="radio" name="tipoEquipamento" value="" style='width: 20px; position: relative; top: 4px; height: 20px'> <b style="font-family: 'GothamBlack'; color: #f69535;">MODEM TV/INTERNET</b>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6" align="center">
                                        <a href="agendamento2.php" class='backButton'>VOLTAR</a>
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
