@extends('layouts.app')



@section('content')

<div class="container">
<div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">INFORMES DISPONIBLES SISTEMA</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                     
                      
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                   
                    <thead><tr>
                      <th>ID</th>
                      <th>NOMBRE REPORTE</th>
                      <th>VISUALIZAR</th>
                      <th>DESCARGAR</th>
                    </tr></thead>
                    <tbody>
                    
                    <tr>
                      <td>1</td>
                      <td>VER TODAS LAS FACTURAS</td>
                      <td><a href="reportes/crear_reporte_todas_facturas/1" target="_blank" ><button class="btn btn-block btn-primary btn-xs">Ver</button></a></td>
                      <td><a href="reportes/crear_reporte_todas_facturas/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Descargar</button></a></td>
                     </tr>

  				    <tr>
                      <td>2</td>
                      <td>VER TODAS LAS OBRAS</td>
                      <td><a href="reportes/crear_reporte_todas_obras/1" target="_blank" ><button class="btn btn-block btn-primary btn-xs">Ver</button></a></td>
                      <td><a href="reportes/crear_reporte_todas_obras/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Descargar</button></a></td>
                     </tr>

                   
                  </tbody></table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

 </div>


@endsection




