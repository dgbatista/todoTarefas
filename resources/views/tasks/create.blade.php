<x-layout page="Login">

    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1> Criar Tarefa</h1>
        <form method="POST" action="{{route('task.create_action')}}">
            @csrf
            <x-form.text_input
            name="title"
            label="Titulo da tarefa"
            placeholder="Digite o titulo da sua tarefa"/>
            <x-form.text_input
            type="datetime-local"
            name="due_date"
            label="Data de realização"
            />

            <x-form.select_input
            name="category_id"
            label="Categoria">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </x-form.select_input>

            <x-form.textarea_input
                label="Descrição da tarefa"
                name="description"
                placeholder="Digite a descrição da tarefa"
            />

            <x-form.form_button resetTxt="Resetar" submitTxt="Criar Tarefa" />

        </form>
    </section>
</x-layout>
