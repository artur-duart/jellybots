@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<style>
    /* Estilo personalizado para a página de investimento */
    .custom-form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px 0;
    }
    .custom-form {
        width: 100%;
        max-width: 800px;
        background-color: rgba(0, 0, 0, 0.7); 
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
    .custom-form h2 {
        margin-bottom: 30px;
        font-size: 3rem;
        color: #fff;
        text-align: center;
        transition: opacity 0.5s ease-in-out; 
    }
    .custom-form .form-control {
        background-color: rgba(255, 255, 255, 0.1); 
        border: none;
        border-radius: 5px;
        color: #fff;
    }
    .custom-form .form-control::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }
    .custom-form .btn {
        background-color: transparent; 
        border: 2px solid #fff;
        border-radius: 5px; 
        padding: 10px 20px;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    }
    .custom-form .btn:hover {
        background-color: #fff;
        color: #000;
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

<div class="custom-form-container">
    <div class="custom-form">
        <h2 id="formHeader">CONTACT US</h2>
        <form id="investForm" method="POST" action="{{ route('invest.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="number">Number:</label>
                <input type="text" class="form-control" id="number" name="number" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </form>
    </div>
</div>

<video autoplay loop muted class="video-background">
    <source src="{{ asset('videos/Technology.mp4') }}" type="video/mp4">
</video>

<a href="{{ url('/') }}">
    <img src="{{ asset('images/seta.svg') }}" class="back-arrow">
</a>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('investForm');
        const formHeader = document.getElementById('formHeader');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(form);

            fetch(form.action, {
                method: form.method,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    name: formData.get('name'),
                    number: formData.get('number'),
                    email: formData.get('email'),
                    message: formData.get('message')
                })
            }).then(response => {
                if (response.ok) {
                    form.reset();
                    form.style.display = 'none';
                    formHeader.textContent = 'THANK YOU!';
                    setTimeout(() => {
                        window.location.href = '{{ url('/') }}';
                    }, 2000);
                } else {
                    alert('There was an error submitting the form. Please try again.');
                }
            }).catch(error => {
                console.error('Error:', error);
                alert('There was an error submitting the form. Please try again.');
            });
        });
    });
</script>
@endsection
