<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <img src="{{asset('/landing/logoazul-landing.jpg')}}" class="imgLogo" title="Ccente System" alt="Ccente System" />
            <div class="modal-header">

                <h4 class="modal-title">Solicita tu paquete de promoción</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="contact-form modal-body back-modal">
                <form >

                    <div class="form-group">
                        <label for="name2">¿Cómo te llamas? (*)</label>
                        <input type="text" class="form-control " id="name2" name="name2">
                    </div>
                    <div class="form-group">
                        <label for="project2">Cuéntanos sobre tu proyecto</label>
                        <textarea class="form-control " id="project2" name="project2"></textarea>
                        <span>Tu nueva idea de negocio, tu empresa actual o el proyecto que quieres implementar</span>
                    </div>

                    <div class="form-group">
                        <label for="topic2">¿Qué servicio va más acorde a tu negocio? (*)</label>
                        <select name="services2" id="topic2" class="form-control">
                            <option>Página Web Profesional</option>
                            <option>Tienda Virtual</option>
                            <option>Desarrollo de Sistema</option>
                            <option>Posicionamiento SEO</option>
                            <option>Diseño Grafico</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone2">Teléfono</label>
                                <input type="text" class="form-control phone" id="phone2" name="phone2">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email2">Correo Electrónico</label>
                                <input type="text" class="form-control " id="email2" name="email2" >
                            </div>
                        </div>

                    </div>
                    <div id="respuesta2"></div>

                    <div class="btn-per">
                        <button id="submit2" class="formulario__submit">Enviar a WhatsApp <i class="fa fa-whatsapp"></i></button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
