<h1>Criar pacote</h1>

<form action="{{ route('pacotes.store') }}" method="post">
    @csrf()
    <input type="text" name="titulo" placeholder="titulo">
    <input type="number" name="preco" placeholder="preco">
    <textarea name="comidas" id="" cols="30" rows="10" placeholder="comidas"></textarea>
    <textarea name="bebidas" id="" cols="30" rows="10" placeholder="bebidas"></textarea>
    <input type="text" name="foto1" placeholder="foto 1">
    <input type="text" name="foto2" placeholder="foto 2">
    <input type="text" name="foto3" placeholder="foto 3">
    <button type="submit">Enviar</button>
</form>