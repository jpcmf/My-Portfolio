<div class="content-all">
    <div class="content-contato center-block">
        <div class="g-titulo">
            <h1 class="titulo">Contato</h1>
            <!-- <h2 class="sub-titulo"></h2> -->
        </div>
        <hr class="hr-interna">
        <div class="formSend" id="formToSend">
            <form action="" method="POST" onsubmit="return false">
                <div class="form-group">
                    <label for="">Assunto</label>
                    <input type="text" name="formAssunto" class="form-control formAssunto" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Nome</label>
                    <input type="text" name="formName" class="form-control formName" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">E-mail</label>
                    <input type="text" name="formAdress" class="form-control formAdress" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Mensagem</label>
                    <textarea class="form-control message" name="message" placeholder="" cols="20" rows="5"></textarea>
                </div>
                <button type="submit" name="button" id="submit" class="btn bt-enviar-contato"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp; ENVIAR</button>
                <!-- <input type="submit" value="Enviar" id="submit" class="btn bt-enviar-contato"> -->
            </form>
        </div>
        <div class="formSent" id="formSent">
            <h4>Obrigado!</h4>
            <p>Sua mensagem foi enviada com sucesso e em breve será respondida.</p>
        </div>
    </div>
</div>
