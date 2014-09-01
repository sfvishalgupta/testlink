<?php
class ParkingoptionTableSeeder extends Seeder {
	private function csv_to_array($filename='', $delimiter=','){
        if(!file_exists($filename) || !is_readable($filename))
            return FALSE;
        $header = NULL;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== FALSE){
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE){
                if(!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
        return $data;
    }
    public function run(){
        DB::table('parkingoptions')->delete();
        $csvFile = public_path().'/parkingoptions.csv';
        $areas = $this->csv_to_array($csvFile);
        DB::table('parkingoptions')->insert($areas);

        DB::table('categories')->delete();
        $csvFile = public_path().'/category.csv';
        $areas = $this->csv_to_array($csvFile);
        DB::table('categories')->insert($areas);        
        
    }
}