@extends('layout')

@section('title', 'Ayuda')

@section('content')
    <div class="row display-flex justify-content-center mt-5">
        <h1>¿Necesitas Ayuda?</h1>
    </div>
    <div class="row display-flex justify-content-center">
        <div class="col-md-5 mt-3 text-center">
            <p>See below the most common questions, and please visit our hel center. If you can’t find the answer, email us!</p>
        </div>
    </div>
    <div class="row display-flex justify-content-center mt-4">
       <div class="col-2">
            <span class="question-title">Who pays out my salary</span>
            <p class="question-body">You are employed by meploy and we pay your salary. Your paycheck will be send to your e-Boks.</p>
        </div>
        <div class="col-2">
            <span class="question-title">Is it free to sign up on meploy?</span>
            <p class="question-body">Yes! It's even free to upgrade your profile to Pro, which gives you access to our Community Bonus Program</p>
        </div>
        <div class="col-2">
            <span class="question-title">How do I increase my chances of finding work on meploy?</span>
            <p class="question-body">The best way to increase your chances of finding work via meploy is to have an inviting and updated profile. Make sure to have a professional profile picture, and write a bit about yourself and your skill sets</p>
        </div>
        <div class="col-2">
            <span class="question-title">How old do you have to be to sign up on meploy?</span>
            <p class="question-body">You have to be at least 18 years old to create an account on meploy</span>
        </div>
    </div>
    <div class="row display-flex justify-content-center mt-4">
        <div class="col-2">
            <button> Realiza una pregunta</button>
        </div>
        <div class="col-2">
            <button> Realiza una pregunta</button>
        </div>
    </div>
@endsection