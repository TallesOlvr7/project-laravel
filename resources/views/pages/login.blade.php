@extends('app')

@section('content')
<section class='h-screen w-screen flex items-center justify-center bg-slate-200'>
    <div class="h-5/6 shadow-xl w-2/5 bg-white rounded">
        <div class='flex flex-col p-10 w-full'>
            <h1 class='text-4xl font-semibold text-black'>
                Login
            </h1>

            <form action="" method="post" class='w-3/4 pt-14 flex flex-col gap-5'>
                @csrf
                <div class="flex flex-col">
                    <label for="email" class="text-xl mb-3">E-mail</label>
                    <input class="border border-gray-300 focus:border-blue-500 p-2" type="email" name='email'
                        placeholder="Digite seu e-mail">
                    @error('email')
                        <div class="flex items-center gap-1 pt-2">
                            <img class="w-6 h-6 mt-1" src="images/atencao.png" alt="Atençao icon">
                            <span class="pt-1 text-red-600">
                                {{$message}}
                            </span>
                        </div>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="password" class="text-xl mb-3">Senha</label>
                    <input class="placeholder:text-lg placeholder:ps-2 border border-gray-300 rounded p-2"
                        type="password" name='password' placeholder="Digite sua senha">
                    @error('password')
                        <div class="flex items-center gap-1 pt-2">
                            <img class="w-6 h-6 mt-1" src="images/atencao.png" alt="Atençao icon">
                            <span class="pt-1 text-red-600">
                                {{$message}}
                            </span>
                        </div>
                    @enderror
                </div>

                <div class="flex items-center mt-2">
                    <button class="hover:bg-blue-800 bg-blue-600 text-white py-2 px-8 rounded border border-white">
                        Entrar
                    </button>
                </div>
                @error('invalid')
                    <div class="flex items-center gap-1 pt-2">
                        <img class="w-6 h-6 mt-1" src="images/atencao.png" alt="Atençao icon">
                        <span class="pt-1 text-red-600">
                            {{$message}}
                        </span>
                    </div>
                @enderror
            </form>
        </div>
    </div>
</section>
@endsection