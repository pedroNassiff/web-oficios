@extends('layout')

@section('title', 'Contacto')

@section('content')

<section class="page-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contacto">
                    <h1 class="section-heading">Contacto</h1>
                    <h3 class="section-subheading my-4">¿Tenés alguna pregunta? Comunícate con nosotros, responderemos tan pronto como sea posible.</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Tu nombre *</label>
                                <input class="form-control" id="name" type="text" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label for="">Correo electrónico *</label>
                                <input class="form-control" id="email" type="email" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <label for="">Asunto</label>
                                <input class="form-control" id="asunto" type="asunto"  required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-group-textarea mb-md-0">
                                <label for="">Mensaje</label>
                                <textarea class="form-control" id="message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                                <small>*Obligatorio</small>
                            </div>
                        </div>
                    </div>
                    <div class="text-right mb-5">
                        <div id="success"></div>
                        <button class="btn hollow" id="sendMessageButton" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 img-contact">
               <img class="" src="/img/contact.png" alt="">
            </div>
        </div>
    </div>
</section>

@endsection