<h1>Criar pacote</h1>

<form action="{{ route('pacotes.store') }}" method="post">
    @csrf()
    <input type="text" name="titulo" placeholder="titulo" value="{{ $pacote->titulo }}">
    <input type="number" name="preco" placeholder="preco" value="{{ $pacote->preco }}">
    <textarea name="comidas" id="" cols="30" rows="10" placeholder="comidas" value="{{ $pacote->comidas }}"></textarea>
    <textarea name="bebidas" id="" cols="30" rows="10" placeholder="bebidas" value="{{ $pacote->bebidas }}"></textarea>
    <input type="text" name="foto1" placeholder="foto 1" value="{{ $pacote->foto1 }}">
    <input type="text" name="foto2" placeholder="foto 2" value="{{ $pacote->foto2 }}">
    <input type="text" name="foto3" placeholder="foto 3" value="{{ $pacote->foto3 }}">
    <button type="submit">Enviar</button>
</form>