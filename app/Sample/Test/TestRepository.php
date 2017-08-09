<?php
namespace App\Sample\Test;
use App\Core\ReturnMessage;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: User
 * Date: 2/23/2017
 * Time: 3:28 PM
 */
class TestRepository implements TestRepositoryInterface
{
    public function getAllTest(){
        $result = Test::select('name as Name','description As Description','status As Status')->get();

        return $result;
    }

    public function countTestByStatus(){
        $result = Test::select('status',DB::raw('count(id) as count'))
                        ->groupBy('status')
                        ->get();

        return $result;
    }

    public function countTestByDate(){
        $result = Test::select('date',DB::raw('count(id) as count'))
            ->groupBy('date')
            ->get();

        return $result;
    }

    public function insertTests($data){

        $returnedObj = array();
        $returnedObj['aceplusStatusCode'] = ReturnMessage::INTERNAL_SERVER_ERROR;
        try{
            foreach ($data as $key => $value) {
                if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$value->date)){
                    $date = $value->date;
                }
                else{
                    $date = date('Y-m-d', strtotime($value->date));
                }
                $insert[] = ['name' => $value->name, 'description' => $value->description,
                    'status'=>$value->status,'date'=>$date];
            }
            if(!empty($insert)){
                DB::table('tests')->insert($insert);
                $returnedObj['aceplusStatusCode'] = ReturnMessage::OK;
                return $returnedObj;
            }
        }
        catch(\Exception $e){
            $returnedObj['aceplusStatusMessage'] = $e->getMessage();
            return $returnedObj;
        }

    }
}