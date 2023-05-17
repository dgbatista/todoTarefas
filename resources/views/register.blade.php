<x-layout page="Login">

    <x-slot:btn>
        <a href="{{route('login')}}" class="btn btn-primary">
            Já possui conta? Faça login
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1> Registrar-se </h1>
        @if($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                <li>{{$errors}}</li>
                @endforeach
            </ul>
        @endif
        <form method="POST" action="{{route('user.register_action')}}">
            @csrf
            <x-form.text_input
            name="name"
            label="Nome:"
            placeholder="Digite seu nome"
            />
            <x-form.text_input
            type="email"
            name="email"
            label="Email:"
            placeholder="Digite seu e-mail"/>
            <x-form.text_input
            type="password"
            name="password"
            label="Senha"
            placeholder="Digite sua senha:"
            />
            <x-form.text_input
            type="password"
            name="password_confirmation"
            label="Confirme sua senha"
            placeholder="Confirme sua senha:"
            />

            <x-form.form_button resetTxt="Limpar" submitTxt="Registrar-se" />

        </form>
    </section>
</x-layout>
