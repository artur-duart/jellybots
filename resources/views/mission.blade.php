@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<style>
    /* Estilo personalizado para a página de missão */
    .custom-content-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px 0;
    }
    .custom-content {
        width: 100%;
        max-width: 800px;
        background-color: rgba(0, 0, 0, 0.7); 
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        color: #fff;
        font-size: 1.2rem;
        text-align: justify; 
        line-height: 1.6; 
        position: relative;
    }
    .custom-content h2 {
        margin-bottom: 30px;
        font-size: 3rem;
        color: #fff;
        text-align: center;
    }
    .custom-content img {
        display: block;
        margin: 0 auto 30px auto; 
        max-width: 100%; 
        height: auto; 
        border-radius: 10px; 
    }
    .custom-content p {
        display: none;
        color: #0A97D9;
    }
    .video-background {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }
    
    header {
        display: none;
    }
    
    .back-arrow {
        position: fixed;
        top: 25px;
        left: 15px;
        width: 25px;
        height: 25px;
        cursor: pointer;
        z-index: 10;
        transform: rotate(90deg); 
    }
</style>

<div class="custom-content-container">
    <div class="custom-content">
        <h2>OUR MISSION</h2>
        <img id="missionImage" src="{{ asset('images/MissionAZUL.png') }}" alt="Mission Image">
        <p id="missionText">
            NÓS TEMOS COMO PRIORIDADE PROTEGER E REGENERAR OS ECOSSISTEMAS MARINHOS. NOSSAS TECNOLOGIAS PROMOVEM A SUSTENTABILIDADE DOS RECURSOS OCEÂNICOS, MITIGANDO DANOS AMBIENTAIS, INCENTIVANDO A RECUPERAÇÃO DE HABITATS MARINHOS, A COLABORAÇÃO INTERNACIONAL, E OS MAIS DIVERSOS DESAFIOS AMBIENTAIS. ALÉM DISSO, ESTAMOS COMPROMETIDOS COM OS OBJETIVOS DE DESENVOLVIMENTO SUSTENTÁVEL DA ONU, ESSENCIAIS PARA A ECONOMIA AZUL.
        </p>
    </div>
</div>

<video autoplay loop muted class="video-background">
    <source src="{{ asset('videos/Contact.mp4') }}" type="video/mp4">
</video>

<a href="{{ url('/') }}">
    <img src="{{ asset('images/seta.svg') }}" class="back-arrow">
</a>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const missionText = document.getElementById('missionText');

        setTimeout(() => {
            missionText.style.display = 'block';
            typeWriterEffect(missionText);
        }, 100);
    });

    function typeWriterEffect(element) {
        const text = element.innerHTML;
        element.innerHTML = '';
        element.style.display = 'block';
        let i = 0;
        function type() {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(type, 46);
            }
        }
        type();
    }
</script>
@endsection
