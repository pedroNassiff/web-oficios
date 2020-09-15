@extends('layout')

@section('title', 'Ayuda')

@section('content')
<section class="page-section my-5" id="">
    <div class="row d-flex flex-column align-items-center justify-content-center img-container">
        <div class="row text-center">
            <h1 class="faq-title">¿Necesitas Ayuda?</h1>
        </div>
        <div class="row text-center">
            <p class="faq-subtitle">Estamos para ayudarte. Más abajo podrás ver las preguntas frecuentes</p>
        </div>
    </div>
    <div class="container">
        <div class="row display-flex justify-content-center mt-4">
            <h3 style="{color: grey;}">¿Como funciona la web?</h3>
        </div>
        <div class="row display-flex justify-content-center mt-4">
            <div class="col-2"> 
                <div class="card-question">
                    <span class="question-title">Who pays out my salary</span>
                    <p class="question-body font-weight-light">You are employed by meploy and we pay your salary. Your paycheck will be send to your e-Boks.</p>
                </div>
            </div>
            <div class="col-2">
                <div class="card-question">
                    <span class="question-title">Is it free to sign up on meploy?</span>
                    <p class="question-body font-weight-light">Yes! It's even free to upgrade your profile to Pro, which gives you access to our Community Bonus Program</p>
                </div>
            </div>
            <div class="col-2">
                <span class="question-title">How do I increase my chances of finding work on meploy?</span>
                <p class="question-body font-weight-light">The best way to increase your chances of finding work via meploy is to have an inviting and updated profile.</p>
            </div>
            <div class="col-2">
                <span class="question-title">How old do you have to be to sign up on meploy?</span>
                <p class="question-body font-weight-light">You have to be at least 18 years old to create an account on meploy</span>
            </div>
            <div class="col-12 display-flex justify-content-center mt-4 mb-3">
                <h3 style="{color: grey;}" class="text-center">Preguntas Frecuentes</h3>
            </div>
            <div class="col-10 fq-container mb-3">
                <p>
                    <a data-toggle="collapse" href="#collapseExampleOne" role="button" aria-expanded="false" aria-controls="collapseExample" class="question-title">
                        <h5>¿Necesito registrarme para ofrecer y/o contratar un servicio?</h5>
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
                    <a data-toggle="collapse" href="#collapseExampleTwo" role="button" aria-expanded="false" aria-controls="collapseExample" class="question-title">
                        <h5>¿Cómo es el procedimiento para contratar un servicio?</h5>
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
                    <a data-toggle="collapse" href="#collapseExampleThree" role="button" aria-expanded="false" aria-controls="collapseExample" class="question-title">
                        <h5>¿Como me incorporo a la red de oficios para ofrecer un servicio?</h5>
                    </a>
                </p>
                <div class="collapse" id="collapseExampleThree">
                    <div class="question-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
            <div class="col-10 fq-container">
                <p>
                    <a data-toggle="collapse" href="#collapseExampleFour" role="button" aria-expanded="false" aria-controls="collapseExample" class="question-title">
                        <h5>¿Desde dónde puedo contratar/ofrecer un oficio?</h5>
                    </a>
                </p>
                <div class="collapse" id="collapseExampleFour">
                    <div class="question-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
        </div>
        <div class="row display-flex justify-content-center mt-4 mb-5 btn-container">
            <div class="col-3">
                <a href="/contact"><button class="help-btn"> Realiza una pregunta</button></a>
            </div>
            <div class="col-3">
                <button class="help-btn"> Realiza una pregunta</button>
            </div>
        </div>
    </div>
</section>
@endsection