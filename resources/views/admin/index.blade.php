@extends('adminlte::page')

@section('title', 'Chevrolet Caminos')

@section('content_header')
    <h1>En Construcción</h1>
@stop

@section('content')
    <p></p>
    <center>
        <img src="vendor/adminlte/dist/img/caminos.jpg" class="img-fluid">
    </center>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@livewireScripts
<script type="text/javascript">
window.livewire.on('closeModal', () => {
$('#createDataModal').modal('hide');
});
</script>
</body>
</html>
