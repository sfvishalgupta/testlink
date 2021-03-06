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
        $csvFile = public_path().'/data/parkingoptions.csv';
        $areas = $this->csv_to_array($csvFile);
        DB::table('parkingoptions')->insert($areas);

        DB::table('categories')->delete();
        $csvFile = public_path().'/data/category.csv';
        $areas = $this->csv_to_array($csvFile);
        DB::table('categories')->insert($areas);

        DB::table('paymentoptions')->delete();
        $csvFile = public_path().'/data/paymentoptions.csv';
        $areas = $this->csv_to_array($csvFile);
        DB::table('paymentoptions')->insert($areas);
	
	DB::table("userroles")->delete();
	$arruserroles[] = array("id"=>1,"userrole"=>"Super Administrator");
	$arruserroles[] = array("id"=>2,"userrole"=>"Administrator");
	$arruserroles[] = array("id"=>3,"userrole"=>"Group Administrator");
	$arruserroles[] = array("id"=>4,"userrole"=>"Hospital Administrator");
	$arruserroles[] = array("id"=>5,"userrole"=>"Registered User");
	$arruserroles[] = array("id"=>6,"userrole"=>"Anonymous User");
	DB::table("userroles")->insert($arruserroles);
    }
}
