<?php
#Route::get('/backStages', 'DashboardController@index');
Route::get('/',             ['as' => 'dashboard'                ,'uses' => 'DashboardController@index']);
#TEST 123
#123 submodule

/*Route::get('/', ['as' => 'backStage', 'uses' => 'DashboardController@index'
    , function () {
        // Route named "admin::dashboard"
        //$url = route('admin::dashboard');
        //return "dashboard: ".$url."";
        $user = Auth::user();

        //return view('admin.dashboard',$user);
    }]);
*/
