<form action="/category/{{$category->id}}" method="POST">
    @csrf
    @method('PUT')
    <div>
        Nome:
        <input type="text" name="name" value="{{$category->name}}">
    </div>
    <div>
        Descrição
        <textarea name="description">{{$category->description}}</textarea>
    </div>
    <button type="submit">Alterar</button>
</form>