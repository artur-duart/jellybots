@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<style>
    /* Estilo personalizado para a tabela */
    .custom-table .table {
        background-color: #1a1a1a;
        color: #555555; 
        width: 90%; 
        margin: auto; 
        font-family: D-DIN-Bold, Arial, Verdana, sans-serif; 
        transition: all 0.5s ease-in-out; 
    }
    .custom-table .table thead {
        background-color: #333;
        color: #fff; 
    }
    .custom-table .table tbody tr {
        border-bottom: 1px solid rgba(255, 255, 255, 0.3); 
        transition: all 0.5s ease-in-out; 
    }
    .custom-table .bi {
        font-size: 2.5rem; 
        transition: all 0.5s ease-in-out; 
    }
    .custom-table .table td:first-child {
        text-align: center; 
        width: 80px; 
        vertical-align: middle; 
        border-right: 1px solid rgba(255, 255, 255, 0.3); 
    }
    .custom-table .table td:nth-child(2) {
        width: calc(100% - 80px); 
        vertical-align: middle; 
        padding: 20px; 
        transition: all 0.5s ease-in-out; 
    }
    .custom-table .highlight td:nth-child(2) {
        text-align: center; 
    }
    /* Estilo para o vídeo de background */
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
    
    .custom-table-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh; 
        padding: 20px 0;
    }
    .custom-table {
        width: 100%; 
        max-width: 1400px; 
        height: auto; 
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    h2.text-center {
        margin-bottom: 30px;
        font-size: 3rem; 
        margin-top: 0; 
        color: #D3D3D3
    }
    /* Estilo para a seta de voltar */
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
    /* Estilo para acender a linha inteira */
    .highlight {
        color: #D3D3D3 !important; 
        transition: all 0.5s ease-in-out; 
    }
    .highlight td {
        border-bottom-color: rgba(255, 255, 255, 0.3) !important; 
        transition: all 0.5s ease-in-out; 
    }
    .highlight .bi {
        color: #D3D3D3 !important; 
        transition: all 0.5s ease-in-out; 
    }
    
    .features {
        color: #D3D3D3 !important; 
    }
</style>

<div class="custom-table-container">
    <div class="custom-table">
        <h2 class="text-center">TECHNOLOGY</h2>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th class=features scope="col">FEATURES</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr class="highlight-row">
                    <td><i class="bi bi-gear-fill"></i></td>
                    <td>ADAPTABILIDADE AMBIENTAL | OS JELLYBOTS SÃO PROJETADOS PARA OPERAR EM UMA VARIEDADE DE CONDIÇÕES OCEÂNICAS, DESDE ÁGUAS RASAS ATÉ PROFUNDEZAS ABISSAIS.</td>
                </tr>
                <tr class="highlight-row">
                    <td><i class="bi bi-sun-fill"></i></td>
                    <td>SUSTENTABILIDADE ENERGÉTICA | OS JELLYBOTS UTILIZAM ENERGIA RENOVÁVEL, APROVEITANDO A ENERGIA SOLAR E DAS ONDAS PARA SE MANTEREM OPERACIONAIS.</td>
                </tr>
                <tr class="highlight-row">
                    <td><i class="bi bi-wifi"></i></td>
                    <td>COMUNICAÇÃO SUBAQUÁTICA | OS JELLYBOTS PODEM SE COMUNICAR UNS COM OS OUTROS E COM A BASE CENTRAL USANDO TECNOLOGIA DE COMUNICAÇÃO SUBAQUÁTICA AVANÇADA.</td>
                </tr>
                <tr class="highlight-row">
                    <td><i class="bi bi-shield-fill-check"></i></td>
                    <td>RESISTÊNCIA E DURABILIDADE | OS JELLYBOTS SÃO CONSTRUÍDOS COM MATERIAIS RESISTENTES À CORROSÃO E AO DESGASTE, PERMITINDO-LHES OPERAR EM AMBIENTES MARINHOS DESAFIADORES POR LONGOS PERÍODOS.</td>
                </tr>
                <tr class="highlight-row">
                    <td><i class="bi bi-cpu-fill"></i></td>
                    <td>AUTONOMIA AVANÇADA | OS JELLYBOTS POSSUEM SISTEMAS DE IA AVANÇADOS QUE PERMITEM OPERAÇÕES AUTÔNOMAS, MINIMIZANDO A NECESSIDADE DE CONTROLE HUMANO DIRETO.</td>
                </tr>
                <tr class="highlight-row">
                    <td><i class="bi bi-eye-fill"></i></td>
                    <td>SEGURANÇA MARINHA | OS JELLYBOTS SÃO PROJETADOS PARA EVITAR INTERAÇÕES PREJUDICIAIS COM A VIDA MARINHA, UTILIZANDO SENSORES PARA MANTER UMA DISTÂNCIA SEGURA DOS ANIMAIS MARINHOS.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Adicione o vídeo de background -->
<video autoplay loop muted class="video-background">
    <source src="{{ asset('videos/Technology.mp4') }}" type="video/mp4">
</video>

<!-- Adicione a seta de voltar -->
<a href="{{ url('/') }}">
    <img src="{{ asset('images/seta.svg') }}" class="back-arrow">
</a>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const highlightRows = document.querySelectorAll('.highlight-row');
        let currentIndex = 0;
        let interval;

        function highlightNextRow() {
            highlightRows.forEach((row, index) => {
                if (index === currentIndex) {
                    row.querySelectorAll('td').forEach(cell => cell.classList.add('highlight'));
                } else {
                    row.querySelectorAll('td').forEach(cell => cell.classList.remove('highlight'));
                }
            });
            currentIndex = (currentIndex + 1) % highlightRows.length;
        }

        interval = setInterval(highlightNextRow, 7000);

        highlightRows.forEach(row => {
            row.addEventListener('mouseenter', function() {
                clearInterval(interval);
                highlightRows.forEach(r => r.querySelectorAll('td').forEach(cell => cell.classList.remove('highlight')));
                row.querySelectorAll('td').forEach(cell => cell.classList.add('highlight'));
            });

            row.addEventListener('mouseleave', function() {
                interval = setInterval(highlightNextRow, 7000);
            });
        });

        setTimeout(highlightNextRow, 1000);
    });
</script>
@endsection
