 <h1 ALIGN=center>Modificar Material</h1>

 {!! Form::model($material,['route'=>['material.update',$material],'method'=> 'PUT','class'=>'form-horizontal']) !!}
    <fieldset>

        <!-- Text input-->
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre',['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-5">
                {!! Form::text('nombre', null,['class'=>'form-control']) !!}
            </div>
        </div>
 <!-- Text input-->
        <div class="form-group">
            {!! Form::label('codigo', 'Codigo',['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-5">
                {!! Form::text('codigo', null,['class'=>'form-control']) !!}
            </div>
        </div>
         <!-- Text input-->
        <div class="form-group">
            {!! Form::label('cantidad', 'cantidad',['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-5">
                {!! Form::number('cantidad', null,['class'=>'form-control']) !!}
            </div>
        </div>
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for=""></label>
            <div class="col-md-5">
                {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            </div>
        </div>


    </fieldset>
    {!! Form::close() !!}