<?php require '_inc/header.php' ?>
<main>
    <section id="agendamento">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="blockMain">
                        <ul class="listNumeros">
                            <li class='active'>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                        </ul>
                        <h2>ESCOLHA A <b>OPERADORA</b><br>DO SEU MODEM TV/INTERNET</h2>
                        <div class="row">
                            <br><br><br><br>
                            <form class="" action="agendamento2.php" method="post" align="center">
                                <div class="col-md-3">
                                    <label class='m_bottom'>
                                        <img src="assets/images/copel.png" alt="">
                                        <input type="radio" class="radioCenter" name="choice" value="">
                                    </label>

                                </div>
                                <div class="col-md-3">
                                    <label class='m_bottom'>
                                        <img src="assets/images/sky.png" alt="">
                                        <input type="radio" class="radioCenter" name="choice" value="">
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class='m_bottom'>
                                        <img src="assets/images/vivo.png" alt="">
                                        <input type="radio" class="radioCenter" name="choice" value="">
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class='m_bottom'>
                                        <p class='al-center' style="font-size: 20.5px; font-family: 'GothamBlack'; color: #201b4e; margin: 10px 0px 0 0;">OUTROS</p>
                                        <input type="radio" class="radioCenter" name="choice" value="outro">
                                        <input type="text" name="" value="" class='inputOther' style="display: none; margin-top: 10px;">
                                    </label>
                                </div>
                                <div class="col-md-12">
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
<script>
jQuery(document).ready(function($){
    var deviceAgent = navigator.userAgent.toLowerCase();
    var agentID = deviceAgent.match(/(iPad|iPhone|iPod)/i);
    if (agentID) {     
        $('.radioCenter').css('left', 'calc(50% - 20px)');
    }
    else{
        
    }
});

</script>
<?php require '_inc/footer.php' ?>
