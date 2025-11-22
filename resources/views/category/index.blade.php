<h1>Cateogrias</h1>
<a href="/category/create">Criar Categoria</a>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($categories as $category)
    <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td><a href="/category/{{$category->id}}/edit">Editar</a></td>
        <td>
            <form action="/category/{{$category->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Apagar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>