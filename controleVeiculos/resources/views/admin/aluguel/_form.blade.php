<div class="input-field">
    <input type="text" name="cliente_id" value="{{isset($registro->cliente_id) ? $registro->cliente_id : ''}}">
    <label>Registro do Cliente</label>
</div>

<div class="input-field">
    <input type="text" name="veiculo_id" value="{{isset($registro->veiculo_id) ? $registro->veiculo_id : ''}}">
    <label>Registro do Veículo</label>
</div>

<div class="input-field">
    <input type="date" name="data_devolucao" value="{{isset($registro->data_devolucao) ? $registro->data_devolucao : ''}}">
    <label>Data de devolução</label>
</div>

<div class="input-field">
    <input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
    <label>Valor</label>
</div>
