@extends('layout')

@section('title', 'Ayuda')

@section('content')
<section class="page-section my-5" id="">
    <div class="whatsapp-flot">
        <i class="fa fa-whatsapp"></i>
    </div>
    <div class="row d-flex flex-column align-items-center justify-content-center img-container">
        <div class="row text-center position-relative">
            <h1 class="faq-title">¿Necesitas Ayuda?</h1>
        </div>
        <div class="row text-center position-relative">
            <p class="faq-subtitle">Estamos para ayudarte. Aquí podrás ver las preguntas frecuentes</p>
        </div>
    </div>
</section>
<section>
    
</section>
<section class="my-5">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <div class="col-12 display-flex justify-content-center mt-4 mb-3">
                <h2 style="{color: grey;}" class="text-center">Preguntas Frecuentes</h2>
            </div>
            <div class="col-10 fq-container mb-3">
                <p>
                    <a data-toggle="collapse" href="#collapseExampleOne" role="button" aria-expanded="false" aria-controls="collapseExample" class="question-title-faq">
                        <h5>¿Necesito registrarme para ofrecer y/o contratar un servicio? <i class="fa fa-angle-down"></i></h5>
                        
                    </a>
                </p>
                <div class="collapse" id="collapseExampleOne">
                    <div class="question-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
            
            <div class="col-10 fq-container mb-3">
                <p>
                    <a data-toggle="collapse" href="#collapseExampleTwo" role="button" aria-expanded="false" aria-controls="collapseExample" class="question-title-faq">
                        <h5>¿Cómo es el procedimiento para contratar un servicio?  <i class="fa fa-angle-down"></i></h5>
                    </a>
                </p>
                <div class="collapse" id="collapseExampleTwo">
                    <div class="question-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>

            <div class="col-10 fq-container mb-3">
                <p>
                    <a data-toggle="collapse" href="#collapseExampleThree" role="button" aria-expanded="false" aria-controls="collapseExample" class="question-title-faq">
                        <h5>¿Como me incorporo a la red de oficios para ofrecer un servicio?  <i class="fa fa-angle-down"></i></h5>
                    </a>
                </p>
                <div class="collapse" id="collapseExampleThree">
                    <div class="question-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>

            <div class="col-10 fq-container mb-3">
                <p>
                    <a data-toggle="collapse" href="#collapseExampleFour" role="button" aria-expanded="false" aria-controls="collapseExample" class="question-title-faq">
                        <h5>¿Desde dónde puedo contratar/ofrecer un oficio? <i class="fa fa-angle-down"></i></h5>
                    </a>
                </p>
                <div class="collapse" id="collapseExampleFour">
                    <div class="question-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
        </div>
    </div>
        {{-- <div class="row display-flex justify-content-center mt-4 mb-5 btn-container">
            <div class="col-3">
                <a href="/contact"><button class="help-btn"> Realiza una pregunta</button></a>
            </div>
            <div class="col-3">
                <button class="help-btn"> Realiza una pregunta</button>
            </div>
        </div> --}}
</section>
@endsection