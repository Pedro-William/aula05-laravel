<form action="/food/{{$food->id}}" method="POST">
    @method('PUT')
    @csrf
    <div>
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" placeholder="Digite o nome da comida" value="{{$food->name}}">
    </div>
    <div>
        <label for="description">Descrição:</label>
        <textarea id="description" name="description" placeholder="Digite a descrição da comida">{{$food->description}}</textarea>
    </div>
    <div>
        <label for="calories">Calorias:</label>
        <input type="number" step="1" id="calories" name="calories" placeholder="Digite a quantidade de calorias da comida" value="{{$food->calories}}">
    </div>
    <button type="submit">Editar Comida</button>
</form>