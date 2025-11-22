<form action="/category" method="POST">
    @csrf
    <div>
        Nome:
        <input type="text" name="name">
    </div>
    <div>
        Descrição
        <textarea name="description"></textarea>
    </div>
    <button type="submit">Criar</button>
</form>