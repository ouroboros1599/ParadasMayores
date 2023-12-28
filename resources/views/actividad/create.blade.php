
<!-- @extends('layouts.app') -->

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear Actividad</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('actividad.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="nombre_actividad">Nombre de la Actividad</label>
                                <input type="text" name="nombre_actividad" id="nombre_actividad" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="orden_trabajo">Orden de Trabajo</label>
                                <input type="text" name="orden_trabajo" id="orden_trabajo" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="critica">Crítica</label>
                                <select name="critica" id="critica" class="form-control" required>
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="estado_actividad">Estado de la Actividad</label>
                                <input type="text" name="estado_actividad" id="estado_actividad" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="inicio_real">Inicio Real</label>
                                <input type="datetime-local" name="inicio_real" id="inicio_real" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="fin_real">Fin Real</label>
                                <input type="datetime-local" name="fin_real" id="fin_real" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="planificacion_id">ID de Planificación</label>
                                <input type="number" name="planificacion_id" id="planificacion_id" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
