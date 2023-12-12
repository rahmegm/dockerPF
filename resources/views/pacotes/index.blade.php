<h1>
    Pacotes:
</h1>

<a href="{{ route('pacotes.create') }}">Criar pacote</a>
<table>
    <tr>
        <td>id</td>
        <td>titulo</td>
        <td>preco</td>
        <td>botoes</td>
    </tr>
    @foreach($pacotes as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->titulo }}</td>
            <td>{{ $value->preco }}</td>
            <td>
                <a href="{{ route('pacotes.show', $value->id) }}">Visualizar</a>
                <a href="{{ route('pacotes.edit', $value->id) }}">Editar</a>
                <a href="">Deletar</a>
                </form>
            </td>
        </tr>
    @endforeach
    
</table>