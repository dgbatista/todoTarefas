Planejamento do BD

Entidades (Usuario, Tarefas, Categorias)

Relacionamentos:

- Usuario 

Usuario x Tarefa 
    --Um usuario pode criar varias Tarefas

Usuario x Categorias
    --Um usuario pode ter varias categorias

- Tarefas 

Tarefa x usuario
    --Uma tarefa SEMPRE vai pertencer a um unico usuário

Tarefa x Categorias
    --Uma tarefa sempre vai pertencer a uma categoria


Categorias

Categorias x Tarefas
    --Uma categorias pode ter varias tarefas

Categoria x Usuario
    --Uma categoria SEMPRE vai pertencer a um usuário

    Detalhamento das Migrations

- Usuario (users)
    --padrão do laravel

- Tarefa (tasks)
    --id
    --titulo
    --categoria_id
    --Data
    --Descrição
    --usuario_id

Categoria (categories)
    --id
    --name
    --cor(hexadecimal)
    --usario_id
