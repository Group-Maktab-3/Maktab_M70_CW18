<form action="" method="POST" >
    @csrf
    {!! $inputs !!}
    <button type="submit" class="btn btn-primary">{{ $btn_value ?? 'submit' }}</button>
</form>