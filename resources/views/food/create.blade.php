<form action="/food" method="POST">
    @csrf
    <div>
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" placeholder="Digite o nome da comida">
    </div>
    <div>
        <label for="description">Descrição:</label>
        <textarea id="description" name="description" placeholder="Digite a descrição da comida"></textarea>
    </div>
    <div>
        <label for="calories">Calorias:</label>
        <input type="number" step="1" id="calories" name="calories" placeholder="Digite a quantidade de calorias da comida">
    </div>
    <button type="submit">Criar Comida</button>
</form>