<?php require '_inc/header.php' ?>
<main style="background-image: url('assets/images/marcadagua.png'); background-size: contain; background-repeat: no-repeat; background-position: 85%;">
    <section id="meuAgendamento">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1>CONFERIR AGENDAMENTO OU REAGENDAR?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="imageBackground" style="background-image: url('assets/images/agendamento.jpg'); width: 100%; height: 320px;"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p class='protNumero'>Digite o número do seu protocolo:</p>
                    <form class="" action="meu-agendamento-result.php" method="post">
                        <div class="row m_top">
                            <div class="col-md-4">
                                <p class='inputLabel'>Nº DE PROTOCOLO: </p>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="" value="" placeholder="Informe o nº de protocolo:">
                            </div>
                        </div>
                        <button name="button">CONSULTAR</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require '_inc/footer.php' ?>
