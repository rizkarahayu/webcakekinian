<?php

Route::prefix('')->group(function () {
	Route::get('/tes','website\Tes\TesController@tes');

});