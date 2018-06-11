<?php require '_inc/header.php' ?>
<div class="notifyArea">
    <div class="content">
        <img src="assets/images/warning.png" alt="">
        <p>Ops! Ainda não oferecemos esse serviço. Em breve ele ficará disponível.</p>
    </div>
    <div class="action">
        <button class='closeNotify'>OK</button>
    </div>
</div>
<main class='eletronicoMain'>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1><b>ELETRÔNICO</b> OU <b>ELETRODOMÉSTICO</b></h1>
                <form class="showSomeNotify" action="" method="post">
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <p class='inputLabel'>QUAL SERIA O EQUIPAMENTO?</p>
                        </div>
                        <div class="col-md-8">
                            <select class="" name="">
                                <option value="">Selecione um equipamento</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <p class='inputLabel'>ESTADO:</p>
                        </div>
                        <div class="col-md-3">
                            <select class="" name="">
                                <option value="">UF</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <p class='inputLabel'>CIDADE:</p>
                        </div>
                        <div class="col-md-7">
                            <select class="" name="">
                                <option value="">CIDADE</option>
                            </select>
                        </div>
                    </div>
                    <button style='display: table; margin: auto; margin-top: 30px;'>ENVIAR SOLICITAÇÃO</button>
                </form>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">
    $(function(){
        $('.showSomeNotify').submit(function(e){
            e.preventDefault();
            $('.notifyArea').css({
                'display' : 'flex'
            }).hide()
            .fadeIn();
        })

        $('.closeNotify').click(function(){
            $('.notifyArea').fadeOut();
        })
    })
</script>
<?php require '_inc/footer.php' ?>
