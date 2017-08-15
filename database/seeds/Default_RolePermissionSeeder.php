<?php
/**
 * Created by PhpStorm.
 * Author: Soe Thandar Aung
 * Date: 11/2/2016
 * Time: 2:19 PM
 */

use Illuminate\Database\Seeder;

class Default_RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('core_permission_role')->delete();

        $roles = array(
            ['role_id'=>1, 'permission_id'=>1],
            ['role_id'=>1, 'permission_id'=>2],
            ['role_id'=>1, 'permission_id'=>3],
            ['role_id'=>1, 'permission_id'=>4],
            ['role_id'=>1, 'permission_id'=>5],
            ['role_id'=>1, 'permission_id'=>6],
            ['role_id'=>1, 'permission_id'=>7],
            ['role_id'=>1, 'permission_id'=>8],
            ['role_id'=>1, 'permission_id'=>9],
            ['role_id'=>1, 'permission_id'=>10],
            ['role_id'=>1, 'permission_id'=>11],
            ['role_id'=>1, 'permission_id'=>12],
            ['role_id'=>1, 'permission_id'=>13],
            ['role_id'=>1, 'permission_id'=>14],
            ['role_id'=>1, 'permission_id'=>15],
            ['role_id'=>1, 'permission_id'=>16],
            ['role_id'=>1, 'permission_id'=>17],
            ['role_id'=>1, 'permission_id'=>18],
            ['role_id'=>1, 'permission_id'=>19],
            ['role_id'=>1, 'permission_id'=>20],
            ['role_id'=>1, 'permission_id'=>21],
            ['role_id'=>1, 'permission_id'=>22],
            ['role_id'=>1, 'permission_id'=>23],

            ['role_id'=>1, 'permission_id'=>30],
            ['role_id'=>1, 'permission_id'=>31],
            ['role_id'=>1, 'permission_id'=>32],
            ['role_id'=>1, 'permission_id'=>33],
            ['role_id'=>1, 'permission_id'=>34],
            ['role_id'=>1, 'permission_id'=>35],
            ['role_id'=>1, 'permission_id'=>36],
            ['role_id'=>1, 'permission_id'=>37],
            ['role_id'=>1, 'permission_id'=>38],
            ['role_id'=>1, 'permission_id'=>39],
            ['role_id'=>1, 'permission_id'=>40],
            ['role_id'=>1, 'permission_id'=>41],
            ['role_id'=>1, 'permission_id'=>42],
            ['role_id'=>1, 'permission_id'=>43],

            //Country
            ['role_id'=>1, 'permission_id'=>50],
            ['role_id'=>1, 'permission_id'=>51],
            ['role_id'=>1, 'permission_id'=>52],
            ['role_id'=>1, 'permission_id'=>53],
            ['role_id'=>1, 'permission_id'=>54],
            ['role_id'=>1, 'permission_id'=>55],

            //City
            ['role_id'=>1, 'permission_id'=>60],
            ['role_id'=>1, 'permission_id'=>61],
            ['role_id'=>1, 'permission_id'=>62],
            ['role_id'=>1, 'permission_id'=>63],
            ['role_id'=>1, 'permission_id'=>64],
            ['role_id'=>1, 'permission_id'=>65],

            //Township
            ['role_id'=>1, 'permission_id'=>70],
            ['role_id'=>1, 'permission_id'=>71],
            ['role_id'=>1, 'permission_id'=>72],
            ['role_id'=>1, 'permission_id'=>73],
            ['role_id'=>1, 'permission_id'=>74],
            ['role_id'=>1, 'permission_id'=>75],

            //Page
            ['role_id'=>1, 'permission_id'=>80],
            ['role_id'=>1, 'permission_id'=>81],
            ['role_id'=>1, 'permission_id'=>82],
            ['role_id'=>1, 'permission_id'=>83],
            ['role_id'=>1, 'permission_id'=>84],
            ['role_id'=>1, 'permission_id'=>85],

            //Post
            ['role_id'=>1, 'permission_id'=>90],
            ['role_id'=>1, 'permission_id'=>91],
            ['role_id'=>1, 'permission_id'=>92],
            ['role_id'=>1, 'permission_id'=>93],
            ['role_id'=>1, 'permission_id'=>94],
            ['role_id'=>1, 'permission_id'=>95],
        );

        DB::table('core_permission_role')->insert($roles);
    }
}
