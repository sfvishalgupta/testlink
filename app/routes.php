<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	function csv_to_array($filename='', $delimiter=',')
                        {
                            if(!file_exists($filename) || !is_readable($filename))
                                return FALSE;
                         
                            $header = NULL;
                            $data = array();
                            if (($handle = fopen($filename, 'r')) !== FALSE)
                            {
                                while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
                                {
                                    if(!$header)
                                        $header = $row;
                                    else
                                        $data[] = array_combine($header, $row);
                                }
                                fclose($handle);
                            }
                            return $data;
                        }
                $csvFile = public_path().'/category.csv';
                $areas = csv_to_array($csvFile);
                print_r($areas);
                               
	echo "asdf";die;
	return View::make('hello');
});
