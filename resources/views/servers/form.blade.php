<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ $server->name or ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ip_addr') ? 'has-error' : ''}}">
    <label for="ip_addr" class="control-label">{{ 'Ip Addr' }}</label>
    <input class="form-control" name="ip_addr" type="text" id="ip_addr" value="{{ $server->ip_addr or ''}}" >
    {!! $errors->first('ip_addr', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('port') ? 'has-error' : ''}}">
    <label for="port" class="control-label">{{ 'Port' }}</label>
    <input class="form-control" name="port" type="text" id="port" value="{{ $server->port or ''}}" >
    {!! $errors->first('port', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ssh_key') ? 'has-error' : ''}}">
    <label for="ssh_key" class="control-label">{{ 'Ssh Key' }}</label>
    <textarea class="form-control" rows="5" name="ssh_key" type="textarea" id="ssh_key" >{{ $server->ssh_key or ''}}</textarea>
    {!! $errors->first('ssh_key', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('method') ? 'has-error' : ''}}">
    <label for="method" class="control-label">{{ 'Method' }}</label>
    <select name="method" class="form-control" id="method" >
    @foreach (json_decode('{"1": "Rsynk", "2": "SCP", "3": "HTTP"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($server->method) && $server->method == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('method', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
