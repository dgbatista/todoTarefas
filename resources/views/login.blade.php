<x-layout page="Login">

    <section id="task_section">
        <h1> Autenticação </h1>
        @if($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{route('user.login_action')}}">
            @csrf
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
            <x-form.form_button resetTxt="Limpar" submitTxt="Login" />

        </form>
    </section>
</x-layout>
