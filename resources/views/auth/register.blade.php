@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center>Administración Usuarios</center>
                </div>



             
              


                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="col-md-6">
 
                            <div class="form-group{{ $errors->has('tdoc') ? ' has-error' : '' }}">
                                <label for="tdoc" class="col-md-4 control-label">T. de documento</label>

                                <div class="col-md-6">
                                   <select class="form-control" id="tdoc" name="rol">
                                        <option value="0">Selecione el T. de documento...</option>
                                        <option value="cc">C.C</option>
                                        <option value="ti">T.I</option>
                                        <option value="ce">C.E</option>
                                        <option value="rc">R.C</option>
                                    </select>
                                  


                                    @if ($errors->has('tdoc'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tdoc') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="form-group{{ $errors->has('doc') ? ' has-error' : '' }}">
                                <label for="doc" class="col-md-4 control-label">N° de celulda</label>

                                <div class="col-md-6">
                                <input id="doc" type="text" class="form-control" name="doc" value="{{ old('doc') }}" required>


                                    @if ($errors->has('tdoc'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('doc') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                            </div>
                         






                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombre y Apellido</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>







                            <div class="form-group{{ $errors->has('fnaci') ? ' has-error' : '' }}">
                                <label for="fnaci" class="col-md-4 control-label">Fecha de nacimiento</label>

                                <div class="col-md-6">
                                    <input id="fnaci" type="date" class="form-control" name="fnaci" value="{{ old('fnaci') }}" required>
                                  


                                    @if ($errors->has('tdoc'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fnaci') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>






                          

                           


                        </div><!--cierra el bloque 1 del fomulario-->



                        <div class="col-md-6">

                             <div class="form-group{{ $errors->has('pais') ? ' has-error' : '' }}">
                                <label for="pais" class="col-md-4 control-label">Pais</label>

                                <div class="col-md-6">
                                    <input id="pais" type="text" class="form-control" name="pais" value="{{ old('pais') }}" required>
                                  


                                    @if ($errors->has('tdoc'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('pais') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>


                             <div class="form-group{{ $errors->has('ciudad') ? ' has-error' : '' }}">
                                <label for="ciudad" class="col-md-4 control-label">Ciudad</label>

                                <div class="col-md-6">
                                    <input id="ciudad" type="text" class="form-control" name="ciudad" value="{{ old('ciudad') }}" required>
                                  


                                    @if ($errors->has('tdoc'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ciudad') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            



                        

                            <div class="form-group{{ $errors->has('rol') ? ' has-error' : '' }}">
                                <label for="rol" class="col-md-4 control-label">Rol</label>

                                <div class="col-md-6">

                                    <select class="form-control" id="rol" name="rol">
                                        <option value="0">Selecione el Rol...</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Cliente</option>
                                        <option value="3">Usuario</option>
                                    </select>

                                    @if ($errors->has('rol'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('rol') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>




                             <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>



                        </div><!--cierra el bloque 2 del fomulario-->




                    </form>
                </div>
            </div>


         



        </div>
    </div>
</div>
@endsection
