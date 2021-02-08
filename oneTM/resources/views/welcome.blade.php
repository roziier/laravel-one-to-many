<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>

{{-- creo migrations --}}

{{-- Schema::create('typologies', function (Blueprint $table) {
    $table->id();

    $table-> string('name') -> unique();
    $table-> text('descr');

    
    $table->timestamps();
}); --}}

{{-- seconda migration  --}}

{{-- Schema::create('employee_typology', function (Blueprint $table) {
    $table->id();

    $table-> bigInteger('employee_id') -> unsigned();
    $table-> bigInteger('typology_id') -> unsigned();

    $table->timestamps();
}); --}}

{{-- migration add foreign  --}}

{{-- AGGIUNGO UNO SCHEMA  --}}

{{-- Schema::table('employee_typology', function (Blueprint $table) {

    $table-> foreign('employee_id', 'et-emp')
          -> references('id')
          -> on('employees');
    $table-> foreign('typology_id', 'et-typ')
          -> references('id')
          -> on('typologies');
}); --}}

{{-- DROP  --}}

{{-- Schema::table('employee_typology', function (Blueprint $table) {
    
    $table-> dropForeign('et-typ');
    $table-> dropForeign('et-emp');
          
}); --}}

{{-- creo model typology--}}

{{-- protected $fillable = [
    'name',
    'descr'
]; --}}

{{-- public function employees() {
    return $this -> belongsToMany(Employee::class);
} --}}

{{-- entro nel model di employee  --}}

{{-- public function typologies() {
    return $this -> belongsToMany(Typology::class);
} --}}

{{-- Adesso creo la factory  --}}

    {{-- 'name' => $faker -> word,
    'descr' => $faker -> sentence, --}}

    {{-- creo il seeder --}}
    

    {{-- factory(Typology::class, 12) -> create(); --}}

    {{-- lo aggiungo nel database seeder  --}}
