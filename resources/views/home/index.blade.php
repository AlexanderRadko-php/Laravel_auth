@extends('layouts.app-master')

@section('content')
    <div class="p-5 rounded">
        @auth
            <h1 class="lead">Вы успешно войши в систему</h1>
            @include('auth.partials.copy')
            <a class="btn btn-secondary mt-4" href="https://github.com/AlexanderRadko-php/Laravel" role="button">Посмотреть код проекта на Github</a>
        @endauth

        @guest

                <p>
                    <a href="<?php echo e(route('login.perform')); ?>" class="text-secondary fw-normal text-decoration-none">Войдите в систему, если у вас уже есть аккаунт ></a>
                </p>
                <p>
                    <a href="<?php echo e(route('register.perform')); ?>" class="mt-4 text-success fw-normal text-decoration-none">Если у нас еще нет аккаунта, зарегистрируйтесь в системе ></a>
                </p>

        @endguest
    </div>
@endsection
