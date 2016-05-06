@extends('layouts.app')

@section('content')
    <div class="container" ng-controller="TodoCtrl">
        <div class="row">
            <div class="col-md-12">
                
                <div class="col-md-3">


               


                </div>
                <div align="center">
                    

                        <div class="panel panel-primary" >
                            <h3 ng-repeat="todo in pertanyaan">@{{todo.pertanyaan}}</h3>
                
                            <div class="form-group">
                              <input type="text"  ng-model="jawab"> 
                                </div>
                                 @{{jawab}}
                          </div>
                            

                </div>
            </div>
        </div>


        

    </div>
@endsection
