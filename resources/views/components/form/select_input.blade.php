<div class="input_area">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>
    <select id="{{$name}}" name="{{$name}}"
    {{empty($required) ? '': 'required'}}>
        <option selected disabled value="" >Selecione a opção</option>
        {{$slot}}
    </select>
</div>
